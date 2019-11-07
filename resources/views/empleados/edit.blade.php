@extends('layouts.app')

@section('content')
    <div class="container">

        <form action="{{url('/empleados/'.$empleado->id)}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        {{method_field('PATCH')}}  

        @include('empleados.form',['Modo'=>'editar'])


        <!--<label for="Foto">{{'Foto'}}</label> -->

        <!--<img src=" {{asset ('storage').'/'.$empleado->Foto}}" alt="" width="200"> -->

        <!-- <input type="file" name="Foto" id="Foto" value=""> -->

        <!--<input type="submit" value="Modificar"> -->
        <!--<a href="{{url('empleados')}}">Regresar</a> -->

        </form>

    </div>

@endsection
