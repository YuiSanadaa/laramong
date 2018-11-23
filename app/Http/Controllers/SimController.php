<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sim;
use App\Pemohon;
use PDF;

class SimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['semuasim'] = Sim::all();
        return view('sim.index')->with($data);

    }

    public function signature($id){
        $data['id'] = $id;
        return view('sim.signatures')->with($data);
    }

    public function ttd(Request $request, $id)
    {
        $table = Sim::find($id);
        $table->ttd = $request->ttd;
        $table->save();
        return redirect('sim');
    }

    public function kartu(Request $r){        
        return redirect('sim/pdf/'.$r->id);
    }

    

   public function pdf($id) {
    $data['sim'] = \App\Sim::find($id);
    if (isset($data['sim'])) {
        $nama = \App\Sim::where('id', $id)->value('nama');
        $pdf = PDF::loadView('sim.document', $data)->setPaper(array(0, 0, 630,369));
        return $pdf->stream($nama.'.pdf');
    }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['sim'] = Sim::all();
        $data['semuapemohon'] = Pemohon::all();
        return view('sim.add')->with($data);    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $table = new Sim;//daftarin table desa dengan variable modle
        $table->berlaku = $request->input('ttl');//inputan table
        $table->no_sim = random_int(50000, 100000 );//inputan table
        $table->pemohon_id = $request->input('pemohon_id');//inputan table
        $table->foto = $request->foto;
        $table->save();//eksekusi data
        
        return redirect('sim/signatures/'.$table->id);
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
        $table = Sim::find($id);        
        $table->delete();//delete table
        return back();
    }
}
