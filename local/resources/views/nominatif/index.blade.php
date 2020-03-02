@extends('utama.template')
@section('main')
<section class="content-header">
<h1>
  <i class="fa fa-list-ol"></i> Nominatif
  <small>Nasabah</small>
</h1>
<ol class="breadcrumb">
  <li><a href="#"><i class="fa fa-list-ol"></i> Nominatif</a></li>
  <li class="active">Nasabah</li>
</ol>
</section>
<section class="content">
<div class="btn-group animated bounce delay-1s" data-toggle="tooltip" title="Tambah Data">
  <a href="{{ url('nominatif/create') }}">
    <button class="add-modal btn btn-social btn-primary btn-sm">
      <span class="glyphicon glyphicon-plus-sign"></span> <?php echo "TAMBAH DATA" ?>
    </button>
  </a>
</div>
<div class="btn-group animated bounce delay-1s" data-toggle="tooltip" title="Rekon Data Referensi">
    <a href="{{ url('rekon') }}">
        <button class="btn btn-social btn bg-maroon btn-sm">
            <i class="fa fa-database"></i> <?php echo "REKON DATA" ?>
        </button>
    </a>
</div>
<div class="btn-group animated bounce delay-1s" data-toggle="tooltip" title="Cetak Data">
    <a href="{{ url('download-nominatif') }}" target="_blank">
      <button class="btn btn-social btn btn-default btn-sm">
        <i class="fa fa-download"></i> <?php echo "CETAK DATA" ?>
      </button>
    </a>
</div>
<button class="btn-group delete-modal btn btn-danger btn-sm animated bounce delay-1s btn btn-social" data-toggle="tooltip" title="Hapus Semua Data" data-id="all">
  <span class="glyphicon glyphicon-trash"></span> HAPUS SEMUA DATA
</button>
<div class="btn-group animated bounce delay-1s" data-toggle="tooltip" title="Refresh Data">
  <a href="{{ url('nominatif') }}"> 
    <button class="btn bg-olive btn btn-social btn-lrg ajax btn-sm">
      <i class="fa fa-spin fa-refresh"></i> REFRESH
    </button>
  </a>
</div> 
<div class="box box-default animated bounceInRight">
  {{ csrf_field() }}
  <div class="box-body">
    @if($jumlah_data!=NULL)
    <table id="example1" class="table table-bordered table-striped" style="font-size: 0.9em;">
      <thead>
        <tr>
          <th style="width: 3%">No</th>
          <th style="width: 5%">No Base</th>
          <th style="width: 17%">Nama</th>
          <th>Outstanding</th>
          <th>PPAP TB</th>
          <th>Kol Auditor</th>
          <th>AYDD Auditor</th>
          <th>Keterangan Lain</th>
          <th style="width: 10%">Riwayat Modifikasi</th>
          <th style="width: 10%">Actions</th>
      </thead>
      <tbody>
        @foreach($nominatif_list as $indexKey => $nominatif)
        <tr>
          <td>{{ $indexKey+1 }}</td>
          <td>
            {{ $nominatif->no_base }}
          </td>
          <td>
            <b>{{ strtoupper($nominatif->nama) }}</b>
          </td>
          <td align="right">
          	{{ $nominatif->outstanding != NULL ? "Rp " . number_format($nominatif->outstanding, 2, ",", ".") : '-' }}
          </td>
          <td align="right">
          	{{ $nominatif->ppap_tb != NULL ? "Rp " . number_format($nominatif->ppap_tb, 2, ",", ".") : '-' }}
          </td>
          <td align="right">
          	{{ $nominatif->kol_auditor != NULL ? number_format($nominatif->kol_auditor, 0, ",", ".") : '-' }}
          </td>
          <td align="right">
          	{{ $nominatif->aydd_auditor != NULL ? number_format($nominatif->aydd_auditor, 0, ",", ".") : '-' }}
          </td>
          <td>
          	<b>Stat: </b>{{ $nominatif->nama }}<br>
          	<b>Sample: </b>{{ $nominatif->sample }}<br>
          	<b>Kol LSMK: </b>{{ $nominatif->kol_lsmk }}<br>
          	<b>Kol 1 Pilar: </b>{{ $nominatif->kol_1_pilar }}<br>
          	<b>Kol 3 Pilar: </b>{{ $nominatif->kol_3_pilar }}<br>
          	<b>Sample: </b>{{ $nominatif->sample2 }}<br>
          </td>
          <td>
            <i>{{ $nominatif->rekaman }}</i>
          </td>
          <td align="center">
            <a href="{{ url('nominatif/'.$nominatif->referensi) }}"> 
                <button class="btn bg-purple btn-sm" data-toggle="tooltip" title="Hasil Perhitungan">
                  <i class="fa fa-calculator" aria-hidden="true"></i>
                </button>
              </a>
            <a href="{{ url('nominatif/'.$nominatif->referensi.'/edit') }}">         
              <button class="edit-modal btn btn-warning btn-sm" data-toggle="tooltip" title="Perbarui Data">
                <span class="glyphicon glyphicon-edit"></span>
              </button>
            </a>
            <button class="delete-modal btn btn-danger btn-sm" data-id="{{ $nominatif->id }}" data-toggle="tooltip" title="Hapus Data">
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
      url: './nominatif/'+ id,
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
        