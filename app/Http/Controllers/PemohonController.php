<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pemohon;

class PemohonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['pemohon'] = Pemohon::all();
        return view('pemohon.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $data['pemohon'] = Pemohon::all();
      return view('pemohon.add')->with($data);
  }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $add = new pemohon;
      $add->nama = $request->input('namas');
      $add->tinggi = $request->input('tinggi');
      $add->ttl = $request->input('ttl');
      $add->pekerjaan = $request->input('pekerjaan');
      $add->alamat = $request->input('alamat');
      $add->tertulis = "Berhasil";
      $add->praktek = "Belum";
      $add->save();
      return redirect('pemohon');

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
        $data['pemohon'] = Pemohon::find($id);
        return view('pemohon.edit')->with($data);
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
        $edit = Pemohon::find($id);
        $edit->nama = $request->input('namas');
        $edit->tinggi = $request->input('tinggi');
        $edit->ttl = $request->input('ttl');
        $edit->pekerjaan = $request->input('pekerjaan');
        $edit->alamat = $request->input('alamat');
        $edit->save();
        return redirect('pemohon');
    }

    public function verifikasi($id)
    {
        $data['pemohon'] = Pemohon::find($id);
        return view('pemohon.verifikasi')->with($data);
    }

    public function lanjut( Request $r, $id)
    {
        $edit = Pemohon::find($id);
        $edit->tertulis = $r->input('tertulis');
        $edit->praktek = $r->input('praktek');
        $edit->save();
        return redirect('pemohon');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $table = Pemohon::find($id);        
        $table->delete();//delete table
        return back();
    }
}
