<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::latest()->get();

        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
            'time_taken' => 'required|integer',
            'most_used_language' => 'required'
        ]);

        $attributes = $this->UploadImage($attributes);

        Project::create($attributes);

        return redirect('/admin/projects');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return view('admin.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $attributes = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'time_taken' => 'required|integer',
            'most_used_language' => 'required'
        ]);

        $attributes = $this->UploadImage($attributes, $project);

        $project->update($attributes);

        return redirect("/admin/projects/{$project->id}");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        Storage::delete("\public\projects\\{$project->image}");

        $project->delete();

        return back();
    }

    public function UploadImage($attributes, $project = null)
    {
        if(request()->hasFile('image')){

            if($project != null){
                Storage::delete("\public\projects\\{$project->image}");
            }

            $image = request()->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();

            $path = 'app\public\projects\\';

            Image::make($image)->save( storage_path($path . $filename ) );

            $attributes['image'] = $filename;
          };

          return $attributes;
    }
}
