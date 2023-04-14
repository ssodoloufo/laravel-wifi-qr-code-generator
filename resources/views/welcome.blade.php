<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Bootstrap CDN -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
    </head>
    <body>
    <div class="d-flex justify-content-center">
        <div class="py-5 col-6">
            
            

            <div class="card">
                <div class="card-header bg-light text-center">
                    <span>Veuillez scanner ce QrCode pour vous connectez au MiFi</span>
                </div>
                <div class="card-body bg-dark text-center">
                    {{ $qrcode }}
                </div>
            </div>
        </div>
    </div>


        
    </body>
</html>
