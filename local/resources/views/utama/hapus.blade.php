<div id="deleteModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-3" align="center">
                        <img src="{{ asset('/assets/dist/img/delete.png') }}" class="img-responsive" alt="Hapus"
                            style="width: 60px; height: 50px;">
                    </div>
                    <div class="col-md-9">
                        <h4>Apakah Anda yakin ingin menghapus data ini ?</h4>
                    </div>
                </div>
                <form class="form-horizontal" role="form">
                    <input type="hidden" class="form-control" id="id_delete">  
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left btn btn-social btn-sm" data-dismiss="modal">
                    <span class='glyphicon glyphicon-remove'></span> CLOSE
                </button>
                <button type="button" class="btn btn-danger btn btn-social delete btn-sm" data-dismiss="modal">
                    <span id="" class='glyphicon glyphicon-trash'></span> DELETE
                </button>
            </div>
        </div>
    </div>
</div>