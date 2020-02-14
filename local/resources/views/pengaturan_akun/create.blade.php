<div id="addModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">
                <form role="form">
                    <input type="hidden" class="form-control" id="id_edit" disabled>
                    <div class="form-group">
                        {!! Form::label("nama","Nama Pegawai",["class"=>"control-label"]) !!}
                        {!! Form::text("nama",null,['class'=>'form-control', 'placeholder'=>'Masukan data ..','id'=>'nama']) !!}
                        <p class="errorNama text-center alert alert-danger hidden"></p>
                    </div>
                    <div class="form-group">
                        {!! Form::label("email","Email",["class"=>"control-label"]) !!}
                        {!! Form::text("email",null,['class'=>'form-control', 'placeholder'=>'Masukan data ..','id'=>'email']) !!}
                        <p class="errorEmail text-center alert alert-danger hidden"></p>
                    </div>
                    <div class="form-group">
                        {!! Form::label("password","Password",["class"=>"control-label"]) !!}
                        <input id="password" type="password" class="form-control{{ $errors->has('password_baru') ? ' is-invalid' : '' }}" name="password" placeholder="Masukan data ..">
                        <p class="errorPassword text-center alert alert-danger hidden"></p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('level','Level Akses :', ['class'=>'control-label']) !!}
                        {!! Form::select('level', array('Superadmin' => 'Superadmin', 'User' => 'User'),null, ['class'=>'form-control','style'=>'width:100%','id'=>'level', 'placeholder'=>'-- Select data --']) !!}
                        <p class="errorLevel text-center alert alert-danger hidden"></p>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left btn-sm btn btn-social" data-dismiss="modal">
                    <span class='glyphicon glyphicon-remove'></span> CLOSE
                </button>
                <button type="button" class="btn btn-success add btn-sm btn btn-social" data-dismiss="modal">
                    <span id="" class='glyphicon glyphicon-check'></span> TAMBAH
                </button>
            </div>
        </div>
    </div>
</div>