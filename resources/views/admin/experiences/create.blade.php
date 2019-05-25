@extends('layouts.admin')

@section('content')
    <div class="card w-50">
        <div class="card-header">
            <h3>Add a new Experience</h3>
        </div>
        <div class="card-body">
            <form action="/admin/experiences" method="post">
                @csrf

                <label for="years">Years</label>
                <input type="text" class="form-control" id="years" name="years" placeholder="Years" value="{{old('years')}}">

                <label for="Job">Job</label>
                <input type="text" class="form-control" id="job" name="job" placeholder="Job" value="{{old('job')}}">

                <label for="where">Where</label>
                <input type="text" class="form-control" id="where" name="where" placeholder="Where" value="{{old('where')}}">

                <label for="description">Job Description</label>
                <textarea name="description" id="description" cols="30" rows="10"  class="form-control" placeholder="Description">{{old('descritpion')}}</textarea>

                <button type="submit" class="btn btn-primary mt-4">Add this Experience</button>
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