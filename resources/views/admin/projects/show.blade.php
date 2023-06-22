@extends('layouts.app')

@section('content')
    <ul>
        <li>{{ $project->title }}
            <a href="{{ route('admin.projects.edit', $project) }}">modifica</a>
            <form action="{{ route('admin.projects.destroy', $project) }}" method="POST" class="ms-3">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">elimina</button>
            </form>
        </li>
    </ul>

@endsection