      <tr>
        <td colspan="11" style="background-color: #e3e3de;"><b>ASET</b></td>
      </tr>
      <tr>
        <td>Kas</td>
        <td align="right">{{ $aset->kas_utama != NULL ? "Rp " . number_format($aset->kas_utama, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->kas_d1 != NULL ? "Rp " . number_format($aset->kas_d1, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->kas_k1 != NULL ? "Rp " . number_format($aset->kas_k1, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total1_kas != NULL ? "Rp " . number_format($total1_kas, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->kas_d2 != NULL ? "Rp " . number_format($aset->kas_d2, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->kas_k2 != NULL ? "Rp " . number_format($aset->kas_k2, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total2_kas != NULL ? "Rp " . number_format($total2_kas, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->kas_d3 != NULL ? "Rp " . number_format($aset->kas_d3, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->kas_k3 != NULL ? "Rp " . number_format($aset->kas_k3, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total3_kas != NULL ? "Rp " . number_format($total3_kas, 2, ",", ".") : '-' }}</td>
      </tr>
      <tr>
        <td>Penempatan pada BI</td>
        <td align="right">{{ $aset->penempatan_bi_utama != NULL ? "Rp " . number_format($aset->penempatan_bi_utama, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->penempatan_bi_d1 != NULL ? "Rp " . number_format($aset->penempatan_bi_d1, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->penempatan_bi_k1 != NULL ? "Rp " . number_format($aset->penempatan_bi_k1, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total1_penempatan_bi != NULL ? "Rp " . number_format($total1_penempatan_bi, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->penempatan_bi_d2 != NULL ? "Rp " . number_format($aset->penempatan_bi_d2, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->penempatan_bi_k2 != NULL ? "Rp " . number_format($aset->penempatan_bi_k2, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total2_penempatan_bi != NULL ? "Rp " . number_format($total2_penempatan_bi, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->penempatan_bi_d3 != NULL ? "Rp " . number_format($aset->penempatan_bi_d3, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->penempatan_bi_k3 != NULL ? "Rp " . number_format($aset->penempatan_bi_k3, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total3_penempatan_bi != NULL ? "Rp " . number_format($total3_penempatan_bi, 2, ",", ".") : '-' }}</td>
      </tr>
      <tr>
        <td>Penempatan pada Bank Lain</td>
        <td align="right">{{ $aset->penempatan_lain_utama != NULL ? "Rp " . number_format($aset->penempatan_lain_utama, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->penempatan_lain_d1 != NULL ? "Rp " . number_format($aset->penempatan_lain_d1, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->penempatan_lain_k1 != NULL ? "Rp " . number_format($aset->penempatan_lain_k1, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total1_penempatan_lain != NULL ? "Rp " . number_format($total1_penempatan_lain, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->penempatan_lain_d2 != NULL ? "Rp " . number_format($aset->penempatan_lain_d2, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->penempatan_lain_k2 != NULL ? "Rp " . number_format($aset->penempatan_lain_k2, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total2_penempatan_lain != NULL ? "Rp " . number_format($total2_penempatan_lain, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->penempatan_lain_d3 != NULL ? "Rp " . number_format($aset->penempatan_lain_d3, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->penempatan_lain_k3 != NULL ? "Rp " . number_format($aset->penempatan_lain_k3, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total3_penempatan_lain != NULL ? "Rp " . number_format($total3_penempatan_lain, 2, ",", ".") : '-' }}</td>
      </tr>
      <tr>
        <td>Surat Berharga</td>
        <td align="right">{{ $aset->suber_utama != NULL ? "Rp " . number_format($aset->suber_utama, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->suber_d1 != NULL ? "Rp " . number_format($aset->suber_d1, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->suber_k1 != NULL ? "Rp " . number_format($aset->suber_k1, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total1_suber != NULL ? "Rp " . number_format($total1_suber, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->suber_d2 != NULL ? "Rp " . number_format($aset->suber_d2, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->suber_k2 != NULL ? "Rp " . number_format($aset->suber_k2, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total2_suber != NULL ? "Rp " . number_format($total2_suber, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->suber_d3 != NULL ? "Rp " . number_format($aset->suber_d3, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->suber_k3 != NULL ? "Rp " . number_format($aset->suber_k3, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total3_suber != NULL ? "Rp " . number_format($total3_suber, 2, ",", ".") : '-' }}</td>
      </tr>
      <tr>
        <td><b>Pembiayaan</b></td>
        <td align="right">{{ $pembiayaan_utama != NULL ? "Rp " . number_format($pembiayaan_utama, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $pembiayaan_d1 != NULL ? "Rp " . number_format($pembiayaan_d1, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $pembiayaan_k1 != NULL ? "Rp " . number_format($pembiayaan_k1, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total1_pembiayaan != NULL ? "Rp " . number_format($total1_pembiayaan, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $pembiayaan_d2 != NULL ? "Rp " . number_format($pembiayaan_d2, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $pembiayaan_k2 != NULL ? "Rp " . number_format($pembiayaan_k2, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total2_pembiayaan != NULL ? "Rp " . number_format($total2_pembiayaan, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $pembiayaan_d3 != NULL ? "Rp " . number_format($pembiayaan_d3, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $pembiayaan_k3 != NULL ? "Rp " . number_format($pembiayaan_k3, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total3_pembiayaan != NULL ? "Rp " . number_format($total3_pembiayaan, 2, ",", ".") : '-' }}</td>
      </tr>
      <tr>
        <td>&nbsp;&nbsp;Kolektibilitas 1</td>
        <td align="right">{{ $aset->kolektibilitas1_utama != NULL ? "Rp " . number_format($aset->kolektibilitas1_utama, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->kolektibilitas1_d1 != NULL ? "Rp " . number_format($aset->kolektibilitas1_d1, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->kolektibilitas1_k1 != NULL ? "Rp " . number_format($aset->kolektibilitas1_k1, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total1_kolektibilitas1 != NULL ? "Rp " . number_format($total1_kolektibilitas1, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->kolektibilitas1_d2 != NULL ? "Rp " . number_format($aset->kolektibilitas1_d2, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->kolektibilitas1_k2 != NULL ? "Rp " . number_format($aset->kolektibilitas1_k2, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total2_kolektibilitas1 != NULL ? "Rp " . number_format($total2_kolektibilitas1, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->kolektibilitas1_d3 != NULL ? "Rp " . number_format($aset->kolektibilitas1_d3, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->kolektibilitas1_k3 != NULL ? "Rp " . number_format($aset->kolektibilitas1_k3, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total3_kolektibilitas1 != NULL ? "Rp " . number_format($total3_kolektibilitas1, 2, ",", ".") : '-' }}</td>
      </tr>
      <tr>
        <td>&nbsp;&nbsp;Kolektibilitas 2</td>
        <td align="right">{{ $aset->kolektibilitas2_utama != NULL ? "Rp " . number_format($aset->kolektibilitas2_utama, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->kolektibilitas2_d1 != NULL ? "Rp " . number_format($aset->kolektibilitas2_d1, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->kolektibilitas2_k1 != NULL ? "Rp " . number_format($aset->kolektibilitas2_k1, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total1_kolektibilitas2 != NULL ? "Rp " . number_format($total1_kolektibilitas2, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->kolektibilitas2_d2 != NULL ? "Rp " . number_format($aset->kolektibilitas2_d2, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->kolektibilitas2_k2 != NULL ? "Rp " . number_format($aset->kolektibilitas2_k2, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total2_kolektibilitas2 != NULL ? "Rp " . number_format($total2_kolektibilitas2, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->kolektibilitas2_d3 != NULL ? "Rp " . number_format($aset->kolektibilitas2_d3, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->kolektibilitas2_k3 != NULL ? "Rp " . number_format($aset->kolektibilitas2_k3, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total3_kolektibilitas2 != NULL ? "Rp " . number_format($total3_kolektibilitas2, 2, ",", ".") : '-' }}</td>
      </tr>
      <tr>
        <td>&nbsp;&nbsp;Kolektibilitas 3</td>
        <td align="right">{{ $aset->kolektibilitas3_utama != NULL ? "Rp " . number_format($aset->kolektibilitas3_utama, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->kolektibilitas3_d1 != NULL ? "Rp " . number_format($aset->kolektibilitas3_d1, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->kolektibilitas3_k1 != NULL ? "Rp " . number_format($aset->kolektibilitas3_k1, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total1_kolektibilitas3 != NULL ? "Rp " . number_format($total1_kolektibilitas3, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->kolektibilitas3_d2 != NULL ? "Rp " . number_format($aset->kolektibilitas3_d2, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->kolektibilitas3_k2 != NULL ? "Rp " . number_format($aset->kolektibilitas3_k2, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total2_kolektibilitas3 != NULL ? "Rp " . number_format($total2_kolektibilitas3, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->kolektibilitas3_d3 != NULL ? "Rp " . number_format($aset->kolektibilitas3_d3, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->kolektibilitas3_k3 != NULL ? "Rp " . number_format($aset->kolektibilitas3_k3, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total3_kolektibilitas3 != NULL ? "Rp " . number_format($total3_kolektibilitas3, 2, ",", ".") : '-' }}</td>
      </tr>
      <tr>
        <td>&nbsp;&nbsp;Kolektibilitas 4</td>
        <td align="right">{{ $aset->kolektibilitas4_utama != NULL ? "Rp " . number_format($aset->kolektibilitas4_utama, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->kolektibilitas4_d1 != NULL ? "Rp " . number_format($aset->kolektibilitas4_d1, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->kolektibilitas4_k1 != NULL ? "Rp " . number_format($aset->kolektibilitas4_k1, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total1_kolektibilitas4 != NULL ? "Rp " . number_format($total1_kolektibilitas4, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->kolektibilitas4_d2 != NULL ? "Rp " . number_format($aset->kolektibilitas4_d2, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->kolektibilitas4_k2 != NULL ? "Rp " . number_format($aset->kolektibilitas4_k2, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total2_kolektibilitas4 != NULL ? "Rp " . number_format($total2_kolektibilitas4, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->kolektibilitas4_d3 != NULL ? "Rp " . number_format($aset->kolektibilitas4_d3, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->kolektibilitas4_k3 != NULL ? "Rp " . number_format($aset->kolektibilitas4_k3, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total3_kolektibilitas4 != NULL ? "Rp " . number_format($total3_kolektibilitas4, 2, ",", ".") : '-' }}</td>
      </tr>
      <tr>
        <td>&nbsp;&nbsp;Kolektibilitas 5</td>
        <td align="right">{{ $aset->kolektibilitas5_utama != NULL ? "Rp " . number_format($aset->kolektibilitas5_utama, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->kolektibilitas5_d1 != NULL ? "Rp " . number_format($aset->kolektibilitas5_d1, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->kolektibilitas5_k1 != NULL ? "Rp " . number_format($aset->kolektibilitas5_k1, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total1_kolektibilitas5 != NULL ? "Rp " . number_format($total1_kolektibilitas5, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->kolektibilitas5_d2 != NULL ? "Rp " . number_format($aset->kolektibilitas5_d2, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->kolektibilitas5_k2 != NULL ? "Rp " . number_format($aset->kolektibilitas5_k2, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total2_kolektibilitas5 != NULL ? "Rp " . number_format($total2_kolektibilitas5, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->kolektibilitas5_d3 != NULL ? "Rp " . number_format($aset->kolektibilitas5_d3, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->kolektibilitas5_k3 != NULL ? "Rp " . number_format($aset->kolektibilitas5_k3, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total3_kolektibilitas5 != NULL ? "Rp " . number_format($total3_kolektibilitas5, 2, ",", ".") : '-' }}</td>
      </tr>
      <tr>
        <td>Penyertaan</td>
        <td align="right">{{ $aset->penyertaan_utama != NULL ? "Rp " . number_format($aset->penyertaan_utama, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->penyertaan_d1 != NULL ? "Rp " . number_format($aset->penyertaan_d1, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->penyertaan_k1 != NULL ? "Rp " . number_format($aset->penyertaan_k1, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total1_penyertaan != NULL ? "Rp " . number_format($total1_penyertaan, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->penyertaan_d2 != NULL ? "Rp " . number_format($aset->penyertaan_d2, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->penyertaan_k2 != NULL ? "Rp " . number_format($aset->penyertaan_k2, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total2_penyertaan != NULL ? "Rp " . number_format($total2_penyertaan, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->penyertaan_d3 != NULL ? "Rp " . number_format($aset->penyertaan_d3, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->penyertaan_k3 != NULL ? "Rp " . number_format($aset->penyertaan_k3, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total3_penyertaan != NULL ? "Rp " . number_format($total3_penyertaan, 2, ",", ".") : '-' }}</td>
      </tr>
      <tr>
        <td>CKPN Aset Produktif</td>
        <td align="right">{{ $aset->ckpnp_utama != NULL ? "Rp " . number_format($aset->ckpnp_utama, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->ckpnp_d1 != NULL ? "Rp " . number_format($aset->ckpnp_d1, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->ckpnp_k1 != NULL ? "Rp " . number_format($aset->ckpnp_k1, 2, ",", ".") : 'Rp 0,00' }}</td>
        <td align="right">{{ $total1_ckpnp != NULL ? "Rp " . number_format($total1_ckpnp, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->ckpnp_d2 != NULL ? "Rp " . number_format($aset->ckpnp_d2, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->ckpnp_k2 != NULL ? "Rp " . number_format($aset->ckpnp_k2, 2, ",", ".") : 'Rp 0,00' }}</td>
        <td align="right">{{ $total2_ckpnp != NULL ? "Rp " . number_format($total2_ckpnp, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->ckpnp_d3 != NULL ? "Rp " . number_format($aset->ckpnp_d3, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->ckpnp_k3 != NULL ? "Rp " . number_format($aset->ckpnp_k3, 2, ",", ".") : 'Rp 0,00' }}</td>
        <td align="right">{{ $total3_ckpnp != NULL ? "Rp " . number_format($total3_ckpnp, 2, ",", ".") : '-' }}</td>
      </tr>
      <tr>
        <td>Asset Tetap</td>
        <td align="right">{{ $aset->astet_utama != NULL ? "Rp " . number_format($aset->astet_utama, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->astet_d1 != NULL ? "Rp " . number_format($aset->astet_d1, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->astet_k1 != NULL ? "Rp " . number_format($aset->astet_k1, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total1_astet != NULL ? "Rp " . number_format($total1_astet, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->astet_d2 != NULL ? "Rp " . number_format($aset->astet_d2, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->astet_k2 != NULL ? "Rp " . number_format($aset->astet_k2, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total2_astet != NULL ? "Rp " . number_format($total2_astet, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->astet_d3 != NULL ? "Rp " . number_format($aset->astet_d3, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->astet_k3 != NULL ? "Rp " . number_format($aset->astet_k3, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total3_astet != NULL ? "Rp " . number_format($total3_astet, 2, ",", ".") : '-' }}</td>
      </tr>
      <tr>
        <td>Akumulasi Penyusutan Aset Tetap</td>
        <td align="right">{{ $aset->akumulasi_utama != NULL ? "Rp " . number_format($aset->akumulasi_utama, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->akumulasi_d1 != NULL ? "Rp " . number_format($aset->akumulasi_d1, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->akumulasi_k1 != NULL ? "Rp " . number_format($aset->akumulasi_k1, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total1_akumulasi != NULL ? "Rp " . number_format($total1_akumulasi, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->akumulasi_d2 != NULL ? "Rp " . number_format($aset->akumulasi_d2, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->akumulasi_k2 != NULL ? "Rp " . number_format($aset->akumulasi_k2, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total2_akumulasi != NULL ? "Rp " . number_format($total2_akumulasi, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->akumulasi_d3 != NULL ? "Rp " . number_format($aset->akumulasi_d3, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->akumulasi_k3 != NULL ? "Rp " . number_format($aset->akumulasi_k3, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total3_akumulasi != NULL ? "Rp " . number_format($total3_akumulasi, 2, ",", ".") : '-' }}</td>
      </tr>
      <tr>
        <td>Properti Terbengkalai</td>
        <td align="right">{{ $aset->properti_utama != NULL ? "Rp " . number_format($aset->properti_utama, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->properti_d1 != NULL ? "Rp " . number_format($aset->properti_d1, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->properti_k1 != NULL ? "Rp " . number_format($aset->properti_k1, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total1_properti != NULL ? "Rp " . number_format($total1_properti, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->properti_d2 != NULL ? "Rp " . number_format($aset->properti_d2, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->properti_k2 != NULL ? "Rp " . number_format($aset->properti_k2, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total2_properti != NULL ? "Rp " . number_format($total2_properti, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->properti_d3 != NULL ? "Rp " . number_format($aset->properti_d3, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->properti_k3 != NULL ? "Rp " . number_format($aset->properti_k3, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total3_properti != NULL ? "Rp " . number_format($total3_properti, 2, ",", ".") : '-' }}</td>
      </tr>
      <tr>
        <td>AYDA</td>
        <td align="right">{{ $aset->ayda_utama != NULL ? "Rp " . number_format($aset->ayda_utama, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->ayda_d1 != NULL ? "Rp " . number_format($aset->ayda_d1, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->ayda_k1 != NULL ? "Rp " . number_format($aset->ayda_k1, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total1_ayda != NULL ? "Rp " . number_format($total1_ayda, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->ayda_d2 != NULL ? "Rp " . number_format($aset->ayda_d2, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->ayda_k2 != NULL ? "Rp " . number_format($aset->ayda_k2, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total2_ayda != NULL ? "Rp " . number_format($total2_ayda, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->ayda_d3 != NULL ? "Rp " . number_format($aset->ayda_d3, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->ayda_k3 != NULL ? "Rp " . number_format($aset->ayda_k3, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total3_ayda != NULL ? "Rp " . number_format($total3_ayda, 2, ",", ".") : '-' }}</td>
      </tr>
      <tr>
        <td>Rekening Tunda</td>
        <td align="right">{{ $aset->rekening_utama != NULL ? "Rp " . number_format($aset->rekening_utama, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->rekening_d1 != NULL ? "Rp " . number_format($aset->rekening_d1, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->rekening_k1 != NULL ? "Rp " . number_format($aset->rekening_k1, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total1_rekening != NULL ? "Rp " . number_format($total1_rekening, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->rekening_d2 != NULL ? "Rp " . number_format($aset->rekening_d2, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->rekening_k2 != NULL ? "Rp " . number_format($aset->rekening_k2, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total2_rekening != NULL ? "Rp " . number_format($total2_rekening, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->rekening_d3 != NULL ? "Rp " . number_format($aset->rekening_d3, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->rekening_k3 != NULL ? "Rp " . number_format($aset->rekening_k3, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total3_rekening != NULL ? "Rp " . number_format($total3_rekening, 2, ",", ".") : '-' }}</td>
      </tr>
      <tr>
        <td>CKPN Aset Lainnya</td>
        <td align="right">{{ $aset->ckpnl_utama != NULL ? "Rp " . number_format($aset->ckpnl_utama, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->ckpnl_d1 != NULL ? "Rp " . number_format($aset->ckpnl_d1, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $ckpnl_k1 != NULL ? "Rp " . number_format($ckpnl_k1, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total1_ckpnl != NULL ? "Rp " . number_format($total1_ckpnl, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->ckpnl_d2 != NULL ? "Rp " . number_format($aset->ckpnl_d2, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $ckpnl_k2 != NULL ? "Rp " . number_format($ckpnl_k2, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total2_ckpnl != NULL ? "Rp " . number_format($total2_ckpnl, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->ckpnl_d3 != NULL ? "Rp " . number_format($aset->ckpnl_d3, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $ckpnl_k3 != NULL ? "Rp " . number_format($ckpnl_k3, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total3_ckpnl != NULL ? "Rp " . number_format($total3_ckpnl, 2, ",", ".") : '-' }}</td>
      </tr>
      <tr>
        <td>Lainnya</td>
        <td align="right">{{ $aset->lain_utama != NULL ? "Rp " . number_format($aset->lain_utama, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $lain_d1 != NULL ? "Rp " . number_format($lain_d1, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->lain_k1 != NULL ? "Rp " . number_format($aset->lain_k1, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total1_lain != NULL ? "Rp " . number_format($total1_lain, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $lain_d2 != NULL ? "Rp " . number_format($lain_d2, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->lain_k2 != NULL ? "Rp " . number_format($aset->lain_k2, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total2_lain != NULL ? "Rp " . number_format($total2_lain, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $lain_d3 != NULL ? "Rp " . number_format($lain_d3, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $aset->lain_k3 != NULL ? "Rp " . number_format($aset->lain_k3, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total3_lain != NULL ? "Rp " . number_format($total3_lain, 2, ",", ".") : '-' }}</td>
      </tr>
      <tr style="font-weight: 780;background-color: #e3e3de;">
        <td>TOTAL ASET</td>
        <td align="right">{{ $total_aset != NULL ? "Rp " . number_format($total_aset, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total_aset_d1 != NULL ? "Rp " . number_format($total_aset_d1, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total_aset_k1 != NULL ? "Rp " . number_format($total_aset_k1, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total_aset1 != NULL ? "Rp " . number_format($total_aset1, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total_aset_d2 != NULL ? "Rp " . number_format($total_aset_d2, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total_aset_k2 != NULL ? "Rp " . number_format($total_aset_k2, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total_aset2 != NULL ? "Rp " . number_format($total_aset2, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total_aset_d3 != NULL ? "Rp " . number_format($total_aset_d3, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total_aset_k3 != NULL ? "Rp " . number_format($total_aset_k3, 2, ",", ".") : '-' }}</td>
        <td align="right">{{ $total_aset3 != NULL ? "Rp " . number_format($total_aset3, 2, ",", ".") : '-' }}</td>
    </tr>