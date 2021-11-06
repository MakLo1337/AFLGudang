<form action="{{ route('gudang.destroy', $gudang->id) }}" method="post" enctype="multipart/form-data">
    {{method_field('delete')}}
    {{csrf_field()}}
    <div class="modal fade" id="BarangDelete{{ $gudang->id }}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Konfirmasi Penghapusan</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Apakah anda yakin untuk menghapus <b>{{$gudang->nama}}</b> ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </div>
        </div>
    </div>
</form>
