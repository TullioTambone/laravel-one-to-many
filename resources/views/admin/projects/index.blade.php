@extends('layouts.app')

@section('content')

    @foreach($project as $element)
   
    <a href="{{ route('admin.projects.show', $element) }}">{{ $element['title'] }}</a>
    <!-- <img style="width: 150px" src="{{ $element->img }}" alt=""> -->
    <img class="img-fluid" src="{{asset('storage/' . $element->img)}}" alt="">
    @endforeach

@endsection