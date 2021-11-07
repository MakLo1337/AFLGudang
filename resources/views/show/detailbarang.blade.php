@extends('layout.mainlayout')
@section('title', 'Gudang Apps')
@section('maincontent')
    <div class="p-5 bg-light rounded shadow">
        <a href="{{ route('barang.index') }}" class="btn btn-danger btn-sm mb-4"> <i class="fal fa-arrow-left"></i> Kembali</a>
        <h3>Detail Barang</h3>
        <hr class="my-2">
        <dl class="row">
            <dt class="col-sm-3">Nama Barang :</dt>
            <dd class="col-sm-9">{{ $barangs->nama }}</dd>

            <dt class="col-sm-3">Jumlah :</dt>
            <dd class="col-sm-9">{{ $barangs->jumlah }}</dd>

            <dt class="col-sm-3">Tanggal Barang Masuk :</dt>
            <dd class="col-sm-9">{{ $barangs->added_time }}</dd>

            <dt class="col-sm-3">Berada Di Gudang:</dt>
            <dd class="col-sm-9">
                <a href="{{ route('gudang.show', $barangs->gudang->id) }}">
                    {{ $barangs->gudang->nama }}
                </a>
            </dd>
        </dl>
        <hr class="my-2">
    </div>
@endsection
