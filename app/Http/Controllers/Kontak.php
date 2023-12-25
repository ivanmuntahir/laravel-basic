<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelKontak;

class Kontak extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = ModelKontak::all();
        return view('kontak',compact('data'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
   {
       return view('kontak_create');
   }

   
    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
       $data = new ModelKontak();
       $data->nama = $request->nama;
       $data->email = $request->email;
       $data->nohp = $request->nohp;
       $data->alamat = $request->alamat;
       $data->save();
       return redirect()->route('kontak.index')->with('alert-success','Berhasil Menambahkan Data!');
   }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

   public function edit($id)
    {
        $data = ModelKontak::where('id',$id)->get();

        return view('kontak_edit',compact('data'));
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
        $data = ModelKontak::where('id',$id)->first();
        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->nohp = $request->nohp;
        $data->alamat = $request->alamat;
        $data->save();
        return redirect()->route('kontak.index')->with('alert-success','Data berhasil diubah!');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = ModelKontak::where('id',$id)->first();
        $data->delete();
        return redirect()->route('kontak.index')->with('alert-success','Data berhasi dihapus!');
    }
}
