<?php

namespace App\Http\Controllers;

use App\Skill;
use Illuminate\Http\Request;

use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class SkillsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skills = Skill::all();

        return view('admin.skills.index', compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.skills.create');
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
            'name' => 'required',
            'image' => 'mimes:png',
            'percentage' => 'required|integer'
        ]);

        $attributes = $this->UploadImage($attributes);

        $attributes['percentage'] = (int)$request->get('percentage');
        
        //dd($attributes);
        Skill::create($attributes);

        return redirect('/admin/skills');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function destroy(Skill $skill)
    {
        Storage::delete("\public\skills\\{$skill->image}");

        $skill->delete();

        return back();
    }

    public function UploadImage($attributes)
    {
        if(request()->hasFile('image')){
            $image = request()->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();

            $path = 'app\public\skills\\';

            Image::make($image)->save( storage_path($path . $filename ) );

            $attributes['image'] = $filename;
          };

          return $attributes;
    }
}
