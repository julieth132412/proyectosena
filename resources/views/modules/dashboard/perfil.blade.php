@extends('layouts.admin.app')
@section('content')

    <div class="container">
        <div class="row col-md-12">

            <div class="card-body ">

            </div>


            <div class="container" >
                <div class="row" >
                    <div class="col-lg-10 " >
                        <div class="card card-body " >


                            <form action="{{route('admin.update',$usuario->id_admin)}}" method="post">
                                @csrf
                                {{method_field('PATCH')}}
                                <h1 class="text-center" style="margin-bottom: 5%">Editar Perfil</h1>

                                <div class="row" >
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name_user">Identificacion:</label>
                                            <input name="id_admin" id="id_admin" type="text" class="form-control" value="{{$usuario->id_admin}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6" >
                                        <div class="form-group">
                                            <label for="name_user">nombres</label>
                                            <input name="nombres" id="nombres" type="text" class="form-control" value="{{$usuario->nombres}}">
                                        </div>
                                    </div>
                                </div>
                                
                              
            
                                   <div class="row" >
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name_user"> Apellidos:</label>
                                            <input name="apellidos" id="apellidos" type="text" class="form-control" value="{{$usuario->apellidos}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6" >
                                        <div class="form-group">
                                            <label for="name_user">Estados:</label>
                                            <input name="estado" id="estado" type="text" class="form-control" value="{{$usuario->estado}}">
                                        </div>
                                    </div>
                                </div>

                                
            
                                <div class="row" >
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name_user">Fecha de nacimiento:</label>
                                            <input name="fechaNacimiento" id="fechaNacimiento" type="date"    class="form-control" value="{{$usuario->fechaNacimiento}}" required>
                                        </div>
                                    </div>
                                    
                                </div>
            
                                <div class="row" >
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="password">Genero:</label>
                                            <select name="genero" id="genero">
                                                @foreach ($gen  as  $i => $d)
                                                    <option  {{ (( $i == $usuario->genero )? 'selected ': '') }}  value="{{ $i }}">{{ $d }}</option>
                                                @endforeach
                                               
                                            
                                            </select>
                                        </div>
                                    </div>
                                    
                                </div>

                                <div class="row" >
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="password">Foto:</label>
                                            <input name="foto" id="foto" type="text" class="form-control" value="{{$usuario->foto}}">
                                        </div>
                                    </div>
                                    
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
                            <br>
                            <a href="{{route('dashboard.index')}}" class="btn btn-primary">Volver al menu</a>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

@endsection


<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>



<script>
$(document).ready(function() {

$('#pass2').keyup(function() {

  var pass1 = $('#pass1').val();
  var pass2 = $('#pass2').val();

  if ( pass1 == pass2 ) {
     
      $('#check').removeClass('fas fa-exclamation').addClass('fas fa-check')
  } else {
      
      $('#check').removeClass('fas fa-check').addClass('fas fa-exclamation')
  }
  if( pass1 ==='' || pass2 === ''){
    $('#check').removeClass('fas fa-check').removeClass('fas fa-exclamation')
  }

});

});
</script>


