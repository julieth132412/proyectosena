@extends('layouts.admin.app')
@section('content')
    <div class="container ">
        <div class="row ">
            <div class="col col-md-12  " >
    <h1>Hola, Bienvenido {{ session('USER')->nombres.' '.session('USER')->apellidos}}</h1>
            </div>
        </div>
    </div>
    @endsection