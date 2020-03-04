<div class="row" align="center">
  	<div class="col-md-4">
  		<b>Pos</b>
  	</div>
  	<div class="col-md-2">
  		<b>Nominal</b>
  	</div>
  	<div class="col-md-2">
  		<b>Adjustment Asset Swap</b>
  	</div>
  	<div class="col-md-2">
  		<b>Adjustment Pemeriksaan 3 Pilar</b>
	</div>
  	<div class="col-md-2">
  		<b>Adjustment 1 Pilar</b>
  	</div>
</div>
<div class="row" align="center">
	<div class="col-md-4"></div>
	<div class="col-md-2"></div>
	<div class="col-md-1"><b>D</b></div>
	<div class="col-md-1"><b>K</b></div>
	<div class="col-md-1"><b>D</b></div>
	<div class="col-md-1"><b>K</b></div>
	<div class="col-md-1"><b>D</b></div>
	<div class="col-md-1"><b>K</b></div>
</div>
<div class="row" align="center" style="margin-top: 10px;">
	<div class="col-md-4" align="left" style="font-size: 1.2em;">
		Dana Pihak Ketiga
	</div>
	<div class="col-md-2">
		{!! Form::number("dana_utama",null,['class'=>'form-control','id'=>'dana_utama','autocomplete' => 'off','required']) !!}
	</div>
	<div class="col-md-1">
		{!! Form::number("dana_d1",null,['class'=>'form-control','id'=>'dana_d1','autocomplete' => 'off','style' => 'background-color: #fff5cc;']) !!}
	</div>
	<div class="col-md-1">
		{!! Form::number("dana_k1",null,['class'=>'form-control','id'=>'dana_k1','autocomplete' => 'off','style' => 'background-color: #fff5cc;']) !!}
	</div>
	<div class="col-md-1">
		{!! Form::number("dana_d2",null,['class'=>'form-control','id'=>'dana_d2','autocomplete' => 'off','style' => 'background-color: #fff5cc;']) !!}
	</div>
	<div class="col-md-1">
		{!! Form::number("dana_k2",null,['class'=>'form-control','id'=>'dana_k2','autocomplete' => 'off','style' => 'background-color: #fff5cc;']) !!}
	</div>
	<div class="col-md-1">
		{!! Form::number("dana_d3",null,['class'=>'form-control','id'=>'dana_d3','autocomplete' => 'off','style' => 'background-color: #fff5cc;']) !!}
	</div>
	<div class="col-md-1">
		{!! Form::number("dana_k3",null,['class'=>'form-control','id'=>'dana_k3','autocomplete' => 'off','style' => 'background-color: #fff5cc;']) !!}
	</div>
</div>

<div class="row" align="center" style="margin-top: 10px;">
	<div class="col-md-4" align="left" style="font-size: 1.2em;">
		Liabilitas pada Bank Indonesia
	</div>
	<div class="col-md-2">
		{!! Form::number("liabilitas_bi_utama",null,['class'=>'form-control','id'=>'liabilitas_bi_utama','autocomplete' => 'off','required']) !!}
	</div>
	<div class="col-md-1">
		{!! Form::number("liabilitas_bi_d1",null,['class'=>'form-control','id'=>'liabilitas_bi_d1','autocomplete' => 'off','style' => 'background-color: #fff5cc;']) !!}
	</div>
	<div class="col-md-1">
		{!! Form::number("liabilitas_bi_k1",null,['class'=>'form-control','id'=>'liabilitas_bi_k1','autocomplete' => 'off','style' => 'background-color: #fff5cc;']) !!}
	</div>
	<div class="col-md-1">
		{!! Form::number("liabilitas_bi_d2",null,['class'=>'form-control','id'=>'liabilitas_bi_d2','autocomplete' => 'off','style' => 'background-color: #fff5cc;']) !!}
	</div>
	<div class="col-md-1">
		{!! Form::number("liabilitas_bi_k2",null,['class'=>'form-control','id'=>'liabilitas_bi_k2','autocomplete' => 'off','style' => 'background-color: #fff5cc;']) !!}
	</div>
	<div class="col-md-1">
		{!! Form::number("liabilitas_bi_d3",null,['class'=>'form-control','id'=>'liabilitas_bi_d3','autocomplete' => 'off','style' => 'background-color: #fff5cc;']) !!}
	</div>
	<div class="col-md-1">
		{!! Form::number("liabilitas_bi_k3",null,['class'=>'form-control','id'=>'liabilitas_bi_k3','autocomplete' => 'off','style' => 'background-color: #fff5cc;']) !!}
	</div>
</div>

<div class="row" align="center" style="margin-top: 10px;">
	<div class="col-md-4" align="left" style="font-size: 1.2em;">
		Liabilitas Ke Bank Lain
	</div>
	<div class="col-md-2">
		{!! Form::number("liabilitas_lain_utama",null,['class'=>'form-control','id'=>'liabilitas_lain_utama','autocomplete' => 'off','required']) !!}
	</div>
	<div class="col-md-1">
		{!! Form::number("liabilitas_lain_d1",null,['class'=>'form-control','id'=>'liabilitas_lain_d1','autocomplete' => 'off','style' => 'background-color: #fff5cc;']) !!}
	</div>
	<div class="col-md-1">
		{!! Form::number("liabilitas_lain_k1",null,['class'=>'form-control','id'=>'liabilitas_lain_k1','autocomplete' => 'off','style' => 'background-color: #fff5cc;']) !!}
	</div>
	<div class="col-md-1">
		{!! Form::number("liabilitas_lain_d2",null,['class'=>'form-control','id'=>'liabilitas_lain_d2','autocomplete' => 'off','style' => 'background-color: #fff5cc;']) !!}
	</div>
	<div class="col-md-1">
		{!! Form::number("liabilitas_lain_k2",null,['class'=>'form-control','id'=>'liabilitas_lain_k2','autocomplete' => 'off','style' => 'background-color: #fff5cc;']) !!}
	</div>
	<div class="col-md-1">
		{!! Form::number("liabilitas_lain_d3",null,['class'=>'form-control','id'=>'liabilitas_lain_d3','autocomplete' => 'off','style' => 'background-color: #fff5cc;']) !!}
	</div>
	<div class="col-md-1">
		{!! Form::number("liabilitas_lain_k3",null,['class'=>'form-control','id'=>'liabilitas_lain_k3','autocomplete' => 'off','style' => 'background-color: #fff5cc;']) !!}
	</div>
</div>

<div class="row" align="center" style="margin-top: 10px;">
	<div class="col-md-4" align="left" style="font-size: 1.2em;">
		Surat Berharga Diterbitkan
	</div>
	<div class="col-md-2">
		{!! Form::number("suberl_utama",null,['class'=>'form-control','id'=>'suberl_utama','autocomplete' => 'off','required']) !!}
	</div>
	<div class="col-md-1">
		{!! Form::number("suberl_d1",null,['class'=>'form-control','id'=>'suberl_d1','autocomplete' => 'off','required']) !!}
	</div>
	<div class="col-md-1">
		{!! Form::number("suberl_k1",null,['class'=>'form-control','id'=>'suberl_k1','autocomplete' => 'off','style' => 'background-color: #fff5cc;']) !!}
	</div>
	<div class="col-md-1">
		{!! Form::number("suberl_d2",null,['class'=>'form-control','id'=>'suberl_d2','autocomplete' => 'off','required']) !!}
	</div>
	<div class="col-md-1">
		{!! Form::number("suberl_k2",null,['class'=>'form-control','id'=>'suberl_k2','autocomplete' => 'off','style' => 'background-color: #fff5cc;']) !!}
	</div>
	<div class="col-md-1">
		{!! Form::number("suberl_d3",null,['class'=>'form-control','id'=>'suberl_d3','autocomplete' => 'off','required']) !!}
	</div>
	<div class="col-md-1">
		{!! Form::number("suberl_k3",null,['class'=>'form-control','id'=>'suberl_k3','autocomplete' => 'off','style' => 'background-color: #fff5cc;']) !!}
	</div>
</div>

<div class="row" align="center" style="margin-top: 10px;">
	<div class="col-md-4" align="left" style="font-size: 1.2em;">
		Liabilitas Diterima
	</div>
	<div class="col-md-2">
		{!! Form::number("liabilitas_diterima_utama",null,['class'=>'form-control','id'=>'liabilitas_diterima_utama','autocomplete' => 'off','required']) !!}
	</div>
	<div class="col-md-1">
		{!! Form::number("liabilitas_diterima_d1",null,['class'=>'form-control','id'=>'liabilitas_diterima_d1','autocomplete' => 'off','style' => 'background-color: #fff5cc;']) !!}
	</div>
	<div class="col-md-1">
		{!! Form::number("liabilitas_diterima_k1",null,['class'=>'form-control','id'=>'liabilitas_diterima_k1','autocomplete' => 'off','style' => 'background-color: #fff5cc;']) !!}
	</div>
	<div class="col-md-1">
		{!! Form::number("liabilitas_diterima_d2",null,['class'=>'form-control','id'=>'liabilitas_diterima_d2','autocomplete' => 'off','style' => 'background-color: #fff5cc;']) !!}
	</div>
	<div class="col-md-1">
		{!! Form::number("liabilitas_diterima_k2",null,['class'=>'form-control','id'=>'liabilitas_diterima_k2','autocomplete' => 'off','style' => 'background-color: #fff5cc;']) !!}
	</div>
	<div class="col-md-1">
		{!! Form::number("liabilitas_diterima_d3",null,['class'=>'form-control','id'=>'liabilitas_diterima_d3','autocomplete' => 'off','style' => 'background-color: #fff5cc;']) !!}
	</div>
	<div class="col-md-1">
		{!! Form::number("liabilitas_diterima_k3",null,['class'=>'form-control','id'=>'liabilitas_diterima_k3','autocomplete' => 'off','style' => 'background-color: #fff5cc;']) !!}
	</div>
</div>

<div class="row" align="center" style="margin-top: 10px;">
	<div class="col-md-4" align="left" style="font-size: 1.2em;">
		Lainnya
	</div>
	<div class="col-md-2">
		{!! Form::number("lainl_utama",null,['class'=>'form-control','id'=>'lainl_utama','autocomplete' => 'off','required']) !!}
	</div>
	<div class="col-md-1">
		{!! Form::number("lainl_d1",null,['class'=>'form-control','id'=>'lainl_d1','autocomplete' => 'off','style' => 'background-color: #fff5cc;']) !!}
	</div>
	<div class="col-md-1">
		{!! Form::number("lainl_k1",null,['class'=>'form-control','id'=>'lainl_k1','autocomplete' => 'off','required']) !!}
	</div>
	<div class="col-md-1">
		{!! Form::number("lainl_d2",null,['class'=>'form-control','id'=>'lainl_d2','autocomplete' => 'off','style' => 'background-color: #fff5cc;']) !!}
	</div>
	<div class="col-md-1">
		{!! Form::number("lainl_k2",null,['class'=>'form-control','id'=>'lainl_k2','autocomplete' => 'off','style' => 'background-color: #fff5cc;']) !!}
	</div>
	<div class="col-md-1">
		{!! Form::number("lainl_d3",null,['class'=>'form-control','id'=>'lainl_d3','autocomplete' => 'off','style' => 'background-color: #fff5cc;']) !!}
	</div>
	<div class="col-md-1">
		{!! Form::number("lainl_k3",null,['class'=>'form-control','id'=>'lainl_k3','autocomplete' => 'off','style' => 'background-color: #fff5cc;']) !!}
	</div>
</div>
