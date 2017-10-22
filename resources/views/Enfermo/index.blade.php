@extends('layouts.Principal')
@section('content')

<div class="container">
<h2>Inicio Conejo Enfermo</h2>
      <form method="get" action="{{url('/enfermo')}}">
          <div class="form-group">
              <label for="">Tatuaje del conejo: </label>
                  <div class="form-group">
                    <input type="" class="form-control" name="Id_Conejo" placeholder="Introduce tatuajes sin espacio">
                  </div>        
              <button type="submit" class="btn btn-outline-primary">Buscar</button>            
          </div>
      </form>
      <a href="{{url('/enfermo/create')}}" type="submit" class="btn btn-outline-success">Agregar</a>
      <table class="table table-sm table-responsive">
          <thead class="thead-default">
              <tr>
                  <th>Id Conejo Enfermo:</th>
                  <th>Enfermedad:</th>
                  <th>Medicamento :</th>
                  <th>Inicio de tratamiento:</th>
                  <th>Fin de tratamiento</th>
                  <th></th>
              </tr>
          </thead>
          <tbody>
              <tr>
                  @foreach( $enfermos as $enfermo)
                    <td> {{$enfermo->Id_Conejo}} </a></td>
                    <td> {{$enfermo->Id_Enfermedad . $enfermo->Nombre_Enfermedad }} </td>
                    <td> {{$enfermo->Id_Medicamento}} </td>
                    <td> {{$enfermo->Fecha_Inicio}} </td>
                    <td> {{$enfermo->Fecha_Fin}} </td>        
                    <td>
                    <div class="btn-group btn-group-sm" role="group" aria-label="">
                        <button type="button" class="btn btn-secondary btn-outline-danger ">Eliminar</button><a href="{{url('/enfermo/' . $enfermo->Id_Conejo . '/edit')}}" class="btn btn-secondary btn-outline-info">Modificar</a>
                    </div>
                  </td>
              </tr>
              @endforeach
          </tbody>
      </table>
@endsection
