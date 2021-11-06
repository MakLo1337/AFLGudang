@extends('layout.mainlayout')
@section('title', 'Gudang Apps')
@section('maincontent')
    <div class="p-5 bg-light rounded shadow">
        <h3>Daftar Gudang</h3>
        <hr class="my-2">
        <div class="d-flex justify-content-end py-3">
            <a class="btn btn-success btn-sm right" href="{{ route('gudang.create')}}" role="button">Tambah Gudang</a>
        </div>
        <div class="container-fluid table-responsive">
            <table class="table table-bordered">
                <thead class="thead-default">
                    <tr>
                        <th>No</th>
                        <th>Nama Gudang</th>
                        <th>Alamat</th>
                        <th>Kapasitas</th>
                        <th>Total Jenis Barang</th>
                        <th>Total Keseluruhan Barang</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($gudangs as $key => $gudang)
                        <tr>
                            <td scope="row">{{ $gudangs->firstItem() + $key }}</td>
                            <td>{{ $gudang->nama }}</td>
                            <td>{{ $gudang->alamat }}</td>
                            <td>{{ $gudang->kapasitas }}&#179;</td>
                            <td>
                                @php($i = 0)
                                @foreach ($gudang->barang as $bar)
                                    @php($i++)
                                @endforeach
                                {{ $i }}
                            </td>
                            <td>
                                @php($j = 0)
                                @foreach ($gudang->barang as $bar)
                                    @php($j += $bar->jumlah)
                                @endforeach
                                {{ $j }}
                            </td>
                            <td>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                                    <a class="btn btn-info btn-sm" href="{{ route('gudang.show', $gudang->id) }}">Show</a>
                                    <a class="btn btn-primary btn-sm"
                                        href="{{ route('gudang.edit', $gudang->id) }}">Edit</a>
                                        <a class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#BarangDelete{{ $gudang->id }}" href="">Delete</a>
                                    @include('delete.deletegudang')
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="row">
                <div class="col">
                    Showing
                    {{ $gudangs->firstItem() }}
                    to
                    {{ $gudangs->lastItem() }}
                    of
                    {{ $gudangs->total() }}
                    entries
                </div>
                <div class="col d-flex justify-content-end">
                    {{ $gudangs->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
