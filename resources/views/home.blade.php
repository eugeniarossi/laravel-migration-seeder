<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel migration seeder</title>
         @vite('resources/js/app.js')
    </head>
    <body>
        <!-- container -->
        <div class="container">
            <h1>Treni in partenza</h1>
            <!-- table -->
            <table class="table mt-5">
                <!-- table head -->
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Codice del treno</th>
                    <th scope="col">Compagnia</th>
                    <th scope="col">Stazione di partenza</th>
                    <th scope="col">Stazione di arrivo</th>
                    <th scope="col">Orario di partenza</th>
                    <th scope="col">Orario di arrivo</th>
                    <th scope="col">Numero carrozze</th>
                    <th scope="col">In orario</th>
                    <th scope="col">Cancellato</th>
                  </tr>
                </thead>
                <!-- /table head -->
                <tbody>
                    <!-- foreach -->
                    @foreach ($trains as $train)
                    <!-- ELEMENT TO REPEAT -->
                    <tr>
                        <!-- id -->
                        <th scope="row">{{ $train['id'] }}</th>
                        <!-- train number -->
                        <td>{{ $train['train_number'] }}</td>
                        <!-- company -->
                        <td>{{ $train['company'] }}</td>
                        <!-- departure station -->
                        <td>{{ $train['departure_station'] }}</td>
                        <!-- arrival station -->
                        <td>{{ $train['arrival_station'] }}</td>
                        <!-- departure time -->
                        <td>{{ $train['departure_time'] }}</td>
                        <!-- arrival time -->
                        <td>{{ $train['arrival_time'] }}</td>
                        <!-- coaches -->
                        <td>{{ $train['coaches'] }}</td>
                        <!-- on time -->
                        <td>{{ $train['on_time'] }}</td>
                        <!-- cancelled -->
                        <td>{{ $train['cancelled'] }}</td>
                    </tr>
                    <!-- /ELEMENT TO REPEAT -->
                    @endforeach
                    <!-- /foreach -->
                </tbody>
            </table>
            <!-- /table -->
        </div>
        <!-- container -->
    </body>
</html>
