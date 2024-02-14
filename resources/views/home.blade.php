<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <div class="container">
        <div class="row">
            @foreach ($movies as $movie)
                <div class="col-4 my-2">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{$movie -> title}}</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">{{$movie -> original_title}}</h6>
                            <p class="card-text">Nazionalita': {{$movie -> nationality}}</p>
                            <p class="card-text">Data di uscita: {{$movie -> date}}</p>
                            <p class="card-text">Voto: {{$movie -> vote}}</p>
                        </div>
                    </div>
                </div>    
            @endforeach
        </div>
    </div>
</body>

</html>