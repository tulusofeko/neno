      <tr>
        <td colspan="11" style="background-color: #e3e3de;"><b>LIABILITAS</b></td>
      </tr>
      <tr>
        <td>Dana Pihak Ketiga</td>
        <td align="right">{{ $liabilitas->dana_utama != NULL ? "Rp " . number_format($liabilitas->dana_utama, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $liabilitas->dana_d1 != NULL ? "Rp " . number_format($liabilitas->dana_d1, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $liabilitas->dana_k1 != NULL ? "Rp " . number_format($liabilitas->dana_k1, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total1_dana != NULL ? "Rp " . number_format($total1_dana, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $liabilitas->dana_d2 != NULL ? "Rp " . number_format($liabilitas->dana_d2, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $liabilitas->dana_k2 != NULL ? "Rp " . number_format($liabilitas->dana_k2, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total2_dana != NULL ? "Rp " . number_format($total2_dana, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $liabilitas->dana_d3 != NULL ? "Rp " . number_format($liabilitas->dana_d3, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $liabilitas->dana_k3 != NULL ? "Rp " . number_format($liabilitas->dana_k3, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total3_dana != NULL ? "Rp " . number_format($total3_dana, 2, ",", ".") : '-' }}</td>
      </tr>
      <tr>
        <td>Liabilitas Kepada Bank Indonesia</td>
        <td align="right">{{ $liabilitas->liabilitas_bi_utama != NULL ? "Rp " . number_format($liabilitas->liabilitas_bi_utama, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $liabilitas->liabilitas_bi_d1 != NULL ? "Rp " . number_format($liabilitas->liabilitas_bi_d1, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $liabilitas->liabilitas_bi_k1 != NULL ? "Rp " . number_format($liabilitas->liabilitas_bi_k1, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total1_liabilitas_bi != NULL ? "Rp " . number_format($total1_liabilitas_bi, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $liabilitas->liabilitas_bi_d2 != NULL ? "Rp " . number_format($liabilitas->liabilitas_bi_d2, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $liabilitas->liabilitas_bi_k2 != NULL ? "Rp " . number_format($liabilitas->liabilitas_bi_k2, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total2_liabilitas_bi != NULL ? "Rp " . number_format($total2_liabilitas_bi, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $liabilitas->liabilitas_bi_d3 != NULL ? "Rp " . number_format($liabilitas->liabilitas_bi_d3, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $liabilitas->liabilitas_bi_k3 != NULL ? "Rp " . number_format($liabilitas->liabilitas_bi_k3, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total3_liabilitas_bi != NULL ? "Rp " . number_format($total3_liabilitas_bi, 2, ",", ".") : '-' }}</td>
      </tr>
      <tr>
        <td>Liabilitas ke Bank lain</td>
        <td align="right">{{ $liabilitas->liabilitas_lain_utama != NULL ? "Rp " . number_format($liabilitas->liabilitas_lain_utama, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $liabilitas->liabilitas_lain_d1 != NULL ? "Rp " . number_format($liabilitas->liabilitas_lain_d1, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $liabilitas->liabilitas_lain_k1 != NULL ? "Rp " . number_format($liabilitas->liabilitas_lain_k1, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total1_liabilitas_lain != NULL ? "Rp " . number_format($total1_liabilitas_lain, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $liabilitas->liabilitas_lain_d2 != NULL ? "Rp " . number_format($liabilitas->liabilitas_lain_d2, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $liabilitas->liabilitas_lain_k2 != NULL ? "Rp " . number_format($liabilitas->liabilitas_lain_k2, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total2_liabilitas_lain != NULL ? "Rp " . number_format($total2_liabilitas_lain, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $liabilitas->liabilitas_lain_d3 != NULL ? "Rp " . number_format($liabilitas->liabilitas_lain_d3, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $liabilitas->liabilitas_lain_k3 != NULL ? "Rp " . number_format($liabilitas->liabilitas_lain_k3, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total3_liabilitas_lain != NULL ? "Rp " . number_format($total3_liabilitas_lain, 2, ",", ".") : '-' }}</td>
      </tr>
      <tr>
        <td>Surat Berharga Diterbitkan</td>
        <td align="right">{{ $liabilitas->suberl_utama != NULL ? "Rp " . number_format($liabilitas->suberl_utama, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $liabilitas->suberl_d1 != NULL ? "Rp " . number_format($liabilitas->suberl_d1, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $liabilitas->suberl_k1 != NULL ? "Rp " . number_format($liabilitas->suberl_k1, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total1_suberl != NULL ? "Rp " . number_format($total1_suberl, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $liabilitas->suberl_d2 != NULL ? "Rp " . number_format($liabilitas->suberl_d2, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $liabilitas->suberl_k2 != NULL ? "Rp " . number_format($liabilitas->suberl_k2, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total2_suberl != NULL ? "Rp " . number_format($total2_suberl, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $liabilitas->suberl_d3 != NULL ? "Rp " . number_format($liabilitas->suberl_d3, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $liabilitas->suberl_k3 != NULL ? "Rp " . number_format($liabilitas->suberl_k3, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total3_suberl != NULL ? "Rp " . number_format($total3_suberl, 2, ",", ".") : '-' }}</td>
      </tr>
      <tr>
        <td>Liabilitas Diterima</td>
        <td align="right">{{ $liabilitas->liabilitas_diterima_utama != NULL ? "Rp " . number_format($liabilitas->liabilitas_diterima_utama, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $liabilitas->liabilitas_diterima_d1 != NULL ? "Rp " . number_format($liabilitas->liabilitas_diterima_d1, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $liabilitas->liabilitas_diterima_k1 != NULL ? "Rp " . number_format($liabilitas->liabilitas_diterima_k1, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total1_liabilitas_diterima != NULL ? "Rp " . number_format($total1_liabilitas_diterima, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $liabilitas->liabilitas_diterima_d2 != NULL ? "Rp " . number_format($liabilitas->liabilitas_diterima_d2, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $liabilitas->liabilitas_diterima_k2 != NULL ? "Rp " . number_format($liabilitas->liabilitas_diterima_k2, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total2_liabilitas_diterima != NULL ? "Rp " . number_format($total2_liabilitas_diterima, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $liabilitas->liabilitas_diterima_d3 != NULL ? "Rp " . number_format($liabilitas->liabilitas_diterima_d3, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $liabilitas->liabilitas_diterima_k3 != NULL ? "Rp " . number_format($liabilitas->liabilitas_diterima_k3, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total3_liabilitas_diterima != NULL ? "Rp " . number_format($total3_liabilitas_diterima, 2, ",", ".") : '-' }}</td>
      </tr>
      <tr>
        <td>Lainnya</td>
        <td align="right">{{ $liabilitas->lainl_utama != NULL ? "Rp " . number_format($liabilitas->lainl_utama, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $liabilitas->lainl_d1 != NULL ? "Rp " . number_format($liabilitas->lainl_d1, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $liabilitas->lainl_k1 != NULL ? "Rp " . number_format($liabilitas->lainl_k1, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total1_lainl != NULL ? "Rp " . number_format($total1_lainl, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $liabilitas->lainl_d2 != NULL ? "Rp " . number_format($liabilitas->lainl_d2, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $liabilitas->lainl_k2 != NULL ? "Rp " . number_format($liabilitas->lainl_k2, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total2_lainl != NULL ? "Rp " . number_format($total2_lainl, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $liabilitas->lainl_d3 != NULL ? "Rp " . number_format($liabilitas->lainl_d3, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $liabilitas->lainl_k3 != NULL ? "Rp " . number_format($liabilitas->lainl_k3, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total3_lainl != NULL ? "Rp " . number_format($total3_lainl, 2, ",", ".") : '-' }}</td>
      </tr>
      
      <tr style="font-weight: 780;background-color: #e3e3de;">
        <td>TOTAL LIABILITAS</td>
        <td align="right">{{ $total_liabilitas != NULL ? "Rp " . number_format($total_liabilitas, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total_liabilitas_d1 != NULL ? "Rp " . number_format($total_liabilitas_d1, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total_liabilitas_k1 != NULL ? "Rp " . number_format($total_liabilitas_k1, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total_liabilitas1 != NULL ? "Rp " . number_format($total_liabilitas1, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total_liabilitas_d2 != NULL ? "Rp " . number_format($total_liabilitas_d2, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total_liabilitas_k2 != NULL ? "Rp " . number_format($total_liabilitas_k2, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total_liabilitas2 != NULL ? "Rp " . number_format($total_liabilitas2, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total_liabilitas_d3 != NULL ? "Rp " . number_format($total_liabilitas_d3, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total_liabilitas_k3 != NULL ? "Rp " . number_format($total_liabilitas_k3, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total_liabilitas3 != NULL ? "Rp " . number_format($total_liabilitas3, 2, ",", ".") : '-' }}</td>
    </tr>