@extends('layouts.app')

@section('content')
    <section class="card-section">
        <h1 class="title">Trains</h1>
        <div class="container">
            <div class="row row-gap-4">
                @foreach ($trains as $train)
                    <div class="col-3">
                        <div class="card ms_card">
                            <div class="card-body text-center">
                                <p>{{ $train->company }}</p>
                                <p>{{ $train->departure_station }}</p>
                                <p>{{ $train->arrival_station }}</p>
                                <p>{{ $train->departure_time }}</p>
                                <p>{{ $train->arrival_time }}</p>
                                <p>{{ $train->train_code }}</p>
                                <p>{{ $train->carriages_number }}</p>
                                <p>
                                    @if ($train->in_time) 
                                        In orario
                                    @else 
                                        In ritardo
                                    @endif
                                </p>
                                <p>
                                    @if ($train->cancelled) 
                                        Treno cancellato
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection