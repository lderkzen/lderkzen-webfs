<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Menu | De Gouden Draak</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="{{ asset('/js/tablet/cocktails.js') }}" defer></script>
        <script src="{{ asset('/js/tablet/favorites.js') }}" defer></script>
    </head>
    <body>
        <div class="container pt-3 px-3">
            <div class="row justify-content-center mx-0">
                <div class="col-11 p-2 border border-1 rounded">
                    <div class="form-group">
                        <label for="cocktail-search"><h3>Zoek een cocktail op!</h3></label>
                        <input id="cocktail-search" class="form-control" type="text" />
                    </div>
                    <div id="cocktail-results" class="px-2 py-3">
                        <div class="row mx-0 border-bottom border-2">
                            <span class="col-3">Cocktail</span>
                            <span class="col-3 border-start border-end border-1">Type</span>
                            <span class="col-6">Ingrediënten</span>
                        </div>
                        <div></div>
                    </div>
                </div>
            </div>
        </div>
        @include('menu_pdf.pdf')
    </body>
</html>
