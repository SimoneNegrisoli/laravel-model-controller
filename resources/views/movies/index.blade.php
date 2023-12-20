@extends('layouts.app')

@section('title', 'Movies')

@section('content')
    <main>
        <section class=" container ">
            <h1>Movies</h1>
            <div class="row">
                @foreach ($movies as $key => $movie)
                    <div class="col-12 col-md-4 col-lg-3 mt-5 mb-5">
                        <a href="{{ route('movies.show', $key) }}">
                            <div class="mycard">
                                <div class="mycard-c">
                                    <img src="{{ $movie['image'] }}" class="card-img-top" alt="{{ $movie['title'] }}">
                                </div>
                                <div class=" mt-2 d-flex flex-column justify-content-between ">
                                    <div>
                                        <h5>{{ $movie['title'] }}</h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>

        </section>
    </main>

@endsection
