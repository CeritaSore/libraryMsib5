@extends('frontend.index')
@section('content')
    <div class="container">
        <h2 class="display-4 text-center">Discover Our Team</h2>
        <div class="row justify-content-around mt-5">
            @foreach ($listTeam as $team)
                <div class="col-4 mb-3">
                    <div class="card">
                        <img src="" alt="team">
                        <div class="card-body">
                            <h3 class="card-title text-center"> {{ $team->nama }} </h3>
                            <p class="card-text text-center">{{ $team->asal }} - {{ $team->role }}</p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
