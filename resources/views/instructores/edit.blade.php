@extends('layouts.admin.app')

@section('content')

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 card card-body shadow p-3 mb-5 bg-white rounded mx-auto">
                <form action="{{ route('instructor.update',$instructores->id_instructores) }}" method="post">

                     @csrf
                    {{method_field('PATCH')}}

                    <h3 class="mb-5">Editar usuario</h3>

                    <div class="form-group">
                        <label for="name_user">Identificacion:</label>
                        <input name="id_instructores" id="id_instructores" type="text" class="form-control" value="{{$instructores->id_instructores}}">
                    </div>

                    <div class="form-group">
                        <label for="name_user">Nombres:</label>
                        <input name="nom1" id="nom1" type="text" class="form-control" value="{{$instructores->nom1}}">
                    </div>

                    <div class="form-group">
                        <label for="name_user"> Apellidos:</label>
                        <input name="nom2" id="nom2" type="text" class="form-control" value="{{$instructores->nom2}}">
                    </div>

                    <div class="form-group">
                        <label for="name_user">Segundo Apellido:</label>
                        <input name="ape2" id="ape2" type="text" class="form-control" value="{{$instructores->ape2}}">
                    </div>
                    
                    <div class="form-group">
                        <label for="password">Estado:</label>
                        <select name="Estado" id="Estado">
                            @foreach ($est  as  $i => $d)
                                <option  {{ (( $i == $instructores->estado )? 'selected ': '') }}  value="{{ $i }}">{{ $d }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="name_user">Fecha de nacimiento:</label>
                        <input name="fechaNacimiento" id="fechaNacimiento" type="date" class="form-control" value="{{$instructores->fechaNacimiento}}">
                    </div>

                    <div class="form-group">
                        <label for="password">Genero:</label>
                        <select name="genero" id="genero">
                            @foreach ($gen  as  $i => $d)
                                <option  {{ (( $i == $instructores->genero )? 'selected ': '') }}  value="{{ $i }}">{{ $d }}</option>
                            @endforeach
                           
                        
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="password">Foto:</label>
                        <input name="foto" id="foto" type="text" class="form-control" value="{{$instructores->foto}}">
                    </div>


                    <div class="form-group">
                        <label for="password">Tipo de documento:</label>
                        <select name="tipoDoc" id="tipoDoc">
                            @foreach ($doc  as  $i => $d)
                                <option {{ (( $i == $instructores->tipoDoc)? 'selected ': '') }}  value="{{ $i }}">{{ $d }}</option>
                            @endforeach
                           
                        
                        </select>
                    </div>

                    <hr>
                    <button type="submit" class="btn btn-primary">Actualizar Instructor</button>
                </form>

            </div>
        </div>
    </div>
    <script>
            $("select").addClass("form-control");
           $("input").addClass("form-control");
    </script>

@endsection