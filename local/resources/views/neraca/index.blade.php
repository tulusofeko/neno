@extends('utama.template')
@section('main')
<section class="content-header">
<h1>
  <i class="fa fa-balance-scale"></i> Neraca
  <small>Perhitungan</small>
</h1>
<ol class="breadcrumb">
  <li><a href="#"><i class="fa fa-balance-scale"></i> Neraca</a></li>
  <li class="active">Perhitungan</li>
</ol>
</section>
<section class="content">
<div class="btn-group animated bounce delay-1s" data-toggle="tooltip" title="Tambah Data">
  <a href="{{ url('neraca/create') }}">
    <button class="add-modal btn btn-social btn-primary btn-sm">
      <span class="glyphicon glyphicon-plus-sign"></span> <?php echo "TAMBAH DATA" ?>
    </button>
  </a>
</div>
<div class="btn-group animated bounce delay-1s" data-toggle="tooltip" title="Refresh Data">
  <a href="{{ url('neraca') }}"> 
    <button class="btn bg-olive btn btn-social btn-lrg ajax btn-sm">
      <i class="fa fa-spin fa-refresh"></i> REFRESH
    </button>
  </a>
</div> 
<div class="box box-default animated bounceInRight">
  {{ csrf_field() }}
  <div class="box-body">
    @if($jumlah_data!=NULL)
    <table id="example1" class="table table-bordered table-striped" >
      <thead>
        <tr>
          <th style="width: 5%">No</th>
          <th>Nama Instansi</th>
          <th style="width: 15%">Tanggal</th>
          <th style="width: 25%">Riwayat Modifikasi</th>
          <th style="width: 15%">Actions</th>
      </thead>
      <tbody>
        @foreach($neraca_list as $indexKey => $neraca)
        <tr>
          <td>{{ $indexKey+1 }}</td>
          <td>
            {{ $neraca->nama_bank }}
          </td>
          <td align="center">{{ date("d-m-Y", strtotime($neraca->tanggal)) }}</td>
          <td><i>{{ $pembuat[$indexKey] }}</i></td>
          <td align="center">
            <a href="{{ url('neraca/'.$neraca->referensi) }}"> 
                <button class="btn bg-purple btn-sm" data-toggle="tooltip" title="Hasil Perhitungan">
                  <i class="fa fa-calculator" aria-hidden="true"></i>
                </button>
              </a>
            <a href="{{ url('neraca/'.$neraca->referensi.'/edit') }}">         
              <button class="edit-modal btn btn-warning btn-sm" data-toggle="tooltip" title="Perbarui Data">
                <span class="glyphicon glyphicon-edit"></span>
              </button>
            </a>
            <button class="delete-modal btn btn-danger btn-sm" data-id="{{ $neraca->id }}" data-toggle="tooltip" title="Hapus Data">
              <span class="glyphicon glyphicon-trash"></span>
            </button>
          </td>  
          </tr>
          @endforeach
        </tbody>
          </table>
          @else
          <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h4><i class="fa fa-exclamation-triangle"></i>  Perhatian!</h4>
                Tidak Ada Data.
          </div>
        @endif
  </div>

</div>
@include('utama.hapus')
</section>
@endsection

@section('js')
<script type="text/javascript">
// Delete a post pasangan
  $(document).on('click', '.delete-modal', function() {
    $('.modal-title').text('Hapus Data');
    $('#id_delete').val($(this).data('id'));
    $('#deleteModal').modal('show');
    id = $('#id_delete').val();
  });
  $('.modal-footer').on('click', '.delete', function() {
    $.ajax({
      type: 'DELETE',
      url: './neraca/'+ id,
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
        