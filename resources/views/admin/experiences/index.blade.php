@extends('layouts.admin')

@section('content')
    <a href="/admin/experiences/create" class="btn btn-primary mb-5">Add a new Experience</a>

    <div class="card">
        <div class="card-header">
            <h3>Experiences</h3>
        </div>
        <div class="card-body">
            @forelse ($experiences as $experience)
                <div class="card mb-3">
                    <div class="d-flex border-bottom card-header">
                        <div class="d-flex" style="flex:1">
                            <h2>{{$experience->job}} <strong>@</strong> {{$experience->where}}</h2>
                            <p>{{$experience->years}}</p>
                        </div>

                        <a href="/admin/experiences/{{$experience->id}}" class="btn btn-primary mr-3 px-5">View</a>
                        <a href="/admin/experiences/{{$experience->id}}/edit" class="btn btn-success mr-3 px-5">Edit</a>
                        <form action="/admin/experiences/{{$experience->id}}" method="post">
                            @csrf
                            @method('delete')

                            <button type="submit" class="btn btn-danger">X</button>
                        </form>
                    </div>

                    <div class="card-body">
                        <p>{{$experience->description}}</p>
                    </div>
                    
                </div>
            @empty
                No experiences yet
            @endforelse
        </div>
    </div>
@endsection