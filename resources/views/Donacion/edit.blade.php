@extends('layouts.Principal')
@section('content')

      <div class="container">
        <h2>ACTUALIZACIÓN DE DONACIÓN DE GAZAPOS:</h2>
<form action="{{url('/donacion/' . $donacion->Id_Donacion)}}" method="POST" role="form">
      {{method_field('patch')}}
      {{ csrf_field() }} 
          <div class="form-group">
            <label for="  ">Coneja Donante:</label>
            <input readonly class="form-control" name="Id_Parto_Donante" value="{{$donacion->parto->monta->Id_Conejo_Hembra}}">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword2">Parto Receptor:</label>
            <input readonly class="form-control" name="Id_Parto_Donante" value="{{$donacion->parto->monta->Id_Conejo_Hembra}}">            
          </div>
          <div class="form-group">
            <label for="exampleInputPassword2">Cantidad de gazapos donados:</label>
            <input class="form-control" value="{{$donacion->Cantidad_Gazapos}}" name="Cantidad_Gazapos">                  
          </div>
         
        </br>

          <DIV align="right"><button type="submit" class="btn btn-outline-primary">Actualizar</button>
        </form>
      </div>
@endsection