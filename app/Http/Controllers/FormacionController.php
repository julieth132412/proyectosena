<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formacion;
class FormacionController extends Controller


{

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $formacion=Formacion::all();
        $doc = $this->doc;
        $gen = $this->gen;
        $est =  $this->est;
        return view('formacion.index',compact('formacion', 'doc', 'gen', 'est'));
    }

    //GET
    public function create(Request $request )
    {
        $est = $this->est;
        // Controller::ver($doc,0,1);
        return view('formacion.create',compact('est'));
    }
    public function store(Request $request){
        Formacion::create($request->all());

        return redirect('formacion')->with([
            'message'=>'se a creado un nuevo registro',
            'type'=>'success'
        ]);;
    }

/*
    public function confirm($id_prog){
        $formacion = formacion::findOrFail($id_prog);
        return view('formacion.confirm', compact('formacion'));
    }


    public function destroy($id_prog)
    {
        Formacion::find($id_prog)->delete();
        return redirect()->route('formacion.index')->with([
            'message'=>'se ha eliminado correctamente',
            'type'=>'warning'
        ]);
    }
    */



    public function edit($id_prog){
        $est =  $this->est;
        $formacion = Formacion::findOrFail($id_prog);
        return view('formacion.edit', compact('formacion', 'est'));
    }

    public function update(Request $request, $id_prog){
        $datosexception = request()->except(['_token', '_method']);
        Formacion::where('id_prog', '=', $id_prog)->update($datosexception);
        return redirect()->route('formacion.show',$id_prog)->with([
            'message'=>'Se a actualizado correctmente el usuario',
            'type'=>'info'
        ]);
    }




    public function show($id_prog){
        $est =  $this->est;
        $formacion = Formacion::find($id_prog);
        return view('formacion.show', compact('formacion', 'est'));
    }


}
