@extends('layouts.admin')

@section('content')
    <a href="/admin/projects" class="btn btn-primary mb-5">Back</a>

    <div class="card w-50">
        <div class="card-header">
            <h2>Add new Project</h2>
        </div>
        <div class="card-body">
            <form action="/admin/projects" method="post" enctype="multipart/form-data">
                @csrf
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control">

                <label for="github">GitHub Link</label>
                <input type="text" name="github" id="github" class="form-control">

                <label for="most_used_language">Most used language</label>
                <input type="text" name="most_used_language" class="form-control">

                <label for="image">Image</label>
                <input type="file" name="image" id="image" class="form-control">

                <label for="time_taken">Time Taken (weeks)</label>
                <input type="number" name="time_taken" id="time_taken" class="form-control">

                <button type="submit" class="btn btn-primary mt-4">Create</button>
            </form>
            @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
            @endif 
        </div>
    </div>
@endsection 