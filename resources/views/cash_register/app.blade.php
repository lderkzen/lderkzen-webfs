<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="{{ asset('/css/cash_register/main.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/cash_register/index.css') }}" rel="stylesheet">
        <script src="{{ mix('/js/CashRegister/app.js') }}" defer></script>
        <script src="{{ mix('/js/CashRegister/manifest.js') }}" defer></script>
        <script src="{{ mix('/js/CashRegister/vendor.js') }}" defer></script>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @inertiaHead
    </head>
    <body>
        <div id="app" class="pt-2 px-2 vh-100 vw-100 mw-100" data-page="{{ json_encode($page) }}"></div>
    </body>
</html>
