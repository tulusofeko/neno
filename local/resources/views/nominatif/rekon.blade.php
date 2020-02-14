@extends('utama.template')
@section('main')
<section class="content-header">
<h1>
  <i class="fa fa-list-ol"></i> Nominatif
  <small>Nasabah</small>
</h1>
<ol class="breadcrumb">
  <li><a href="{{ url('nominatif') }}"><i class="fa fa-list-ol"></i> Nominatif</a></li>
  <li>Nasabah</li>
  <li class="active">Rekon</li>
</ol>
</section>
<section class="content">
<div class="row">
  <div class="col-md-6">
    <div class="box box-danger">
      <div class="box-header with-border">
        <h3 class="box-title">
          <i class="fa fa-database text-aqua"></i> Rekon Data
        </h3>
        <div class="btn-group" data-toggle="tooltip" title="Download Template Rekon">
          <a href="{{ url('download-rekon?kategori=nasabah') }}" class="btn btn-social btn bg-aqua pull-left btn-xs">
            <i class="fa fa-download"></i> <?php echo "TEMPLATE" ?>
          </a>
        </div>
        <div class="btn-group" data-toggle="tooltip" title="Download Error Import">
          <a href="{{ url('derrorpeg?kategori=nasabah') }}" class="btn btn-social btn btn-danger pull-left btn-xs">
            <i class="fa fa-download"></i> <?php echo "ERROR" ?>
          </a>
        </div>
      </div>
      <form action="{{ url('nominatif/rekons?kategori=nasabah') }}" method="post" enctype="multipart/form-data">
        <div class="box-body">
          <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
            <?php $nama_tombol = "IMPORT";$jenis = "success";$jenis_form = "input01"?>
            @include('nominatif.form')
        </div>
        <div class="box-footer">
          @include('utama.submit')
        </div>
      </form>
    </div>
  </div>
</div>
</section>
@endsection

@section('js')

@endsection
@section('footer')
    @include('utama.footer')
@endsection
        