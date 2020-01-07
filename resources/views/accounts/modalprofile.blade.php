<!-- Modal avatar -->
<div class="modal fade" id="modalAvatar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="" action="/accounts/edit/{{Auth::user()->id}}/saveProfilePicture" method="POST" enctype="multipart/form-data">
      <div class="modal-body">
          <input type="file" name="profile_picture" value="">
      </div>
      <div class="modal-footer">
        @csrf
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-success" value="Guardar cambios">
      </div>
    </form>
    </div>
  </div>
</div>
