<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\producto;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;


class ProductController extends Controller
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
        //
        $producto = new producto;
        $producto->Producto = $request->input('Producto');
        $producto->Precio = $request->input('Precio');
        $producto->Descripcion = $request->input('Descripcion');
        $producto->Status = 0;
        $producto->Puntuacion = 0;
        $producto->save();

        return $producto;

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

    public function saveimage(Request $request){
/*
            $file = $request->file('file')->getClientOriginalName(); //Get Image Name

            $fileName = $file;  //Concatenate both to get FileName (eg: file.jpg)

            Storage::disk('public')->put($fileName, File::get($request->file('file')));*/


                        $path = public_path().'/uploads/';
            $files = $request->file('file');
            foreach($files as $file){
                $fileName = $file->getClientOriginalName();
                $file->move($path, $fileName);
            }

    }
}
