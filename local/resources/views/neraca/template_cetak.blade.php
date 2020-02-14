<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="_token" content="{{ csrf_token() }}"/>
	<title>HASIL PERHITUNGAN</title>
	<link rel="icon" type="image/ico" href="{{ asset('/arsip/fileMaster/logo.png')}}">
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<style>
		body{
			font-weight: normal;
			background-image: url('arsip/fileMaster/logopdfbw.png');
			background-position: center;
			background-repeat: no-repeat;
			
		}

		table, th, td {
		  border: 0.1em solid black;
		  border-collapse: collapse;
		  vertical-align: top;
		}

		th, td {
		  padding: 5px;  
		}

		p{
			font-size: 10px;
			margin-bottom: -3px;
		}

		.page-break {
		    page-break-after: always;
		}

		header {
            position: fixed;
            top: -30px;
              
            /** Extra personal styles **/
            text-align: left;
            font-size: 0.85em;
            font-weight: bolder;
        }

        tr:nth-child(even) {
		  background-color: #f2f2f2;
		}

	</style>
</head>
<body>
<header>
    HASIL PERHITUNGAN
</header>
<div class="wraper">
	<table style="width:100%; font-size: 0.55em;">
    <thead style="font-size: 1em; font-weight: 700; background-color: #fff1bf;">
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
<script type="text/php">
    if ( isset($pdf) ) {
        $x = 535;
        $y = 575;
        $text = "Copyright 2020 OJK - Dicetak tanggal {{ date('d-m-Y') }} dari APP NENO OJK - Page : {PAGE_NUM} of {PAGE_COUNT}";
        $font = $fontMetrics->get_font("Arial", "italic");
        $size = 7;
        $color = array(0,0,0);
        $word_space = 0.0;  //  default
        $char_space = 0.0;  //  default
        $angle = 0.0;   //  default
        $pdf->page_text($x, $y, $text, $font, $size, $color, $word_space, $char_space, $angle);
    }
</script>  
</body>
</html>