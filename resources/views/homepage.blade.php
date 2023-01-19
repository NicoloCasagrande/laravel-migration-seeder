<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Trains</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <main>
        <h1>Lista treni</h1>
        <ul>
            @foreach ($trains as $train)
                <li>
                    <h3>{{$train->departure_station}} - {{$train->arrival_station}}</h3>
                    <h4>{{$train->company}}</h4>
                    <p>
                        {{$train->departure_time}} - {{$train->arrival_time}}
                    </p>
                </li>
            @endforeach
        </ul>
    </main>
</body>

</html>