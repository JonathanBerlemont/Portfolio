@extends('layouts.admin')

@section('content')
    <div class="d-flex mb-5">
        <a href="/admin/experiences" class="btn btn-primary">Back</a>
        <a href="/admin/experiences/{{$experience->id}}/edit" class="btn btn-success ml-3">Edit</a>
    </div>

    <div>
        <div class="card w-50 mt-2">
            <div class="card-header d-flex">
                <h3>{{$experience->job}} at {{$experience->where}}</h3>
                <p class="ml-2">{{$experience->years}}</p>
            </div>
            <div class="card-body">
                <p>{{$experience->description}}</p>
            </div>
        </div>
    </div>
@endsection 