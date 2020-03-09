<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\NeracaRequest;
use App\Bank;
use App\Aset;
use App\Equitas;
use App\Liabilitas;
use App\LabaRugi;
use App\KPMM;
use App\User;
use App\Nominatif;

use PDF;
use Carbon\Carbon;
use Validator;
use Response;

class NeracaController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        // $this->middleware('analis');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $neraca_list = Bank::orderBy('nama_bank', 'asc')->get();
        $jumlah_data = $neraca_list->count();
        foreach ($neraca_list as $key => $neraca) {
            $pembuat[$key] = DB::table('aset')->where('id_bank',$neraca->id)->value('rekaman');
        }
        return view('neraca.index',compact('neraca_list','jumlah_data','pembuat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('neraca.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NeracaRequest $request)
    {
        $id_pegawai = Auth::user()->id;
        $input = $request->all();
        $input['nama_bank'] = strtoupper($request->nama_bank);
        $input['tanggal'] = date("Y-m-d", strtotime($input['tanggal']));
        
        $gabung = $input['nama_bank'].$input['tanggal'].$this->generateRandomString(6);
        $input['referensi'] = hash('md5',$gabung);
        $input['id_pegawai'] = Auth::user()->id;
        $simpan_bank = Bank::create($input);

        $id_bank = Bank::where('referensi',$input['referensi'])->value('id');
        $nama_pegawai = User::where('id',$id_pegawai)->value('nama');
        $input['id_bank'] = $id_bank;
        $input['rekaman'] = "Created by ".$nama_pegawai;
        $simpan_aset = Aset::create($input);
        $simpan_equitas = Equitas::create($input);
        $simpan_kpmm = KPMM::create($input);
        $simpan_labarugi = LabaRugi::create($input);
        $simpan_liabilitas = Liabilitas::create($input);

        $notification = array(
            'message' => 'Proses Berhasil!', 
            'alert-type' => 'success'
        );

        return redirect('neraca/'.$input['referensi'])->with($notification);
    }

    public function ckpnAsets0(){
        $nominatif_list = Nominatif::orderBy('nama', 'asc')->get();
        $jumlah_data = $nominatif_list->count();
            if ($jumlah_data != NULL) {
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

                    return ($jumlah_ppa_kb1/1000000)*-1;
            }else{
                return 0;
            }
    }

    public function ckpnAsets1(){
        $nominatif_list = Nominatif::orderBy('nama', 'asc')->get();
        $jumlah_data = $nominatif_list->count();
            if ($jumlah_data != NULL) {
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

                    return ($jumlah_ppa_kb2/1000000)*-1;
            }else{
                return 0;
            }
    }

    public function ckpnAsets3(){
        $nominatif_list = Nominatif::orderBy('nama', 'asc')->get();
        $jumlah_data = $nominatif_list->count();
            if ($jumlah_data != NULL) {
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

                    return ($jumlah_ppa_kb3/1000000)*-1;
            }else{
                return 0;
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $referensis = $id;
        $referensi = Bank::where('referensi',$id)->value('id');
        $data = Bank::findOrFail($referensi);
        //KATEGORI ASET
        $id_aset = Aset::where('referensi',$data->referensi)->value('id');
        $aset = Aset::findOrFail($id_aset);
        $total1_kas = $aset->kas_utama + $aset->kas_d1 - $aset->kas_k1;
        $total2_kas = $aset->kas_utama + $aset->kas_d2 - $aset->kas_k2;
        $total3_kas = $aset->kas_utama + $aset->kas_d3 - $aset->kas_k3;
        $total1_penempatan_bi = $aset->penempatan_bi_utama + $aset->penempatan_bi_d1 - $aset->penempatan_bi_k1;
        $total2_penempatan_bi = $aset->penempatan_bi_utama + $aset->penempatan_bi_d2 - $aset->penempatan_bi_k2;
        $total3_penempatan_bi = $aset->penempatan_bi_utama + $aset->penempatan_bi_d3 - $aset->penempatan_bi_k3;
        $total1_penempatan_lain = $aset->penempatan_lain_utama + $aset->penempatan_lain_d1 - $aset->penempatan_lain_k1;
        $total2_penempatan_lain = $aset->penempatan_lain_utama + $aset->penempatan_lain_d2 - $aset->penempatan_lain_k2;
        $total3_penempatan_lain = $aset->penempatan_lain_utama + $aset->penempatan_lain_d3 - $aset->penempatan_lain_k3;
        $total1_suber = $aset->suber_utama + $aset->suber_d1 - $aset->suber_k1;
        $total2_suber = $aset->suber_utama + $aset->suber_d2 - $aset->suber_k2;
        $total3_suber = $aset->suber_utama + $aset->suber_d3 - $aset->suber_k3;
        $total1_kolektibilitas1 = $aset->kolektibilitas1_utama + $aset->kolektibilitas1_d1 - $aset->kolektibilitas1_k1;
        $total2_kolektibilitas1 = $aset->kolektibilitas1_utama + $aset->kolektibilitas1_d2 - $aset->kolektibilitas1_k2;
        $total3_kolektibilitas1 = $aset->kolektibilitas1_utama + $aset->kolektibilitas1_d3 - $aset->kolektibilitas1_k3;
        $total1_kolektibilitas2 = $aset->kolektibilitas2_utama + $aset->kolektibilitas2_d1 - $aset->kolektibilitas2_k1;
        $total2_kolektibilitas2 = $aset->kolektibilitas2_utama + $aset->kolektibilitas2_d2 - $aset->kolektibilitas2_k2;
        $total3_kolektibilitas2 = $aset->kolektibilitas2_utama + $aset->kolektibilitas2_d3 - $aset->kolektibilitas2_k3;
        $total1_kolektibilitas3 = $aset->kolektibilitas3_utama + $aset->kolektibilitas3_d1 - $aset->kolektibilitas3_k1;
        $total2_kolektibilitas3 = $aset->kolektibilitas3_utama + $aset->kolektibilitas3_d2 - $aset->kolektibilitas3_k2;
        $total3_kolektibilitas3 = $aset->kolektibilitas3_utama + $aset->kolektibilitas3_d3 - $aset->kolektibilitas3_k3;
        $total1_kolektibilitas4 = $aset->kolektibilitas4_utama + $aset->kolektibilitas4_d1 - $aset->kolektibilitas4_k1;
        $total2_kolektibilitas4 = $aset->kolektibilitas4_utama + $aset->kolektibilitas4_d2 - $aset->kolektibilitas4_k2;
        $total3_kolektibilitas4 = $aset->kolektibilitas4_utama + $aset->kolektibilitas4_d3 - $aset->kolektibilitas4_k3;
        $total1_kolektibilitas5 = $aset->kolektibilitas5_utama + $aset->kolektibilitas5_d1 - $aset->kolektibilitas5_k1;
        $total2_kolektibilitas5 = $aset->kolektibilitas5_utama + $aset->kolektibilitas5_d2 - $aset->kolektibilitas5_k2;
        $total3_kolektibilitas5 = $aset->kolektibilitas5_utama + $aset->kolektibilitas5_d3 - $aset->kolektibilitas5_k3;

        $pembiayaan_utama = $aset->kolektibilitas1_utama + $aset->kolektibilitas2_utama + $aset->kolektibilitas3_utama + $aset->kolektibilitas4_utama + $aset->kolektibilitas5_utama;
        $pembiayaan_d1 = $aset->kolektibilitas1_d1 + $aset->kolektibilitas2_d1 + $aset->kolektibilitas3_d1 + $aset->kolektibilitas4_d1 + $aset->kolektibilitas5_d1;
        $pembiayaan_k1 = $aset->kolektibilitas1_k1 + $aset->kolektibilitas2_k1 + $aset->kolektibilitas3_k1 + $aset->kolektibilitas4_k1 + $aset->kolektibilitas5_k1;
        $pembiayaan_d2 = $aset->kolektibilitas1_d2 + $aset->kolektibilitas2_d2 + $aset->kolektibilitas3_d2 + $aset->kolektibilitas4_d2 + $aset->kolektibilitas5_d2;
        $pembiayaan_k2 = $aset->kolektibilitas1_k2 + $aset->kolektibilitas2_k2 + $aset->kolektibilitas3_k2 + $aset->kolektibilitas4_k2 + $aset->kolektibilitas5_k2;
        $pembiayaan_d3 = $aset->kolektibilitas1_d3 + $aset->kolektibilitas2_d3 + $aset->kolektibilitas3_d3 + $aset->kolektibilitas4_d3 + $aset->kolektibilitas5_d3;
        $pembiayaan_k3 = $aset->kolektibilitas1_k3 + $aset->kolektibilitas2_k3 + $aset->kolektibilitas3_k3 + $aset->kolektibilitas4_k3 + $aset->kolektibilitas5_k3;
        $total1_pembiayaan = $total1_kolektibilitas1 + $total1_kolektibilitas2 + $total1_kolektibilitas3 + $total1_kolektibilitas4 + $total1_kolektibilitas5;
        $total2_pembiayaan = $total2_kolektibilitas1 + $total2_kolektibilitas2 + $total2_kolektibilitas3 + $total2_kolektibilitas4 + $total2_kolektibilitas5;
        $total3_pembiayaan = $total3_kolektibilitas1 + $total3_kolektibilitas2 + $total3_kolektibilitas3 + $total3_kolektibilitas4 + $total3_kolektibilitas5;

        $total1_penyertaan = $aset->penyertaan_utama + $aset->penyertaan_d1 - $aset->penyertaan_k1;
        $total2_penyertaan = $aset->penyertaan_utama + $aset->penyertaan_d2 - $aset->penyertaan_k2;
        $total3_penyertaan = $aset->penyertaan_utama + $aset->penyertaan_d3 - $aset->penyertaan_k3;

        $nominatif_list = Nominatif::get();
        $jumlah_nominatif = $nominatif_list->count();
        if ($jumlah_nominatif != NULL) {
            $aset->ckpnp_k1 = round($this->ckpnAsets0());
            $aset->ckpnp_k3 = round($this->ckpnAsets1());
            $aset->ckpnp_k2 = round($this->ckpnAsets3());
        }
        $total1_ckpnp = $aset->ckpnp_utama - $aset->ckpnp_d1 + $aset->ckpnp_k1;
        $total2_ckpnp = $aset->ckpnp_utama - $aset->ckpnp_d2 + $aset->ckpnp_k2;
        $total3_ckpnp = $aset->ckpnp_utama - $aset->ckpnp_d3 + $aset->ckpnp_k3;
        $total1_astet = $aset->astet_utama + $aset->astet_d1 - $aset->astet_k1;
        $total2_astet = $aset->astet_utama + $aset->astet_d2 - $aset->astet_k2;
        $total3_astet = $aset->astet_utama + $aset->astet_d3 - $aset->astet_k3;
        $total1_akumulasi = $aset->akumulasi_utama + $aset->akumulasi_d1 - $aset->akumulasi_k1;
        $total2_akumulasi = $aset->akumulasi_utama + $aset->akumulasi_d2 - $aset->akumulasi_k2;
        $total3_akumulasi = $aset->akumulasi_utama + $aset->akumulasi_d3 - $aset->akumulasi_k3;
        $total1_properti = $aset->properti_utama + $aset->properti_d1 - $aset->properti_k1;
        $total2_properti = $aset->properti_utama + $aset->properti_d2 - $aset->properti_k2;
        $total3_properti = $aset->properti_utama + $aset->properti_d3 - $aset->properti_k3;
        $total1_ayda = $aset->ayda_utama + $aset->ayda_d1 - $aset->ayda_k1;
        $total2_ayda = $aset->ayda_utama + $aset->ayda_d2 - $aset->ayda_k2;
        $total3_ayda = $aset->ayda_utama + $aset->ayda_d3 - $aset->ayda_k3;
        $total1_rekening = $aset->rekening_utama + $aset->rekening_d1 - $aset->rekening_k1;
        $total2_rekening = $aset->rekening_utama + $aset->rekening_d2 - $aset->rekening_k2;
        $total3_rekening = $aset->rekening_utama + $aset->rekening_d3 - $aset->rekening_k3;
        $ckpnl_k1 = ($aset->rekening_d1 + $aset->ayda_d1)*-1;
        $ckpnl_k2 = ($aset->rekening_d2 + $aset->ayda_d2)*-1;
        $ckpnl_k3 = ($aset->rekening_d3 + $aset->ayda_d3)*-1;
        $total1_ckpnl = $aset->ckpnl_utama + $ckpnl_k1 - $aset->ckpnl_d1;
        $total2_ckpnl = $aset->ckpnl_utama + $ckpnl_k2 - $aset->ckpnl_d2;
        $total3_ckpnl = $aset->ckpnl_utama + $ckpnl_k3 - $aset->ckpnl_d3;
        $lain_d1 = 6000000-(($pembiayaan_d1 - $pembiayaan_k1)+$aset->rekening_d1 + $aset->ayda_d1)+400000;
        $lain_d2 = 6000000-(($pembiayaan_d2 - $pembiayaan_k2)+$aset->rekening_d2 + $aset->ayda_d2)+400000;
        $lain_d3 = 6000000-(($pembiayaan_d3 - $pembiayaan_k3)+$aset->rekening_d3 + $aset->ayda_d3)+400000;
        $total1_lain = $aset->lain_utama + $lain_d1 - $aset->lain_k1;
        $total2_lain = $aset->lain_utama + $lain_d2 - $aset->lain_k2;
        $total3_lain = $aset->lain_utama + $lain_d3 - $aset->lain_k3;

        $total_aset = $aset->kas_utama + $aset->penempatan_bi_utama + $aset->penempatan_lain_utama + $aset->suber_utama + $pembiayaan_utama + $aset->penyertaan_utama + $aset->ckpnl_utama + $aset->ckpnp_utama + $aset->astet_utama + $aset->akumulasi_utama + $aset->properti_utama + $aset->ayda_utama + $aset->rekening_utama + $aset->lain_utama;
        $total_aset_d1 = $pembiayaan_d1 + $aset->ayda_d1 + $aset->rekening_d1 + $lain_d1;
        $total_aset_k1 = $pembiayaan_k1 + $aset->ayda_k1 + $aset->rekening_k1 + $aset->lain_k1;
        $total_aset1 = $total1_kas + $total1_penempatan_bi + $total1_penempatan_lain + $total1_suber + $total1_pembiayaan + $total1_penyertaan + $total1_ckpnl + $total1_ckpnp + $total1_astet + $total1_akumulasi + $total1_properti + $total1_ayda + $total1_rekening + $total1_lain;
        $total_aset_d2 = $pembiayaan_d2 + $aset->ayda_d2 + $aset->rekening_d2 + $lain_d2;
        $total_aset_k2 = $pembiayaan_k2 + $aset->ayda_k2 + $aset->rekening_k2 + $aset->lain_k2;
        $total_aset2 = $total2_kas + $total2_penempatan_bi + $total2_penempatan_lain + $total2_suber + $total2_pembiayaan + $total2_penyertaan + $total2_ckpnl + $total2_ckpnp + $total2_astet + $total2_akumulasi + $total2_properti + $total2_ayda + $total2_rekening + $total2_lain;
        $total_aset_d3 = $pembiayaan_d3 + $aset->ayda_d3 + $aset->rekening_d3 + $lain_d3;
        $total_aset_k3 = $pembiayaan_k3 + $aset->ayda_k3 + $aset->rekening_k3 + $aset->lain_k3;
        $total_aset3 = $total3_kas + $total3_penempatan_bi + $total3_penempatan_lain + $total3_suber + $total3_pembiayaan + $total3_penyertaan + $total3_ckpnl + $total3_ckpnp + $total3_astet + $total3_akumulasi + $total3_properti + $total3_ayda + $total3_rekening + $total3_lain;

        //KATEGORI LIABILITAS
        $id_liabilitas = Liabilitas::where('referensi',$data->referensi)->value('id');
        $liabilitas = Liabilitas::findOrFail($id_liabilitas);
        $total1_dana = $liabilitas->dana_utama - $liabilitas->dana_d1 + $liabilitas->dana_k1;
        $total2_dana = $liabilitas->dana_utama - $liabilitas->dana_d2 + $liabilitas->dana_k2;
        $total3_dana = $liabilitas->dana_utama - $liabilitas->dana_d3 + $liabilitas->dana_k3;

        $total1_liabilitas_bi = $liabilitas->liabilitas_bi_utama - $liabilitas->liabilitas_bi_d1 + $liabilitas->liabilitas_bi_k1;
        $total2_liabilitas_bi = $liabilitas->liabilitas_bi_utama - $liabilitas->liabilitas_bi_d2 + $liabilitas->liabilitas_bi_k2;
        $total3_liabilitas_bi = $liabilitas->liabilitas_bi_utama - $liabilitas->liabilitas_bi_d3 + $liabilitas->liabilitas_bi_k3;

        $total1_liabilitas_lain = $liabilitas->liabilitas_lain_utama - $liabilitas->liabilitas_lain_d1 + $liabilitas->liabilitas_lain_k1;
        $total2_liabilitas_lain = $liabilitas->liabilitas_lain_utama - $liabilitas->liabilitas_lain_d2 + $liabilitas->liabilitas_lain_k2;
        $total3_liabilitas_lain = $liabilitas->liabilitas_lain_utama - $liabilitas->liabilitas_lain_d3 + $liabilitas->liabilitas_lain_k3;

        $total1_suberl = $liabilitas->suberl_utama - $liabilitas->suberl_d1 + $liabilitas->suberl_k1;
        $total2_suberl = $liabilitas->suberl_utama - $liabilitas->suberl_d2 + $liabilitas->suberl_k2;
        $total3_suberl = $liabilitas->suberl_utama - $liabilitas->suberl_d3 + $liabilitas->suberl_k3;

        $total1_liabilitas_diterima = $liabilitas->liabilitas_diterima_utama - $liabilitas->liabilitas_diterima_d1 + $liabilitas->liabilitas_diterima_k1;
        $total2_liabilitas_diterima = $liabilitas->liabilitas_diterima_utama - $liabilitas->liabilitas_diterima_d2 + $liabilitas->liabilitas_diterima_k2;
        $total3_liabilitas_diterima = $liabilitas->liabilitas_diterima_utama - $liabilitas->liabilitas_diterima_d3 + $liabilitas->liabilitas_diterima_k3;

        $total1_lainl = $liabilitas->lainl_utama - $liabilitas->lainl_d1 + $liabilitas->lainl_k1;
        $total2_lainl = $liabilitas->lainl_utama - $liabilitas->lainl_d2 + $liabilitas->lainl_k2;
        $total3_lainl = $liabilitas->lainl_utama - $liabilitas->lainl_d3 + $liabilitas->lainl_k3;

        $total_liabilitas = $liabilitas->dana_utama + $liabilitas->liabilitas_bi_utama + $liabilitas->liabilitas_lain_utama + $liabilitas->suberl_utama + $liabilitas->liabilitas_diterima_utama + $liabilitas->lainl_utama;
        $total_liabilitas_d1 = NULL;
        $total_liabilitas_k1 = NULL;
        $total_liabilitas1 = $total1_dana + $total1_liabilitas_bi + $total1_liabilitas_lain + $total1_suberl + $total1_liabilitas_diterima + $total1_lainl;
        $total_liabilitas_d2 = NULL;
        $total_liabilitas_k2 = NULL;
        $total_liabilitas2 = $total2_dana + $total2_liabilitas_bi + $total2_liabilitas_lain + $total2_suberl + $total2_liabilitas_diterima + $total2_lainl;
        $total_liabilitas_d3 = NULL;
        $total_liabilitas_k3 = NULL;
        $total_liabilitas3 = $total3_dana + $total3_liabilitas_bi + $total3_liabilitas_lain + $total3_suberl + $total3_liabilitas_diterima + $total3_lainl;

        //KATEGORI LABA RUGI
        $id_labarugi = LabaRugi::where('referensi',$data->referensi)->value('id');
        $labarugi = LabaRugi::findOrFail($id_labarugi);
        $total1_pendapatan_penyaluran = $labarugi->pendapatan_penyaluran_utama + $labarugi->pendapatan_penyaluran_d1;
        $total2_pendapatan_penyaluran = $labarugi->pendapatan_penyaluran_utama + $labarugi->pendapatan_penyaluran_d2;
        $total3_pendapatan_penyaluran = $labarugi->pendapatan_penyaluran_utama + $labarugi->pendapatan_penyaluran_d3;

        $total1_bagi_hasil = $labarugi->bagi_hasil_utama + $labarugi->bagi_hasil_d1;
        $total2_bagi_hasil = $labarugi->bagi_hasil_utama + $labarugi->bagi_hasil_d2;
        $total3_bagi_hasil = $labarugi->bagi_hasil_utama + $labarugi->bagi_hasil_d3;

        $total_pendapatan_bagi_utama = $labarugi->pendapatan_penyaluran_utama + $labarugi->bagi_hasil_utama;
        $total_pendapatan_bagi_1 = $total1_pendapatan_penyaluran + $total1_bagi_hasil;
        $total_pendapatan_bagi_2 = $total2_pendapatan_penyaluran + $total2_bagi_hasil; 
        $total_pendapatan_bagi_3 = $total3_pendapatan_penyaluran + $total3_bagi_hasil; 

        $total1_pendapatan_ops = $labarugi->pendapatan_ops_utama + $labarugi->pendapatan_ops_d1;
        $total2_pendapatan_ops = $labarugi->pendapatan_ops_utama + $labarugi->pendapatan_ops_d2;
        $total3_pendapatan_ops = $labarugi->pendapatan_ops_utama + $labarugi->pendapatan_ops_d3;

        $beban_ops_d1 = ($aset->ckpnp_k1 + $ckpnl_k1)+(($liabilitas->lainl_k1)*-1);
        $beban_ops_d2 = ($aset->ckpnp_k2 + $ckpnl_k2)+(($liabilitas->lainl_k2)*-1);
        $beban_ops_d3 = ($aset->ckpnp_k3 + $ckpnl_k3)+(($liabilitas->lainl_k3)*-1); 
        $total1_beban_ops = $labarugi->beban_ops_utama + $beban_ops_d1;
        $total2_beban_ops = $labarugi->beban_ops_utama + $beban_ops_d2;
        $total3_beban_ops = $labarugi->beban_ops_utama + $beban_ops_d3;

        $total_ops_utama = $total_pendapatan_bagi_utama + $labarugi->pendapatan_ops_utama + $labarugi->beban_ops_utama;
        $total_ops_1 = $total_pendapatan_bagi_1 + $total1_pendapatan_ops + $total1_beban_ops;
        $total_ops_2 = $total_pendapatan_bagi_2 + $total2_pendapatan_ops + $total2_beban_ops;
        $total_ops_3 = $total_pendapatan_bagi_3 + $total3_pendapatan_ops + $total3_beban_ops;
        

        $total1_beban_nops = $labarugi->beban_nops_utama + $labarugi->beban_nops_d1;
        $total2_beban_nops = $labarugi->beban_nops_utama + $labarugi->beban_nops_d2;
        $total3_beban_nops = $labarugi->beban_nops_utama + $labarugi->beban_nops_d3;

        $total1_pendapatan_nops = $labarugi->pendapatan_nops_utama + $labarugi->pendapatan_nops_d1;
        $total2_pendapatan_nops = $labarugi->pendapatan_nops_utama + $labarugi->pendapatan_nops_d2;
        $total3_pendapatan_nops = $labarugi->pendapatan_nops_utama + $labarugi->pendapatan_nops_d3;

        $total_nops_utama = $labarugi->beban_nops_utama + $labarugi->pendapatan_nops_utama;
        $total_nops_1 = $total1_beban_nops + $total1_pendapatan_nops;
        $total_nops_2 = $total2_beban_nops + $total2_pendapatan_nops;
        $total_nops_3 = $total3_beban_nops + $total3_pendapatan_nops;

        $total_tops_utama = $total_ops_utama + $total_nops_utama;
        $total_tops_1 = $total_ops_1 + $total_nops_1;
        $total_tops_2 = $total_ops_2 + $total_nops_2;
        $total_tops_3 = $total_ops_3 + $total_nops_3;

        $total1_pajak_penghasilan = $labarugi->pajak_penghasilan_utama + $labarugi->pajak_penghasilan_d1;
        $total2_pajak_penghasilan = $labarugi->pajak_penghasilan_utama + $labarugi->pajak_penghasilan_d2;
        $total3_pajak_penghasilan = $labarugi->pajak_penghasilan_utama + $labarugi->pajak_penghasilan_d3;

        $total_bersih_utama = $labarugi->pajak_penghasilan_utama + $total_tops_utama;
        $total_bersih_1 = $total1_pajak_penghasilan + $total_tops_1;
        $total_bersih_2 = $total2_pajak_penghasilan + $total_tops_2;
        $total_bersih_3 = $total3_pajak_penghasilan + $total_tops_3;


        //KATEGORI EQUITAS
        $id_equitas = Equitas::where('referensi',$data->referensi)->value('id');
        $equitas = Equitas::findOrFail($id_equitas);
        $total1_modal_disetor = $equitas->modal_disetor_utama + $equitas->modal_disetor_d1;
        $total2_modal_disetor = $equitas->modal_disetor_utama + $equitas->modal_disetor_d2;
        $total3_modal_disetor = $equitas->modal_disetor_utama + $equitas->modal_disetor_d3;

        $total1_modal_pinjaman = $equitas->modal_pinjaman_utama + $equitas->modal_pinjaman_d1;
        $total2_modal_pinjaman = $equitas->modal_pinjaman_utama + $equitas->modal_pinjaman_d2;
        $total3_modal_pinjaman = $equitas->modal_pinjaman_utama + $equitas->modal_pinjaman_d3;

        $total1_perkiraan = $equitas->perkiraan_utama + $equitas->perkiraan_d1;
        $total2_perkiraan = $equitas->perkiraan_utama + $equitas->perkiraan_d2;
        $total3_perkiraan = $equitas->perkiraan_utama + $equitas->perkiraan_d3;

        $total1_selisih = $equitas->selisih_utama + $equitas->selisih_d1;
        $total2_selisih = $equitas->selisih_utama + $equitas->selisih_d2;
        $total3_selisih = $equitas->selisih_utama + $equitas->selisih_d3;

        $total1_cadangan = $equitas->cadangan_utama + $equitas->cadangan_d1;
        $total2_cadangan = $equitas->cadangan_utama + $equitas->cadangan_d2;
        $total3_cadangan = $equitas->cadangan_utama + $equitas->cadangan_d3;

        $total1_laba_sebelum = $equitas->laba_sebelum_utama + $equitas->laba_sebelum_d1;
        $total2_laba_sebelum = $equitas->laba_sebelum_utama + $equitas->laba_sebelum_d2;
        $total3_laba_sebelum = $equitas->laba_sebelum_utama + $equitas->laba_sebelum_d3;

        $laba_berjalan_utama = $total_bersih_utama;
        $laba_berjalan_d1 = $beban_ops_d1*-1;
        $laba_berjalan_d2 = (($aset->ckpnp_k2 + $ckpnl_k2)*-1) + $liabilitas->lainl_k2;
        $laba_berjalan_d3 = (($aset->ckpnp_k3 + $ckpnl_k3)*-1) + $liabilitas->lainl_k3;
        $total1_laba_berjalan = $laba_berjalan_utama - $laba_berjalan_d1 + $equitas->laba_sebelum_k1;
        $total2_laba_berjalan = $laba_berjalan_utama - $laba_berjalan_d2 + $equitas->laba_sebelum_k2;
        $total3_laba_berjalan = $laba_berjalan_utama - $laba_berjalan_d3 + $equitas->laba_sebelum_k3;

        $total_equitas = $equitas->modal_disetor_utama + $equitas->modal_pinjaman_utama + $equitas->perkiraan_utama + $equitas->selisih_utama + $equitas->cadangan_utama + $equitas->laba_sebelum_utama + $laba_berjalan_utama;
        $total_equitas1 = $total1_modal_disetor + $total1_modal_pinjaman + $total1_perkiraan + $total1_selisih + $total1_cadangan + $total1_laba_sebelum + $total1_laba_berjalan;
        $total_equitas2 = $total2_modal_disetor + $total2_modal_pinjaman + $total2_perkiraan + $total2_selisih + $total2_cadangan + $total2_laba_sebelum + $total2_laba_berjalan;
        $total_equitas3 = $total3_modal_disetor + $total3_modal_pinjaman + $total3_perkiraan + $total3_selisih + $total3_cadangan + $total3_laba_sebelum + $total3_laba_berjalan;

        //KATEGORI KPMM
        $id_kpmm = KPMM::where('referensi',$data->referensi)->value('id');
        $kpmm = KPMM::findOrFail($id_kpmm);

        $modal_inti_d1 = $total1_laba_berjalan;
        $modal_inti_d2 = $total2_laba_berjalan;
        $modal_inti_d3 =  $total3_laba_berjalan;
        $total1_modal_inti = $kpmm->modal_inti_utama + $modal_inti_d1;
        $total2_modal_inti = $kpmm->modal_inti_utama + $modal_inti_d2;
        $total3_modal_inti = $kpmm->modal_inti_utama + $modal_inti_d3;

        if ($total1_modal_inti > 0) {
            $total1_modal_pelengkap = $kpmm->modal_pelengkap_utama;
        }else{
            $total1_modal_pelengkap = 0;
        }

        if ($total2_modal_inti > 0) {
            $total2_modal_pelengkap = $kpmm->modal_pelengkap_utama;
        }else{
            $total2_modal_pelengkap = 0;
        }

        if ($total3_modal_inti > 0) {
            $total3_modal_pelengkap = $kpmm->modal_pelengkap_utama;
        }else{
            $total3_modal_pelengkap = 0;
        }
        // $total1_modal_pelengkap = $kpmm->modal_pelengkap_utama + $kpmm->modal_pelengkap_d1;
        // $total2_modal_pelengkap = $kpmm->modal_pelengkap_utama + $kpmm->modal_pelengkap_d2;
        // $total3_modal_pelengkap = $kpmm->modal_pelengkap_utama + $kpmm->modal_pelengkap_d3;

        if ($kpmm->modal_pelengkap_utama >= 0) {
            $total_modal_utama = $kpmm->modal_inti_utama + $kpmm->modal_pelengkap_utama;    
        }else{
            $total_modal_utama = 0;
        }

        if ($total1_modal_pelengkap >= 0) {
            $total_modal_1 = $total1_modal_inti + $total1_modal_pelengkap;    
        }else{
            $total_modal_1 = 0;
        }

        if ($total2_modal_pelengkap >= 0) {
            $total_modal_2 = $total2_modal_inti + $total2_modal_pelengkap;    
        }else{
            $total_modal_2 = 0;
        }

        if ($total3_modal_pelengkap >= 0) {
            $total_modal_3 = $total3_modal_inti + $total3_modal_pelengkap;    
        }else{
            $total_modal_3 = 0;
        }

        $total_atmr_k1 = ($aset->ckpnp_k1 + $ckpnl_k1)*-1;
        $total_atmr_k2 = ($aset->ckpnp_k2 + $ckpnl_k2)*-1;
        $total_atmr_k3 = ($aset->ckpnp_k3 + $ckpnl_k3)*-1;
        $total1_total_atmr = $kpmm->total_atmr_utama + $kpmm->total_atmr_d1 - $total_atmr_k1;
        $total2_total_atmr = $kpmm->total_atmr_utama + $kpmm->total_atmr_d2 - $total_atmr_k2;
        $total3_total_atmr = $kpmm->total_atmr_utama + $kpmm->total_atmr_d3 - $total_atmr_k3;

        $npf_utama = $aset->kolektibilitas3_utama + $aset->kolektibilitas4_utama + $aset->kolektibilitas5_utama;
        $npf_d1 = $aset->kolektibilitas3_d1 + $aset->kolektibilitas4_d1 + $aset->kolektibilitas5_d1;
        $total1_npf = $total1_kolektibilitas3 + $total1_kolektibilitas4 + $total1_kolektibilitas5;
        $npf_d2 = $aset->kolektibilitas3_d2 + $aset->kolektibilitas4_d2 + $aset->kolektibilitas5_d2;
        $total2_npf = $total2_kolektibilitas3 + $total2_kolektibilitas4 + $total2_kolektibilitas5;
        $npf_d3 = $aset->kolektibilitas3_d3 + $aset->kolektibilitas4_d3 + $aset->kolektibilitas5_d3;
        $total3_npf = $total3_kolektibilitas3 + $total3_kolektibilitas4 + $total3_kolektibilitas5;

        if (($total1_total_atmr != 0) && (($total_modal_1/$total1_total_atmr)*100) < 14) {
            $car_14_1 = (14 - ($total_modal_1/$total1_total_atmr)*100)*($total1_total_atmr/100);
        }else{
            $car_14_1 = 0;
        }

        if (($total2_total_atmr != 0) && (($total_modal_2/$total2_total_atmr)*100) < 14) {
            $car_14_2 = (14 - ($total_modal_2/$total2_total_atmr)*100)*($total2_total_atmr/100);
        }else{
            $car_14_2 = 0;
        }

        if (($total3_total_atmr != 0) && (($total_modal_3/$total3_total_atmr)*100) < 14) {
            $car_14_3 = (14 - ($total_modal_3/$total3_total_atmr)*100)*($total3_total_atmr/100);
        }else{
            $car_14_3 = 0;
        }

        if (($total1_total_atmr != 0) && (($total_modal_1/$total1_total_atmr)*100) < 12) {
            $car_12_1 = (12 - ($total_modal_1/$total1_total_atmr)*100)*($total1_total_atmr/100);
        }else{
            $car_12_1 = 0;
        }

        if (($total2_total_atmr != 0) && (($total_modal_2/$total2_total_atmr)*100) < 12) {
            $car_12_2 = (12 - ($total_modal_2/$total2_total_atmr)*100)*($total2_total_atmr/100);
        }else{
            $car_12_2 = 0;
        }

        if (($total3_total_atmr != 0) && (($total_modal_3/$total3_total_atmr)*100) < 12) {
            $car_12_3 = (12 - ($total_modal_3/$total3_total_atmr)*100)*($total3_total_atmr/100);
        }else{
            $car_12_3 = 0;
        }

        if (($total1_total_atmr != 0) && (($total_modal_1/$total1_total_atmr)*100) < 8) {
            $car_8_1 = (8 - ($total_modal_1/$total1_total_atmr)*100)*($total1_total_atmr/100);
        }else{
            $car_8_1 = 0;
        }

        if (($total2_total_atmr != 0) && (($total_modal_2/$total2_total_atmr)*100) < 8) {
            $car_8_2 = (8 - ($total_modal_2/$total2_total_atmr)*100)*($total2_total_atmr/100);
        }else{
            $car_8_2 = 0;
        }

        if (($total3_total_atmr != 0) && (($total_modal_3/$total3_total_atmr)*100) < 8) {
            $car_8_3 = (8 - ($total_modal_3/$total3_total_atmr)*100)*($total3_total_atmr/100);
        }else{
            $car_8_3 = 0;
        }

        if (($total1_total_atmr != 0) && (($total_modal_1/$total1_total_atmr)*100) < 4.1) {
            $car_41_1 = (4.1 - ($total_modal_1/$total1_total_atmr)*100)*($total1_total_atmr/100);
        }else{
            $car_41_1 = 0;
        }

        if (($total2_total_atmr != 0) && (($total_modal_2/$total2_total_atmr)*100) < 4.1) {
            $car_41_2 = (4.1 - ($total_modal_2/$total2_total_atmr)*100)*($total2_total_atmr/100);
        }else{
            $car_41_2 = 0;
        }

        if (($total3_total_atmr != 0) && (($total_modal_3/$total3_total_atmr)*100) < 4.1) {
            $car_41_3 = (4.1 - ($total_modal_3/$total3_total_atmr)*100)*($total3_total_atmr/100);
        }else{
            $car_41_3 = 0;
        }

        if (($total1_npf + $total1_ckpnp) > 0) {
            $total_ppap1 = $total1_npf + $total1_ckpnp;
        }else{
            $total_ppap1 = 0;
        }

        if (($total2_npf + $total2_ckpnp) > 0) {
            $total_ppap2 = $total2_npf + $total2_ckpnp;
        }else{
            $total_ppap2 = 0;
        }

        if (($total3_npf + $total3_ckpnp) > 0) {
            $total_ppap3 = $total3_npf + $total3_ckpnp;
        }else{
            $total_ppap3 = 0;
        }

        if ((($total_ppap1/$total1_pembiayaan)*100) > 4.5) {
            $tambahan_45_1 = ((($total_ppap1/$total1_pembiayaan)*100) - 4.5)*($total1_pembiayaan/100);
        }else{
            $tambahan_45_1 = 0;
        }

        if ((($total_ppap2/$total2_pembiayaan)*100) > 4.5) {
            $tambahan_45_2 = ((($total_ppap2/$total2_pembiayaan)*100) - 4.5)*($total2_pembiayaan/100);
        }else{
            $tambahan_45_2 = 0;
        }

        if ((($total_ppap3/$total3_pembiayaan)*100) > 4.5) {
            $tambahan_45_3 = ((($total_ppap3/$total3_pembiayaan)*100) - 4.5)*($total3_pembiayaan/100);
        }else{
            $tambahan_45_3 = 0;
        }

        return view('neraca.show',compact('data','aset','total1_kas','total2_kas','total3_kas','total1_penempatan_bi','total2_penempatan_bi','total3_penempatan_bi','total1_penempatan_lain','total2_penempatan_lain','total3_penempatan_lain','total1_suber','total2_suber','total3_suber','total1_kolektibilitas1','total2_kolektibilitas1','total3_kolektibilitas1','total1_kolektibilitas2','total2_kolektibilitas2','total3_kolektibilitas2','total1_kolektibilitas3','total2_kolektibilitas3','total3_kolektibilitas3','total1_kolektibilitas4','total2_kolektibilitas4','total3_kolektibilitas4','total1_kolektibilitas5','total2_kolektibilitas5','total3_kolektibilitas5','pembiayaan_utama','pembiayaan_d1','pembiayaan_d2','pembiayaan_d3','pembiayaan_k1','pembiayaan_k2','pembiayaan_k3','total1_pembiayaan','total2_pembiayaan','total3_pembiayaan','total1_penyertaan','total2_penyertaan','total3_penyertaan','total1_ckpnp','total2_ckpnp','total3_ckpnp','total1_astet','total2_astet','total3_astet','total1_akumulasi','total2_akumulasi','total3_akumulasi','total1_properti','total2_properti','total3_properti','total1_ayda','total2_ayda','total3_ayda','total1_rekening','total2_rekening','total3_rekening','total1_ckpnl','total2_ckpnl','total3_ckpnl','total1_lain','total2_lain','total3_lain','ckpnl_k1','ckpnl_k2','ckpnl_k3','lain_d1','lain_d2','lain_d3','total_aset','total_aset_d1','total_aset_k1','total_aset1','total_aset_d2','total_aset_k2','total_aset2','total_aset_d3','total_aset_k3','total_aset3','liabilitas','total1_dana','total2_dana','total3_dana','total1_liabilitas_bi','total2_liabilitas_bi','total3_liabilitas_bi','total1_liabilitas_lain','total2_liabilitas_lain','total3_liabilitas_lain','total1_suberl','total2_suberl','total3_suberl','total1_liabilitas_diterima','total2_liabilitas_diterima','total3_liabilitas_diterima','total1_lainl','total2_lainl','total3_lainl','total_liabilitas','total_liabilitas_d1','total_liabilitas_k1','total_liabilitas1','total_liabilitas_d2','total_liabilitas_k2','total_liabilitas2','total_liabilitas_d3','total_liabilitas_k3','total_liabilitas3','equitas','total1_modal_disetor','total2_modal_disetor','total3_modal_disetor','total1_modal_pinjaman','total2_modal_pinjaman','total3_modal_pinjaman','total1_perkiraan','total2_perkiraan','total3_perkiraan','total1_selisih','total2_selisih','total3_selisih','total1_cadangan','total2_cadangan','total3_cadangan','total1_laba_sebelum','total2_laba_sebelum','total3_laba_sebelum','labarugi','total1_pendapatan_penyaluran','total2_pendapatan_penyaluran','total3_pendapatan_penyaluran','total1_pendapatan_ops','total2_pendapatan_ops','total3_pendapatan_ops','total1_beban_ops','total2_beban_ops','total3_beban_ops','total1_beban_nops','total2_beban_nops','total3_beban_nops','total1_pendapatan_nops','total2_pendapatan_nops','total3_pendapatan_nops','total1_pajak_penghasilan','total2_pajak_penghasilan','total3_pajak_penghasilan','total1_bagi_hasil','total2_bagi_hasil','total3_bagi_hasil','beban_ops_d1','beban_ops_d2','beban_ops_d3','total_pendapatan_bagi_utama','total_pendapatan_bagi_1','total_pendapatan_bagi_2','total_pendapatan_bagi_3','total_ops_utama','total_ops_1','total_ops_2','total_ops_3','total_nops_utama','total_nops_1','total_nops_2','total_nops_3','total_tops_utama','total_tops_1','total_tops_2','total_tops_3','total_bersih_utama','total_bersih_1','total_bersih_2','total_bersih_3','laba_berjalan_utama','laba_berjalan_d1','laba_berjalan_d2','laba_berjalan_d3','laba_berjalan_utama','laba_berjalan_d1','laba_berjalan_d2','laba_berjalan_d3','total1_laba_berjalan','total2_laba_berjalan','total3_laba_berjalan','total_equitas','total_equitas1','total_equitas2','total_equitas3','kpmm','total1_modal_pelengkap','total2_modal_pelengkap','total3_modal_pelengkap','total1_modal_inti','total2_modal_inti','total3_modal_inti','modal_inti_d1','modal_inti_d2','modal_inti_d3','total_modal_utama','total_modal_1','total_modal_2','total_modal_3','total_atmr_k1','total_atmr_k2','total_atmr_k3','total1_total_atmr','total2_total_atmr','total3_total_atmr','npf_utama','npf_d1','npf_d2','npf_d3','total1_npf','total2_npf','total3_npf','car_14_1','car_14_2','car_14_3','car_12_1','car_12_2','car_12_3','car_8_1','car_8_2','car_8_3','car_41_1','car_41_2','car_41_3','total_ppap1','total_ppap2','total_ppap3','tambahan_45_1','tambahan_45_2','tambahan_45_3','referensis'));
    }

    public function cetak($id)
    {
        
        $referensi = Bank::where('referensi',$id)->value('id');
        $data = Bank::findOrFail($referensi);
        $pembuat = User::where('id',$data->id_pegawai)->value('nama');
        //KATEGORI ASET
        $id_aset = Aset::where('referensi',$data->referensi)->value('id');
        $aset = Aset::findOrFail($id_aset);
        $total1_kas = $aset->kas_utama + $aset->kas_d1 - $aset->kas_k1;
        $total2_kas = $aset->kas_utama + $aset->kas_d2 - $aset->kas_k2;
        $total3_kas = $aset->kas_utama + $aset->kas_d3 - $aset->kas_k3;
        $total1_penempatan_bi = $aset->penempatan_bi_utama + $aset->penempatan_bi_d1 - $aset->penempatan_bi_k1;
        $total2_penempatan_bi = $aset->penempatan_bi_utama + $aset->penempatan_bi_d2 - $aset->penempatan_bi_k2;
        $total3_penempatan_bi = $aset->penempatan_bi_utama + $aset->penempatan_bi_d3 - $aset->penempatan_bi_k3;
        $total1_penempatan_lain = $aset->penempatan_lain_utama + $aset->penempatan_lain_d1 - $aset->penempatan_lain_k1;
        $total2_penempatan_lain = $aset->penempatan_lain_utama + $aset->penempatan_lain_d2 - $aset->penempatan_lain_k2;
        $total3_penempatan_lain = $aset->penempatan_lain_utama + $aset->penempatan_lain_d3 - $aset->penempatan_lain_k3;
        $total1_suber = $aset->suber_utama + $aset->suber_d1 - $aset->suber_k1;
        $total2_suber = $aset->suber_utama + $aset->suber_d2 - $aset->suber_k2;
        $total3_suber = $aset->suber_utama + $aset->suber_d3 - $aset->suber_k3;
        $total1_kolektibilitas1 = $aset->kolektibilitas1_utama + $aset->kolektibilitas1_d1 - $aset->kolektibilitas1_k1;
        $total2_kolektibilitas1 = $aset->kolektibilitas1_utama + $aset->kolektibilitas1_d2 - $aset->kolektibilitas1_k2;
        $total3_kolektibilitas1 = $aset->kolektibilitas1_utama + $aset->kolektibilitas1_d3 - $aset->kolektibilitas1_k3;
        $total1_kolektibilitas2 = $aset->kolektibilitas2_utama + $aset->kolektibilitas2_d1 - $aset->kolektibilitas2_k1;
        $total2_kolektibilitas2 = $aset->kolektibilitas2_utama + $aset->kolektibilitas2_d2 - $aset->kolektibilitas2_k2;
        $total3_kolektibilitas2 = $aset->kolektibilitas2_utama + $aset->kolektibilitas2_d3 - $aset->kolektibilitas2_k3;
        $total1_kolektibilitas3 = $aset->kolektibilitas3_utama + $aset->kolektibilitas3_d1 - $aset->kolektibilitas3_k1;
        $total2_kolektibilitas3 = $aset->kolektibilitas3_utama + $aset->kolektibilitas3_d2 - $aset->kolektibilitas3_k2;
        $total3_kolektibilitas3 = $aset->kolektibilitas3_utama + $aset->kolektibilitas3_d3 - $aset->kolektibilitas3_k3;
        $total1_kolektibilitas4 = $aset->kolektibilitas4_utama + $aset->kolektibilitas4_d1 - $aset->kolektibilitas4_k1;
        $total2_kolektibilitas4 = $aset->kolektibilitas4_utama + $aset->kolektibilitas4_d2 - $aset->kolektibilitas4_k2;
        $total3_kolektibilitas4 = $aset->kolektibilitas4_utama + $aset->kolektibilitas4_d3 - $aset->kolektibilitas4_k3;
        $total1_kolektibilitas5 = $aset->kolektibilitas5_utama + $aset->kolektibilitas5_d1 - $aset->kolektibilitas5_k1;
        $total2_kolektibilitas5 = $aset->kolektibilitas5_utama + $aset->kolektibilitas5_d2 - $aset->kolektibilitas5_k2;
        $total3_kolektibilitas5 = $aset->kolektibilitas5_utama + $aset->kolektibilitas5_d3 - $aset->kolektibilitas5_k3;

        $pembiayaan_utama = $aset->kolektibilitas1_utama + $aset->kolektibilitas2_utama + $aset->kolektibilitas3_utama + $aset->kolektibilitas4_utama + $aset->kolektibilitas5_utama;
        $pembiayaan_d1 = $aset->kolektibilitas1_d1 + $aset->kolektibilitas2_d1 + $aset->kolektibilitas3_d1 + $aset->kolektibilitas4_d1 + $aset->kolektibilitas5_d1;
        $pembiayaan_k1 = $aset->kolektibilitas1_k1 + $aset->kolektibilitas2_k1 + $aset->kolektibilitas3_k1 + $aset->kolektibilitas4_k1 + $aset->kolektibilitas5_k1;
        $pembiayaan_d2 = $aset->kolektibilitas1_d2 + $aset->kolektibilitas2_d2 + $aset->kolektibilitas3_d2 + $aset->kolektibilitas4_d2 + $aset->kolektibilitas5_d2;
        $pembiayaan_k2 = $aset->kolektibilitas1_k2 + $aset->kolektibilitas2_k2 + $aset->kolektibilitas3_k2 + $aset->kolektibilitas4_k2 + $aset->kolektibilitas5_k2;
        $pembiayaan_d3 = $aset->kolektibilitas1_d3 + $aset->kolektibilitas2_d3 + $aset->kolektibilitas3_d3 + $aset->kolektibilitas4_d3 + $aset->kolektibilitas5_d3;
        $pembiayaan_k3 = $aset->kolektibilitas1_k3 + $aset->kolektibilitas2_k3 + $aset->kolektibilitas3_k3 + $aset->kolektibilitas4_k3 + $aset->kolektibilitas5_k3;
        $total1_pembiayaan = $total1_kolektibilitas1 + $total1_kolektibilitas2 + $total1_kolektibilitas3 + $total1_kolektibilitas4 + $total1_kolektibilitas5;
        $total2_pembiayaan = $total2_kolektibilitas1 + $total2_kolektibilitas2 + $total2_kolektibilitas3 + $total2_kolektibilitas4 + $total2_kolektibilitas5;
        $total3_pembiayaan = $total3_kolektibilitas1 + $total3_kolektibilitas2 + $total3_kolektibilitas3 + $total3_kolektibilitas4 + $total3_kolektibilitas5;

        $total1_penyertaan = $aset->penyertaan_utama + $aset->penyertaan_d1 - $aset->penyertaan_k1;
        $total2_penyertaan = $aset->penyertaan_utama + $aset->penyertaan_d2 - $aset->penyertaan_k2;
        $total3_penyertaan = $aset->penyertaan_utama + $aset->penyertaan_d3 - $aset->penyertaan_k3;
        $nominatif_list = Nominatif::get();
        $jumlah_nominatif = $nominatif_list->count();
        if ($jumlah_nominatif != NULL) {
            $aset->ckpnp_k1 = round($this->ckpnAsets0());
            $aset->ckpnp_k3 = round($this->ckpnAsets1());
            $aset->ckpnp_k2 = round($this->ckpnAsets3());
        }
        $total1_ckpnp = $aset->ckpnp_utama - $aset->ckpnp_d1 + $aset->ckpnp_k1;
        $total2_ckpnp = $aset->ckpnp_utama - $aset->ckpnp_d2 + $aset->ckpnp_k2;
        $total3_ckpnp = $aset->ckpnp_utama - $aset->ckpnp_d3 + $aset->ckpnp_k3;
        $total1_astet = $aset->astet_utama + $aset->astet_d1 - $aset->astet_k1;
        $total2_astet = $aset->astet_utama + $aset->astet_d2 - $aset->astet_k2;
        $total3_astet = $aset->astet_utama + $aset->astet_d3 - $aset->astet_k3;
        $total1_akumulasi = $aset->akumulasi_utama + $aset->akumulasi_d1 - $aset->akumulasi_k1;
        $total2_akumulasi = $aset->akumulasi_utama + $aset->akumulasi_d2 - $aset->akumulasi_k2;
        $total3_akumulasi = $aset->akumulasi_utama + $aset->akumulasi_d3 - $aset->akumulasi_k3;
        $total1_properti = $aset->properti_utama + $aset->properti_d1 - $aset->properti_k1;
        $total2_properti = $aset->properti_utama + $aset->properti_d2 - $aset->properti_k2;
        $total3_properti = $aset->properti_utama + $aset->properti_d3 - $aset->properti_k3;
        $total1_ayda = $aset->ayda_utama + $aset->ayda_d1 - $aset->ayda_k1;
        $total2_ayda = $aset->ayda_utama + $aset->ayda_d2 - $aset->ayda_k2;
        $total3_ayda = $aset->ayda_utama + $aset->ayda_d3 - $aset->ayda_k3;
        $total1_rekening = $aset->rekening_utama + $aset->rekening_d1 - $aset->rekening_k1;
        $total2_rekening = $aset->rekening_utama + $aset->rekening_d2 - $aset->rekening_k2;
        $total3_rekening = $aset->rekening_utama + $aset->rekening_d3 - $aset->rekening_k3;
        $ckpnl_k1 = ($aset->rekening_d1 + $aset->ayda_d1)*-1;
        $ckpnl_k2 = ($aset->rekening_d2 + $aset->ayda_d2)*-1;
        $ckpnl_k3 = ($aset->rekening_d3 + $aset->ayda_d3)*-1;
        $total1_ckpnl = $aset->ckpnl_utama + $ckpnl_k1 - $aset->ckpnl_d1;
        $total2_ckpnl = $aset->ckpnl_utama + $ckpnl_k2 - $aset->ckpnl_d2;
        $total3_ckpnl = $aset->ckpnl_utama + $ckpnl_k3 - $aset->ckpnl_d3;
        $lain_d1 = 6000000-(($pembiayaan_d1 - $pembiayaan_k1)+$aset->rekening_d1 + $aset->ayda_d1)+400000;
        $lain_d2 = 6000000-(($pembiayaan_d2 - $pembiayaan_k2)+$aset->rekening_d2 + $aset->ayda_d2)+400000;
        $lain_d3 = 6000000-(($pembiayaan_d3 - $pembiayaan_k3)+$aset->rekening_d3 + $aset->ayda_d3)+400000;
        $total1_lain = $aset->lain_utama + $lain_d1 - $aset->lain_k1;
        $total2_lain = $aset->lain_utama + $lain_d2 - $aset->lain_k2;
        $total3_lain = $aset->lain_utama + $lain_d3 - $aset->lain_k3;

        $total_aset = $aset->kas_utama + $aset->penempatan_bi_utama + $aset->penempatan_lain_utama + $aset->suber_utama + $pembiayaan_utama + $aset->penyertaan_utama + $aset->ckpnl_utama + $aset->ckpnp_utama + $aset->astet_utama + $aset->akumulasi_utama + $aset->properti_utama + $aset->ayda_utama + $aset->rekening_utama + $aset->lain_utama;
        $total_aset_d1 = $pembiayaan_d1 + $aset->ayda_d1 + $aset->rekening_d1 + $lain_d1;
        $total_aset_k1 = $pembiayaan_k1 + $aset->ayda_k1 + $aset->rekening_k1 + $aset->lain_k1;
        $total_aset1 = $total1_kas + $total1_penempatan_bi + $total1_penempatan_lain + $total1_suber + $total1_pembiayaan + $total1_penyertaan + $total1_ckpnl + $total1_ckpnp + $total1_astet + $total1_akumulasi + $total1_properti + $total1_ayda + $total1_rekening + $total1_lain;
        $total_aset_d2 = $pembiayaan_d2 + $aset->ayda_d2 + $aset->rekening_d2 + $lain_d2;
        $total_aset_k2 = $pembiayaan_k2 + $aset->ayda_k2 + $aset->rekening_k2 + $aset->lain_k2;
        $total_aset2 = $total2_kas + $total2_penempatan_bi + $total2_penempatan_lain + $total2_suber + $total2_pembiayaan + $total2_penyertaan + $total2_ckpnl + $total2_ckpnp + $total2_astet + $total2_akumulasi + $total2_properti + $total2_ayda + $total2_rekening + $total2_lain;
        $total_aset_d3 = $pembiayaan_d3 + $aset->ayda_d3 + $aset->rekening_d3 + $lain_d3;
        $total_aset_k3 = $pembiayaan_k3 + $aset->ayda_k3 + $aset->rekening_k3 + $aset->lain_k3;
        $total_aset3 = $total3_kas + $total3_penempatan_bi + $total3_penempatan_lain + $total3_suber + $total3_pembiayaan + $total3_penyertaan + $total3_ckpnl + $total3_ckpnp + $total3_astet + $total3_akumulasi + $total3_properti + $total3_ayda + $total3_rekening + $total3_lain;

        //KATEGORI LIABILITAS
        $id_liabilitas = Liabilitas::where('referensi',$data->referensi)->value('id');
        $liabilitas = Liabilitas::findOrFail($id_liabilitas);
        $total1_dana = $liabilitas->dana_utama - $liabilitas->dana_d1 + $liabilitas->dana_k1;
        $total2_dana = $liabilitas->dana_utama - $liabilitas->dana_d2 + $liabilitas->dana_k2;
        $total3_dana = $liabilitas->dana_utama - $liabilitas->dana_d3 + $liabilitas->dana_k3;

        $total1_liabilitas_bi = $liabilitas->liabilitas_bi_utama - $liabilitas->liabilitas_bi_d1 + $liabilitas->liabilitas_bi_k1;
        $total2_liabilitas_bi = $liabilitas->liabilitas_bi_utama - $liabilitas->liabilitas_bi_d2 + $liabilitas->liabilitas_bi_k2;
        $total3_liabilitas_bi = $liabilitas->liabilitas_bi_utama - $liabilitas->liabilitas_bi_d3 + $liabilitas->liabilitas_bi_k3;

        $total1_liabilitas_lain = $liabilitas->liabilitas_lain_utama - $liabilitas->liabilitas_lain_d1 + $liabilitas->liabilitas_lain_k1;
        $total2_liabilitas_lain = $liabilitas->liabilitas_lain_utama - $liabilitas->liabilitas_lain_d2 + $liabilitas->liabilitas_lain_k2;
        $total3_liabilitas_lain = $liabilitas->liabilitas_lain_utama - $liabilitas->liabilitas_lain_d3 + $liabilitas->liabilitas_lain_k3;

        $total1_suberl = $liabilitas->suberl_utama - $liabilitas->suberl_d1 + $liabilitas->suberl_k1;
        $total2_suberl = $liabilitas->suberl_utama - $liabilitas->suberl_d2 + $liabilitas->suberl_k2;
        $total3_suberl = $liabilitas->suberl_utama - $liabilitas->suberl_d3 + $liabilitas->suberl_k3;

        $total1_liabilitas_diterima = $liabilitas->liabilitas_diterima_utama - $liabilitas->liabilitas_diterima_d1 + $liabilitas->liabilitas_diterima_k1;
        $total2_liabilitas_diterima = $liabilitas->liabilitas_diterima_utama - $liabilitas->liabilitas_diterima_d2 + $liabilitas->liabilitas_diterima_k2;
        $total3_liabilitas_diterima = $liabilitas->liabilitas_diterima_utama - $liabilitas->liabilitas_diterima_d3 + $liabilitas->liabilitas_diterima_k3;

        $total1_lainl = $liabilitas->lainl_utama - $liabilitas->lainl_d1 + $liabilitas->lainl_k1;
        $total2_lainl = $liabilitas->lainl_utama - $liabilitas->lainl_d2 + $liabilitas->lainl_k2;
        $total3_lainl = $liabilitas->lainl_utama - $liabilitas->lainl_d3 + $liabilitas->lainl_k3;

        $total_liabilitas = $liabilitas->dana_utama + $liabilitas->liabilitas_bi_utama + $liabilitas->liabilitas_lain_utama + $liabilitas->suberl_utama + $liabilitas->liabilitas_diterima_utama + $liabilitas->lainl_utama;
        $total_liabilitas_d1 = NULL;
        $total_liabilitas_k1 = NULL;
        $total_liabilitas1 = $total1_dana + $total1_liabilitas_bi + $total1_liabilitas_lain + $total1_suberl + $total1_liabilitas_diterima + $total1_lainl;
        $total_liabilitas_d2 = NULL;
        $total_liabilitas_k2 = NULL;
        $total_liabilitas2 = $total2_dana + $total2_liabilitas_bi + $total2_liabilitas_lain + $total2_suberl + $total2_liabilitas_diterima + $total2_lainl;
        $total_liabilitas_d3 = NULL;
        $total_liabilitas_k3 = NULL;
        $total_liabilitas3 = $total3_dana + $total3_liabilitas_bi + $total3_liabilitas_lain + $total3_suberl + $total3_liabilitas_diterima + $total3_lainl;

        //KATEGORI LABA RUGI
        $id_labarugi = LabaRugi::where('referensi',$data->referensi)->value('id');
        $labarugi = LabaRugi::findOrFail($id_labarugi);
        $total1_pendapatan_penyaluran = $labarugi->pendapatan_penyaluran_utama + $labarugi->pendapatan_penyaluran_d1;
        $total2_pendapatan_penyaluran = $labarugi->pendapatan_penyaluran_utama + $labarugi->pendapatan_penyaluran_d2;
        $total3_pendapatan_penyaluran = $labarugi->pendapatan_penyaluran_utama + $labarugi->pendapatan_penyaluran_d3;

        $total1_bagi_hasil = $labarugi->bagi_hasil_utama + $labarugi->bagi_hasil_d1;
        $total2_bagi_hasil = $labarugi->bagi_hasil_utama + $labarugi->bagi_hasil_d2;
        $total3_bagi_hasil = $labarugi->bagi_hasil_utama + $labarugi->bagi_hasil_d3;

        $total_pendapatan_bagi_utama = $labarugi->pendapatan_penyaluran_utama + $labarugi->bagi_hasil_utama;
        $total_pendapatan_bagi_1 = $total1_pendapatan_penyaluran + $total1_bagi_hasil;
        $total_pendapatan_bagi_2 = $total2_pendapatan_penyaluran + $total2_bagi_hasil; 
        $total_pendapatan_bagi_3 = $total3_pendapatan_penyaluran + $total3_bagi_hasil; 

        $total1_pendapatan_ops = $labarugi->pendapatan_ops_utama + $labarugi->pendapatan_ops_d1;
        $total2_pendapatan_ops = $labarugi->pendapatan_ops_utama + $labarugi->pendapatan_ops_d2;
        $total3_pendapatan_ops = $labarugi->pendapatan_ops_utama + $labarugi->pendapatan_ops_d3;

        $beban_ops_d1 = ($aset->ckpnp_k1 + $ckpnl_k1)+(($liabilitas->lainl_k1)*-1);
        $beban_ops_d2 = ($aset->ckpnp_k2 + $ckpnl_k2)+(($liabilitas->lainl_k2)*-1);
        $beban_ops_d3 = ($aset->ckpnp_k3 + $ckpnl_k3)+(($liabilitas->lainl_k3)*-1); 
        $total1_beban_ops = $labarugi->beban_ops_utama + $beban_ops_d1;
        $total2_beban_ops = $labarugi->beban_ops_utama + $beban_ops_d2;
        $total3_beban_ops = $labarugi->beban_ops_utama + $beban_ops_d3;

        $total_ops_utama = $total_pendapatan_bagi_utama + $labarugi->pendapatan_ops_utama + $labarugi->beban_ops_utama;
        $total_ops_1 = $total_pendapatan_bagi_1 + $total1_pendapatan_ops + $total1_beban_ops;
        $total_ops_2 = $total_pendapatan_bagi_2 + $total2_pendapatan_ops + $total2_beban_ops;
        $total_ops_3 = $total_pendapatan_bagi_3 + $total3_pendapatan_ops + $total3_beban_ops;
        

        $total1_beban_nops = $labarugi->beban_nops_utama + $labarugi->beban_nops_d1;
        $total2_beban_nops = $labarugi->beban_nops_utama + $labarugi->beban_nops_d2;
        $total3_beban_nops = $labarugi->beban_nops_utama + $labarugi->beban_nops_d3;

        $total1_pendapatan_nops = $labarugi->pendapatan_nops_utama + $labarugi->pendapatan_nops_d1;
        $total2_pendapatan_nops = $labarugi->pendapatan_nops_utama + $labarugi->pendapatan_nops_d2;
        $total3_pendapatan_nops = $labarugi->pendapatan_nops_utama + $labarugi->pendapatan_nops_d3;

        $total_nops_utama = $labarugi->beban_nops_utama + $labarugi->pendapatan_nops_utama;
        $total_nops_1 = $total1_beban_nops + $total1_pendapatan_nops;
        $total_nops_2 = $total2_beban_nops + $total2_pendapatan_nops;
        $total_nops_3 = $total3_beban_nops + $total3_pendapatan_nops;

        $total_tops_utama = $total_ops_utama + $total_nops_utama;
        $total_tops_1 = $total_ops_1 + $total_nops_1;
        $total_tops_2 = $total_ops_2 + $total_nops_2;
        $total_tops_3 = $total_ops_3 + $total_nops_3;

        $total1_pajak_penghasilan = $labarugi->pajak_penghasilan_utama + $labarugi->pajak_penghasilan_d1;
        $total2_pajak_penghasilan = $labarugi->pajak_penghasilan_utama + $labarugi->pajak_penghasilan_d2;
        $total3_pajak_penghasilan = $labarugi->pajak_penghasilan_utama + $labarugi->pajak_penghasilan_d3;

        $total_bersih_utama = $labarugi->pajak_penghasilan_utama + $total_tops_utama;
        $total_bersih_1 = $total1_pajak_penghasilan + $total_tops_1;
        $total_bersih_2 = $total2_pajak_penghasilan + $total_tops_2;
        $total_bersih_3 = $total3_pajak_penghasilan + $total_tops_3;


        //KATEGORI EQUITAS
        $id_equitas = Equitas::where('referensi',$data->referensi)->value('id');
        $equitas = Equitas::findOrFail($id_equitas);
        $total1_modal_disetor = $equitas->modal_disetor_utama + $equitas->modal_disetor_d1;
        $total2_modal_disetor = $equitas->modal_disetor_utama + $equitas->modal_disetor_d2;
        $total3_modal_disetor = $equitas->modal_disetor_utama + $equitas->modal_disetor_d3;

        $total1_modal_pinjaman = $equitas->modal_pinjaman_utama + $equitas->modal_pinjaman_d1;
        $total2_modal_pinjaman = $equitas->modal_pinjaman_utama + $equitas->modal_pinjaman_d2;
        $total3_modal_pinjaman = $equitas->modal_pinjaman_utama + $equitas->modal_pinjaman_d3;

        $total1_perkiraan = $equitas->perkiraan_utama + $equitas->perkiraan_d1;
        $total2_perkiraan = $equitas->perkiraan_utama + $equitas->perkiraan_d2;
        $total3_perkiraan = $equitas->perkiraan_utama + $equitas->perkiraan_d3;

        $total1_selisih = $equitas->selisih_utama + $equitas->selisih_d1;
        $total2_selisih = $equitas->selisih_utama + $equitas->selisih_d2;
        $total3_selisih = $equitas->selisih_utama + $equitas->selisih_d3;

        $total1_cadangan = $equitas->cadangan_utama + $equitas->cadangan_d1;
        $total2_cadangan = $equitas->cadangan_utama + $equitas->cadangan_d2;
        $total3_cadangan = $equitas->cadangan_utama + $equitas->cadangan_d3;

        $total1_laba_sebelum = $equitas->laba_sebelum_utama + $equitas->laba_sebelum_d1;
        $total2_laba_sebelum = $equitas->laba_sebelum_utama + $equitas->laba_sebelum_d2;
        $total3_laba_sebelum = $equitas->laba_sebelum_utama + $equitas->laba_sebelum_d3;

        $laba_berjalan_utama = $total_bersih_utama;
        $laba_berjalan_d1 = $beban_ops_d1*-1;
        $laba_berjalan_d2 = (($aset->ckpnp_k2 + $ckpnl_k2)*-1) + $liabilitas->lainl_k2;
        $laba_berjalan_d3 = (($aset->ckpnp_k3 + $ckpnl_k3)*-1) + $liabilitas->lainl_k3;
        $total1_laba_berjalan = $laba_berjalan_utama - $laba_berjalan_d1 + $equitas->laba_sebelum_k1;
        $total2_laba_berjalan = $laba_berjalan_utama - $laba_berjalan_d2 + $equitas->laba_sebelum_k2;
        $total3_laba_berjalan = $laba_berjalan_utama - $laba_berjalan_d3 + $equitas->laba_sebelum_k3;

        $total_equitas = $equitas->modal_disetor_utama + $equitas->modal_pinjaman_utama + $equitas->perkiraan_utama + $equitas->selisih_utama + $equitas->cadangan_utama + $equitas->laba_sebelum_utama + $laba_berjalan_utama;
        $total_equitas1 = $total1_modal_disetor + $total1_modal_pinjaman + $total1_perkiraan + $total1_selisih + $total1_cadangan + $total1_laba_sebelum + $total1_laba_berjalan;
        $total_equitas2 = $total2_modal_disetor + $total2_modal_pinjaman + $total2_perkiraan + $total2_selisih + $total2_cadangan + $total2_laba_sebelum + $total2_laba_berjalan;
        $total_equitas3 = $total3_modal_disetor + $total3_modal_pinjaman + $total3_perkiraan + $total3_selisih + $total3_cadangan + $total3_laba_sebelum + $total3_laba_berjalan;

        //KATEGORI KPMM
        $id_kpmm = KPMM::where('referensi',$data->referensi)->value('id');
        $kpmm = KPMM::findOrFail($id_kpmm);

        $modal_inti_d1 = $total1_laba_berjalan;
        $modal_inti_d2 = $total2_laba_berjalan;
        $modal_inti_d3 =  $total3_laba_berjalan;
        $total1_modal_inti = $kpmm->modal_inti_utama + $modal_inti_d1;
        $total2_modal_inti = $kpmm->modal_inti_utama + $modal_inti_d2;
        $total3_modal_inti = $kpmm->modal_inti_utama + $modal_inti_d3;

        if ($total1_modal_inti > 0) {
            $total1_modal_pelengkap = $kpmm->modal_pelengkap_utama;
        }else{
            $total1_modal_pelengkap = 0;
        }

        if ($total2_modal_inti > 0) {
            $total2_modal_pelengkap = $kpmm->modal_pelengkap_utama;
        }else{
            $total2_modal_pelengkap = 0;
        }

        if ($total3_modal_inti > 0) {
            $total3_modal_pelengkap = $kpmm->modal_pelengkap_utama;
        }else{
            $total3_modal_pelengkap = 0;
        }
        // $total1_modal_pelengkap = $kpmm->modal_pelengkap_utama + $kpmm->modal_pelengkap_d1;
        // $total2_modal_pelengkap = $kpmm->modal_pelengkap_utama + $kpmm->modal_pelengkap_d2;
        // $total3_modal_pelengkap = $kpmm->modal_pelengkap_utama + $kpmm->modal_pelengkap_d3;

        if ($kpmm->modal_pelengkap_utama >= 0) {
            $total_modal_utama = $kpmm->modal_inti_utama + $kpmm->modal_pelengkap_utama;    
        }else{
            $total_modal_utama = 0;
        }

        if ($total1_modal_pelengkap >= 0) {
            $total_modal_1 = $total1_modal_inti + $total1_modal_pelengkap;    
        }else{
            $total_modal_1 = 0;
        }

        if ($total2_modal_pelengkap >= 0) {
            $total_modal_2 = $total2_modal_inti + $total2_modal_pelengkap;    
        }else{
            $total_modal_2 = 0;
        }

        if ($total3_modal_pelengkap >= 0) {
            $total_modal_3 = $total3_modal_inti + $total3_modal_pelengkap;    
        }else{
            $total_modal_3 = 0;
        }

        $total_atmr_k1 = ($aset->ckpnp_k1 + $ckpnl_k1)*-1;
        $total_atmr_k2 = ($aset->ckpnp_k2 + $ckpnl_k2)*-1;
        $total_atmr_k3 = ($aset->ckpnp_k3 + $ckpnl_k3)*-1;
        $total1_total_atmr = $kpmm->total_atmr_utama + $kpmm->total_atmr_d1 - $total_atmr_k1;
        $total2_total_atmr = $kpmm->total_atmr_utama + $kpmm->total_atmr_d2 - $total_atmr_k2;
        $total3_total_atmr = $kpmm->total_atmr_utama + $kpmm->total_atmr_d3 - $total_atmr_k3;

        $npf_utama = $aset->kolektibilitas3_utama + $aset->kolektibilitas4_utama + $aset->kolektibilitas5_utama;
        $npf_d1 = $aset->kolektibilitas3_d1 + $aset->kolektibilitas4_d1 + $aset->kolektibilitas5_d1;
        $total1_npf = $total1_kolektibilitas3 + $total1_kolektibilitas4 + $total1_kolektibilitas5;
        $npf_d2 = $aset->kolektibilitas3_d2 + $aset->kolektibilitas4_d2 + $aset->kolektibilitas5_d2;
        $total2_npf = $total2_kolektibilitas3 + $total2_kolektibilitas4 + $total2_kolektibilitas5;
        $npf_d3 = $aset->kolektibilitas3_d3 + $aset->kolektibilitas4_d3 + $aset->kolektibilitas5_d3;
        $total3_npf = $total3_kolektibilitas3 + $total3_kolektibilitas4 + $total3_kolektibilitas5;

        if (($total1_total_atmr != 0) && (($total_modal_1/$total1_total_atmr)*100) < 14) {
            $car_14_1 = (14 - ($total_modal_1/$total1_total_atmr)*100)*($total1_total_atmr/100);
        }else{
            $car_14_1 = 0;
        }

        if (($total2_total_atmr != 0) && (($total_modal_2/$total2_total_atmr)*100) < 14) {
            $car_14_2 = (14 - ($total_modal_2/$total2_total_atmr)*100)*($total2_total_atmr/100);
        }else{
            $car_14_2 = 0;
        }

        if (($total3_total_atmr != 0) && (($total_modal_3/$total3_total_atmr)*100) < 14) {
            $car_14_3 = (14 - ($total_modal_3/$total3_total_atmr)*100)*($total3_total_atmr/100);
        }else{
            $car_14_3 = 0;
        }

        if (($total1_total_atmr != 0) && (($total_modal_1/$total1_total_atmr)*100) < 12) {
            $car_12_1 = (12 - ($total_modal_1/$total1_total_atmr)*100)*($total1_total_atmr/100);
        }else{
            $car_12_1 = 0;
        }

        if (($total2_total_atmr != 0) && (($total_modal_2/$total2_total_atmr)*100) < 12) {
            $car_12_2 = (12 - ($total_modal_2/$total2_total_atmr)*100)*($total2_total_atmr/100);
        }else{
            $car_12_2 = 0;
        }

        if (($total3_total_atmr != 0) && (($total_modal_3/$total3_total_atmr)*100) < 12) {
            $car_12_3 = (12 - ($total_modal_3/$total3_total_atmr)*100)*($total3_total_atmr/100);
        }else{
            $car_12_3 = 0;
        }

        if (($total1_total_atmr != 0) && (($total_modal_1/$total1_total_atmr)*100) < 8) {
            $car_8_1 = (8 - ($total_modal_1/$total1_total_atmr)*100)*($total1_total_atmr/100);
        }else{
            $car_8_1 = 0;
        }

        if (($total2_total_atmr != 0) && (($total_modal_2/$total2_total_atmr)*100) < 8) {
            $car_8_2 = (8 - ($total_modal_2/$total2_total_atmr)*100)*($total2_total_atmr/100);
        }else{
            $car_8_2 = 0;
        }

        if (($total3_total_atmr != 0) && (($total_modal_3/$total3_total_atmr)*100) < 8) {
            $car_8_3 = (8 - ($total_modal_3/$total3_total_atmr)*100)*($total3_total_atmr/100);
        }else{
            $car_8_3 = 0;
        }

        if (($total1_total_atmr != 0) && (($total_modal_1/$total1_total_atmr)*100) < 4.1) {
            $car_41_1 = (4.1 - ($total_modal_1/$total1_total_atmr)*100)*($total1_total_atmr/100);
        }else{
            $car_41_1 = 0;
        }

        if (($total2_total_atmr != 0) && (($total_modal_2/$total2_total_atmr)*100) < 4.1) {
            $car_41_2 = (4.1 - ($total_modal_2/$total2_total_atmr)*100)*($total2_total_atmr/100);
        }else{
            $car_41_2 = 0;
        }

        if (($total3_total_atmr != 0) && (($total_modal_3/$total3_total_atmr)*100) < 4.1) {
            $car_41_3 = (4.1 - ($total_modal_3/$total3_total_atmr)*100)*($total3_total_atmr/100);
        }else{
            $car_41_3 = 0;
        }

        if (($total1_npf + $total1_ckpnp) > 0) {
            $total_ppap1 = $total1_npf + $total1_ckpnp;
        }else{
            $total_ppap1 = 0;
        }

        if (($total2_npf + $total2_ckpnp) > 0) {
            $total_ppap2 = $total2_npf + $total2_ckpnp;
        }else{
            $total_ppap2 = 0;
        }

        if (($total3_npf + $total3_ckpnp) > 0) {
            $total_ppap3 = $total3_npf + $total3_ckpnp;
        }else{
            $total_ppap3 = 0;
        }

        if ((($total_ppap1/$total1_pembiayaan)*100) > 4.5) {
            $tambahan_45_1 = ((($total_ppap1/$total1_pembiayaan)*100) - 4.5)*($total1_pembiayaan/100);
        }else{
            $tambahan_45_1 = 0;
        }

        if ((($total_ppap2/$total2_pembiayaan)*100) > 4.5) {
            $tambahan_45_2 = ((($total_ppap2/$total2_pembiayaan)*100) - 4.5)*($total2_pembiayaan/100);
        }else{
            $tambahan_45_2 = 0;
        }

        if ((($total_ppap3/$total3_pembiayaan)*100) > 4.5) {
            $tambahan_45_3 = ((($total_ppap3/$total3_pembiayaan)*100) - 4.5)*($total3_pembiayaan/100);
        }else{
            $tambahan_45_3 = 0;
        }

        $pdf = app('dompdf.wrapper');
        $pdf->getDomPDF()->set_option("enable_php", true);
        $pdf->loadView('neraca.template_cetak',compact('pdf','data','aset','total1_kas','total2_kas','total3_kas','total1_penempatan_bi','total2_penempatan_bi','total3_penempatan_bi','total1_penempatan_lain','total2_penempatan_lain','total3_penempatan_lain','total1_suber','total2_suber','total3_suber','total1_kolektibilitas1','total2_kolektibilitas1','total3_kolektibilitas1','total1_kolektibilitas2','total2_kolektibilitas2','total3_kolektibilitas2','total1_kolektibilitas3','total2_kolektibilitas3','total3_kolektibilitas3','total1_kolektibilitas4','total2_kolektibilitas4','total3_kolektibilitas4','total1_kolektibilitas5','total2_kolektibilitas5','total3_kolektibilitas5','pembiayaan_utama','pembiayaan_d1','pembiayaan_d2','pembiayaan_d3','pembiayaan_k1','pembiayaan_k2','pembiayaan_k3','total1_pembiayaan','total2_pembiayaan','total3_pembiayaan','total1_penyertaan','total2_penyertaan','total3_penyertaan','total1_ckpnp','total2_ckpnp','total3_ckpnp','total1_astet','total2_astet','total3_astet','total1_akumulasi','total2_akumulasi','total3_akumulasi','total1_properti','total2_properti','total3_properti','total1_ayda','total2_ayda','total3_ayda','total1_rekening','total2_rekening','total3_rekening','total1_ckpnl','total2_ckpnl','total3_ckpnl','total1_lain','total2_lain','total3_lain','ckpnl_k1','ckpnl_k2','ckpnl_k3','lain_d1','lain_d2','lain_d3','total_aset','total_aset_d1','total_aset_k1','total_aset1','total_aset_d2','total_aset_k2','total_aset2','total_aset_d3','total_aset_k3','total_aset3','liabilitas','total1_dana','total2_dana','total3_dana','total1_liabilitas_bi','total2_liabilitas_bi','total3_liabilitas_bi','total1_liabilitas_lain','total2_liabilitas_lain','total3_liabilitas_lain','total1_suberl','total2_suberl','total3_suberl','total1_liabilitas_diterima','total2_liabilitas_diterima','total3_liabilitas_diterima','total1_lainl','total2_lainl','total3_lainl','total_liabilitas','total_liabilitas_d1','total_liabilitas_k1','total_liabilitas1','total_liabilitas_d2','total_liabilitas_k2','total_liabilitas2','total_liabilitas_d3','total_liabilitas_k3','total_liabilitas3','equitas','total1_modal_disetor','total2_modal_disetor','total3_modal_disetor','total1_modal_pinjaman','total2_modal_pinjaman','total3_modal_pinjaman','total1_perkiraan','total2_perkiraan','total3_perkiraan','total1_selisih','total2_selisih','total3_selisih','total1_cadangan','total2_cadangan','total3_cadangan','total1_laba_sebelum','total2_laba_sebelum','total3_laba_sebelum','labarugi','total1_pendapatan_penyaluran','total2_pendapatan_penyaluran','total3_pendapatan_penyaluran','total1_pendapatan_ops','total2_pendapatan_ops','total3_pendapatan_ops','total1_beban_ops','total2_beban_ops','total3_beban_ops','total1_beban_nops','total2_beban_nops','total3_beban_nops','total1_pendapatan_nops','total2_pendapatan_nops','total3_pendapatan_nops','total1_pajak_penghasilan','total2_pajak_penghasilan','total3_pajak_penghasilan','total1_bagi_hasil','total2_bagi_hasil','total3_bagi_hasil','beban_ops_d1','beban_ops_d2','beban_ops_d3','total_pendapatan_bagi_utama','total_pendapatan_bagi_1','total_pendapatan_bagi_2','total_pendapatan_bagi_3','total_ops_utama','total_ops_1','total_ops_2','total_ops_3','total_nops_utama','total_nops_1','total_nops_2','total_nops_3','total_tops_utama','total_tops_1','total_tops_2','total_tops_3','total_bersih_utama','total_bersih_1','total_bersih_2','total_bersih_3','laba_berjalan_utama','laba_berjalan_d1','laba_berjalan_d2','laba_berjalan_d3','laba_berjalan_utama','laba_berjalan_d1','laba_berjalan_d2','laba_berjalan_d3','total1_laba_berjalan','total2_laba_berjalan','total3_laba_berjalan','total_equitas','total_equitas1','total_equitas2','total_equitas3','kpmm','total1_modal_pelengkap','total2_modal_pelengkap','total3_modal_pelengkap','total1_modal_inti','total2_modal_inti','total3_modal_inti','modal_inti_d1','modal_inti_d2','modal_inti_d3','total_modal_utama','total_modal_1','total_modal_2','total_modal_3','total_atmr_k1','total_atmr_k2','total_atmr_k3','total1_total_atmr','total2_total_atmr','total3_total_atmr','npf_utama','npf_d1','npf_d2','npf_d3','total1_npf','total2_npf','total3_npf','car_14_1','car_14_2','car_14_3','car_12_1','car_12_2','car_12_3','car_8_1','car_8_2','car_8_3','car_41_1','car_41_2','car_41_3','total_ppap1','total_ppap2','total_ppap3','tambahan_45_1','tambahan_45_2','tambahan_45_3','pembuat'))->setPaper('a4', 'landscape');
                
        return $pdf->stream('Simulasi.pdf');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus= Bank::findOrFail($id);
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
