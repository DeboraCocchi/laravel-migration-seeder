

@extends('layouts.main')

@section('content')
<h1>Home Page</h1>

<div class="dc-container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Azienda</th>
            <th scope="col">Tipo</th>
            <th scope="col">Numero</th>
            <th scope="col">Staz. Partenza</th>
            <th scope="col">Staz. Arrivo</th>
            <th scope="col">Cambi</th>
            <th scope="col">n° carrozze</th>
            <th scope="col">In orario</th>
            <th scope="col">Cancellato</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($trains as $train)
            <tr>
                <td>{{$train->}}</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
            @endforeach


        </tbody>
      </table>

</div>

@endsection



