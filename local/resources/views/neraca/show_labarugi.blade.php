      <tr>
        <td colspan="11" style="background-color: #e3e3de;"><b>LABA RUGI</b></td>
      </tr>
      <tr>
        <td>Pendapatan Dari Penyaluran Dana</td>
        <td align="right">{{ $labarugi->pendapatan_penyaluran_utama != NULL ? "Rp " . number_format($labarugi->pendapatan_penyaluran_utama, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $labarugi->pendapatan_penyaluran_d1 != NULL ? "Rp " . number_format($labarugi->pendapatan_penyaluran_d1, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $labarugi->pendapatan_penyaluran_k1 != NULL ? "Rp " . number_format($labarugi->pendapatan_penyaluran_k1, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total1_pendapatan_penyaluran != NULL ? "Rp " . number_format($total1_pendapatan_penyaluran, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $labarugi->pendapatan_penyaluran_d2 != NULL ? "Rp " . number_format($labarugi->pendapatan_penyaluran_d2, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $labarugi->pendapatan_penyaluran_k2 != NULL ? "Rp " . number_format($labarugi->pendapatan_penyaluran_k2, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total2_pendapatan_penyaluran != NULL ? "Rp " . number_format($total2_pendapatan_penyaluran, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $labarugi->pendapatan_penyaluran_d3 != NULL ? "Rp " . number_format($labarugi->pendapatan_penyaluran_d3, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $labarugi->pendapatan_penyaluran_k3 != NULL ? "Rp " . number_format($labarugi->pendapatan_penyaluran_k3, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total3_pendapatan_penyaluran != NULL ? "Rp " . number_format($total3_pendapatan_penyaluran, 2, ",", ".") : '-' }}</td>
      </tr>

      <tr>
        <td>Bagi Hasil Untuk Pemilik Dana Investasi</td>
        <td align="right">{{ $labarugi->bagi_hasil_utama != NULL ? "Rp " . number_format($labarugi->bagi_hasil_utama, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $labarugi->bagi_hasil_d1 != NULL ? "Rp " . number_format($labarugi->bagi_hasil_d1, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $labarugi->bagi_hasil_k1 != NULL ? "Rp " . number_format($labarugi->bagi_hasil_k1, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total1_bagi_hasil != NULL ? "Rp " . number_format($total1_bagi_hasil, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $labarugi->bagi_hasil_d2 != NULL ? "Rp " . number_format($labarugi->bagi_hasil_d2, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $labarugi->bagi_hasil_k2 != NULL ? "Rp " . number_format($labarugi->bagi_hasil_k2, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total2_bagi_hasil != NULL ? "Rp " . number_format($total2_bagi_hasil, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $labarugi->bagi_hasil_d3 != NULL ? "Rp " . number_format($labarugi->bagi_hasil_d3, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $labarugi->bagi_hasil_k3 != NULL ? "Rp " . number_format($labarugi->bagi_hasil_k3, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total3_bagi_hasil != NULL ? "Rp " . number_format($total3_bagi_hasil, 2, ",", ".") : '-' }}</td>
      </tr>

      <tr style="background-color: #e3e3de;font-weight: 780;">
        <td>Pendapatan setelah distribusi bagi hasil</td>
        <td align="right">{{ $total_pendapatan_bagi_utama != NULL ? "Rp " . number_format($total_pendapatan_bagi_utama, 2, ",", ".") : '-' }}</td>
        <td align="right"></td>
        <td align="right"></td>
        <td align="right">{{ $total_pendapatan_bagi_1 != NULL ? "Rp " . number_format($total_pendapatan_bagi_1, 2, ",", ".") : '-' }}</td>
        <td align="right"></td>
        <td align="right"></td>
        <td align="right">{{ $total_pendapatan_bagi_2 != NULL ? "Rp " . number_format($total_pendapatan_bagi_3, 2, ",", ".") : '-' }}</td>
        <td align="right"></td>
        <td align="right"></td>
        <td align="right">{{ $total_pendapatan_bagi_3 != NULL ? "Rp " . number_format($total_pendapatan_bagi_3, 2, ",", ".") : '-' }}</td>
      </tr>

      <tr>
        <td>Pendapatan Operasional Lainnya</td>
        <td align="right">{{ $labarugi->pendapatan_ops_utama != NULL ? "Rp " . number_format($labarugi->pendapatan_ops_utama, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $labarugi->pendapatan_ops_d1 != NULL ? "Rp " . number_format($labarugi->pendapatan_ops_d1, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $labarugi->pendapatan_ops_k1 != NULL ? "Rp " . number_format($labarugi->pendapatan_ops_k1, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total1_pendapatan_ops != NULL ? "Rp " . number_format($total1_pendapatan_ops, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $labarugi->pendapatan_ops_d2 != NULL ? "Rp " . number_format($labarugi->pendapatan_ops_d2, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $labarugi->pendapatan_ops_k2 != NULL ? "Rp " . number_format($labarugi->pendapatan_ops_k2, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total2_pendapatan_ops != NULL ? "Rp " . number_format($total2_pendapatan_ops, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $labarugi->pendapatan_ops_d3 != NULL ? "Rp " . number_format($labarugi->pendapatan_ops_d3, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $labarugi->pendapatan_ops_k3 != NULL ? "Rp " . number_format($labarugi->pendapatan_ops_k3, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total3_pendapatan_ops != NULL ? "Rp " . number_format($total3_pendapatan_ops, 2, ",", ".") : '-' }}</td>
      </tr>

      <tr>
        <td>Beban Operasional</td>
        <td align="right">{{ $labarugi->beban_ops_utama != NULL ? "Rp " . number_format($labarugi->beban_ops_utama, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $beban_ops_d1 != NULL ? "Rp " . number_format($beban_ops_d1, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $labarugi->beban_ops_k1 != NULL ? "Rp " . number_format($labarugi->beban_ops_k1, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total1_beban_ops != NULL ? "Rp " . number_format($total1_beban_ops, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $beban_ops_d2 != NULL ? "Rp " . number_format($beban_ops_d2, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $labarugi->beban_ops_k2 != NULL ? "Rp " . number_format($labarugi->beban_ops_k2, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total2_beban_ops != NULL ? "Rp " . number_format($total2_beban_ops, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $beban_ops_d3 != NULL ? "Rp " . number_format($beban_ops_d3, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $labarugi->beban_ops_k3 != NULL ? "Rp " . number_format($labarugi->beban_ops_k3, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total3_beban_ops != NULL ? "Rp " . number_format($total3_beban_ops, 2, ",", ".") : '-' }}</td>
      </tr>

      <tr style="background-color: #e3e3de;font-weight: 780;">
        <td>Laba/(Rugi) Operasional</td>
        <td align="right">{{ $total_ops_utama != NULL ? "Rp " . number_format($total_ops_utama, 2, ",", ".") : '-' }}</td>
        <td align="right"></td>
        <td align="right"></td>
        <td align="right">{{ $total_ops_1 != NULL ? "Rp " . number_format($total_ops_1, 2, ",", ".") : '-' }}</td>
        <td align="right"></td>
        <td align="right"></td>
        <td align="right">{{ $total_ops_2 != NULL ? "Rp " . number_format($total_ops_3, 2, ",", ".") : '-' }}</td>
        <td align="right"></td>
        <td align="right"></td>
        <td align="right">{{ $total_ops_3 != NULL ? "Rp " . number_format($total_ops_3, 2, ",", ".") : '-' }}</td>
      </tr>

      <tr>
        <td>Pendapatan Non Operasional </td>
        <td align="right">{{ $labarugi->pendapatan_nops_utama != NULL ? "Rp " . number_format($labarugi->pendapatan_nops_utama, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $labarugi->pendapatan_nops_d1 != NULL ? "Rp " . number_format($labarugi->pendapatan_nops_d1, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $labarugi->pendapatan_nops_k1 != NULL ? "Rp " . number_format($labarugi->pendapatan_nops_k1, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total1_pendapatan_nops != NULL ? "Rp " . number_format($total1_pendapatan_nops, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $labarugi->pendapatan_nops_d2 != NULL ? "Rp " . number_format($labarugi->pendapatan_nops_d2, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $labarugi->pendapatan_nops_k2 != NULL ? "Rp " . number_format($labarugi->pendapatan_nops_k2, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total2_pendapatan_nops != NULL ? "Rp " . number_format($total2_pendapatan_nops, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $labarugi->pendapatan_nops_d3 != NULL ? "Rp " . number_format($labarugi->pendapatan_nops_d3, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $labarugi->pendapatan_nops_k3 != NULL ? "Rp " . number_format($labarugi->pendapatan_nops_k3, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total3_pendapatan_nops != NULL ? "Rp " . number_format($total3_pendapatan_nops, 2, ",", ".") : '-' }}</td>
      </tr>

      <tr>
        <td>Beban Non Operasional</td>
        <td align="right">{{ $labarugi->beban_nops_utama != NULL ? "Rp " . number_format($labarugi->beban_nops_utama, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $labarugi->beban_nops_d1 != NULL ? "Rp " . number_format($labarugi->beban_nops_d1, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $labarugi->beban_nops_k1 != NULL ? "Rp " . number_format($labarugi->beban_nops_k1, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total1_beban_nops != NULL ? "Rp " . number_format($total1_beban_nops, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $labarugi->beban_nops_d2 != NULL ? "Rp " . number_format($labarugi->beban_nops_d2, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $labarugi->beban_nops_k2 != NULL ? "Rp " . number_format($labarugi->beban_nops_k2, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total2_beban_nops != NULL ? "Rp " . number_format($total2_beban_nops, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $labarugi->beban_nops_d3 != NULL ? "Rp " . number_format($labarugi->beban_nops_d3, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $labarugi->beban_nops_k3 != NULL ? "Rp " . number_format($labarugi->beban_nops_k3, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total3_beban_nops != NULL ? "Rp " . number_format($total3_beban_nops, 2, ",", ".") : '-' }}</td>
      </tr>

      <tr style="background-color: #e3e3de;font-weight: 780;">
        <td>Laba/(Rugi) Non Operasional</td>
        <td align="right">{{ $total_nops_utama != NULL ? "Rp " . number_format($total_nops_utama, 2, ",", ".") : '-' }}</td>
        <td align="right"></td>
        <td align="right"></td>
        <td align="right">{{ $total_nops_1 != NULL ? "Rp " . number_format($total_nops_1, 2, ",", ".") : '-' }}</td>
        <td align="right"></td>
        <td align="right"></td>
        <td align="right">{{ $total_nops_2 != NULL ? "Rp " . number_format($total_nops_3, 2, ",", ".") : '-' }}</td>
        <td align="right"></td>
        <td align="right"></td>
        <td align="right">{{ $total_nops_3 != NULL ? "Rp " . number_format($total_nops_3, 2, ",", ".") : '-' }}</td>
      </tr>

      <tr style="background-color: #e3e3de;font-weight: 780;">
        <td>Laba/(Rugi) Tahun Berjalan</td>
        <td align="right">{{ $total_tops_utama != NULL ? "Rp " . number_format($total_tops_utama, 2, ",", ".") : '-' }}</td>
        <td align="right"></td>
        <td align="right"></td>
        <td align="right">{{ $total_tops_1 != NULL ? "Rp " . number_format($total_tops_1, 2, ",", ".") : '-' }}</td>
        <td align="right"></td>
        <td align="right"></td>
        <td align="right">{{ $total_tops_2 != NULL ? "Rp " . number_format($total_tops_3, 2, ",", ".") : '-' }}</td>
        <td align="right"></td>
        <td align="right"></td>
        <td align="right">{{ $total_tops_3 != NULL ? "Rp " . number_format($total_tops_3, 2, ",", ".") : '-' }}</td>
      </tr>

      <tr>
        <td>Pajak Penghasilan</td>
        <td align="right">{{ $labarugi->pajak_penghasilan_utama != NULL ? "Rp " . number_format($labarugi->pajak_penghasilan_utama, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $labarugi->pajak_penghasilan_d1 != NULL ? "Rp " . number_format($labarugi->pajak_penghasilan_d1, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $labarugi->pajak_penghasilan_k1 != NULL ? "Rp " . number_format($labarugi->pajak_penghasilan_k1, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total1_pajak_penghasilan != NULL ? "Rp " . number_format($total1_pajak_penghasilan, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $labarugi->pajak_penghasilan_d2 != NULL ? "Rp " . number_format($labarugi->pajak_penghasilan_d2, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $labarugi->pajak_penghasilan_k2 != NULL ? "Rp " . number_format($labarugi->pajak_penghasilan_k2, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total2_pajak_penghasilan != NULL ? "Rp " . number_format($total2_pajak_penghasilan, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $labarugi->pajak_penghasilan_d3 != NULL ? "Rp " . number_format($labarugi->pajak_penghasilan_d3, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $labarugi->pajak_penghasilan_k3 != NULL ? "Rp " . number_format($labarugi->pajak_penghasilan_k3, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total3_pajak_penghasilan != NULL ? "Rp " . number_format($total3_pajak_penghasilan, 2, ",", ".") : '-' }}</td>
      </tr>

      <tr style="background-color: #e3e3de;font-weight: 780;">
        <td>Laba/(Rugi) Bersih</td>
        <td align="right">{{ $total_bersih_utama != NULL ? "Rp " . number_format($total_bersih_utama, 2, ",", ".") : '-' }}</td>
        <td align="right"></td>
        <td align="right"></td>
        <td align="right">{{ $total_bersih_1 != NULL ? "Rp " . number_format($total_bersih_1, 2, ",", ".") : '-' }}</td>
        <td align="right"></td>
        <td align="right"></td>
        <td align="right">{{ $total_bersih_2 != NULL ? "Rp " . number_format($total_bersih_3, 2, ",", ".") : '-' }}</td>
        <td align="right"></td>
        <td align="right"></td>
        <td align="right">{{ $total_bersih_3 != NULL ? "Rp " . number_format($total_bersih_3, 2, ",", ".") : '-' }}</td>
      </tr>