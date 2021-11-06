<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Gudang;
use Illuminate\Http\Request;

class GudangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gudangs = Gudang::paginate(7);
        $baritemcount = Gudang::all();
        $title = 'Gudang';
        return view('gudang', compact('gudangs', 'baritemcount', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Gudang';
        return view('create.creategudang',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Gudang::create([
            'nama' => $request->inputNama,
            'alamat' => $request->inputAlamat,
            'kapasitas' => $request->inputKapasitas
        ]);
        return redirect(route('gudang.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gudang  $gudang
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gudangs = Gudang::where('id', $id)
            ->orderBy('nama')
            ->first();
        $barangs = Barang::where('gudang_id', $id)->paginate(7);
        $title = 'Gudang';
        return view('show.detailgudang', compact('gudangs', 'barangs', 'title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gudang  $gudang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gudang = Gudang::where('id', $id)->first();
        $title = 'Barang';
        return view('edit.editgudang', compact('gudang', 'title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gudang  $gudang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $gudang = Gudang::findOrFail($id);
        $gudang->update([
            'nama' => $request->inputNama,
            'alamat' => $request->inputAlamat,
            'kapasitas' => $request->inputKapasitas
        ]);
        return redirect(route('gudang.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gudang  $gudang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gudang = Gudang::where('id', $id)->first();;
        $gudang->delete();
        return redirect(route('gudang.index'));
    }
}
