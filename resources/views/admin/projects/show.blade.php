@extends('layouts.admin')

@section('content')
    <div class="d-flex mb-5">
        <a href="/admin/projects" class="btn btn-primary">Back</a>
        <a href="/admin/projects/{{$project->id}}/edit" class="btn btn-success ml-3">Edit</a>
    </div>

    <div>
        <img src="/storage/projects/{{$project->image}}" alt="" width="200px">
        <div class="card w-50 mt-2">
            <div class="card-header d-flex">
                <h3>{{$project->title}}</h3>
                <p class="ml-2">({{$project->time_taken}} weeks)</p>
            </div>
            <div class="card-body">
                <p>{{$project->github}}</p>
                <p>{{$project->most_used_language}}</p>
            </div>
        </div>
    </div>
@endsection 