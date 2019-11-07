@extends('layouts.app')

@section('content')

    <div class="container">

        @if(Session::has('Mensaje'))

        <div class="alert alert-primary" role="alert">
        {{Session::get('Mensaje') }}
        </div>
       
        @endif

        <a href="{{url('empleados/create')}}" class="btn btn-success">Agregar Empleado</a>
        <br>
        <table class="table table-light table-hover">
            <thead class="thead-ligth">
                <th>#</th>
                <th>Foto</th>
                <th>Nombre</th>
               <!-- <th>Apellido Paterno</th>
                <th>Apellido Materno</th> -->
                <th>Correo</th>
                <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            @foreach($empleados as $empleado)

                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>
                        <img src=" {{asset ('storage').'/'.$empleado->Foto}}" class="img-thumbnail img-fluid" alt="" width="75">
                    
                    
                    </td>
                    <td>{{$empleado->Nombre}}    {{$empleado->ApellidoPaterno}} {{$empleado->ApellidoMaterno}}   </td>
                   
                    <td>{{$empleado->Correo}}</td>
                    <td>  
                    
                    <a class="btn btn-warning" href="{{url('/empleados/'.$empleado->id.'/edit')}}">
                        Editar
                    </a>
                     

                    <form method="post"  action="{{url('/empleados/'.$empleado->id)}}" style="display:inline" >
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    <button class="btn btn-danger"  type="submit" onclick="return confirm('¿Borrar?');">Borrar</button>
                    </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
            <tr>
        </table>

        {{$empleados->links()}}

    </div>

@endsection
