<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <ul>
            @foreach ($trains as $train)
            <li class="_col-4">
                <div class="_card text-center">
                    <p>
                        Compagnia:
                        {{$train->company}}

                    </p>
                    <p>
                        Stazione Di Partenza:
                        {{$train->departure_station}}

                    </p>
                    <p>
                        Stazione Di Arrivo:
                        {{$train->arrival_station}}

                    </p>
                    <p>
                        Orario Di Partenza:
                        {{$train->departure_time}}

                    </p>
                    <p>
                        Orario D' Arrivo:
                        {{$train->arrival_time}}

                    </p>
                    <p>
                        codice treno:
                        {{$train->train_code}}

                    </p>
                    <p>
                        Numero Carrozza:
                        {{$train->coach_number}}

                    </p>
                    <p>
                        Ritardo:
                        {{$train->delay}}

                    </p>
                    <p>
                        Cancellato:
                        {{$train->deleted}}

                    </p>
                   

                </div>

            </li>
            @endforeach

        </ul>
    </div>
</body>
</html>