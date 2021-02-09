@extends('layouts.admin.app')

@section('content')


    @if (Session::has('create'))
        <div style="padding: 20px; background-color: #00a65a; color: #ffffff;">
            {{ Session::get('create') }}
        </div>
    @endif



    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">





                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead class="table-dark">
                        <tr>
                            <th>No Documento</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>genero</th>
                            <th>Tipo de Doc</th>
                            <th>Foto</th>
                            <th>F. creacion</th>
                            <th>Opciones de edición</th>
                        </tr>
                        </thead>
                        <tbody class="table-light">
                        @foreach($instructores as $instructores)
<?php
 $foto = ($instructores->foto??'user.jpg');
?>

                            <tr>
                                <td>{{ $instructores->id_instructores }}</td>
                                <td>{{ $instructores->nom1.' '.$instructores->nom2 }}</td>
                                <td>{{ $instructores->ape1.' '.$instructores->ape2 }}</td>
                                <td>{{ $gen[ $instructores->genero ] }}</td>
                                <td>{{ $doc[ $instructores->tipoDoc ] }}</td>
                                <td>{{ $instructores->created_at }}</td>
                                <td>  <img width="80" height="100" class="img-profile ml-3 rounded-circle" src="img/user/{{   $foto }}" alt=""> </td>
                                <td>
                                    <form action="{{ route('instructores.destroy',$instructores->id_instructores) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('instructores.edit',$instructores->id_instructores) }}" class="btn btn-sm btn-warning" title="Editar"><i class="fas fa-eye-dropper"></i></a>
                                        <button type="submit" class="btn btn-sm btn-danger" title="Eliminar"><i class="fas fa-trash-alt"></i></button>
                                        <a href="{{ route('instructores.show',$instructores->id_instructores) }}" class="btn btn-sm btn-info" title="Detalle" ><i class="far fa-eye"></i></a>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection