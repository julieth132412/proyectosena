@extends('layouts.admin.app')

@section('content')

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 card card-body shadow p-3 mb-5 bg-white rounded mx-auto">
                <form action="{{ route('admin.update',$usuario->id_admin) }}" method="post">

                     @csrf
                    {{method_field('PATCH')}}

                    <h3 class="mb-5">Editar usuario</h3>

                    <div class="form-group">
                        <label for="name_user">Identificacion:</label>
                        <input name="id_admin" id="id_admin" type="text" class="form-control" value="{{$usuario->id_admin}}">
                    </div>

                    <div class="form-group">
                        <label for="name_user">nombres</label>
                        <input name="nom1" id="nom1" type="text" class="form-control" value="{{$usuario->nom1}}">
                    </div>

                    <div class="form-group">
                        <label for="name_user">apellidos:</label>
                        <input name="nom2" id="nom2" type="text" class="form-control" value="{{$usuario->nom2}}">
                    </div>

                    
                    
                    <div class="form-group">
                        <label for="password">Estado:</label>
                        <select name="Estado" id="Estado">
                            @foreach ($gen  as  $i => $d)
                                <option  {{ (( $i == $usuario->genero )? 'selected ': '') }}  value="{{ $i }}">{{ $d }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="name_user">Fecha de nacimiento:</label>
                        <input name="fechaNacimiento" id="fechaNacimiento" type="date" class="form-control" value="{{$usuario->fechaNacimiento}}">
                    </div>

                    <div class="form-group">
                        <label for="password">Genero:</label>
                        <select name="genero" id="genero">
                            @foreach ($gen  as  $i => $d)
                                <option  {{ (( $i == $usuario->genero )? 'selected ': '') }}  value="{{ $i }}">{{ $d }}</option>
                            @endforeach
                           
                        
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="password">Foto:</label>
                        <input name="foto" id="foto" type="file" class="form-control" value="{{$usuario->foto}}">
                    </div>

                    <div class="form-group">
                        <label for="password">Tipo de documento:</label>
                        <select name="tipoDoc" id="tipoDoc">
                            @foreach ($doc  as  $i => $d)
                                <option {{ (( $i == $usuario->tipoDoc)? 'selected ': '') }}  value="{{ $i }}">{{ $d }}</option>
                            @endforeach
                           
                        
                        </select>
                    </div>

                    <hr>
                    <button type="submit" class="btn btn-primary">Actualizar Usuario</button>
                </form>

            </div>
        </div>
    </div>

@endsection