<div class="row" align="center">
  	<div class="col-md-4">
  		<b>Nama Item</b>
  	</div>
  	<div class="col-md-2">
  		<b>Inputan Instansi</b>
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
		Pendapatan Dari Penyaluran Dana
	</div>
	<div class="col-md-2">
		{!! Form::number("pendapatan_penyaluran_utama",null,['class'=>'form-control','id'=>'pendapatan_penyaluran_utama','autocomplete' => 'off','required']) !!}
	</div>
	<div class="col-md-1">
		{!! Form::number("pendapatan_penyaluran_d1",null,['class'=>'form-control','id'=>'pendapatan_penyaluran_d1','autocomplete' => 'off','style' => 'background-color: #fff5cc;']) !!}
	</div>
	<div class="col-md-1">
		{!! Form::number("pendapatan_penyaluran_k1",null,['class'=>'form-control','id'=>'pendapatan_penyaluran_k1','autocomplete' => 'off','style' => 'background-color: #fff5cc;']) !!}
	</div>
	<div class="col-md-1">
		{!! Form::number("pendapatan_penyaluran_d2",null,['class'=>'form-control','id'=>'pendapatan_penyaluran_d2','autocomplete' => 'off','style' => 'background-color: #fff5cc;']) !!}
	</div>
	<div class="col-md-1">
		{!! Form::number("pendapatan_penyaluran_k2",null,['class'=>'form-control','id'=>'pendapatan_penyaluran_k2','autocomplete' => 'off','style' => 'background-color: #fff5cc;']) !!}
	</div>
	<div class="col-md-1">
		{!! Form::number("pendapatan_penyaluran_d3",null,['class'=>'form-control','id'=>'pendapatan_penyaluran_d3','autocomplete' => 'off','style' => 'background-color: #fff5cc;']) !!}
	</div>
	<div class="col-md-1">
		{!! Form::number("pendapatan_penyaluran_k3",null,['class'=>'form-control','id'=>'pendapatan_penyaluran_k3','autocomplete' => 'off','style' => 'background-color: #fff5cc;']) !!}
	</div>
</div>

<div class="row" align="center" style="margin-top: 10px;">
	<div class="col-md-4" align="left" style="font-size: 1.2em;">
		Bagi Hasil Untuk Pemilik Dana Investasi
	</div>
	<div class="col-md-2">
		{!! Form::number("bagi_hasil_utama",null,['class'=>'form-control','id'=>'bagi_hasil_utama','autocomplete' => 'off','required']) !!}
	</div>
	<div class="col-md-1">
		{!! Form::number("bagi_hasil_d1",null,['class'=>'form-control','id'=>'bagi_hasil_d1','autocomplete' => 'off','style' => 'background-color: #fff5cc;']) !!}
	</div>
	<div class="col-md-1">
		{!! Form::number("bagi_hasil_k1",null,['class'=>'form-control','id'=>'bagi_hasil_k1','autocomplete' => 'off','style' => 'background-color: #fff5cc;']) !!}
	</div>
	<div class="col-md-1">
		{!! Form::number("bagi_hasil_d2",null,['class'=>'form-control','id'=>'bagi_hasil_d2','autocomplete' => 'off','style' => 'background-color: #fff5cc;']) !!}
	</div>
	<div class="col-md-1">
		{!! Form::number("bagi_hasil_k2",null,['class'=>'form-control','id'=>'bagi_hasil_k2','autocomplete' => 'off','style' => 'background-color: #fff5cc;']) !!}
	</div>
	<div class="col-md-1">
		{!! Form::number("bagi_hasil_d3",null,['class'=>'form-control','id'=>'bagi_hasil_d3','autocomplete' => 'off','style' => 'background-color: #fff5cc;']) !!}
	</div>
	<div class="col-md-1">
		{!! Form::number("bagi_hasil_k3",null,['class'=>'form-control','id'=>'bagi_hasil_k3','autocomplete' => 'off','style' => 'background-color: #fff5cc;']) !!}
	</div>
</div>

<div class="row" align="center" style="margin-top: 10px;">
	<div class="col-md-4" align="left" style="font-size: 1.2em;">
		<b>Pendapatan Setelah Distribusi Bagi Hasil</b>
	</div>
	<div class="col-md-2">
		
	</div>
	<div class="col-md-1">
		
	</div>
	<div class="col-md-1">
		
	</div>
	<div class="col-md-1">
		
	</div>
	<div class="col-md-1">
		
	</div>
	<div class="col-md-1">
		
	</div>
	<div class="col-md-1">
	
	</div>
</div>

<div class="row" align="center" style="margin-top: 10px;">
	<div class="col-md-4" align="left" style="font-size: 1.2em;">
		Pendapatan Operasional Lainnya
	</div>
	<div class="col-md-2">
		{!! Form::number("pendapatan_ops_utama",null,['class'=>'form-control','id'=>'pendapatan_ops_utama','autocomplete' => 'off','required']) !!}
	</div>
	<div class="col-md-1">
		{!! Form::number("pendapatan_ops_d1",null,['class'=>'form-control','id'=>'pendapatan_ops_d1','autocomplete' => 'off','style' => 'background-color: #fff5cc;']) !!}
	</div>
	<div class="col-md-1">
		{!! Form::number("pendapatan_ops_k1",null,['class'=>'form-control','id'=>'pendapatan_ops_k1','autocomplete' => 'off','style' => 'background-color: #fff5cc;']) !!}
	</div>
	<div class="col-md-1">
		{!! Form::number("pendapatan_ops_d2",null,['class'=>'form-control','id'=>'pendapatan_ops_d2','autocomplete' => 'off','style' => 'background-color: #fff5cc;']) !!}
	</div>
	<div class="col-md-1">
		{!! Form::number("pendapatan_ops_k2",null,['class'=>'form-control','id'=>'pendapatan_ops_k2','autocomplete' => 'off','style' => 'background-color: #fff5cc;']) !!}
	</div>
	<div class="col-md-1">
		{!! Form::number("pendapatan_ops_d3",null,['class'=>'form-control','id'=>'pendapatan_ops_d3','autocomplete' => 'off','style' => 'background-color: #fff5cc;']) !!}
	</div>
	<div class="col-md-1">
		{!! Form::number("pendapatan_ops_k3",null,['class'=>'form-control','id'=>'pendapatan_ops_k3','autocomplete' => 'off','style' => 'background-color: #fff5cc;']) !!}
	</div>
</div>

<div class="row" align="center" style="margin-top: 10px;">
	<div class="col-md-4" align="left" style="font-size: 1.2em;">
		Beban Operasional
	</div>
	<div class="col-md-2">
		{!! Form::number("beban_ops_utama",null,['class'=>'form-control','id'=>'beban_ops_utama','autocomplete' => 'off','required']) !!}
	</div>
	<div class="col-md-1">
		{!! Form::number("beban_ops_d1",null,['class'=>'form-control','id'=>'beban_ops_d1','autocomplete' => 'off', 'disabled']) !!}
	</div>
	<div class="col-md-1">
		{!! Form::number("beban_ops_k1",null,['class'=>'form-control','id'=>'beban_ops_k1','autocomplete' => 'off','style' => 'background-color: #fff5cc;']) !!}
	</div>
	<div class="col-md-1">
		{!! Form::number("beban_ops_d2",null,['class'=>'form-control','id'=>'beban_ops_d2','autocomplete' => 'off', 'disabled']) !!}
	</div>
	<div class="col-md-1">
		{!! Form::number("beban_ops_k2",null,['class'=>'form-control','id'=>'beban_ops_k2','autocomplete' => 'off','style' => 'background-color: #fff5cc;']) !!}
	</div>
	<div class="col-md-1">
		{!! Form::number("beban_ops_d3",null,['class'=>'form-control','id'=>'beban_ops_d3','autocomplete' => 'off', 'disabled']) !!}
	</div>
	<div class="col-md-1">
		{!! Form::number("beban_ops_k3",null,['class'=>'form-control','id'=>'beban_ops_k3','autocomplete' => 'off','style' => 'background-color: #fff5cc;']) !!}
	</div>
</div>

<div class="row" align="center" style="margin-top: 10px;">
	<div class="col-md-4" align="left" style="font-size: 1.2em;">
		<b>Laba/(Rugi) Operasional</b>
	</div>
	<div class="col-md-2">
		
	</div>
	<div class="col-md-1">
		
	</div>
	<div class="col-md-1">
		
	</div>
	<div class="col-md-1">
		
	</div>
	<div class="col-md-1">
		
	</div>
	<div class="col-md-1">
		
	</div>
	<div class="col-md-1">
	
	</div>
</div>

<div class="row" align="center" style="margin-top: 10px;">
	<div class="col-md-4" align="left" style="font-size: 1.2em;">
		Pendapatan Non Operasional
	</div>
	<div class="col-md-2">
		{!! Form::number("pendapatan_nops_utama",null,['class'=>'form-control','id'=>'pendapatan_nops_utama','autocomplete' => 'off','required']) !!}
	</div>
	<div class="col-md-1">
		{!! Form::number("pendapatan_nops_d1",null,['class'=>'form-control','id'=>'pendapatan_nops_d1','autocomplete' => 'off','style' => 'background-color: #fff5cc;']) !!}
	</div>
	<div class="col-md-1">
		{!! Form::number("pendapatan_nops_k1",null,['class'=>'form-control','id'=>'pendapatan_nops_k1','autocomplete' => 'off','style' => 'background-color: #fff5cc;']) !!}
	</div>
	<div class="col-md-1">
		{!! Form::number("pendapatan_nops_d2",null,['class'=>'form-control','id'=>'pendapatan_nops_d2','autocomplete' => 'off','style' => 'background-color: #fff5cc;']) !!}
	</div>
	<div class="col-md-1">
		{!! Form::number("pendapatan_nops_k2",null,['class'=>'form-control','id'=>'pendapatan_nops_k2','autocomplete' => 'off','style' => 'background-color: #fff5cc;']) !!}
	</div>
	<div class="col-md-1">
		{!! Form::number("pendapatan_nops_d3",null,['class'=>'form-control','id'=>'pendapatan_nops_d3','autocomplete' => 'off','style' => 'background-color: #fff5cc;']) !!}
	</div>
	<div class="col-md-1">
		{!! Form::number("pendapatan_nops_k3",null,['class'=>'form-control','id'=>'pendapatan_nops_k3','autocomplete' => 'off','style' => 'background-color: #fff5cc;']) !!}
	</div>
</div>

<div class="row" align="center" style="margin-top: 10px;">
	<div class="col-md-4" align="left" style="font-size: 1.2em;">
		Beban Non Operasional
	</div>
	<div class="col-md-2">
		{!! Form::number("beban_nops_utama",null,['class'=>'form-control','id'=>'beban_nops_utama','autocomplete' => 'off','required']) !!}
	</div>
	<div class="col-md-1">
		{!! Form::number("beban_nops_d1",null,['class'=>'form-control','id'=>'beban_nops_d1','autocomplete' => 'off','style' => 'background-color: #fff5cc;']) !!}
	</div>
	<div class="col-md-1">
		{!! Form::number("beban_nops_k1",null,['class'=>'form-control','id'=>'beban_nops_k1','autocomplete' => 'off','style' => 'background-color: #fff5cc;']) !!}
	</div>
	<div class="col-md-1">
		{!! Form::number("beban_nops_d2",null,['class'=>'form-control','id'=>'beban_nops_d2','autocomplete' => 'off','style' => 'background-color: #fff5cc;']) !!}
	</div>
	<div class="col-md-1">
		{!! Form::number("beban_nops_k2",null,['class'=>'form-control','id'=>'beban_nops_k2','autocomplete' => 'off','style' => 'background-color: #fff5cc;']) !!}
	</div>
	<div class="col-md-1">
		{!! Form::number("beban_nops_d3",null,['class'=>'form-control','id'=>'beban_nops_d3','autocomplete' => 'off','style' => 'background-color: #fff5cc;']) !!}
	</div>
	<div class="col-md-1">
		{!! Form::number("beban_nops_k3",null,['class'=>'form-control','id'=>'beban_nops_k3','autocomplete' => 'off','style' => 'background-color: #fff5cc;']) !!}
	</div>
</div>
<div class="row" align="center" style="margin-top: 10px;">
	<div class="col-md-4" align="left" style="font-size: 1.2em;">
		<b>Laba/(Rugi) Non Operasional</b>
	</div>
	<div class="col-md-2">
		
	</div>
	<div class="col-md-1">
		
	</div>
	<div class="col-md-1">
		
	</div>
	<div class="col-md-1">
		
	</div>
	<div class="col-md-1">
		
	</div>
	<div class="col-md-1">
		
	</div>
	<div class="col-md-1">
	
	</div>
</div>
<div class="row" align="center" style="margin-top: 10px;">
	<div class="col-md-4" align="left" style="font-size: 1.2em;">
		<b>Laba/(Rugi) Tahun Berjalan</b>
	</div>
	<div class="col-md-2">
		
	</div>
	<div class="col-md-1">
		
	</div>
	<div class="col-md-1">
		
	</div>
	<div class="col-md-1">
		
	</div>
	<div class="col-md-1">
		
	</div>
	<div class="col-md-1">
		
	</div>
	<div class="col-md-1">
	
	</div>
</div>
<div class="row" align="center" style="margin-top: 10px;">
	<div class="col-md-4" align="left" style="font-size: 1.2em;">
		Pajak Penghasilan
	</div>
	<div class="col-md-2">
		{!! Form::number("pajak_penghasilan_utama",null,['class'=>'form-control','id'=>'pajak_penghasilan_utama','autocomplete' => 'off','required']) !!}
	</div>
	<div class="col-md-1">
		{!! Form::number("pajak_penghasilan_d1",null,['class'=>'form-control','id'=>'pajak_penghasilan_d1','autocomplete' => 'off','style' => 'background-color: #fff5cc;']) !!}
	</div>
	<div class="col-md-1">
		{!! Form::number("pajak_penghasilan_k1",null,['class'=>'form-control','id'=>'pajak_penghasilan_k1','autocomplete' => 'off','style' => 'background-color: #fff5cc;']) !!}
	</div>
	<div class="col-md-1">
		{!! Form::number("pajak_penghasilan_d2",null,['class'=>'form-control','id'=>'pajak_penghasilan_d2','autocomplete' => 'off','style' => 'background-color: #fff5cc;']) !!}
	</div>
	<div class="col-md-1">
		{!! Form::number("pajak_penghasilan_k2",null,['class'=>'form-control','id'=>'pajak_penghasilan_k2','autocomplete' => 'off','style' => 'background-color: #fff5cc;']) !!}
	</div>
	<div class="col-md-1">
		{!! Form::number("pajak_penghasilan_d3",null,['class'=>'form-control','id'=>'pajak_penghasilan_d3','autocomplete' => 'off','style' => 'background-color: #fff5cc;']) !!}
	</div>
	<div class="col-md-1">
		{!! Form::number("pajak_penghasilan_k3",null,['class'=>'form-control','id'=>'pajak_penghasilan_k3','autocomplete' => 'off','style' => 'background-color: #fff5cc;']) !!}
	</div>
</div>
<div class="row" align="center" style="margin-top: 10px;">
	<div class="col-md-4" align="left" style="font-size: 1.2em;">
		<b>Laba/(Rugi) Bersih</b>
	</div>
	<div class="col-md-2">
		
	</div>
	<div class="col-md-1">
		
	</div>
	<div class="col-md-1">
		
	</div>
	<div class="col-md-1">
		
	</div>
	<div class="col-md-1">
		
	</div>
	<div class="col-md-1">
		
	</div>
	<div class="col-md-1">
	
	</div>
</div>