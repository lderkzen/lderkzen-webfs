<div class="container">
    <div class="d-flex ps-4 pt-3">
        <h1 class="pb-0 mb-0">Menu - De Gouden Draak</h1>
        <span class="ps-5 text-secondary">{{ $now }}</span>
    </div>
    <div class="container-fluid p-3">
        @foreach($dishTypes as $type)
            <div>
                <h4>{{ $type->type }}</h4>
                @foreach($type->dishes as $dish)
                    <div id="dish-{{ $dish->id }}" class="row justify-content-between dish">
                        <span class="col-1">{{ strlen($dish->dish_nr) > 0 ? $dish->dish_nr . '.' : '' }}</span>
                        <span class="col">{!! $dish->name !!}
                            @if($dish->description)
                                <small class="text-muted">({!! $dish->description !!})</small>
                            @endif
                            @if($dish->description)
                                <small>
                                    @for($x = 0; $x < $dish->spice_level; $x++)
                                        🌶️
                                    @endfor
                                </small>
                            @endif
                        </span>
                        <div class="col-2 ps-2">
                            @foreach($dish->allergies as $allergy)
                                <small class="text-danger">{{ $allergy->allergy }}
                                    @if(!$loop->last)
                                        ,
                                    @endif
                                </small>
                            @endforeach
                        </div>
                        <span class="col-1">{{ $dish->price }}</span>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
    <hr class="my-1" />
    <h1 class="ps-4 pt-3">Aanbiedingen</h1>
    <div class="container-fluid p-3 px-0">
        <div class="row mx-0">
            @foreach($offers as $offer)
                <div class="col-6">
                    <div class="d-flex flex-column p-2">
                        <h5>{{ $offer->title }}</h5>
                        <h6>{{ $offer->name }}</h6>
                        <span>{{ $offer->description }}</span>
                        <div class="row ps-5">
                            @foreach($offer->dishes->chunk(ceil($offer->dishes->count() / 2)) as $chunk)
                                <div class="col-auto d-flex flex-column px-1 text-center">
                                    @foreach($chunk as $dish)
                                        <small>{{ $dish->name }}</small>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                        <span>{{ $offer->extra_info }}</span>
                        <span><b>Prijs: €{{ number_format($offer->price, 2, ',') }}</b></span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
