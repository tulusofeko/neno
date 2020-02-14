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
  <li class="active">Edit Data</li>
</ol>
</section>
<section class="content">
<div class="row">
    <div class="col-md-12">
      <div class="box box-default animated bounceInRight">
        <div class="box-header with-border">
          <div class="btn-group" data-toggle="tooltip" title="Kembali Halaman Sebelumnya">
            <a href="{{ url('nominatif') }}"> 
              <button class="btn btn-social btn bg-olive btn-sm">
                <i class="fa fa-arrow-circle-left" aria-hidden="true"></i> BACK
              </button>
            </a>
          </div>
          <h3 class="box-title">|| Edit Data</h3>
        </div>
        {!! Form::model($nominatif,['method'=>'PATCH','files'=>true,'action'=>['NominatifController@update',$nominatif->id]]) !!}
        <div class="box-body">
                <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                <?php $nama_tombol = "SUBMIT";$jenis = "success";?>
                @include('nominatif.form2')
        </div>
        <div class="box-footer" align="right">
            @include('utama.submit')   
        </div>
        {!! Form::close() !!}
      </div>
    </div>
</div>
</section>
@section('js')

@endsection
@stop
@section('footer')
    @include('utama.footer')
@stop
