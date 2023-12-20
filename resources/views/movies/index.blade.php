@extends('layouts.app')

@section('title', 'Movies')

@section('content')
    @foreach ($movies as $movie)
        <li>{{ $movie->title }}</li>
    @endforeach
@endsection
