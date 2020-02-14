@extends('utama.template')
@section('css')
<link rel="stylesheet" href="{{ asset('css/table.css') }}">
@endsection
@section('main')
<section class="content-header">
<h2>
  <i class="fa fa-balance-scale"></i> Neraca
  <small>Perhitungan</small>
</h1>
<ol class="breadcrumb">
  <li><a href="#"><i class="fa fa-balance-scale"></i> Neraca</a></li>
  <li>Perhitungan</li>
  <li class="active">Hasil Perhitungan</li>
</ol>
</section>
<section class="content">
<div class="box box-defaul animated bounceInRight">
  <div class="box-header witd-border">
    <div class="btn-group" data-toggle="tooltip" title="Kembali Halaman Utama">
      <a href="{{ url('neraca') }}"> 
        <button class="btn btn-social btn-primary btn-sm">
          <i class="fa fa-arrow-circle-left" aria-hidden="true"></i> BACK
        </button>
      </a>
    </div>
    <div class="btn-group" data-toggle="tooltip" title="Cetak Data">
        <a href="{{ url('cetak-neraca/'.$referensis) }}" target="_blank">
          <button class="btn btn-social btn btn-default btn-sm">
            <i class="fa fa-download"></i> <?php echo "CETAK DATA" ?>
          </button>
        </a>
    </div>
    <h3 class="box-title">|| Hasil Perhitungan Data</h3>
  </div>
  <table style="width:100%; font-size: 0.9em;">
    <thead style="font-size: 1.1em; font-weight: 700; background-color: #fff1bf;">
      <tr align="center">
        <td rowspan="2" style="width:15%; font-size: 1.7em;">Posisi {{ date("d-m-Y", strtotime($data->tanggal)) }}</td>
        <td rowspan="2" style="width:10%">{{ $data->nama_bank }}</td>
        <td colspan="2" style="width:16%">Adjustment Asset Swap</td>
        <td rowspan="2" style="width:9%">Adj. Asset Swap</td>
        <td colspan="2" style="width:16%">Adjustment Pemeriksaan 3 Pilar</td>
        <td rowspan="2" style="width:9%">Adj. OJK</td>
        <td colspan="2" style="width:16%">Adjustment 1 Pilar</td>
        <td rowspan="2" style="width:9%">Adj. OJK</td>
      </tr>
      <tr align="center">
        <td style="width:8%"><b>D</b></td>
        <td style="width:8%"><b>K</b></td>
        <td style="width:8%"><b>D</b></td>
        <td style="width:8%"><b>K</b></td>
        <td style="width:8%"><b>D</b></td>
        <td style="width:8%"><b>K</b></td>
      </tr>
    </thead>
    <tbody>
      @include('neraca.show_aset')
      <tr>
        <td colspan="11">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="11" style="background-color: #e3e3de;"><b>PASIVA</b></td>
      </tr>
      @include('neraca.show_liabilitas')
      <tr>
        <td colspan="11">&nbsp;</td>
      </tr>
      @include('neraca.show_equitas')
      <tr>
        <td colspan="11">&nbsp;</td>
      </tr>
      @include('neraca.show_labarugi')
      <tr>
        <td colspan="11">&nbsp;</td>
      </tr>
      @include('neraca.show_kpmm')
      <tr>
        <td colspan="11">&nbsp;</td>
      </tr>
      @include('neraca.show_kesimpulan')
    </tbody>
  </table>
  
</div>
</section>
@endsection

@section('js')

@endsection
@section('footer')
    @include('utama.footer')
@endsection
        