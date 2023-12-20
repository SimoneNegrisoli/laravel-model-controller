@extends('layouts.app')

@section('title', 'single movie')

@section('content')
    <main>
        <section class="container">
            <h1>{{ $movie['title'] }}</h1>
            <div class="row gy-4">

                <div class="col-12">
                    <div class=" d-flex  flex-column  justify-content-between  align-items-center ">
                        <div>
                            <img src="{{ $movie['image'] }}" alt="{{ $movie['title'] }}" class="card-img-top">
                        </div>
                        <div class="card-body mt-3 ">
                            <h5 class="card-title">{{ $movie['title'] }}</h5>
                            <h6><em>{{ $movie['original_title'] }}</em></h6>
                            <div>Languages: {{ $movie['language'] }}</div>
                            <div>{{ $movie['vote'] }}</div>
                        </div>
                    </div>
                    <a href="{{ route('home') }}" class="btn btn-primary ">Torna ai fumetti</a>
                </div>


            </div>

        </section>

    </main>
@endsection
