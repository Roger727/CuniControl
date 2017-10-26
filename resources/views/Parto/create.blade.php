@extends('layouts.Principal')
@section('content')
<label for="destete">SUPERVISION DE PARTO</label>

<div class="container">

<form action="{{url('/parto')}}" method="post">
    {{ csrf_field() }}
    <div class="form-group">
            <label for="exampleInputPassword2">Numero de tatuaje de la madre:</label>
          <select class="" name="Id_Monta">
            @foreach($montas as $monta)              
                <option value="{{$monta->Id_Monta}}">{{$monta->Id_Monta}}</option>
            @endforeach
            </select>
    </div>
<!--         <input class="form-control" name="Fecha_Monta" type="date" > -->

    <div>
        <label for="fecha">Fecha de parto:</label>
        <input class="form-control" name="Fecha_Parto" type="date" >
    </div>

    <div>
        <label for="cant_vivos">Cantidad de gazapos vivos:</label>
        <input class="form-control" name="Numero_Vivos" type="text" >
    </div>

    <div>
        <label for="cant_muertos">Cantidad de gazapos muertos:</label>
        <input class="form-control" name="Numero_Muertos" type="text" >
    </div>

    <div>
        <label for="peso">Peso promedio al nacer:</label>
        <input class="form-control" name="Peso_Nacer" type="text" >
</div>
    <br>
    <button type="submit" class="btn btn-outline-primary">Agregar</button>
    <button type="submit" class="btn btn-outline-secondary">Regresar</button>

</form>
</div>
@endsection
