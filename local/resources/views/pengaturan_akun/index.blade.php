@extends('utama.template')
@section('main')
 <section class="content-header">
        <h1>
            <i class="fa fa-gears"></i> Pangaturan
            <small>Akun</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-gears"></i>Pengaturan</a></li>
            <li class="active">Akun</li>
        </ol>
    </section>
<section class="content">
<div class="box box-danger">
  <div class="box-header">
    <h3 class="box-title"><i class="fa fa-user-circle-o text-purple"></i> Akun || </h3>
      <div class="btn-group" data-toggle="tooltip" title="Tambah Data">
        <button class="add-modal btn btn-social btn-primary btn-sm">
          <span class="glyphicon glyphicon-plus-sign"></span> <?php echo "TAMBAH DATA" ?>
        </button>
      </div>
      <div class="btn-group" data-toggle="tooltip" title="Refresh Data">
        <a href="{{ url('pengaturan-akun') }}"> 
          <button class="btn bg-olive btn btn-social btn-lrg ajax btn-sm">
            <i class="fa fa-spin fa-refresh"></i>&nbsp; <?php echo "REFRESH DATA" ?>
          </button>
        </a>
      </div>
  </div>
  {{-- @if($jumlah_tingkat!=0) --}}
  <div class="box-body animated bounceInUp">
    <table id="example1" class="table table-bordered table-striped" >
      <thead>
        <tr>
          <th style="width: 5%">No</th>
          <th style="width: 30%">Nama Akun</th>
          <th style="width: 35%">Email</th>
          <th style="width: 15%">Level</th>
          <th style="width: 15%">Actions</th>
        </tr>
        {{ csrf_field() }}
      </thead>
      <tbody>
      <?php $i=0; ?>
      @foreach($data_list as $indexKey => $data)
        <tr class="item{{$data->id}}">
          <td class="col1" align="center">{{ $indexKey+1 }}</td>
          <td>{{ $data->nama }} </td>
          <td><i>{{ $data->email  }}</i></td>
          @if($data->level == "Superadmin")
            <td align="center"><span class="label label-danger">{{ $data->level }}</span></td>
          @elseif($data->level == "User")
            <td align="center"><span class="label label-success">{{ $data->level }}</span></td>
          @endif
          <td align="center">
            <button class="delete-modal btn btn-danger btn-sm" data-id="{{$data->id}}" data-nama="{{$data->nama}}" data-password="{{$data->password}}" data-email="{{$data->email}}" data-level="{{$data->level}}" data-toggle="tooltip" title="Hapus Data">
              <span class="glyphicon glyphicon-trash"></span>
            </button>
          </td>
        </tr>
      @endforeach
      </tbody>
      <tfoot>
        <tr>
          <th style="width: 5%">No</th>
          <th style="width: 30%">Nama Akun</th>
          <th style="width: 35%">Email</th>
          <th style="width: 15%">Level</th>
          <th style="width: 15%">Actions</th>
        </tr>
      </tfoot>
    </table>
  </div>
</div>
@include('pengaturan_akun.create')
@include('utama.hapus')
</section>
@endsection

@section('js')
<script>
  $(window).load(function(){
    $('#example1').removeAttr('style');
  })
</script>
<script type="text/javascript">
  // Add a post
  $(document).on('click', '.add-modal', function() {       
    $('#nama').val('');
    $('#password').val('');
    $('#email').val('');
    $('#level').val('');
    $('.modal-title').text('Tambah Data');
    $('#addModal').modal('show');
  });

  $('.modal-footer').on('click', '.add', function() {
    $.ajax({
      type: 'POST',
      url: 'pengaturan-akun',
      data: {
        '_token': $('input[name=_token]').val(),
        'nama': $('#nama').val(),
        'password': $('#password').val(),
        'email': $('#email').val(),
        'level': $('#level').val(),
      },
      success: function(data) {
        $('.errorTitle').addClass('hidden');
        if ((data.errors)) {
          setTimeout(function () {
          $('#addModal').modal('show');
          toastr.error('Validation error!', 'Error Alert', {timeOut: 5000});
          }, 500);

          if (data.errors.nama) {
            $('.errorNama').removeClass('hidden');
            $('.errorNama').text(data.errors.nama);
          }
          if (data.errors.password) {
            $('.errorPassword').removeClass('hidden');
            $('.errorPassword').text(data.errors.password);
          }
          if (data.errors.email) {
            $('.errorEmail').removeClass('hidden');
            $('.errorEmail').text(data.errors.email);
          }
          if (data.errors.level) {
            $('.errorLevel').removeClass('hidden');
            $('.errorLevel').text(data.errors.level);
          }
        } else {
          location.reload();
          toastr.success('Successfully added Data!', 'Success Alert', {timeOut: 5000});
        }
      },
    });
  });

  // Delete a post
  $(document).on('click', '.delete-modal', function() {
    $('.modal-title').text('Hapus Data');
    $('#id_delete').val($(this).data('id'));
    $('#deleteModal').modal('show');
    id = $('#id_delete').val();
  });
  $('.modal-footer').on('click', '.delete', function() {
    $.ajax({
      type: 'DELETE',
      url: 'pengaturan-akun/' + id,
      data: {
        '_token': $('input[name=_token]').val(),
      },

      success: function(data) {
        toastr.success('Successfully deleted Post!', 'Success Alert', {timeOut: 5000});
        location.reload();
      }
    });
  });
</script>

@endsection
@section('footer')
    @include('utama.footer')
@endsection
