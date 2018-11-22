<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Pengguna;
use Validator;


class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengguna = Pengguna::latest()->paginate(10);
        return view('pengguna.index',compact('pengguna'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengguna.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          request()->validate([
          'nik' => 'required',
          'nama' => 'required',
          'alamat'=> 'required',
          'nohp'=> 'required',
          'email'=> 'required',
          'foto' => 'required',
          ]);
          Pengguna::create($request->all());

          $request->session()->flash('pesan','berhasil disimpan.');

           return redirect()->route('pengguna.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Pengguna $pengguna)
    {
        
        return view('pengguna.show',compact('pengguna'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengguna $pengguna)
    {
        return view('pengguna.edit',compact('pengguna'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengguna $pengguna)
    {
          request()->validate([
          'nik'=>'required',
          'nama' => 'required',
          'alamat'=> 'required',
          'nohp'=> 'required|max:5',
          'email'=> 'required',
          'foto' => 'required',
          ]);
    

          $pengguna->update($request->all());

          $request->session()->flash('pesan','berhasil diperbaharui.');

          return redirect()->route('pengguna.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengguna $pengguna)
    {
         $pengguna->delete();

          return redirect()->route('pengguna.index');
    }
}
