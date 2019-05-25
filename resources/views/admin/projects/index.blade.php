@extends('layouts.admin')

@section('content')
    <a href="/admin/projects/create" class="btn btn-primary mb-5">Add a new Project</a>

    <div class="card">
        <div class="card-header">
            <h2>Projects</h2>
        </div>
        <div class="card-body">
            @forelse ($projects as $project)
                <div class="d-flex border border-dark rounded my-3">
                    <div style="width: 150px; background-image: url(/storage/projects/{{$project->image}}); background-size: contain; background-repeat: no-repeat; background-position: center" class="border-right border-dark bg-dark"></div>
                    <div style="flex:1">
                        <div class="card-header">
                            <div class="d-flex">
                                <div style="flex:1" class="d-flex">
                                    <h3>{{$project->title}}</h3>
                                    <p class="ml-2">({{$project->time_taken}} {{str_plural('week', $project->time_taken)}})</p>
                                </div>
                                <a href="/admin/projects/{{$project->id}}" class="btn btn-primary mr-3 px-5">View</a>
                                <a href="/admin/projects/{{$project->id}}/edit" class="btn btn-success mr-3 px-5">Edit</a>
                                <form action="/admin/projects/{{$project->id}}" method="post">
                                    @csrf
                                    @method('delete')
        
                                    <button type="submit" class="btn btn-danger">X</button>
                                </form>
                            </div>
                        </div>
                        <div class="card-body">
                            <a href="{{$project->github}}" target="_blank">{{$project->github}}</a>
                        </div>
                    </div>
                </div>
            @empty
                No Projects
            @endforelse
        </div>
    </div>
@endsection