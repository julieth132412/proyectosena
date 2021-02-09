@extends('layouts.admin.app')

@section('content')
    <div class="container mt-5">
        <div class="row mb-5 mx-auto">
            <div class="col-md-8 card card-body shadow p-3 mb-5 bg-white rounded mx-auto">
                <form action="{{ route('instructores.store') }}" 
                enctype = "multipart/form-data" 
                method="post">
                    @csrf

                    <div class="form-group">
                        <label for="id_instructores">Identificacion:</label>
                        <input name="id_instructores" id="id_instructores" type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="name_user">Nombres</label>
                        <input name="nom1" id="name_user" type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="name_user">Apellidos:</label>
                        <input name="nom2" id="name_user" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="correo">Correo:</label>
                        <input name="correo" id="correo" type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="name_user">Fecha de nacimiento:</label>
                        <input name="fechaNacimiento" id="name_user" type="date" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="genero">Genero:</label>
                        <select name="genero" id="">
                            @foreach ($gen  as  $i => $d)
                                <option  value="{{ $i }}">{{ $d }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="password">Estado:</label>
                        <select name="estado" id="">
                            @foreach ($est  as  $i => $d)
                                <option  value="{{ $i }}">{{ $d }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="foto">Foto:</label>
                        <input name="foto" id="foto" type="file" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="foto">Tipo de documento:</label>
                        <select name="tipoDoc" id="">
                            @foreach ($doc  as  $i => $d)
                                <option  value="{{ $i }}">{{ $d }}</option>
                            @endforeach
                           
                        
                        </select>
                    </div>

                    <hr>
                    <button type="submit" class="btn btn-primary">Guardar Instructor</button>
                </form>

            </div>
        </div>
    </div>


@endsection