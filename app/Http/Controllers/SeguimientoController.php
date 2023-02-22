<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seguimiento;
use App\Models\Dependencia;
use App\Models\Tramite;

class SeguimientoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     

     public function seguimientoSave2(Request $request)
    {
        $seguimientos = new Seguimiento();
        $idtramite = $request->get('id_tramite');
        $tramite = Tramite::find($idtramite);
        $tramite->estado="D";
        $tramite->save();

        $seguimientos->Fecha=$request->get('fecha');
        $seguimientos->Recepcion=$request->get('recepcion');
        $seguimientos->id_dependenciaOrigen=$request->get('id_dependeciaOrigen');
        $seguimientos->id_dependenciaDestino=$request->get('id_dependeciaDestino');
        $seguimientos->id_tramite=$request->get('id_tramite');
        
        $seguimientos->save();



        return redirect('/seguimiento');

    }
     

     public function guardarSeguimientoRegistro (Request $request, $id)
     {
        

        $seguimiento = Seguimiento::find($id);
       
        
        $tramite = Tramite::find($seguimiento->id_tramite);
        $tramite->estado="R";
        $tramite->save();

        $seguimiento->recepcion=$request->get('recepcion');

        $seguimiento->save();

        return redirect('/seguimiento');

    }

    public function seguimientoRegistro ($id){
        return view('seguimiento.registro')->with('id',$id);
    }

    public function seguimientocreate2 ($id,$id2){
        
        $dependencias = Dependencia::all();
        $dependencia = Dependencia::find($id);
        $tramite = Tramite::find($id2);
        return view('seguimiento.create2')->with(['dependencia'=>$dependencia, 'tramite'=>$tramite, 'dependencias'=>$dependencias]);
    }


    public function index()
    {
        $seguimientos = Seguimiento::all();
        return view('seguimiento.index')->with('seguimientos',$seguimientos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dependencias = Dependencia::all();
        $tramites = Tramite::all();
        return view('seguimiento.create')->with(['dependencias'=>$dependencias, 'tramites'=>$tramites]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $seguimientos = new Seguimiento();

        $seguimientos->Fecha=$request->get('fecha');
        $seguimientos->Recepcion=$request->get('recepcion');
        $seguimientos->id_dependenciaOrigen=$request->get('id_dependeciaOrigen');
        $seguimientos->id_dependenciaDestino=$request->get('id_dependeciaDestino');
        $seguimientos->id_tramite=$request->get('id_tramite');
        
        $seguimientos->save();
        return redirect('/seguimiento');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $seguimiento = Seguimiento::find($id);
        return view('seguimiento.edit')->with('seguimiento',$seguimiento);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $seguimiento = Seguimiento::find($id);

        $seguimiento->Fecha=$request->get('fecha');
        $seguimiento->Recepcion=$request->get('recepcion');
        $seguimiento->id_dependenciaOrigen=$request->get('id_dependeciaOrigen');
        $seguimiento->id_dependenciaDestino=$request->get('id_dependeciaDestino');
        $seguimiento->id_tramite=$request->get('id_tramite');
        
        $seguimiento->save();

        return redirect('/seguimiento');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $seguimiento = Seguimiento::find($id);
        $seguimiento->delete();
        return redirect('/seguimiento');
    }
}
