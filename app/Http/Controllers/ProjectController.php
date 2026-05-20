<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();

        return view('projects.index', compact('projects'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'=>'required',
            'description'=>'required',
            'image'=>'nullable|image'
        ]);

        if($request->hasFile('image'))
        {
            $validated['image'] =
            $request->file('image')
            ->store('projects','public');
        }

        Project::create($validated);

        return back();
    }
    public function destroy(Project $project)
{
    if($project->image)
    {
        Storage::disk('public')
            ->delete($project->image);
    }

    $project->delete();

    return back();
}
}