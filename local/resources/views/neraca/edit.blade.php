@extends('utama.template')
@section('main')
<section class="content-header">
<h1>
  <i class="fa fa-balance-scale"></i> Neraca
  <small>Perhitungan</small>
</h1>
<ol class="breadcrumb">
  <li><a href="#"><i class="fa fa-balance-scale"></i> Neraca</a></li>
  <li>Perhitungan</li>
  <li class="active">Perbarui Data</li>
</ol>
</section>
<section class="content">
<div class="box box-defaul animated bounceInRight">
  <div class="box-header with-border">
    <div class="btn-group" data-toggle="tooltip" title="Kembali Halaman Sebelumnya">
      <a href="{{ url('neraca') }}"> 
        <button class="btn btn-social btn-primary btn-sm">
          <i class="fa fa-arrow-circle-left" aria-hidden="true"></i> BACK
        </button>
      </a>
    </div>
    <h3 class="box-title">|| Perbarui Data</h3>
  </div>
  {!! Form::model($neraca,['method'=>'PATCH','files'=>true,'action'=>['NeracaController@update',$neraca->id]]) !!}
    <div class="box-body">
      <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
        <?php $nama_tombol = "SUBMIT";$jenis = "success";?>
        @include('neraca.form')
    </div>
    <div class="box-footer" align="right">
      @include('utama.submit')   
    </div>
  </form>
</div>
</section>
@endsection

@section('js')

@endsection
@section('footer')
    @include('utama.footer')
@endsection
        