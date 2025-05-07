<!-- Modal -->
<div class="modal fade" id="confirmationDelete-{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="confirmationDeleteTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <form action="/employee/{{ $item->id }}" method="post">
        @csrf
        @method('DELETE')
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Konfirmasi Hapus</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            Apakah ingin menghapus data Pegawai?
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-outline-danger">Ya, Hapus!</button>
        </div>
        </div>
    </form>
  </div>
</div>