@extends('layout.mainlayout')
@section('title', 'Gudang Apps')
@section('maincontent')
    @php($i = 0)
    @php($j = 0)
    <div class="p-5 bg-light rounded shadow">
        <a href="{{ route('gudang.index') }}" class="btn btn-danger btn-sm mb-4"> <i class="fal fa-arrow-left"></i> Kembali</a>
        <h3>Detail Gudang</h3>
        <hr class="my-2">
        <dl class="row">
            <dt class="col-sm-3">Nama Gudang :</dt>
            <dd class="col-sm-9">{{ $gudangs->nama }}</dd>

            <dt class="col-sm-3">Alamat :</dt>
            <dd class="col-sm-9">{{ $gudangs->alamat }}</dd>

            <dt class="col-sm-3">Kapasitas :</dt>
            <dd class="col-sm-9">{{ $gudangs->kapasitas }}&#179;</dd>

            <dt class="col-sm-3">Jenis Barang:</dt>
            <dd class="col-sm-9">
                @foreach ($gudangs->barang as $bar)
                    @php($i++)
                    @php($j += $bar->jumlah)
                @endforeach
                {{ $i }}
            </dd>

            <dt class="col-sm-3">Total Keseluruhan Barang:</dt>
            <dd class="col-sm-9">
                {{ $j }}
            </dd>
        </dl>
        <hr class="my-2">
        <div class="container-fluid table-responsive">
            <table class="table table-bordered">
                <thead class="thead-default">
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Jumlah</th>
                        <th>Tanggal Barang Masuk</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($barangs as $key => $barang)
                        <tr>
                            <td scope="row">{{ $barangs->firstItem() + $key }}</td>
                            <td>{{ $barang->nama }}</td>
                            <td>{{ $barang->jumlah }}</td>
                            <td>{{ $barang->added_time }}</td>
                            <td>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                                    <a class="btn btn-info btn-sm"
                                        href="{{ route('barang.show', $barang->id) }}">Show</a>
                                    <a class="btn btn-primary btn-sm"
                                        href="{{ route('barang.edit', $barang->id) }}">Edit</a>
                                    <a class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#BarangDelete{{ $barang->id }}" href="">Delete</a>
                                    @include('delete.deletebarang')
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="row">
                <div class="col">
                    Showing
                    {{ $barangs->firstItem() }}
                    to
                    {{ $barangs->lastItem() }}
                    of
                    {{ $barangs->total() }}
                    entries
                </div>
                <div class="col d-flex justify-content-end">
                    {{ $barangs->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
