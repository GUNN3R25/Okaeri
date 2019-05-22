<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\multimedia;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class MultimediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            $date =  round(microtime(true) * 1000);

    $path = public_path().'/uploads/';
    $files = $request->file('file');
    $rand = mt_rand(1, 999);
    foreach($files as $file){
                $fileName = $file->getClientOriginalExtension();
                $filenamefinal = $date . $rand . '.' . $fileName;
                $file->move($path, $filenamefinal);
                $multimedia = new multimedia;
                $multimedia->idProducto = $request['idUsuario'];
                $multimedia->Type = $request['type'];
                $multimedia->URL = $filenamefinal;
                $multimedia->Status = 1;
                $multimedia->save();

   }    


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
    public function update(Request $request, $id)
    {
        //
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
