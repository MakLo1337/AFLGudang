<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Gudang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barangs = Barang::paginate(7);
        $title = 'Barang';
        return view('barang',compact('barangs', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gudangs = Gudang::all();
        $title = 'Barang';
        return view('create.createbarang',compact('gudangs', 'title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Barang::create([
            'nama' => $request->inputNama,
            'jumlah' => $request->inputJumlah,
            'gudang_id' => $request->inputGudang,
            'added_time' => date('Y-m-d')
        ]);
        return redirect(route('barang.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $barangs = Barang::where('id', $id)->first();
        $title = 'Barang';
        return view('show.detailbarang', compact('barangs', 'title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barang = Barang::where('id', $id)->first();
        $gudangs = Gudang::all();
        $title = 'Barang';
        return view('edit.editbarang', compact('barang', 'title', 'gudangs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $barang = Barang::findOrFail($id);
        $title = 'Barang';
        $barang->update([
            'nama' => $request->inputNama,
            'jumlah' => $request->inputJumlah,
            'gudang_id' => $request->inputGudang,
            'added_time' => date('Y-m-d')
        ]);
        return redirect(route('barang.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barang = Barang::where('id', $id)->first();
        $barang->delete();
        return redirect(route('barang.index'));
    }
}
