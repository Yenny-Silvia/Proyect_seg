<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tramite;
use App\Models\Tipotramite;
use App\Models\Subtipotramite;
use App\Models\Seguimiento;

class BandejaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tramites = Tramite::all();
        return view('bandeja.index')->with('tramites',$tramites);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipotramites = Tipotramite::all();
        return view('tramite.create')->with('tipotramites',$tipotramites);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tramites = new Tramite();
        $tramites->Referencias=$request->get('referencias');
        $tramites->Hojas=$request->get('Hojas');
        $tramites->Remitente=$request->get('remitente');
        $tramites->Nro_concejo=$request->get('nro_concejo');
        $tramites->id_tipotramite=$request->get('id_tipotramite');
        $tramites->id_subtipotramite=$request->get('id_subtipotramite');
        $tramites->estado="C";
        
        $tramites->save();
        return redirect('/tramite');

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
        $tramite = Tramite::find($id);
        return view('tramite.edit')->with('tramite',$tramite);
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
        $tramite = Tramite::find($id);

        $tramite->Referencias=$request->get('referencias');
        $tramite->Hojas=$request->get('Hojas');
        $tramite->Remitente=$request->get('remitente');
        $tramite->Nro_concejo=$request->get('nro_concejo');
        $tramite->id_subtipotramite=$request->get('id_subtipotramite');
        $tramite->id_tipotramite=$request->get('id_tipotramite');

        $tramite->save();
        return redirect('/tramite');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tramite = Tramite::find($id);
        $tramite->delete();
        return redirect('/tramite');
    }
}
