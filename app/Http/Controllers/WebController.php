<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pagina;

class WebController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $pagina= Pagina::All();

        
        // dd($pagina);

        return view('welcome')->with('pagina',$pagina);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
   
        $pagina= Pagina::find(1);
        $pagina->titulo1=$request->titulo1;
        $pagina->content1=$request->content1;
        $pagina->titulo2=$request->titulo2;
        $pagina->content2=$request->content2;
        $pagina->titulo3=$request->titulo3;
        $pagina->content3=$request->content3;
        $pagina->save();

        $pagina= Pagina::All();

        return view('home')->with('pagina',$pagina);

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
