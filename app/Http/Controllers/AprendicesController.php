<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aprendices;
use App\Models\Ficha;
use Illuminate\Http\UploadedFile;
class AprendicesController extends Controller


{

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $aprendices=Aprendices::all();
        $doc = $this->doc;
        $gen = $this->gen;
        $est =  $this->est;
        return view('aprendices.index',compact('aprendices', 'doc', 'gen', 'est'));
    }

    //GET
    public function create(){
        $doc =  $this->doc;
        $gen =  $this->gen;
        $est =  $this->est;
        $fichas = Ficha::all();
       // Controller::ver($doc,0,1);
        return view('aprendices.create' ,compact('doc','gen', 'est', 'fichas')  );
    }

    public function store(Request $request){
        $user =new  Aprendices($request->all());
        if($request->hasFile('foto')  ){
            $file = $request->file('foto');
            $nombreArchivo = $_FILES['foto']['name'];
            // D:\Laravel\sena\public
            $file->move(public_path("img/user"),$nombreArchivo);
            $user->foto  = $nombreArchivo;
        } 
            $user->save();
        Aprendices::create($request->all());
        return redirect()->route('aprendices.index')->with([
            'message'=>'se a creado un nuevo registro',
            'type'=>'success'
        ]);
    }

    public function confirm($id_aprendices){
        $aprendices = Aprendices::findOrFail($id_aprendices);
        return view('aprendices.confirm', compact('aprendices'));
    }

    
    public function destroy($id_aprendices)
    {
        Aprendices::find($id_aprendices)->delete();
        return redirect()->route('aprendices.index')->with([
            'message'=>'se ha eliminado correctamente',
            'type'=>'warning'
        ]);
    }

    public function edit($id_aprendices){
        $doc =  $this->doc;
        $gen =  $this->gen;
        $est = $this->est;
        $fichas = Ficha::all();
        $aprendices = Aprendices::findOrFail($id_aprendices);
        return view('aprendices.edit', compact('aprendices', 'doc', 'gen', 'fichas','est'));
    }

    public function update(Request $request, $id_aprendices){
        $datosexception = request()->except(['_token', '_method']);
        Aprendices::where('id_aprendices', '=', $id_aprendices)->update($datosexception);
        return redirect()->route('aprendices.show',$id_aprendiz)->with([
            'message'=>'Se a actualizado correctmente el usuario',
            'type'=>'info'
        ]);
    } 
    


    public function show($id_aprendices){
        $doc =  $this->doc;
        $gen =  $this->gen;
        $aprendices = Aprendices::find($id_aprendices);
        return view('aprendices.show', compact('aprendices', 'doc', 'gen'));
    } 

   
}