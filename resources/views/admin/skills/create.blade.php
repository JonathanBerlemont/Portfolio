@extends('layouts.admin')

@section('content')
    <a href="/admin/skills" class="btn btn-primary mb-5">Back</a>

    <div class="card w-25">
        <div class="card-header">
            <h2>Add a new Skill</h2>
        </div>
        <div class="card-body">
            <form action="/admin/skills" method="post" enctype="multipart/form-data">
                @csrf
                <label for="name">Name</label>
                <input name="name" id="name" type="text" class="form-control">
                
                <label for="type">Type of Skill</label>
                <select name="type" id="type" class="form-control">
                    <option value="language">Languages/ Frameworks</option>
                    <option value="technology">Technologies</option>
                </select>

                <label for="image" class="mt-3">Skill Icon</label>
                <input type="file" name="image" id="image" class="form-control">

                <label for="percentage" class="mt-3">Percentage of knowledge</label>
                <input type="number" name="percentage" id="percentage" class="form-control" min="10" max="100" placeholder="50">

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