<?php

namespace App\Http\Controllers;

use App\Models\stok;
use App\Http\Requests\StorestokRequest;
use App\Http\Requests\UpdatestokRequest;

class StokController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $stok = stok::all();
        return view('admin\stok\addstok', compact('stok'));
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
     * @param  \App\Http\Requests\StorestokRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $simpan = new Stoks;
        $simpan->jenis_transfusi = $request->jenis_transfusi;
        $simpan->golongan_darah = $request->golongan_darah;
        $simpan->jumlah_stok = $request->jumlah_stok;
        $simpan->save();

        return redirect('viewstok');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\stok  $stok
     * @return \Illuminate\Http\Response
     */
    public function show(stok $stok)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\stok  $stok
     * @return \Illuminate\Http\Response
     */
    public function edit(stok $stok)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatestokRequest  $request
     * @param  \App\Models\stok  $stok
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatestokRequest $request, stok $stok)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\stok  $stok
     * @return \Illuminate\Http\Response
     */
    public function destroy(stok $stok)
    {
        $hapus =stok::find($id);
        $hapus->delete();
        return redirect('addstok');
    }
}
