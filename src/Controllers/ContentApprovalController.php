<?php

namespace VendorName\ContentApprovalWorkflow\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use VendorName\ContentApprovalWorkflow\Models\ContentApproval;

class ContentApprovalController extends Controller
{
    public function index()
    {
        return response()->json(ContentApproval::all());
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $approval = ContentApproval::create([
            'title' => $request->title,
            'description' => $request->description,
            'submitted_by' => auth()->id(),
        ]);

        return response()->json($approval, 201);
    }

    public function update(Request $request, $id)
    {
        $approval = ContentApproval::findOrFail($id);
        $approval->update($request->only(['status']));
        return response()->json($approval);
    }
}
