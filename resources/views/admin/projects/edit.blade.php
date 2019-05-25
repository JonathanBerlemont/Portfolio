@extends('layouts.admin')

@section('content')
    <a href="/admin/projects" class="btn btn-primary mb-5">Back</a>

    <form action="/admin/projects/{{$project->id}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div class="card w-50">
            <div class="card-header">
                <input type="text" name="title" class="form-control bg-light" style="border:0" value="{{$project->title}}">
            </div>
            <div class="card-body">
                <input type="text" name="github" class="form-control" style="border:0" value="{{$project->github}}">
            </div>
        </div>

        <div class="card w-50 p-3 mt-4">
            <img src="/storage/projects/{{$project->image}}" alt="" width="200px">
            <input type="file" name="image" id="image" class="form-control">
        </div>

        <div class="d-flex w-50 justify-content-between">
            <div class="card p-3 mt-4" style="width: 45%">
                <label for="most">Most used language:</label>
                <input type="text" name="most_used_language" class="form-control" id="most" style="border:0" value="{{$project->most_used_language}}">
            </div>
            <div class="card p-3 mt-4" style="width: 45%">
                <label for="time">Time taken (weeks):</label>
                <input type="number" name="time_taken" class="form-control" id="time"  style="border:0" value="{{$project->time_taken}}">
            </div>
        </div>

        <button type="submit" class="btn btn-success mt-4">Update</button>
    </form>
    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
    @endif 


@endsection 