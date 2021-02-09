<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Instructor;
class InstructoresController extends Controller


{

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $instructores=Instructores::all();
        $doc = $this->doc;
        $gen = $this->gen;
        return view('instructores.index',compact('instructores', 'doc', 'gen'));
    }

    //GET
    public function create(){
        $est = $this->est;
        $doc =  $this->doc;
        $gen =  $this->gen;
       // Controller::ver($doc,0,1);
        return view('instructores.create' ,compact('doc','gen','est')  );
    }

    public function store(Request $request){
        $user =new  Instructores($request->all());
        if($request->hasFile('foto')  ){
            $file = $request->file('foto');
            $nombreArchivo = $_FILES['foto']['name'];
            // D:\Laravel\sena\public
            $file->move(public_path("img/user"),$nombreArchivo);
            $user->foto  = $nombreArchivo;
        } 
            $user->save();
        Instructores::create($request->all());
        return redirect()->route('instructores.index')->with([
            'message'=>'se a creado un nuevo registro',
            'type'=>'success'
        ]);
    }

   
    public function destroy($id_admin){
        // SELECT * FROM entidad WHERE ID = ?
        // TRUE = DELETE FROM ENTIDAD WHERE ID = ?
        Instructores::find($id_admin)->delete();
        return redirect()->route('instructores.index')->with([
            'message'=>'se ha eliminado correctamente',
            'type'=>'warning'
        ]);
    } 

    public function edit($id_admin){
        $est =  $this->est;
        $doc =  $this->doc;
        $gen =  $this->gen;
        $instructores = Instructores::findOrFail($id_admin);
        return view('instructores.edit', compact('instructores', 'doc', 'gen','est'));
    }

    public function update(Request $request, $id_instructores){
        $datosexception = request()->except(['_token', '_method']);
        Instructores::where('id_instructores', '=', $id_instructores)->update($datosexception);
        return redirect()->route('instructores.show', $id_instructores)->with([
            'message'=>'Se a actualizado correctmente el usuario',
            'type'=>'info'
        ]);
    } 

    public function show($id_instructores){
        $doc =  $this->doc;
        $gen =  $this->gen;
        $instructores = Instructores::find($id_instructores);
        return view('instructores.show', compact('instructores', 'doc', 'gen'));
    } 

   
}