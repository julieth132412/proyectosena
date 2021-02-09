@extends('layouts.admin.app')

@section('content')
    <div class="container mt-5">
        <div class="row mb-5 mx-auto">
            <div class="col-md-8 card card-body shadow p-3 mb-5 bg-white rounded mx-auto">
                <form action="{{ route('formacion.store') }}" enctype = "multipart/form-data" method="post">
                    @csrf

                    <div class="form-group">
                        <label for="name_user">Nombre del programa:</label>
                        <input name="nomProgama" id="name_user" type="text" class="form-control">
                    </div>
             
                    <div class="form-group">
                        <label for="name_user">Nombre del programa:</label>
                        <input name="nombrePrograma" id="name_user" type="text" class="form-control">
                    </div>
                   

                           
                        
                        </select>
                    </div>

                    <hr>
                    <button type="submit" class="btn btn-primary">Guardar Programa</button>
                </form>

            </div>
        </div>
    </div>


@endsection


<script>
    function mayus(e) {
    e.value = e.value.toUpperCase();
}
</script>
