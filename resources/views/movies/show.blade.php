@extends('layouts.app')

@section('title', 'single movie')

@section('content')
    <main>
        <section class="container">
            <h1 class="text-center">{{ $movie['title'] }}</h1>
            <div class="row gy-4">

                <div class="col-12 col-md-6 p-3 d-flex justify-content-end  ">
                    <div class="myshow-img">
                        <img src="{{ $movie['image'] }}" alt="{{ $movie['title'] }}" class="card-img-top">
                    </div>
                </div>
                <div class="col-12 col-md-6 p-3 d-flex flex-column justify-content-between  ">
                    <div class="card-body mt-3 ">
                        <h5 class="card-title">{{ $movie['title'] }}</h5>
                        <h6 class="pt-2"><em>{{ $movie['original_title'] }}</em></h6>
                        @if ($movie['language'] = 'en')
                            <div class="pt-2 ">
                                Languages: <img src="/img/uk.png" alt="en" class="flag-img">
                            </div>
                        @endif
                        <div class="pt-2">Vote: {{ $movie['vote'] }}</div>
                    </div>
                    <div>
                        <a href="{{ route('movies.index') }}" class="btn btn-secondary mt-2">Come back to films </a>
                    </div>
                </div>



            </div>

        </section>

    </main>
@endsection
