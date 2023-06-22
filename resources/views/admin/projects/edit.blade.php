@extends('layouts.app')

@section('content')
    <form action="{{route('admin.projects.update', $project)}}" method="POST" >
        @csrf
        @method('PUT')
        
        <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text"
            class="form-control" name="title" id="title" aria-describedby="" placeholder="title">
        </div>
        <div class="mb-3">
        <label for="description" class="form-label">descrizione</label>
        <input type="text"
            class="form-control" name="description" id="description" aria-describedby="" placeholder="descrizione..">
        </div>
        <div class="mb-3">
            <label for="img" class="form-label">immagine</label>
            <input type="file"
                class="form-control" name="img" id="img" aria-describedby="">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection