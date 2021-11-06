@extends('layout.mainlayout')
@section('title', 'Gudang Apps')
@section('maincontent')
    <div class="p-5 bg-light rounded shadow">
        <h3>Daftar Barang</h3>
        <hr class="my-2">
        <div class="d-flex justify-content-end py-3">
            <a class="btn btn-success btn-sm right" href="{{ route('barang.create') }}" role="button">Tambah Barang</a>
        </div>
        <div class="container-fluid table-responsive">
            <table class="table table-bordered">
                <thead class="thead-default">
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Jumlah</th>
                        <th>Gudang</th>
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
                            <td>
                                <a href="{{ route('gudang.show', $barang->gudang->id) }}">
                                    {{ $barang->gudang->nama }}
                                </a>
                            </td>
                            <td>{{ $barang->added_time }}</td>
                            <td>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                                    <a class="btn btn-info btn-sm" href="{{ route('barang.show', $barang->id) }}">Show</a>
                                    <a class="btn btn-primary btn-sm"
                                        href="{{ route('barang.edit', $barang->id) }}">Edit</a>
                                    <form action="{{ route('barang.destroy', $barang->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
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
