      <tr>
        <td colspan="11" style="background-color: #e3e3de;"><b>EQUITAS</b></td>
      </tr>
      <tr>
        <td>Modal Disetor</td>
        <td align="right">{{ $equitas->modal_disetor_utama != NULL ? "Rp " . number_format($equitas->modal_disetor_utama, 2, ",", ".") : ' ' }}</td>
        <td align="right">{{ $equitas->modal_disetor_d1 != NULL ? "Rp " . number_format($equitas->modal_disetor_d1, 2, ",", ".") : ' ' }}</td>
        <td align="right">{{ $equitas->modal_disetor_k1 != NULL ? "Rp " . number_format($equitas->modal_disetor_k1, 2, ",", ".") : ' ' }}</td>
        <td align="right">{{ $total1_modal_disetor != NULL ? "Rp " . number_format($total1_modal_disetor, 2, ",", ".") : ' ' }}</td>
        <td align="right">{{ $equitas->modal_disetor_d2 != NULL ? "Rp " . number_format($equitas->modal_disetor_d2, 2, ",", ".") : ' ' }}</td>
        <td align="right">{{ $equitas->modal_disetor_k2 != NULL ? "Rp " . number_format($equitas->modal_disetor_k2, 2, ",", ".") : ' ' }}</td>
        <td align="right">{{ $total2_modal_disetor != NULL ? "Rp " . number_format($total2_modal_disetor, 2, ",", ".") : ' ' }}</td>
        <td align="right">{{ $equitas->modal_disetor_d3 != NULL ? "Rp " . number_format($equitas->modal_disetor_d3, 2, ",", ".") : ' ' }}</td>
        <td align="right">{{ $equitas->modal_disetor_k3 != NULL ? "Rp " . number_format($equitas->modal_disetor_k3, 2, ",", ".") : ' ' }}</td>
        <td align="right">{{ $total3_modal_disetor != NULL ? "Rp " . number_format($total3_modal_disetor, 2, ",", ".") : ' ' }}</td>
      </tr>
      <tr>
        <td>Modal Pinjaman</td>
        <td align="right">{{ $equitas->modal_pinjaman_utama != NULL ? "Rp " . number_format($equitas->modal_pinjaman_utama, 2, ",", ".") : ' ' }}</td>
        <td align="right">{{ $equitas->modal_pinjaman_d1 != NULL ? "Rp " . number_format($equitas->modal_pinjaman_d1, 2, ",", ".") : ' ' }}</td>
        <td align="right">{{ $equitas->modal_pinjaman_k1 != NULL ? "Rp " . number_format($equitas->modal_pinjaman_k1, 2, ",", ".") : ' ' }}</td>
        <td align="right">{{ $total1_modal_pinjaman != NULL ? "Rp " . number_format($total1_modal_pinjaman, 2, ",", ".") : ' ' }}</td>
        <td align="right">{{ $equitas->modal_pinjaman_d2 != NULL ? "Rp " . number_format($equitas->modal_pinjaman_d2, 2, ",", ".") : ' ' }}</td>
        <td align="right">{{ $equitas->modal_pinjaman_k2 != NULL ? "Rp " . number_format($equitas->modal_pinjaman_k2, 2, ",", ".") : ' ' }}</td>
        <td align="right">{{ $total2_modal_pinjaman != NULL ? "Rp " . number_format($total2_modal_pinjaman, 2, ",", ".") : ' ' }}</td>
        <td align="right">{{ $equitas->modal_pinjaman_d3 != NULL ? "Rp " . number_format($equitas->modal_pinjaman_d3, 2, ",", ".") : ' ' }}</td>
        <td align="right">{{ $equitas->modal_pinjaman_k3 != NULL ? "Rp " . number_format($equitas->modal_pinjaman_k3, 2, ",", ".") : ' ' }}</td>
        <td align="right">{{ $total3_modal_pinjaman != NULL ? "Rp " . number_format($total3_modal_pinjaman, 2, ",", ".") : ' ' }}</td>
      </tr>
      <tr>
        <td>Perkiraan Tambahan Modal Disetor</td>
        <td align="right">{{ $equitas->perkiraan_utama != NULL ? "Rp " . number_format($equitas->perkiraan_utama, 2, ",", ".") : ' ' }}</td>
        <td align="right">{{ $equitas->perkiraan_d1 != NULL ? "Rp " . number_format($equitas->perkiraan_d1, 2, ",", ".") : ' ' }}</td>
        <td align="right">{{ $equitas->perkiraan_k1 != NULL ? "Rp " . number_format($equitas->perkiraan_k1, 2, ",", ".") : ' ' }}</td>
        <td align="right">{{ $total1_perkiraan != NULL ? "Rp " . number_format($total1_perkiraan, 2, ",", ".") : ' ' }}</td>
        <td align="right">{{ $equitas->perkiraan_d2 != NULL ? "Rp " . number_format($equitas->perkiraan_d2, 2, ",", ".") : ' ' }}</td>
        <td align="right">{{ $equitas->perkiraan_k2 != NULL ? "Rp " . number_format($equitas->perkiraan_k2, 2, ",", ".") : ' ' }}</td>
        <td align="right">{{ $total2_perkiraan != NULL ? "Rp " . number_format($total2_perkiraan, 2, ",", ".") : ' ' }}</td>
        <td align="right">{{ $equitas->perkiraan_d3 != NULL ? "Rp " . number_format($equitas->perkiraan_d3, 2, ",", ".") : ' ' }}</td>
        <td align="right">{{ $equitas->perkiraan_k3 != NULL ? "Rp " . number_format($equitas->perkiraan_k3, 2, ",", ".") : ' ' }}</td>
        <td align="right">{{ $total3_perkiraan != NULL ? "Rp " . number_format($total3_perkiraan, 2, ",", ".") : ' ' }}</td>
      </tr>
      <tr>
        <td>Selisih Penilaian Kembali Aset Tetap</td>
        <td align="right">{{ $equitas->selisih_utama != NULL ? "Rp " . number_format($equitas->selisih_utama, 2, ",", ".") : ' ' }}</td>
        <td align="right">{{ $equitas->selisih_d1 != NULL ? "Rp " . number_format($equitas->selisih_d1, 2, ",", ".") : ' ' }}</td>
        <td align="right">{{ $equitas->selisih_k1 != NULL ? "Rp " . number_format($equitas->selisih_k1, 2, ",", ".") : ' ' }}</td>
        <td align="right">{{ $total1_selisih != NULL ? "Rp " . number_format($total1_selisih, 2, ",", ".") : ' ' }}</td>
        <td align="right">{{ $equitas->selisih_d2 != NULL ? "Rp " . number_format($equitas->selisih_d2, 2, ",", ".") : ' ' }}</td>
        <td align="right">{{ $equitas->selisih_k2 != NULL ? "Rp " . number_format($equitas->selisih_k2, 2, ",", ".") : ' ' }}</td>
        <td align="right">{{ $total2_selisih != NULL ? "Rp " . number_format($total2_selisih, 2, ",", ".") : ' ' }}</td>
        <td align="right">{{ $equitas->selisih_d3 != NULL ? "Rp " . number_format($equitas->selisih_d3, 2, ",", ".") : ' ' }}</td>
        <td align="right">{{ $equitas->selisih_k3 != NULL ? "Rp " . number_format($equitas->selisih_k3, 2, ",", ".") : ' ' }}</td>
        <td align="right">{{ $total3_selisih != NULL ? "Rp " . number_format($total3_selisih, 2, ",", ".") : ' ' }}</td>
      </tr>
      <tr>
        <td>Cadangan</td>
        <td align="right">{{ $equitas->cadangan_utama != NULL ? "Rp " . number_format($equitas->cadangan_utama, 2, ",", ".") : ' ' }}</td>
        <td align="right">{{ $equitas->cadangan_d1 != NULL ? "Rp " . number_format($equitas->cadangan_d1, 2, ",", ".") : ' ' }}</td>
        <td align="right">{{ $equitas->cadangan_k1 != NULL ? "Rp " . number_format($equitas->cadangan_k1, 2, ",", ".") : ' ' }}</td>
        <td align="right">{{ $total1_cadangan != NULL ? "Rp " . number_format($total1_cadangan, 2, ",", ".") : ' ' }}</td>
        <td align="right">{{ $equitas->cadangan_d2 != NULL ? "Rp " . number_format($equitas->cadangan_d2, 2, ",", ".") : ' ' }}</td>
        <td align="right">{{ $equitas->cadangan_k2 != NULL ? "Rp " . number_format($equitas->cadangan_k2, 2, ",", ".") : ' ' }}</td>
        <td align="right">{{ $total2_cadangan != NULL ? "Rp " . number_format($total2_cadangan, 2, ",", ".") : ' ' }}</td>
        <td align="right">{{ $equitas->cadangan_d3 != NULL ? "Rp " . number_format($equitas->cadangan_d3, 2, ",", ".") : ' ' }}</td>
        <td align="right">{{ $equitas->cadangan_k3 != NULL ? "Rp " . number_format($equitas->cadangan_k3, 2, ",", ".") : ' ' }}</td>
        <td align="right">{{ $total3_cadangan != NULL ? "Rp " . number_format($total3_cadangan, 2, ",", ".") : ' ' }}</td>
      </tr>
      <tr>
        <td>Laba/(Rugi) Periode Sebelumnya</td>
        <td align="right">{{ $equitas->laba_sebelum_utama != NULL ? "Rp " . number_format($equitas->laba_sebelum_utama, 2, ",", ".") : ' ' }}</td>
        <td align="right">{{ $equitas->laba_sebelum_d1 != NULL ? "Rp " . number_format($equitas->laba_sebelum_d1, 2, ",", ".") : ' ' }}</td>
        <td align="right">{{ $equitas->laba_sebelum_k1 != NULL ? "Rp " . number_format($equitas->laba_sebelum_k1, 2, ",", ".") : ' ' }}</td>
        <td align="right">{{ $total1_laba_sebelum != NULL ? "Rp " . number_format($total1_laba_sebelum, 2, ",", ".") : ' ' }}</td>
        <td align="right">{{ $equitas->laba_sebelum_d2 != NULL ? "Rp " . number_format($equitas->laba_sebelum_d2, 2, ",", ".") : ' ' }}</td>
        <td align="right">{{ $equitas->laba_sebelum_k2 != NULL ? "Rp " . number_format($equitas->laba_sebelum_k2, 2, ",", ".") : ' ' }}</td>
        <td align="right">{{ $total2_laba_sebelum != NULL ? "Rp " . number_format($total2_laba_sebelum, 2, ",", ".") : ' ' }}</td>
        <td align="right">{{ $equitas->laba_sebelum_d3 != NULL ? "Rp " . number_format($equitas->laba_sebelum_d3, 2, ",", ".") : ' ' }}</td>
        <td align="right">{{ $equitas->laba_sebelum_k3 != NULL ? "Rp " . number_format($equitas->laba_sebelum_k3, 2, ",", ".") : ' ' }}</td>
        <td align="right">{{ $total3_laba_sebelum != NULL ? "Rp " . number_format($total3_laba_sebelum, 2, ",", ".") : ' ' }}</td>
      </tr>

      <tr>
        <td>Laba/(Rugi) Periode Berjalan</td>
        <td align="right">{{ $laba_berjalan_utama != NULL ? "Rp " . number_format($laba_berjalan_utama, 2, ",", ".") : ' ' }}</td>
        <td align="right">{{ $laba_berjalan_d1 != NULL ? "Rp " . number_format($laba_berjalan_d1, 2, ",", ".") : ' ' }}</td>
        <td align="right"></td>
        <td align="right">{{ $total1_laba_berjalan != NULL ? "Rp " . number_format($total1_laba_berjalan, 2, ",", ".") : ' ' }}</td>
        <td align="right">{{ $laba_berjalan_d2 != NULL ? "Rp " . number_format($laba_berjalan_d2, 2, ",", ".") : ' ' }}</td>
        <td align="right"></td>
        <td align="right">{{ $total2_laba_berjalan != NULL ? "Rp " . number_format($total2_laba_berjalan, 2, ",", ".") : ' ' }}</td>
        <td align="right">{{ $laba_berjalan_d3 != NULL ? "Rp " . number_format($laba_berjalan_d3, 2, ",", ".") : ' ' }}</td>
        <td align="right"></td>
        <td align="right">{{ $total3_laba_berjalan != NULL ? "Rp " . number_format($total3_laba_berjalan, 2, ",", ".") : ' ' }}</td>
        
      </tr>
      
      <tr style="font-weight: 780;background-color: #e3e3de;">
        <td>TOTAL EQUITAS</td>
        <td align="right">{{ $total_equitas != NULL ? "Rp " . number_format($total_equitas, 2, ",", ".") : ' ' }}</td>
        <td align="right"></td>
        <td align="right"></td>
        <td align="right">{{ $total_equitas1 != NULL ? "Rp " . number_format($total_equitas1, 2, ",", ".") : ' ' }}</td>
        <td align="right"></td>
        <td align="right"></td>
        <td align="right">{{ $total_equitas2 != NULL ? "Rp " . number_format($total_equitas2, 2, ",", ".") : ' ' }}</td>
        <td align="right"></td>
        <td align="right"></td>
        <td align="right">{{ $total_equitas3 != NULL ? "Rp " . number_format($total_equitas3, 2, ",", ".") : ' ' }}</td>
       </tr>
       <tr style="font-weight: 780;background-color: #e3e3de;">
        <td>TOTAL PASIVA</td>
        <td align="right">{{ $total_equitas + $total_liabilitas != NULL ? "Rp " . number_format($total_equitas + $total_liabilitas, 2, ",", ".") : ' ' }}</td>
        <td align="right"></td>
        <td align="right"></td>
        <td align="right">{{ $total_equitas1 + $total_liabilitas1 != NULL ? "Rp " . number_format($total_equitas1 + $total_liabilitas1, 2, ",", ".") : ' ' }}</td>
        <td align="right"></td>
        <td align="right"></td>
        <td align="right">{{ $total_equitas2 + $total_liabilitas2 != NULL ? "Rp " . number_format($total_equitas2 + $total_liabilitas2, 2, ",", ".") : ' ' }}</td>
        <td align="right"></td>
        <td align="right"></td>
        <td align="right">{{ $total_equitas3 + $total_liabilitas3 != NULL ? "Rp " . number_format($total_equitas3 + $total_liabilitas3, 2, ",", ".") : ' ' }}</td>
      </tr>