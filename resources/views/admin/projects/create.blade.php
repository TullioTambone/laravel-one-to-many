@extends('layouts.app')

@section('content')
    <form action="{{route('admin.projects.store')}}" method="POST" enctype="multipart/form_data">
        @csrf

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

        <div class="mb-3">
            <label for="type" class="form-label">tipologia</label>
            <select class="form-select form-select-lg @error ('type_id') is-invalid @enderror" name="name" id="type">
                <option value="">-- scegli una tipologia --</option>
                @foreach($types as $e)
                <option value="{{ $e->id }}">{{ $e->name }}</option>
                @endforeach
            </select>
        </div>
            @error('type_id')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection