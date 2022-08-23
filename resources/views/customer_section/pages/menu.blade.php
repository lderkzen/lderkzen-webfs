@extends('customer_section.index')

@section('title', 'Menukaart | De Gouden Draak')

@section('page')
    <div class="d-flex flex-column align-items-center px-0 mt-5 mb-3">
        <a href="/menukaart/download" class="text-center mx-auto">Download</a>
        <div class="content-section">
            @include('menu_pdf.pdf')
        </div>
    </div>
@endsection
