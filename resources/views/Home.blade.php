@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        @foreach ($trains as $train)
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="https://image.isu.pub/150323100525-8e787ac7516e518e295c5a6e1bc2bfe9/jpg/page_1.jpg"
                            class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{ $train->departure_station }} - {{ $train->arrival_station }}</h5>
                            <p class="card-text">{{ $train->agency }}</p>
                            <p class="card-text">Numero di carrozze : {{ $train->number_of_carriages }}</p>

                            <p class="card-text"><small class="text-muted">
                                    Orario di partenza : {{ $train->departure_time }} <br>
                                    Orario di arrivo : {{ $train->arrival_time }}</small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
