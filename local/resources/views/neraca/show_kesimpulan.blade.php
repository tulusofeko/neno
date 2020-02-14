      <tr>
        <td colspan="11" style="background-color: #e3e3de;"><b>Perhitungan Kebutuhan Modal</b></td>
      </tr>
      <tr>
        <td>&nbsp;&nbsp;&nbsp;CAR 14%</td>
        <td align="right" colspan="3"></td>
        <td align="right">{{ $car_14_1 != NULL ? "Rp " . number_format($car_14_1, 0, ",", ".").",00" : ' ' }}</td>
        <td align="right" colspan="2"></td>
        <td align="right">{{ $car_14_2 != NULL ? "Rp " . number_format($car_14_2, 0, ",", ".").",00" : ' ' }}</td>
        <td align="right" colspan="2"></td>
        <td align="right">{{ $car_14_3 != NULL ? "Rp " . number_format($car_14_3, 0, ",", ".").",00" : ' ' }}</td>
      </tr>

      <tr>
        <td>&nbsp;&nbsp;&nbsp;CAR 12%</td>
        <td align="right" colspan="3"></td>
        <td align="right">{{ $car_12_1 != NULL ? "Rp " . number_format($car_12_1, 0, ",", ".").",00" : ' ' }}</td>
        <td align="right" colspan="2"></td>
        <td align="right">{{ $car_12_2 != NULL ? "Rp " . number_format($car_12_2, 0, ",", ".").",00" : ' ' }}</td>
        <td align="right" colspan="2"></td>
        <td align="right">{{ $car_12_3 != NULL ? "Rp " . number_format($car_12_3, 0, ",", ".").",00" : ' ' }}</td>
      </tr>

      <tr>
        <td>&nbsp;&nbsp;&nbsp;CAR 8%</td>
        <td align="right" colspan="3"></td>
        <td align="right">{{ $car_8_1 != NULL ? "Rp " . number_format($car_8_1, 0, ",", ".").",00" : ' ' }}</td>
        <td align="right" colspan="2"></td>
        <td align="right">{{ $car_8_2 != NULL ? "Rp " . number_format($car_8_2, 0, ",", ".").",00" : ' ' }}</td>
        <td align="right" colspan="2"></td>
        <td align="right">{{ $car_8_3 != NULL ? "Rp " . number_format($car_8_3, 0, ",", ".").",00" : ' ' }}</td>
      </tr>

      <tr>
        <td>&nbsp;&nbsp;&nbsp;CAR 4.1%</td>
        <td align="right" colspan="3"></td>
        <td align="right">{{ $car_41_1 != NULL ? "Rp " . number_format($car_41_1, 0, ",", ".").",00" : ' ' }}</td>
        <td align="right" colspan="2"></td>
        <td align="right">{{ $car_41_2 != NULL ? "Rp " . number_format($car_41_2, 0, ",", ".").",00" : ' ' }}</td>
        <td align="right" colspan="2"></td>
        <td align="right">{{ $car_41_3 != NULL ? "Rp " . number_format($car_41_3, 0, ",", ".").",00" : ' ' }}</td>
      </tr>

      <tr>
        <td>NPF Setelah PPAP</td>
        <td align="right" colspan="3"></td>
        <td align="right">{{ $total_ppap1 != NULL ? "Rp " . number_format($total_ppap1, 2, ",", ".") : ' ' }}</td>
        <td align="right" colspan="2"></td>
        <td align="right">{{ $total_ppap2 != NULL ? "Rp " . number_format($total_ppap2, 2, ",", ".") : ' ' }}</td>
        <td align="right" colspan="2"></td>
        <td align="right">{{ $total_ppap3 != NULL ? "Rp " . number_format($total_ppap3, 2, ",", ".") : ' ' }}</td>
      </tr>

      <tr>
        <td>NPF Setelah PPAP</td>
        <td align="right" colspan="3"></td>
        <td align="right">{{ number_format(($total_ppap1/$total1_pembiayaan)*100, 2, ",", ".") }}%</td>
        <td align="right" colspan="2"></td>
        <td align="right">{{ number_format(($total_ppap2/$total2_pembiayaan)*100, 2, ",", ".") }}%</td>
        <td align="right" colspan="2"></td>
        <td align="right">{{ number_format(($total_ppap3/$total3_pembiayaan)*100, 2, ",", ".") }}%</td>
      </tr>

      <tr>
        <td>Tambahan Modal Untuk NPF 4.5%</td>
        <td align="right" colspan="3"></td>
        <td align="right">{{ $tambahan_45_1 != NULL ? "Rp " . number_format($tambahan_45_1, 0, ",", ".").",00" : ' ' }}</td>
        <td align="right" colspan="2"></td>
        <td align="right">{{ $tambahan_45_2 != NULL ? "Rp " . number_format($tambahan_45_2, 0, ",", ".").",00" : ' ' }}</td>
        <td align="right" colspan="2"></td>
        <td align="right">{{ $tambahan_45_3 != NULL ? "Rp " . number_format($tambahan_45_3, 0, ",", ".").",00" : ' ' }}</td>
      </tr>

      <tr>
        <td><b>Total Tambahan Modal CAR 14%, NPF Net 4,5%</b></td>
        <td align="right" colspan="3"></td>
        <td align="right">{{ $car_14_1 + $tambahan_45_1 != NULL ? "Rp " . number_format($car_14_1 + $tambahan_45_1, 0, ",", ".").",00" : ' ' }}</td>
        <td align="right" colspan="2"></td>
        <td align="right">{{ $car_14_2 + $tambahan_45_2 != NULL ? "Rp " . number_format($car_14_2 + $tambahan_45_2, 0, ",", ".").",00" : ' ' }}</td>
        <td align="right" colspan="2"></td>
        <td align="right">{{ $car_14_3 + $tambahan_45_3 != NULL ? "Rp " . number_format($car_14_3 + $tambahan_45_3, 0, ",", ".").",00" : ' ' }}</td>
      </tr>

      <tr>
        <td><b>Total Tambahan Modal CAR 12%, NPF Net 4,5%</b></td>
        <td align="right" colspan="3"></td>
        <td align="right">{{ $car_12_1 + $tambahan_45_1 != NULL ? "Rp " . number_format($car_12_1 + $tambahan_45_1, 0, ",", ".").",00" : ' ' }}</td>
        <td align="right" colspan="2"></td>
        <td align="right">{{ $car_12_2 + $tambahan_45_2 != NULL ? "Rp " . number_format($car_12_2 + $tambahan_45_2, 0, ",", ".").",00" : ' ' }}</td>
        <td align="right" colspan="2"></td>
        <td align="right">{{ $car_12_3 + $tambahan_45_3 != NULL ? "Rp " . number_format($car_12_3 + $tambahan_45_3, 0, ",", ".").",00" : ' ' }}</td>
      </tr>

      <tr>
        <td><b>Total Tambahan Modal CAR 8%, NPF Net 4,5%</b></td>
        <td align="right" colspan="3"></td>
        <td align="right">{{ $car_8_1 + $tambahan_45_1 != NULL ? "Rp " . number_format($car_8_1 + $tambahan_45_1, 0, ",", ".").",00" : ' ' }}</td>
        <td align="right" colspan="2"></td>
        <td align="right">{{ $car_8_2 + $tambahan_45_2 != NULL ? "Rp " . number_format($car_8_2 + $tambahan_45_2, 0, ",", ".").",00" : ' ' }}</td>
        <td align="right" colspan="2"></td>
        <td align="right">{{ $car_8_3 + $tambahan_45_3 != NULL ? "Rp " . number_format($car_8_3 + $tambahan_45_3, 0, ",", ".").",00" : ' ' }}</td>
      </tr>

      <tr>
        <td><b>Total Tambahan Modal CAR 4.1%, NPF Net 4,5%</b></td>
        <td align="right" colspan="3"></td>
        <td align="right">{{ $car_41_1 + $tambahan_45_1 != NULL ? "Rp " . number_format($car_41_1 + $tambahan_45_1, 0, ",", ".").",00" : ' ' }}</td>
        <td align="right" colspan="2"></td>
        <td align="right">{{ $car_41_2 + $tambahan_45_2 != NULL ? "Rp " . number_format($car_41_2 + $tambahan_45_2, 0, ",", ".").",00" : ' ' }}</td>
        <td align="right" colspan="2"></td>
        <td align="right">{{ $car_41_3 + $tambahan_45_3 != NULL ? "Rp " . number_format($car_41_3 + $tambahan_45_3, 0, ",", ".").",00" : ' ' }}</td>
      </tr>
      {{-- <tr>
        <td colspan="11">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="11"><b>Pembiayaan Kualitas Rendah</b></td>
      </tr> --}}
      