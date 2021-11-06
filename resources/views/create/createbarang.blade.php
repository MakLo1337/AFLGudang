@extends('layout.mainlayout')
@section('title', 'Gudang Apps')
@section('maincontent')
    <div class="p-5 bg-light rounded shadow">
        <h3>Tambah Barang</h3>
        <hr class="my-2">
        <form action="{{ route('barang.store') }}" method="post">
            {{ csrf_field() }}
            <div class="mb-3">
                <label for="inputNama" class="form-label">Nama</label>
                <input type="text" class="form-control" name="inputNama" id="inputName" placeholder="Permen">
            </div>
            <div class="mb-3">
                <label for="inputJumlah" class="form-label">Jumlah</label>
                <input type="text" class="form-control" name="inputJumlah" id="inputAlamat" placeholder="300">
            </div>
            <div class="mb-3">
                <label for="inputGudang" class="form-label">Gudang</label>
                <br>
                <select name="inputGudang" id="inputGudang" class="form-select">
                    <option selected disabled>Pilih Gudang: </option>
                    @foreach ($gudangs as $gudang)
                        <option value="{{$gudang->id}}">{{$gudang->nama}}</option>
                    @endforeach
                </select>
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
