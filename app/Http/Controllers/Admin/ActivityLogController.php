<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Spatie\Activitylog\Models\Activity;
use App\Http\Controllers\Controller;

class ActivityLogController extends Controller
{
    /**
     * Display a listing of the activity logs.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $records = Activity::latest();

        if ($request->has('search')) {
            $records->where('name_ar', 'LIKE', "%{$request->search}%")
                ->orWhere('name_en', 'LIKE', "%{$request->search}%")
                ->orWhere('description_ar', 'LIKE', "%{$request->search}%")
                ->orWhere('description_en', 'LIKE', "%{$request->search}%");
        }

        $activities = $records->paginate(500);

        return view('admin.activityLog.index', compact('activities'));
    }
}
