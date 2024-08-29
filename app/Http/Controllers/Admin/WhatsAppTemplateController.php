<?php
namespace App\Http\Controllers\Admin;

use App\Models\WhatsAppTemplate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\WhatsAppService;

class WhatsAppTemplateController extends Controller
{
    protected $whatsAppService;

    /**
     * Constructor to initialize WhatsAppService.
     */
    public function __construct(WhatsAppService $whatsAppService) {
        $this->whatsAppService = $whatsAppService;
    }

    /**
     * Display a listing of WhatsApp templates.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request){

        $query = WhatsAppTemplate::query();

        // If there's a search query, add where clauses
        if ($request->has('search')) {
            $query->where('name_ar', 'LIKE', "%{$request->search}%")
                  ->orWhere('name_en', 'LIKE', "%{$request->search}%")
                  ->orWhere('status', 'LIKE', "%{$request->search}%");
        }

        // Paginate the results
        $records = $query->latest()->paginate(500);

        return view('admin.whatsapp-templates.index', compact('records'));
    }

    /**
     * Show the form for creating a new template.
     *
     * @return \Illuminate\View\View
     */
    public function create() {
        return view('admin.whatsapp-templates.create');
    }

    /**
     * Store a newly created template in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request) {

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'language_code' => 'required|string|max:10',
            'components' => 'required|json'
        ]);

        $template = WhatsAppTemplate::create($validated);
        $this->sendTemplate($template->id);
        return redirect()->route('whatsapp-templates.index')->with('success', 'Template created successfully');
    }

    /**
     * Display the specified template.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id) {
        $template = WhatsAppTemplate::findOrFail($id);
        return view('admin.whatsapp-templates.show', compact('template'));
    }

    /**
     * Show the form for editing the specified template.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function edit($id) {
        $template = WhatsAppTemplate::findOrFail($id);
        return view('admin.whatsapp-templates.edit', compact('template'));
    }

    /**
     * Update the specified template in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id) {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'language_code' => 'required|string|max:10',
            'components' => 'required|json'
        ]);

        $template = WhatsAppTemplate::findOrFail($id);
        $template->update($validated);
        return redirect()->route('admin.whatsapp-templates.index')->with('success', 'Template updated successfully');
    }

    /**
     * Remove the specified template from the database.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id) {
        $template = WhatsAppTemplate::findOrFail($id);
        $template->delete();
        return redirect()->route('admin.whatsapp-templates.index')->with('success', 'Template deleted successfully');
    }

    /**
     * Send a template message using WhatsApp API.
     *
     * @param Request $request
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function sendTemplate($id) {

        $template = WhatsAppTemplate::findOrFail($id);

        $response = $this->whatsAppService->sendTemplateMessageDynamic(
            '201111848065',
            $template->name,
            json_decode($template->components, true) // Assuming components are stored as JSON
        );

        return response()->json($response);
    }
}
