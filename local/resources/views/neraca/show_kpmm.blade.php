      <tr>
        <td colspan="11" style="background-color: #e3e3de;"><b>KPMM</b></td>
      </tr>
      <tr>
        <td colspan="11" style="background-color: #e3e3de;"><b>Modal Inti</b></td>
      </tr>
      <tr>
        <td>Total Modal Inti</td>
        <td align="right">{{ $kpmm->modal_inti_utama != NULL ? "Rp " . number_format($kpmm->modal_inti_utama, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $modal_inti_d1 != NULL ? "Rp " . number_format($modal_inti_d1, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $kpmm->modal_inti_k1 != NULL ? "Rp " . number_format($kpmm->modal_inti_k1, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total1_modal_inti != NULL ? "Rp " . number_format($total1_modal_inti, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $modal_inti_d2 != NULL ? "Rp " . number_format($modal_inti_d2, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $kpmm->modal_inti_k2 != NULL ? "Rp " . number_format($kpmm->modal_inti_k2, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total2_modal_inti != NULL ? "Rp " . number_format($total2_modal_inti, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $modal_inti_d3 != NULL ? "Rp " . number_format($modal_inti_d3, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $kpmm->modal_inti_k3 != NULL ? "Rp " . number_format($kpmm->modal_inti_k3, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total3_modal_inti != NULL ? "Rp " . number_format($total3_modal_inti, 2, ",", ".") : '-' }}</td>
      </tr>
      <tr>
        <td>Total Modal Pelengkap</td>
        <td align="right">{{ $kpmm->modal_pelengkap_utama != NULL ? "Rp " . number_format($kpmm->modal_pelengkap_utama, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $kpmm->modal_pelengkap_d1 != NULL ? "Rp " . number_format($kpmm->modal_pelengkap_d1, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $kpmm->modal_pelengkap_k1 != NULL ? "Rp " . number_format($kpmm->modal_pelengkap_k1, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total1_modal_pelengkap != NULL ? "Rp " . number_format($total1_modal_pelengkap, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $kpmm->modal_pelengkap_d2 != NULL ? "Rp " . number_format($kpmm->modal_pelengkap_d2, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $kpmm->modal_pelengkap_k2 != NULL ? "Rp " . number_format($kpmm->modal_pelengkap_k2, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total2_modal_pelengkap != NULL ? "Rp " . number_format($total2_modal_pelengkap, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $kpmm->modal_pelengkap_d3 != NULL ? "Rp " . number_format($kpmm->modal_pelengkap_d3, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $kpmm->modal_pelengkap_k3 != NULL ? "Rp " . number_format($kpmm->modal_pelengkap_k3, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total3_modal_pelengkap != NULL ? "Rp " . number_format($total3_modal_pelengkap, 2, ",", ".") : '-' }}</td>
      </tr>

      <tr style="background-color: #e3e3de;font-weight: 780;">
        <td><b>Total Modal</b></td>
        <td align="right">{{ $total_modal_utama != NULL ? "Rp " . number_format($total_modal_utama, 2, ",", ".") : '-' }}</td>
        <td align="right"></td>
        <td align="right"></td>
        <td align="right">{{ $total_modal_1 != NULL ? "Rp " . number_format($total_modal_1, 2, ",", ".") : '-' }}</td>
        <td align="right"></td>
        <td align="right"></td>
        <td align="right">{{ $total_modal_2 != NULL ? "Rp " . number_format($total_modal_3, 2, ",", ".") : '-' }}</td>
        <td align="right"></td>
        <td align="right"></td>
        <td align="right">{{ $total_modal_3 != NULL ? "Rp " . number_format($total_modal_3, 2, ",", ".") : '-' }}</td>
      </tr>

      <tr>
        <td><b>Total ATMR</b></td>
        <td align="right">{{ $kpmm->total_atmr_utama != NULL ? "Rp " . number_format($kpmm->total_atmr_utama, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $kpmm->total_atmr_d1 != NULL ? "Rp " . number_format($kpmm->total_atmr_d1, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total_atmr_k1 != NULL ? "Rp " . number_format($total_atmr_k1, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total1_total_atmr != NULL ? "Rp " . number_format($total1_total_atmr, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $kpmm->total_atmr_d2 != NULL ? "Rp " . number_format($kpmm->total_atmr_d2, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total_atmr_k2 != NULL ? "Rp " . number_format($total_atmr_k2, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total2_total_atmr != NULL ? "Rp " . number_format($total2_total_atmr, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $kpmm->total_atmr_d3 != NULL ? "Rp " . number_format($kpmm->total_atmr_d3, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total_atmr_k3 != NULL ? "Rp " . number_format($total_atmr_k3, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total3_total_atmr != NULL ? "Rp " . number_format($total3_total_atmr, 2, ",", ".") : '-' }}</td>
      </tr>

    <tr>
        <td><b>CAR</b></td>
        <td align="right">{{ number_format(($total_modal_utama/$kpmm->total_atmr_utama)*100, 2, ",", ".") }} %</td>
        <td></td>
        <td></td>
        <td align="right">{{ $total1_total_atmr != NULL ? number_format(($total_modal_1/$total1_total_atmr)*100, 2, ",", ".") : '0' }} %</td>
        <td></td>
        <td></td>
        <td align="right">{{ $total2_total_atmr != NULL ? number_format(($total_modal_2/$total2_total_atmr)*100, 2, ",", ".") : '0'  }} %</td>
        <td></td>
        <td></td>
        <td align="right">{{ $total3_total_atmr != NULL ? number_format(($total_modal_3/$total3_total_atmr)*100, 2, ",", ".") : '0'  }} %</td>
    </tr>

    <tr>
        <td><b>NPF Nominal</b></td>
        <td align="right">{{ $npf_utama != NULL ? "Rp " . number_format($npf_utama, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $npf_d1 != NULL ? "Rp " . number_format($npf_d1, 2, ",", ".") : '-' }}</td>
        <td align="right"></td>
        <td align="right">{{ $total1_npf != NULL ? "Rp " . number_format($total1_npf, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $npf_d2 != NULL ? "Rp " . number_format($npf_d2, 2, ",", ".") : '-' }}</td>
        <td align="right"></td>
        <td align="right">{{ $total2_npf != NULL ? "Rp " . number_format($total2_npf, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $npf_d3 != NULL ? "Rp " . number_format($npf_d3, 2, ",", ".") : '-' }}</td>
        <td align="right"></td>
        <td align="right">{{ $total3_npf != NULL ? "Rp " . number_format($total3_npf, 2, ",", ".") : '-' }}</td>
    </tr>

    <tr>
        <td><b>CKPN Pembiayaan Bermasalah</b></td>
        <td align="right">{{ $kpmm->ckpn_utama != NULL ? "Rp " . number_format($kpmm->ckpn_utama, 2, ",", ".") : '-' }}</td>
        <td align="right"></td>
        <td align="right"></td>
        <td align="right">{{ $kpmm->ckpn_utama != NULL ? "Rp " . number_format($kpmm->ckpn_utama, 2, ",", ".") : '-' }}</td>
        <td align="right"></td>
        <td align="right"></td>
        <td align="right">{{ $kpmm->ckpn_utama != NULL ? "Rp " . number_format($kpmm->ckpn_utama, 2, ",", ".") : '-' }}</td>
        <td align="right"></td>
        <td align="right"></td>
        <td align="right">{{ $kpmm->ckpn_utama != NULL ? "Rp " . number_format($kpmm->ckpn_utama, 2, ",", ".") : '-' }}</td>
    </tr>

    <tr>
        <td><b>Rasio NPF Gross</b></td>
        <td align="right">{{ number_format(($npf_utama/$pembiayaan_utama)*100, 2, ",", ".") }}%</td>
        <td></td>
        <td></td>
        <td align="right">{{ number_format(($total1_npf/$total1_pembiayaan)*100, 2, ",", ".") }}%</td>
        <td></td>
        <td></td>
        <td align="right">{{ number_format(($total2_npf/$total2_pembiayaan)*100, 2, ",", ".") }}%</td>
        <td></td>
        <td></td>
        <td align="right">{{ number_format(($total3_npf/$total3_pembiayaan)*100, 2, ",", ".") }}%</td>
    </tr>

    <tr>
        <td><b>Rasio NPF Nett</b></td>
        <td align="right">{{ number_format((($npf_utama + $kpmm->ckpn_utama)/$pembiayaan_utama)*100, 2, ",", ".") }}%</td>
        <td></td>
        <td></td>
        <td align="right">{{ number_format((($total1_npf + $kpmm->ckpn_utama)/$total1_pembiayaan)*100, 2, ",", ".") }}%</td>
        <td></td>
        <td></td>
        <td align="right">{{ number_format((($total2_npf + $kpmm->ckpn_utama)/$total2_pembiayaan)*100, 2, ",", ".") }}%</td>
        <td></td>
        <td></td>
        <td align="right">{{ number_format((($total3_npf + $kpmm->ckpn_utama)/$total3_pembiayaan)*100, 2, ",", ".") }}%</td>
    </tr>