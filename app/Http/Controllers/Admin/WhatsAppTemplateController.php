<?php
namespace App\Http\Controllers\Admin;

use App\Models\WhatsAppTemplate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\WhatsAppService;
use Illuminate\Support\Facades\Validator;

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
        $data = [
            'name' => $request->name,
            'language_code' => $request->language_code,
            'components' => json_encode($request->components) // Ensure this is an array before encoding
        ];

        $validated = Validator::make($data, [
            'name' => 'required|string|max:255',
            'language_code' => 'required|string|max:10',
            'components' => 'required|json'
        ])->validate();

        try {
            $template = WhatsAppTemplate::create($validated);
            $this->sendTemplate($template->id);
            return redirect()->route('whatsapp-templates.index')->with('success', 'Template created successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to create template: ' . $e->getMessage());
        }
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
     * @param \Illuminate\Http\Request $request
     * @param int $id Template ID
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id) {
        // Validate the incoming request data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'language_code' => 'required|string|max:10',
            'components' => 'required|array'
        ]);

        // Convert components array to JSON string for storage
        $validated['components'] = json_encode($validated['components']);

        // Find the template by ID and update it with validated data
        $template = WhatsAppTemplate::findOrFail($id);
        $template->update($validated);

        // Redirect to the template index route with a success message
        return redirect()->route('whatsapp-templates.index')->with('success', 'Template updated successfully');
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
    public function sendTemplate(Request $request) {

        $template = WhatsAppTemplate::findOrFail(1);

        $phone = '201111848065'; // recipient's phone number
        $templateName = 'my_template'; // make sure this template name is registered on WhatsApp
        $result = $this->whatsAppService->sendTemplateMessageDynamic($phone, $templateName);
        // $response = $this->whatsAppService->sendTemplateMessageDynamic(
        //     '201111848065',
        //     $template->name,
        //     json_decode($template->components, true) // Assuming components are stored as JSON
        // );

        return response()->json($response);
    }
}
