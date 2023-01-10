

@extends('layouts.main')

@section('content')


<div class="dc-container">
    <table class="table striped">
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
                <td>{{$train->id}}</td>
                <td>{{$train->azienda}}</td>
                <td>{{$train->num_treno}}</td>
                <td>{{$train->tipo_treno}}</td>
                <td>{{$train->staz_part}}</td>

                <td>{{$train->staz_arr}}</td>
                <td>{{$train->num_cambi ==0 ? 'No' : $train->num_cambi}}</td>
                <td>{{$train->num_carrozze}}</td>
                <td>{{$train->in_orario ==0 ? 'No' : 'Sì'}}</td>
                <td>{{$train->cancellato ==0 ? 'No' : 'Sì'}}</td>
              </tr>
            @endforeach


        </tbody>
      </table>

</div>

@endsection



