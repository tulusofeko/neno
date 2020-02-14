<div class="row">
  <div class="col-md-6">
      <div class="form-group @if ($errors->has('nama_bank')) has-error @endif">
        {!! Form::label("nama_bank","NAMA INSTANSI",["class"=>"control-label"]) !!}
        {!! Form::text("nama_bank",null,['class'=>'form-control', 'placeholder'=>'Masukan data ..','id'=>'nama_bank','autocomplete' => 'off']) !!}
        @if ($errors->has('nama_bank')) <p class="text-center alert alert-danger">{{ $errors->first('nama_bank') }}</p> @endif
      </div>
  </div>
  <div class="col-md-6">
    <div class="form-group @if ($errors->has('tanggal')) has-error @endif">
      {!! Form::label('tanggal','TANGGAL :', ['class'=>'control-label']) !!}
        <div class="input-group date">
          <div class="input-group-addon">
            <i class="fa fa-calendar"></i>
              </div>
              {!! Form::text('tanggal',null, ['class'=>'form-control pull-right','id'=>'datepicker','placeholder'=>'Masukan Tanggal Perhitungan','autocomplete' => 'off']) !!}
        </div>
        @if ($errors->has('tanggal')) <p class="text-center alert alert-danger">{{ $errors->first('tanggal') }}</p> @endif
    </div>
  </div>
</div>
<hr>
<div class="nav-tabs-custom">
  <ul class="nav nav-tabs pull-right">
    <li>
      <a href="#tab_5-5" data-toggle="tab">
        <i class="fa fa-cubes" aria-hidden="true"></i><b> KPMM</b>
      </a>
    </li>
    <li>
      <a href="#tab_4-4" data-toggle="tab">
        <i class="fa fa-cart-arrow-down" aria-hidden="true"></i><b> LABA RUGI</b>
      </a>
    </li>
    <li class="active">
      <a href="#tab_3-3" data-toggle="tab">
        <i class="fa fa-bookmark-o" aria-hidden="true"></i><b> EQUITAS</b>
      </a>
    </li>
    <li>
      <a href="#tab_2-2" data-toggle="tab">
        <i class="fa fa-bookmark" aria-hidden="true"></i><b> LIABILITAS</b>
      </a>
    </li>
    <li>
      <a href="#tab_1-1" data-toggle="tab">
        <i class="fa fa-university" aria-hidden="true"></i><b> ASET</b>
      </a>
    </li>
    <li class="pull-left header"><i class="fa fa-th"></i> Form Perhitungan Neraca</li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane active" id="tab_5-5">
      @include('neraca.form_kpmm')
    </div>
    <div class="tab-pane" id="tab_4-4">
      @include('neraca.form_labarugi')
    </div>
    <div class="tab-pane" id="tab_3-3">
      @include('neraca.form_equitas')
    </div>
    <div class="tab-pane" id="tab_2-2">
      @include('neraca.form_liabilitas')
    </div>
    <div class="tab-pane" id="tab_1-1">
      @include('neraca.form_aset')
    </div>
  </div>
</div>