@extends('layout.mainlayout')
@section('title', 'Gudang Apps')
@section('maincontent')
    <div class="p-5 bg-light rounded shadow">
        <h3>Tambah Gudang</h3>
        <hr class="my-2">
        <form action="{{ route('gudang.store') }}" method="post">
            {{ csrf_field() }}
            <div class="mb-3">
                <label for="inputNama" class="form-label">Nama</label>
                <input type="text" class="form-control" name="inputNama" id="inputName" placeholder="Nama Gudang">
            </div>
            <div class="mb-3">
                <label for="inputAlamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" name="inputAlamat" id="inputAlamat" placeholder="Jl.Soekarno Hatta No.5">
            </div>
            <div class="mb-3">
                <label for="inputKapasitas" class="form-label">Kapasitas</label>
                <input type="text" class="form-control" name="inputKapasitas" id="inputKapasitas" aria-describedby="helpId" placeholder="20000">
                <small id="helpId" class="form-text text-muted">
                    Input kapasitas berdasarkan volume gudang tanpa menggunakantitik (.)
                </small>
            </div>
            <div class="d-flex justify-content-end">
                <a href="{{ URL::previous() }}" class="btn btn-danger mx-2">
                    <i class="fal fa-arrow-left"></i>
                    Kembali
                </a>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
        </form>
        <hr class="my-2">
    </div>
@endsection
