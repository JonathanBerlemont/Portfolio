@extends('layouts.admin')

@section('content')
    <a href="/admin/skills/create" class="btn btn-primary mb-5">Add a new Skill</a>

    <div class="card" style="overflow-y: scroll">
        <div class="card-header">
            <h2>Skills</h2>
        </div>
        <div class="card-body">
            <div class="row">
                @foreach ($skills as $skill)
                    <div class="col-2 mb-3">
                        <div class="d-flex flex-column justify-content-center mx-4 border rounded" style="width: 200px">
                            <form action="/admin/skills/{{$skill->id}}" method="post" class="ml-auto">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">X</button>
                            </form>
                            <div style="width:200px; height:200px; background-image: url(/storage/skills/{{$skill->image}}); background-size: contain; background-repeat: no-repeat; background-position: center"></div>
                            <p class="mt-4 text-center w-100" style="font-size: 30px">{{$skill->name}}</p>
                            <small class="mx-auto">{{ucfirst($skill->type)}}</small>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div> 
    
    
@endsection