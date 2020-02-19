<!DOCTYPE html>
<html>
<head>
</head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="{{ asset('css/table.css') }}">
<body>
    <h2 align="center">TABEL GENERATE DATA NOMINATIF</h2></br>
    <table>
        <thead>
            <tr  style="background-color: #F2F1F8;">
                <th align="center" width="8">NO</th>
                <th align="center" width="20">NO_BASE</th> 
                <th align="center" width="35">NAMA</th>
                <th align="center" width="30">STAT</th>
                <th align="center" width="30">SAMPLE</th>
                <th align="center" width="30">OUTSTANDING</th>      
                <th align="center" width="30">PPAP TB</th>
                <th align="center" width="30">KOL LSMK</th>    
                <th align="center" width="30">KOL 1 PILAR</th> 
                <th align="center" width="30">KOL 3 PILAR</th> 
                <th align="center" width="30">SAMPLE</th>  
                <th align="center" width="30">KOL AUDITOR</th>  
                <th align="center" width="30">AYDD AUDITOR</th> 
                <th align="center" width="30">OS-AYDD AUDITOR</th> 
                <th align="center" width="30">TARIF PPA KOL LSMK</th>   
                <th align="center" width="30">PPA WB KOL LSMK</th>      
                <th align="center" width="30">PPA KB KOL LSMK</th>     
                <th align="center" width="30">TARIF PPA KOL 1 PILAR</th>    
                <th align="center" width="30">PPA WB KOL LSMK</th>      
                <th align="center" width="30">PPA KB KOL 1 PILAR</th>  
                <th align="center" width="30">TARIF PPA KOL 3 PILAR</th>    
                <th align="center" width="30">PPA WB KOL 3 PILAR</th>   
                <th align="center" width="30">PPA KB KOL LSMK</th>
            </tr>
        </thead>
        @if($jumlah_data!=NULL)
        <tbody>
            @foreach($nominatif_list as $key => $nominatif)
            <tr>
                <td align="center">{{ $key+1 }}</td>
                <td align="center">{{ $nominatif->no_base }}</td>
                <td align="center">{{ $nominatif->nama }}</td>
                <td align="center">{{ $nominatif->stat }}</td>
                <td align="center">{{ $nominatif->sample }}</td>
                <td align="right">{{ $nominatif->outstanding != NULL ? "Rp " . number_format($nominatif->outstanding, 2, ",", ".") : '-' }}</td>
                <td align="right">{{ $nominatif->ppap_tb != NULL ? "Rp " . number_format($nominatif->ppap_tb, 2, ",", ".") : '-' }}</td>
                <td align="center">{{ $nominatif->kol_lsmk }}</td>
                <td align="center">{{ $nominatif->kol_1_pilar }}</td>
                <td align="center">{{ $nominatif->kol_3_pilar }}</td>
                <td align="center">{{ $nominatif->sample2 }}</td>
                <td align="right">{{ $nominatif->kol_auditor != NULL ? number_format($nominatif->kol_auditor, 0, ",", ".") : '-' }}</td>
                <td align="right">{{ $nominatif->aydd_auditor != NULL ? number_format($nominatif->aydd_auditor, 0, ",", ".") : '-' }}</td>
                <td align="right">{{ $os_aydd[$key] != NULL ? "Rp " . number_format($os_aydd[$key], 2, ",", ".") : '-' }}</td>
                <td align="center">{{ $tarif_ppa[$key] }} %</td>
                <td align="right">{{ $ppa_wb[$key] != NULL ? "Rp " . number_format($ppa_wb[$key], 2, ",", ".") : '-' }}</td>
                <td align="right">{{ $ppa_kb[$key] != NULL ? "Rp " . number_format($ppa_kb[$key], 2, ",", ".") : '-' }}</td>
                <td align="center">{{ $tarif_ppa_kol_1_pilar[$key] }} %</td>
                <td align="right">{{ $ppa_wb2[$key] != NULL ? "Rp " . number_format($ppa_wb2[$key], 2, ",", ".") : '-' }}</td>
                <td align="right">{{ $ppa_kb_1_pilar[$key] != NULL ? "Rp " . number_format($ppa_kb_1_pilar[$key], 2, ",", ".") : '-' }}</td>
                <td align="center">{{ $tarif_ppa_kol_3_pilar[$key] }} %</td>
                <td align="right">{{ $ppa_wb3[$key] != NULL ? "Rp " . number_format($ppa_wb3[$key], 2, ",", ".") : '-' }}</td>
                <td align="right">{{ $ppa_kb_3_pilar[$key] != NULL ? "Rp " . number_format($ppa_kb_3_pilar[$key], 2, ",", ".") : '-' }}</td>
            </tr>
            @endforeach
            <tr>
                <td align="center" colspan="2"><b>JUMLAH</b></td>
                <td align="center"></td>
                <td align="center"></td>
                <td align="center"></td>
                <td align="right">{{ $jumlah_outstanding != NULL ? "Rp " . number_format($jumlah_outstanding, 2, ",", ".") : '-' }}</td>
                <td align="right">{{ $jumlah_ppap_tb != NULL ? "Rp " . number_format($jumlah_ppap_tb, 2, ",", ".") : '-' }}</td>
                <td align="center"></td>
                <td align="center"></td>
                <td align="center"></td>
                <td align="center"></td>
                <td align="right"></td>
                <td align="right">{{ $jumlah_aydd_auditor != NULL ? number_format($jumlah_aydd_auditor, 0, ",", ".") : '-' }}</td>
                <td align="right"></td>
                <td align="center"></td>
                <td align="right"></td>
                <td align="right">{{ $jumlah_ppa_kb1 != NULL ? "Rp " . number_format($jumlah_ppa_kb1, 2, ",", ".") : '-' }}</td>
                <td align="center"></td>
                <td align="right"></td>
                <td align="right">{{ $jumlah_ppa_kb2 != NULL ? "Rp " . number_format($jumlah_ppa_kb2, 2, ",", ".") : '-' }}</td>
                <td align="center"></td>
                <td align="right"></td>
                <td align="right">{{ $jumlah_ppa_kb3 != NULL ? "Rp " . number_format($jumlah_ppa_kb3, 2, ",", ".") : '-' }}</td>
            </tr>
        </tbody>
        @else
        <tbody>
            <tr>
                <td colspan="23" align="center">Tidak Ada Data</td>
            </tr>
        </tbody>
        @endif
    </table>
</body>
</html>