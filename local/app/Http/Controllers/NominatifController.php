<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input; 

use App\Nominatif;
use App\User;
use App\ErrorRekon;

use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\RekonRequest;
use App\Http\Requests\NominatifRequest;
use Carbon\Carbon;
use Validator;
use Response;

class NominatifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nominatif_list = Nominatif::orderBy('nama', 'asc')->get();
        $jumlah_data = $nominatif_list->count();
        return view('nominatif.index',compact('nominatif_list','jumlah_data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function halRekon()
    {
        return view('nominatif.rekon');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nominatif.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function download()
    {
        $kategori = Input::get('kategori');
        $file = 'arsip/fileMaster/template_rekon_'.$kategori.'.xls';
        $name = basename($file);
        return response()->download($file, $name);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function drekonError()
    {
        $kategori = Input::get('kategori');
        Excel::create('daftar_gagal_import_'.$kategori, function($excel) {
            $excel->sheet('DATA', function($sheet) {
                $kategori = Input::get('kategori');
                $tingkat_list = DB::table('error_rekonpeg')->where('tipe',$kategori)->get();
                $jumlah_tingkat = $tingkat_list->count();
                $banyak_baris = $jumlah_tingkat+3;
                $sheet->mergeCells('A1:C1');
                $sheet->setWidth(array(
                    'A' =>  10,
                    'B' =>  60,
                    'C' => 60,
                ));
                $sheet->setFontFamily('Arial');
                $sheet->cells('A3:C3', function($cells) {
                    $cells->setBackground('#F2F1F8');
                    $cells->setBorder('thin', 'thin', 'medium', 'thin');
                });
                $sheet->cells('A4:C'.$banyak_baris, function($cells) {
                    $cells->setBorder('thin', 'thin', 'thin', 'thin');
                });
                $sheet->loadView('nominatif.template_error')->with('tingkat_list', $tingkat_list);

            });
        })->export('xls');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function rekons(RekonRequest $request)
    { 
        $kategori = Input::get('kategori');
        ErrorRekon::truncate();
        if($kategori == 'nasabah'){
            if($request->has('dokumen')) {
                $path = $request->file('dokumen')->getRealPath();

                $import_data = Excel::load($path, function($reader){
                    $hasil = $reader->select(array('no_base','nama','stat','sample','outstanding','ppap_tb','kol_lsmk','kol_1_pilar','kol_3_pilar','sample2','kol_auditor','aydd_auditor'))->get();
                })->get();

                $import_data_filter = array_filter($import_data->toArray());
                if(!empty($import_data_filter && sizeof($import_data_filter))){
                    $export_error_data = $import_data_filter;
                    $datacount = sizeof($export_error_data);
                    if ($datacount <= 200 ) {
                        $j = 0; $k = 0; $l = 0;
                        for ($i = 0; $i < $datacount; $i++) {
                            $a =0;
                            if (isset($export_error_data[$i]['no_base']) && isset($export_error_data[$i]['nama']) && isset($export_error_data[$i]['stat']) && isset($export_error_data[$i]['sample']) && isset($export_error_data[$i]['outstanding']) && isset($export_error_data[$i]['ppap_tb']) && isset($export_error_data[$i]['kol_lsmk']) && isset($export_error_data[$i]['kol_1_pilar']) && isset($export_error_data[$i]['kol_3_pilar']) && isset($export_error_data[$i]['sample2']) && isset($export_error_data[$i]['kol_auditor']) && isset($export_error_data[$i]['aydd_auditor'])) {

                                $export_error_data[$i]['referensi'] = hash('md5',$export_error_data[$i]['nama'].$export_error_data[$i]['no_base']);

                                //Diganti
                                $nama_rekon = "Eko Tulus";

                                $export_error_data[$i]['rekaman'] = "Rekon by ".$nama_rekon; 
                                $user_data = Nominatif::all()->toArray();
                                foreach ($user_data as $key => $value) {
                                    if ($value['referensi'] == $export_error_data[$i]['referensi']) {
                                        ++$j;
                                        $a = 1;
                                        
                                    }
                                }

                                if($j != NULL){
                                    DB::table('error_rekonpeg')
                                            ->insert([
                                            'nama_pegawai' => $export_error_data[$i]['nama'],
                                            'keterangan' => 'Duplikasi Data',
                                            'tipe' => $kategori,
                                        ]);
                                }

                                if($a != 1){   
                                    $dataImported = $export_error_data[$i];
                                    unset($export_error_data[$i]);
                                    $simpan = Nominatif::create($dataImported);
                                }
                            }else{
                                $notification = array(
                                    'message' => 'Header Data Import Excel Tidak Sesuai / Terdapat Field Wajib yang Kosong !',
                                    'alert-type' => 'error',
                                );
                                return redirect()->back()->with($notification);
                            }
                        }

                        if($a == 1){
                            $notification = array(
                                'message' => 'Beberapa Data Gagal Import !',
                                'alert-type' => 'warning',
                            );
                            return redirect()->back()->with($notification);
                        }else{
                            $notification = array(
                                'message' => 'Import Data Berhasil !',
                                'alert-type' => 'success',
                            );
                            return redirect()->back()->with($notification);
                        }

                    }else{
                        $notification = array(
                            'message' => 'Maksimal input data adalah 200 data !',
                            'alert-type' => 'error',
                        );
                        return redirect()->back()->with($notification);
                    }
                }else{
                    $notification = array(
                        'message' => 'Header Data Import Excel Tidak Sesuai !',
                        'alert-type' => 'error',
                    );
                    return redirect()->back()->with($notification);
                }
            }
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NominatifRequest $request)
    {
        //Diganti
        $nama_pegawai = "Eko Tulus";

        $input = $request->all();
        $input['nama'] = strtoupper($request->nama);
        $input['stat'] = strtoupper($request->stat);
        $input['sample'] = strtoupper($request->sample);
        $input['sample2'] = strtoupper($request->sample2);
        $gabung = $input['nama'].$input['no_base'];
        $input['referensi'] = hash('md5',$gabung);

        $input['rekaman'] = "Created by ".$nama_pegawai;
        $simpan = Nominatif::create($input);

        $notification = array(
            'message' => 'Proses Berhasil!', 
            'alert-type' => 'success'
        );

        return redirect('nominatif')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $referensi = Nominatif::where('referensi',$id)->value('id');
        $nominatif = Nominatif::findOrFail($referensi);
        if (($nominatif->outstanding - $nominatif->aydd_auditor) > 0) {
            $os_aydd = $nominatif->outstanding - $nominatif->aydd_auditor;
        }else{
            $os_aydd = 0;
        }

        switch ($nominatif->kol_lsmk) {
            case "1":
                $tarif_ppa = 1;
                break;
            case "2":
                $tarif_ppa = 2;
                break;
            case "3":
                $tarif_ppa = 15;
                break;
            case "4":
                $tarif_ppa = 50;
                break;
            default:
                $tarif_ppa = 100;
        }

        $ppa_wb = round(($os_aydd * $tarif_ppa)/100);

        $ppa_kb = $ppa_wb - $nominatif->ppap_tb;

        switch ($nominatif->kol_1_pilar) {
            case "1":
                $tarif_ppa_kol_1_pilar = 1;
                break;
            case "2":
                $tarif_ppa_kol_1_pilar = 2;
                break;
            case "3":
                $tarif_ppa_kol_1_pilar = 15;
                break;
            case "4":
                $tarif_ppa_kol_1_pilar = 50;
                break;
            default:
                $tarif_ppa_kol_1_pilar = 100;
        }

        $ppa_wb2 = round(($os_aydd * $tarif_ppa_kol_1_pilar)/100);

        $ppa_kb_1_pilar = $ppa_wb2 - $nominatif->ppap_tb;

        switch ($nominatif->kol_3_pilar) {
            case "1":
                $tarif_ppa_kol_3_pilar = 1;
                break;
            case "2":
                $tarif_ppa_kol_3_pilar = 2;
                break;
            case "3":
                $tarif_ppa_kol_3_pilar = 15;
                break;
            case "4":
                $tarif_ppa_kol_3_pilar = 50;
                break;
            default:
                $tarif_ppa_kol_3_pilar = 100;
        }

        $ppa_wb3 = round(($os_aydd * $tarif_ppa_kol_3_pilar)/100);

        $ppa_kb_3_pilar = $ppa_wb3 - $nominatif->ppap_tb;

        return view('nominatif.show',compact('nominatif','os_aydd','tarif_ppa','ppa_wb','ppa_kb','tarif_ppa_kol_1_pilar','ppa_wb2','ppa_kb_1_pilar','ppa_wb3','ppa_kb_3_pilar','tarif_ppa_kol_3_pilar'));
    }

    public function export() {
        Excel::create('generate_nominatif', function($excel) {
            $excel->sheet('DATA', function($sheet) {
                $nominatif_list = Nominatif::orderBy('nama', 'asc')->get();
                $jumlah_data = $nominatif_list->count();
                $jumlah_ppa_kb[0] = 0;
                $jumlah_ppa_kb_1_pilar[0] = 0;
                $jumlah_ppa_kb_3_pilar[0] = 0;

                foreach ($nominatif_list as $key => $nominatif) {
                    if (($nominatif->outstanding - $nominatif->aydd_auditor) > 0) {
                        $os_aydd[$key] = $nominatif->outstanding - $nominatif->aydd_auditor;
                    }else{
                        $os_aydd[$key] = 0;
                    }

                    switch ($nominatif->kol_lsmk) {
                        case "1":
                            $tarif_ppa[$key] = 1;
                            break;
                        case "2":
                            $tarif_ppa[$key] = 2;
                            break;
                        case "3":
                            $tarif_ppa[$key] = 15;
                            break;
                        case "4":
                            $tarif_ppa[$key] = 50;
                            break;
                        default:
                            $tarif_ppa[$key] = 100;
                    }

                    $ppa_wb[$key] = round(($os_aydd[$key] * $tarif_ppa[$key])/100);

                    $ppa_kb[$key] = $ppa_wb[$key] - $nominatif->ppap_tb;

                    $jumlah_ppa_kb[$key+1] = $jumlah_ppa_kb[$key] + $ppa_kb[$key]; 

                    switch ($nominatif->kol_1_pilar) {
                        case "1":
                            $tarif_ppa_kol_1_pilar[$key] = 1;
                            break;
                        case "2":
                            $tarif_ppa_kol_1_pilar[$key] = 2;
                            break;
                        case "3":
                            $tarif_ppa_kol_1_pilar[$key] = 15;
                            break;
                        case "4":
                            $tarif_ppa_kol_1_pilar[$key] = 50;
                            break;
                        default:
                            $tarif_ppa_kol_1_pilar[$key] = 100;
                    }

                    $ppa_wb2[$key] = round(($os_aydd[$key] * $tarif_ppa_kol_1_pilar[$key])/100);

                    $ppa_kb_1_pilar[$key] = $ppa_wb2[$key] - $nominatif->ppap_tb;

                    $jumlah_ppa_kb_1_pilar[$key+1] = $jumlah_ppa_kb_1_pilar[$key] + $ppa_kb_1_pilar[$key];

                    switch ($nominatif->kol_3_pilar) {
                        case "1":
                            $tarif_ppa_kol_3_pilar[$key] = 1;
                            break;
                        case "2":
                            $tarif_ppa_kol_3_pilar[$key] = 2;
                            break;
                        case "3":
                            $tarif_ppa_kol_3_pilar[$key] = 15;
                            break;
                        case "4":
                            $tarif_ppa_kol_3_pilar[$key] = 50;
                            break;
                        default:
                            $tarif_ppa_kol_3_pilar[$key] = 100;
                    }

                    $ppa_wb3[$key] = round(($os_aydd[$key] * $tarif_ppa_kol_3_pilar[$key])/100);

                    $ppa_kb_3_pilar[$key] = $ppa_wb3[$key] - $nominatif->ppap_tb;

                    $jumlah_ppa_kb_3_pilar[$key+1] = $jumlah_ppa_kb_3_pilar[$key] + $ppa_kb_3_pilar[$key];
                }     
                $jumlah_outstanding = Nominatif::sum('outstanding');
                $jumlah_ppap_tb = Nominatif::sum('ppap_tb');
                $jumlah_aydd_auditor = Nominatif::sum('aydd_auditor'); 

                $jumlah_ppa_kb1 = $jumlah_ppa_kb[$key+1];
                $jumlah_ppa_kb2 = $jumlah_ppa_kb_1_pilar[$key+1];
                $jumlah_ppa_kb3 = $jumlah_ppa_kb_3_pilar[$key+1];       

                $sheet->mergeCells('A1:V1');
                $sheet->setFontFamily('Arial');

                $sheet->loadView('nominatif.template_export',compact('nominatif_list','os_aydd','tarif_ppa','ppa_wb','ppa_kb','tarif_ppa_kol_1_pilar','ppa_wb2','ppa_kb_1_pilar','ppa_wb3','ppa_kb_3_pilar','tarif_ppa_kol_3_pilar','jumlah_outstanding','jumlah_ppap_tb','jumlah_aydd_auditor','jumlah_ppa_kb1','jumlah_ppa_kb2','jumlah_ppa_kb3'));
            });

            $lastrow= $excel->getActiveSheet()->getHighestRow();    
            $excel->getActiveSheet()->getStyle('A1:V'.$lastrow)->getAlignment()->setWrapText(true);
            $excel->getActiveSheet()->getStyle('A1:V'.$lastrow)->getAlignment()->applyFromArray(
                        array('vertical' => 'top'));
        })->export('xls');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $referensi = Nominatif::where('referensi',$id)->value('id');
        $nominatif = Nominatif::findOrFail($referensi);
        return view('nominatif.edit',compact('nominatif'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NominatifRequest $request, $id)
    {
        //Diganti
        $nama_pegawai = "Eko Tulus";

        $data= Nominatif::findOrFail($id);
        $input = $request->all();

        $input['nama'] = strtoupper($request->nama);
        $gabung = $input['nama'].$input['no_base'];
        $input['referensi'] = hash('md5',$gabung);
        $input['stat'] = strtoupper($request->stat);
        $input['sample'] = strtoupper($request->sample);
        $input['sample2'] = strtoupper($request->sample2);

        $input['rekaman'] = "Edited by ".$nama_pegawai;
            
        $data->update($input);
        $notification = array(
                'message' => 'Proses Berhasil!', 
                'alert-type' => 'success'
        );
        return redirect('nominatif')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus= Nominatif::findOrFail($id);
        $hapus->delete();
        return response()->json($hapus);
    }

    private function generateRandomString($length){ 
        $characters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $charsLength = strlen($characters) -1;
        $string = "";
        for($i=0; $i<$length; $i++){
            $randNum = mt_rand(0, $charsLength);
            $string .= $characters[$randNum];
        }
        return $string;
    }
}
