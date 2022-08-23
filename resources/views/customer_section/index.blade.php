@extends('customer_section.layout')

@section('head')
    <link href="{{ asset('/css/customer_section/table.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="pt-3 px-5 vh-100 vw-100 mw-100">
        <div class="container-fluid bg-red">
            <header class="row px-5 align-items-center justify-content-between">
                <div class="col d-flex align-items-center">
                    <img src="{{ asset('/images/dragon-small.png') }}" alt="Small Dragon" class="dragon-small">
                    <span class="fs-2 px-2 font-styled">DE GOUDEN DRAAK</span>
                    <img src="{{ asset('/images/dragon-small-flipped.png') }}" alt="Small Dragon" class="dragon-small">
                </div>
                <div class="col d-flex justify-content-between marquee">
                    <a href="/aanbiedingen"><b>Welkom bij De Goude Draak, klik op deze tekst om de aanbiedingen van deze week te zien!</b></a>
                </div>
                <div class="col d-flex align-items-center justify-content-end">
                    <img src="{{ asset('/images/dragon-small.png') }}" alt="Small Dragon" class="dragon-small">
                    <span class="fs-2 px-2 font-styled">DE GOUDEN DRAAK</span>
                    <img src="{{ asset('/images/dragon-small-flipped.png') }}" alt="Small Dragon" class="dragon-small">
                </div>
            </header>
            <div class="row py-2 align-items-center justify-content-around">
                <div class="col d-flex align-items-center justify-content-center">
                    <table class="w-100">
                        <tbody>
                        <tr class="table-row">
                            <td class="table-cell b-t b-l"></td>
                            <td class="table-cell b-t b-r b-b"></td>
                            <td class="table-cell b-b"></td>
                            <td class="table-filler b-f"></td>
                            <td class="table-cell b-b"></td>
                            <td class="table-cell b-t b-l b-b"></td>
                            <td class="table-cell b-t b-r"></td>
                        </tr>
                        <tr class="table-row">
                            <td class="table-cell b-l b-b b-r"></td>
                            <td class="table-cell b-f"></td>
                            <td class="table-cell b-f"></td>
                            <td class="table-filler b-l b-t b-r"></td>
                            <td class="table-cell b-f"></td>
                            <td class="table-cell b-f"></td>
                            <td class="table-cell b-r b-b b-l"></td>
                        </tr>
                        <tr class="table-row">
                            <td class="table-cell b-t b-r b-b"></td>
                            <td class="table-cell b-f"></td>
                            <td class="table-cell b-l b-t"></td>
                            <td class="table-filler"></td>
                            <td class="table-cell b-r b-t"></td>
                            <td class="table-cell b-f"></td>
                            <td class="table-cell b-t b-l b-b"></td>
                        </tr>
                        <tr class="table-row">
                            <td class="table-cell b-f"></td>
                            <td class="table-cell b-l b-t"></td>
                            <td class="table-cell"></td>
                            <td>
                                <div class="container-fluid d-flex flex-column align-items-center">
                                    <div class="row w-100 justify-content-between">
                                        <div class="col">
                                            <img src="{{ asset('/images/dragon-small.png') }}" alt="Small Dragon" class="dragon-large">
                                        </div>
                                        <div class="col-auto d-flex flex-column align-items-center text-center">
                                            <h1><b>Chinees Indische Specialiteiten</b></h1>
                                            <h1 class="company-name"><b>De Gouden Draak</b></h1>
                                            <div class="d-block">
                                                <a class="btn btn-nav px-4 py-0" href="/menukaart">Menukaart</a>
                                                <a class="btn btn-nav px-4 py-0" href="/nieuws">Nieuws</a>
                                                <a class="btn btn-nav px-4 py-0" href="/contact">Contact</a>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <img src="{{ asset('/images/dragon-small-flipped.png') }}" alt="Small Dragon" class="dragon-large float-end">
                                        </div>
                                    </div>
                                    <div class="row w-100">
                                        @yield('page')
                                    </div>
                                    <div class="row">
                                        <a href="/contact">Naar Contact</a>
                                    </div>
                                </div>
                            </td>
                            <td class="table-cell"></td>
                            <td class="table-cell b-r b-t"></td>
                            <td class="table-cell b-f"></td>
                        </tr>
                        <tr class="table-row">
                            <td class="table-cell b-t b-r b-b"></td>
                            <td class="table-cell b-f"></td>
                            <td class="table-cell b-l b-b"></td>
                            <td class="table-filler"></td>
                            <td class="table-cell b-r b-b"></td>
                            <td class="table-cell b-f"></td>
                            <td class="table-cell b-t b-l b-b"></td>
                        </tr>
                        <tr class="table-row">
                            <td class="table-cell b-l b-t b-r"></td>
                            <td class="table-cell b-f"></td>
                            <td class="table-cell b-f"></td>
                            <td class="table-filler b-l b-b b-r"></td>
                            <td class="table-cell b-f"></td>
                            <td class="table-cell b-f"></td>
                            <td class="table-cell b-r b-t b-l"></td>
                        </tr>
                        <tr class="table-row">
                            <td class="table-cell b-b b-l"></td>
                            <td class="table-cell b-t b-r b-b"></td>
                            <td class="table-cell b-t"></td>
                            <td class="table-filler b-f"></td>
                            <td class="table-cell b-t"></td>
                            <td class="table-cell b-t b-l b-b"></td>
                            <td class="table-cell b-b b-r"></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
