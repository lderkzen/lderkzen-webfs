@extends('customer_section.index')

@section('title', 'Aanbiedingen | De Gouden Draak')

@section('page')
    <div>
        <div class="container-fluid mt-5 mb-3 text-center fw-bold content-section">
            <p class="py-4 mb-0">
                Al jaren is De Gouden Draak een begrip als het gaat om de beste afhaalgerechten in 's-Hertogenbosch.<br />
                Graag trakteren we u op authentieke gerechten uit de Cantonese keuken.
            </p>
            @foreach($offers as $offer)
                <hr />
                <div>
                    <h3><u>{{ $offer->title }}</u></h3><br />
                    <h2>{{ $offer->name }}</h2><br />
                    <span>{{ $offer->description }}</span>
                    <div class="row my-3 mx-auto justify-content-center">
                        @foreach($offer->dishes->chunk(ceil($offer->dishes->count() / 2)) as $chunk)
                            <div class="col-auto d-flex flex-column px-4 text-center">
                                @foreach($chunk as $dish)
                                    <span>{{ $dish->name }}</span>
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                    <span>{{ $offer->extra_info }}</span><br /><br />
                    <h1><b>Prijs: €{{ number_format($offer->price, 2, ',') }}</b></h1>
                </div>
            @endforeach
        </div>
    </div>
@endsection
