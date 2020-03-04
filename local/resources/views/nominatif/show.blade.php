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
  <li class="active">Show Data</li>
</ol>
</section>
<section class="content">
<div class="row">  
  <div class="col-md-6">
    <div class="box box-default animated bounceInRight">
      <div class="box-header with-border">
        <div class="btn-group" data-toggle="tooltip" title="Kembali Halaman Sebelumnya">
          <a href="{{ url('nominatif') }}"> 
            <button class="btn btn-social btn bg-olive  btn-sm">
              <i class="fa fa-arrow-circle-left" aria-hidden="true"></i> BACK
            </button>
          </a>
        </div>
        <h3 class="box-title">Data Utama</h3>
      </div>
      <div class="box-body no-padding">
        <table class="table table-bordered table-striped table-condensed">
          <tr>
            <th style="width: 25%;">#</th>
            <th style="width: 75%;">Data</th>
          </tr>
          <tr>
            <td><strong>No Base</strong></td>
            <td style="font-size: 1.2em;">
              <b>{{ $nominatif->no_base }}</b>
            </td>
          </tr>
          <tr>
            <td><strong>Nama</strong></td>
            <td>
              {{ $nominatif->nama }}
            </td>
          </tr>
          <tr>
            <td><strong>Stat</strong></td>
            <td>
              {{ $nominatif->stat }}
            </td>
          </tr>
          <tr>
            <td><strong>Sample</strong></td>
            <td>
              {{ $nominatif->sample }}
            </td>
          </tr>
          <tr>
            <td><strong>Outstanding</strong></td>
            <td>
              {{ $nominatif->outstanding != NULL ? "Rp " . number_format($nominatif->outstanding, 2, ",", ".") : '-' }}
            </td>
          </tr>
          <tr>
            <td><strong>PPAP TB</strong></td>
            <td>
              {{ $nominatif->ppap_tb != NULL ? "Rp " . number_format($nominatif->ppap_tb, 2, ",", ".") : '-' }}
            </td>
          </tr>
          <tr>
            <td><strong>Kol LSMK</strong></td>
            <td>
              {{ $nominatif->kol_lsmk }}
            </td>
          </tr>
          <tr>
            <td><strong>Kol 1 Pilar</strong></td>
            <td>
              {{ $nominatif->kol_1_pilar }}
            </td>
          </tr>
          <tr>
            <td><strong>Kol 3 Pilar</strong></td>
            <td>
              {{ $nominatif->kol_3_pilar }}
            </td>
          </tr>
          <tr>
            <td><strong>Sample</strong></td>
            <td>
              {{ $nominatif->sample2 }}
            </td>
          </tr>
          <tr>
            <td><strong>Kol OJK</strong></td>
            <td>
              {{ $nominatif->kol_auditor != NULL ? number_format($nominatif->kol_auditor, 0, ",", ".") : '-' }}
            </td>
          </tr>
          <tr>
            <td><strong>AYDD OJK</strong></td>
            <td>
              {{ $nominatif->aydd_auditor != NULL ? number_format($nominatif->aydd_auditor, 0, ",", ".") : '-' }}
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="box box-default animated bounceInRight">
      <div class="box-header with-border" style="padding-bottom: 20px;">
        <h3 class="box-title">Hasil Perhitungan</h3>
      </div>
      <div class="box-body no-padding">
        <table class="table table-bordered table-striped table-condensed">
          <tr>
            <th style="width: 25%;">#</th>
            <th style="width: 75%;">Data</th>
          </tr>
          <tr>
            <td><strong>OS-AYDD OJK</strong></td>
            <td>
              {{ $os_aydd != NULL ? "Rp " . number_format($os_aydd, 2, ",", ".") : '-' }}
            </td>
          </tr>
          <tr>
            <td><strong>Tarif PPA Kol LSMK</strong></td>
            <td>
              {{ $tarif_ppa }} %
            </td>
          </tr>
          <tr>
            <td><strong>PPA WB Kol LSMK</strong></td>
            <td>
              {{ $ppa_wb != NULL ? "Rp " . number_format($ppa_wb, 2, ",", ".") : '-' }}
            </td>
          </tr>
          <tr>
            <td><strong>PPA KB Kol LSMK</strong></td>
            <td>
              {{ $ppa_kb != NULL ? "Rp " . number_format($ppa_kb, 2, ",", ".") : '-' }}
            </td>
          </tr>
          <tr>
            <td><strong>Tarif PPA Kol 1 Pilar</strong></td>
            <td>
              {{ $tarif_ppa_kol_1_pilar }} %
            </td>
          </tr>
          <tr>
            <td><strong>PPA WB Kol LSMK</strong></td>
            <td>
              {{ $ppa_wb2 != NULL ? "Rp " . number_format($ppa_wb2, 2, ",", ".") : '-' }}
            </td>
          </tr>
          <tr>
            <td><strong>PPA KB Kol 1 Pilar</strong></td>
            <td>
              {{ $ppa_kb_1_pilar != NULL ? "Rp " . number_format($ppa_kb_1_pilar, 2, ",", ".") : '-' }}
            </td>
          </tr>
          <tr>
            <td><strong>Tarif PPA Kol 3 Pilar</strong></td>
            <td>
              {{ $tarif_ppa_kol_3_pilar }} %
            </td>
          </tr>
          <tr>
            <td><strong>PPA WB Kol 3 Pilar</strong></td>
            <td>
              {{ $ppa_wb3 != NULL ? "Rp " . number_format($ppa_wb3, 2, ",", ".") : '-' }}
            </td>
          </tr>
          <tr>
            <td><strong>PPA KB Kol LSMK</strong></td>
            <td>
              {{ $ppa_kb_3_pilar != NULL ? "Rp " . number_format($ppa_kb_3_pilar, 2, ",", ".") : '-' }}
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</div>

@include('utama.hapus')
</section>
@endsection

@section('footer')
    @include('utama.footer')
@stop
