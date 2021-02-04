<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SKPD</title>
    <style>
        @media print {
        .pagebreak { page-break-before: always; } /* page-break-after works, as well */
        
         @page {margin: 20px; }
         }
         body {
         font-family: Roboto, system-ui, sans-serif;
         }
         h1, h2, h3, h4, h5, h6, p {
         margin: 0px;
         }
         p {
         font-size: 15px;
         }

         .text-right {
             text-align: right;
         }

         .text-left {
             text-align: left;
         }


         ul li {
             list-style: decimal;
         }

         .title {
         border-bottom: 1px solid #2c3e50;
         padding-bottom: 3px;
         }

         .logo {
             width: 55px;
         }

         table {
             width: 100%;
             border-collapse: collapse;
         }

         table thead tr th ,table tbody tr th, table tbody tr td {
             padding: 2px;
             border: 1px solid black;
         }
         table tbody tr th {
             padding: 5px;
             border: 1px solid black;
         }

         .info-title {
            margin: auto;
            width: 50%;
            padding: 10px;
            text-align: left;
         }

         .info-title h4 span {}

         .info-title .tahun {
             float: right;
         }

         table tbody tr:nth-child(2) {
             text-align: left;
         }

         

         table tbody tr:nth-child(2) td p {
             width: 30%;
             float: left;
             margin-bottom: 10px;
             font-size: 13px;
         }

         p.answers {
             box-sizing: border-box;
             padding-left: 10px;
             width: 70% !important;
         }

         table tbody tr:nth-child(2) td p span{
             float: right;
         }

         table td {
            vertical-align: top;
        }

        table th.kode-rekening {
            width: 150px;
        }

        table th.jumlah {
            width: 200px;
            text-align: right;
        }

        table tbody  p {
             font-size: 13px;
         }

         table tbody tr:nth-child(5) td p {
             margin-bottom: 10px;
         }

         .dot-underline {
             border-bottom-style: dotted;
             border-bottom-width: 3px;
         }

         table tbody tr:nth-child(7) td ul li {
             list-style: decimal;
             font-size: 13px;
         }

         .tertanda {
             width: 30%;
             float: right;
             text-align: center;
         }

         .nama {
             margin-top: 60px;
             text-decoration: underline;
             padding: 2px;
         }

         .deskripsi {
             font-size: 9.5px !important;
         }

         .pagebreak table tr,.pagebreak table tr th, .pagebreak table tr td {
             border: none;
         }

         .pagebreak table {
             border: 1px solid black;
         }

         .no {
             text-align: right;
         }

         .clearfix {
            overflow: auto;
        }

        .clearfix::after {
            content: "";
            clear: both;
            display: table;
        }

    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th colspan="2">
                    <img src="../public/logo.png" class="logo" alt="">
                </th>
                <th colspan="3">
                    <h4>PEMERINTAH KABUPATEN SIDENRENG RAPPANG BADAN PAJAK DAN RETRIBUSI DAERAH</h4>
                    <p>Jl. Tulis Alamat Disini</p>
                </th>
            </tr>
        </thead>
    </table>
    <table>
        
        <tbody>
            <tr>
                <th colspan="5">
                    <h4>SURAT KETETAPAN PAJAK DAERAH</h4>
                    <div class="info-title">
                        <h5 class="tahun">Tahun <span>: {{ $sptpd->created_at->format('Y') }}</span></h5>
                        <h5>Nomor <span>: {{ $sptpd->nomor_sptpd }}</span></h5>
                        <h5>Masa Pajak <span>: {{ $sptpd->masapajak_awal }} - {{ $sptpd->masapajak_akhir }}</span></h5>
                    </div>
                    
                </th>
            </tr>
            <tr>
                <td colspan="5">
                    <ul>
                        <li class="clearfix">
                            <p>Nama Wajib Pajak <span>:</span></p>
                            <p class="answers">{{ $sptpd->objek_pajak->wajib_pajak->nama_pendaftar }}</p>
                        </li>
                        <li class="clearfix">
                            <p>Alamat<span>:</span></p>
                            <p class="answers">{{ $sptpd->objek_pajak->wajib_pajak->jalan }}, RT/RW {{ $sptpd->objek_pajak->wajib_pajak->rtrw }}, Kel. {{ $sptpd->objek_pajak->wajib_pajak->village->name }}, Kec. {{ $sptpd->objek_pajak->wajib_pajak->district->name }}, Kab/Kota. {{ $sptpd->objek_pajak->wajib_pajak->regency->name }}, Kode Pos. {{ $sptpd->objek_pajak->wajib_pajak->kodepos }}.</p>
                        </li>
                        <li class="clearfix">
                            <p>NOPD<span>:</span></p>
                            <p class="answers">{{ $sptpd->objek_pajak->nama_konter }}</p>
                        </li>
                        <li class="clearfix">
                            <p>Masa Pajak <span>:</span></p>
                            <p class="answers">{{ $sptpd->objek_pajak->jalan }}, RT/RW {{ $sptpd->objek_pajak->rtrw }}</p>
                        </li>
                        <li class="clearfix">
                            <p>Tahun Pajak <span>:</span></p>
                            <p class="answers">P . 1 . 0002377 . 2 . 5</p>
                        </li>
                        <li class="clearfix">
                            <p>Tanggal Jatuh Tempo <span>:</span></p>
                            <p class="answers">{{ $sptpd->jatuh_tempo }}</p>
                        </li>
                        <li class="clearfix">
                            <p>Keterangan <span>:</span></p>
                            <p class="answers">{{ $sptpd->keterangan }}</p>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th>
                    No
                </th>
                <th class="kode-rekening">
                    Kode Rekening
                </th>
                <th class="jenis-pajak">
                    Jenis Pajak Daerah
                </th>
                <th class="jumlah">
                    Jumlah (Rp.)
                </th>
            </tr>
            <tr>
                <td>
                    <p>
                        1
                    </p>
                </td>
                <td>
                    <p>4 . 1 . 1 . 04 . 01 . 01</p>
                </td>
                <td>
                    <p class="deskripsi">
                        {{ $sptpd->objek_pajak->nama_konter }}, Lokasi : {{ $sptpd->objek_pajak->jalan }}, RT/RW {{ $sptpd->objek_pajak->rtrw }}
                        {{-- Indeks : 2,00, P :1.00, L : 2.00, Jumlah : 1, Nilai Sewa : Rp 2.800.000,00 , Tarif Pajak : 25%,
                        Masa Tayang : 29-01-2020 s.d. 31-12-2020 --}}
                    </p>
                </td>
                <td class="text-right">
                    <p>
                        {{ $sptpd->pajak_terhutang_format }}
                    </p>
                </td>
            </tr>
            <tr>
                <td colspan="3" class="text-right">
                    <p>
                        Jumlah Ketetapan Pokok Pajak
                    </p>
                    <p>
                        Jumlah Sanksi a. Bunga
                    </p>
                    <p>
                        b. Kenaikan
                    </p>
                    <p>
                        Jumlah Keseluruhan
                    </p>
                </td>
                <td colspan="1" class="text-right">
                    <p class="dot-underline">
                        {{ $sptpd->pajak_terhutang_format }}
                    </p>
                    <p>
                        {{ $sptpd->bunga }}
                    </p>
                    <p class="dot-underline">
                        {{ $sptpd->kenaikan }}
                    </p>
                    <p>
                        {{ $sptpd->pajak_terhutang_format }}
                    </p>
                </td>
            </tr>
            <tr>
                <td colspan="4" class="text-right">
                    <p> Dengan Huruf:   <b><i> {{ terbilang($sptpd->pajak_terhutang)  }} </i></b></p>
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    <h4>PERHATIAN : </h4>
                    <ul>
                        <li>
                                Harap penyetoran dilakukan melalui BKP atau Kas Daerah (Bank Sul Sel Cab. Bulukumba 5376.9, No Rekening : 040.001.000005376.9 ) dengan menggunakan Surat Setoran Pajak Daerah (SSPD)
                        </li>
                        <li>
                            Apabila SKPD ini tidak atau kurang dibayar lewat waktu paling lama 30 hari setelah SKPD diterima (31 December 2020 ) dikenakan sanksi administrasi berupa bunga sebesar 2 % perbulan.
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    <div class="tertanda">
                        <p>BULUKUMBA, 21 January 2020</p>
                        <p>Kabid Penetapan dan Keberatan</p>

                        <p class="nama">{{ $nama_pejabat }}</p>
                        <p class="jabatan">NIP. {{ $nip_pejabat }}</p>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>

    <div class="pagebreak">
        <table>
            <tr>
                <th colspan="2">
                    Tanda Terima
                </th>
            </tr>
            <tr>
                <td colspan="">
                    <p class="no">No.SKPD :000098/SKPD/04/2020 </p>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>

<?php 

$html = ob_get_clean(); 
require_once("dompdf/autoload.inc.php");
use Dompdf\Dompdf;
$dompdf = new Dompdf(); 
$dompdf->loadHtml($html); 
$dompdf->setPaper('A4', 'portrait'); 
$dompdf->render(); 
$dompdf->stream(); 
?>