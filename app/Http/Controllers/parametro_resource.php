<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class parametro_resource extends Controller
{
    
    public function __construct() {
        $this->middleware('auth');
    }

        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('parametros.index', [
            'parametro' => \App\parametro::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('parametros.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $parametro = new \App\parametro();
        $parametro->pais = $request->post('pais');
        $parametro->precio_envio = $request->post('precio_envio');
        $parametro->precio_carga = $request->post('precio_carga');
        $parametro->save();
        
        return redirect('/parametro');
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home_price()
    {
        //
        return view('parametros.index', [
            'parametro' => \App\parametro::all()
        ]);
        
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $parametro = \App\parametro::find($id);
        return view('parametros.edit', [
           'parametro_edit' => $parametro
        ]);
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
        //
        $parametro = \App\parametro::find($id);
        $parametro->id = $id;
        $parametro->precio_envio = $request->post('precio_envio');
        $parametro->precio_carga = $request->post('precio_carga');
        $parametro->save();
        
        return redirect('/parametro');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        
    }
    
    
}
