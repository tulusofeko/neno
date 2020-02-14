@if(isset($nominatif))
    {!! Form::hidden('id',$nominatif->id) !!}
@endif
<div class="row">
    <div class="col-md-4">
	    <div class="form-group @if ($errors->has('no_base')) has-error @endif">
	        {!! Form::label("no_base","NO BASE",["class"=>"control-label"]) !!}
	        {!! Form::text("no_base",null,['class'=>'form-control', 'placeholder'=>'Masukan data ..','id'=>'no_base','autocomplete' => 'off']) !!}
	        @if ($errors->has('no_base')) <p class="text-center alert alert-danger">{{ $errors->first('no_base') }}</p> @endif
	  	</div>

	  	<div class="form-group @if ($errors->has('sample')) has-error @endif">
	        {!! Form::label("sample","SAMPLE",["class"=>"control-label"]) !!}
	        {!! Form::text("sample",null,['class'=>'form-control', 'placeholder'=>'Masukan data ..','id'=>'sample','autocomplete' => 'off']) !!}
	        @if ($errors->has('sample')) <p class="text-center alert alert-danger">{{ $errors->first('sample') }}</p> @endif
	  	</div>

	  	<div class="form-group @if ($errors->has('kol_lsmk')) has-error @endif">
	        {!! Form::label("kol_lsmk","KOL LSMK",["class"=>"control-label"]) !!}
	        {!! Form::number("kol_lsmk",null,['class'=>'form-control', 'placeholder'=>'Masukan data ..','id'=>'kol_lsmk','autocomplete' => 'off']) !!}
	        @if ($errors->has('kol_lsmk')) <p class="text-center alert alert-danger">{{ $errors->first('kol_lsmk') }}</p> @endif
	  	</div>

	  	<div class="form-group @if ($errors->has('sample2')) has-error @endif">
	        {!! Form::label("sample2","SAMPLE",["class"=>"control-label"]) !!}
	        {!! Form::text("sample2",null,['class'=>'form-control', 'placeholder'=>'Masukan data ..','id'=>'sample2','autocomplete' => 'off']) !!}
	        @if ($errors->has('sample2')) <p class="text-center alert alert-danger">{{ $errors->first('sample2') }}</p> @endif
	  	</div>
    </div>
    <div class="col-md-4">
    	<div class="form-group @if ($errors->has('nama')) has-error @endif">
	        {!! Form::label("nama","NAMA",["class"=>"control-label"]) !!}
	        {!! Form::text("nama",null,['class'=>'form-control', 'placeholder'=>'Masukan data ..','id'=>'nama','autocomplete' => 'off']) !!}
	        @if ($errors->has('nama')) <p class="text-center alert alert-danger">{{ $errors->first('nama') }}</p> @endif
	  	</div>

	  	<div class="form-group @if ($errors->has('outstanding')) has-error @endif">
	        {!! Form::label("outstanding","OUTSTANDING",["class"=>"control-label"]) !!}
	        {!! Form::number("outstanding",null,['class'=>'form-control', 'placeholder'=>'Masukan data ..','id'=>'outstanding','autocomplete' => 'off']) !!}
	        @if ($errors->has('outstanding')) <p class="text-center alert alert-danger">{{ $errors->first('outstanding') }}</p> @endif
	  	</div>

	  	<div class="form-group @if ($errors->has('kol_1_pilar')) has-error @endif">
	        {!! Form::label("kol_1_pilar","KOL 1 PILAR",["class"=>"control-label"]) !!}
	        {!! Form::number("kol_1_pilar",null,['class'=>'form-control', 'placeholder'=>'Masukan data ..','id'=>'kol_1_pilar','autocomplete' => 'off']) !!}
	        @if ($errors->has('kol_1_pilar')) <p class="text-center alert alert-danger">{{ $errors->first('kol_1_pilar') }}</p> @endif
	  	</div>

	  	<div class="form-group @if ($errors->has('kol_auditor')) has-error @endif">
	        {!! Form::label("kol_auditor","KOL AUDITOR",["class"=>"control-label"]) !!}
	        {!! Form::number("kol_auditor",null,['class'=>'form-control', 'placeholder'=>'Masukan data ..','id'=>'kol_auditor','autocomplete' => 'off']) !!}
	        @if ($errors->has('kol_auditor')) <p class="text-center alert alert-danger">{{ $errors->first('kol_auditor') }}</p> @endif
	  	</div>
    </div>
    <div class="col-md-4">
    	<div class="form-group @if ($errors->has('stat')) has-error @endif">
	        {!! Form::label("stat","STAT",["class"=>"control-label"]) !!}
	        {!! Form::text("stat",null,['class'=>'form-control', 'placeholder'=>'Masukan data ..','id'=>'stat','autocomplete' => 'off']) !!}
	        @if ($errors->has('stat')) <p class="text-center alert alert-danger">{{ $errors->first('stat') }}</p> @endif
	  	</div>

	  	<div class="form-group @if ($errors->has('ppap_tb')) has-error @endif">
	        {!! Form::label("ppap_tb","PPAP TB",["class"=>"control-label"]) !!}
	        {!! Form::number("ppap_tb",null,['class'=>'form-control', 'placeholder'=>'Masukan data ..','id'=>'ppap_tb','autocomplete' => 'off']) !!}
	        @if ($errors->has('ppap_tb')) <p class="text-center alert alert-danger">{{ $errors->first('ppap_tb') }}</p> @endif
	  	</div>

	  	<div class="form-group @if ($errors->has('kol_3_pilar')) has-error @endif">
	        {!! Form::label("kol_3_pilar","KOL 3 PILAR",["class"=>"control-label"]) !!}
	        {!! Form::number("kol_3_pilar",null,['class'=>'form-control', 'placeholder'=>'Masukan data ..','id'=>'kol_3_pilar','autocomplete' => 'off']) !!}
	        @if ($errors->has('kol_3_pilar')) <p class="text-center alert alert-danger">{{ $errors->first('kol_3_pilar') }}</p> @endif
	  	</div>

	  	<div class="form-group @if ($errors->has('aydd_auditor')) has-error @endif">
	        {!! Form::label("aydd_auditor","AYDD AUDITOR",["class"=>"control-label"]) !!}
	        {!! Form::number("aydd_auditor",null,['class'=>'form-control', 'placeholder'=>'Masukan data ..','id'=>'aydd_auditor','autocomplete' => 'off']) !!}
	        @if ($errors->has('aydd_auditor')) <p class="text-center alert alert-danger">{{ $errors->first('aydd_auditor') }}</p> @endif
	  	</div>
    </div>
</div>