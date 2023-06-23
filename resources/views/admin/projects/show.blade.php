@extends('layouts.app')

@section('content')
    <ul>
        <li>
            {{ $project->title }}
            <!-- <img src="{{ $project->img }}" alt=""> -->
            <img class="img-fluid" src="{{asset('storage/' . $project->img)}}" alt="">
            @if($project->type)
            <h6>type: {{$project->type->name}}</h6>
            @endif
            
            <div>
                <a href="{{ route('admin.projects.edit', $project) }}">modifica</a>
                <form action="{{ route('admin.projects.destroy', $project) }}" method="POST" class="ms-3">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">elimina</button>
                </form>
            </div>
        </li>
    </ul>

@endsection