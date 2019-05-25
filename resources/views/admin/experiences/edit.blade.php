@extends('layouts.admin')

@section('content')

    <a href="/admin/experiences" class="btn btn-primary mb-5">Back</a>

    <div class="card w-50">
        <div class="card-header">
            <h3>Edit this Experience</h3>
        </div>
        <div class="card-body">
            <form action="/admin/experiences/{{$experience->id}}" method="post">
                @method('patch')
                @csrf

                <label for="years">Years</label>
                <input type="text" class="form-control" id="years" name="years" placeholder="Years" value="{{$experience->years}}">

                <label for="Job">Job</label>
                <input type="text" class="form-control" id="job" name="job" placeholder="Job" value="{{$experience->job}}">

                <label for="where">Where</label>
                <input type="text" class="form-control" id="where" name="where" placeholder="Where" value="{{$experience->where}}">

                <label for="description">Job Description</label>
                <textarea name="description" id="description" cols="30" rows="10"  class="form-control" placeholder="Description">{{$experience->description}}</textarea>

                <button type="submit" class="btn btn-primary mt-4">Update this Experience</button>
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