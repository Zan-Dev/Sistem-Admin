<!DOCTYPE html>
<html>
<head>
    <title>Surat Keterangan Usaha</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            font-size: x-small;
        }
        .header {
            text-align: center;            
        }        

        .table-header{
            margin-left: 20px;                          
            border-bottom: 5px double black;   
            width: 95%         
        }
     

        .logo-letter{
            width: 130px;
        }

        .header-letter{
            /* border: 1px solid black; */
            text-align: center;   
            padding-right: 100px         
        }

        .header-letter h5,
        .header-letter h4,
        .header-letter b {
            margin-bottom: 2px; /* Adjust this value as needed */
        }

        .title-letter{
            text-align: center;
        }

        .title-letter h6 {
            margin-bottom: 2px;
        }

        .content{
            margin-left: 20px;
            margin-right: 20px;            
            text-align: justify;
        }

        .content tr td{
            /* border: 1px solid black; */
        }

        .table-content{
            margin-left: 20px;
        }

        .table-content tr td{
            /* border: 1px solid black; */
        }
        
        .cell-kolon{
            text-align: center;             
        }

        .cell-title{
            width: 170px;
        }

        .cell-desc{
            width: 150px;
        }

        .footer{                  
            margin-right: 80px;
            margin-top: 20px
        }

        .table-footer{          
            width: 95%;  
            margin-left: 70px;
        }

        .table-footer tr td p{
            margin-bottom: 2px        
        }
                

        .signature{
            margin-top: 50px;
        }

        @media print {
            @page {
                size: legal;
                margin: 1cm; /* Adjust the margin as needed */
            }

            body {
                margin: 1cm; /* Adjust the body margin as needed */
            }

            .table-header, .content, .table-footer {
                margin-left: 0;
                width: 100%;
            }

            .header-letter {
                padding-right: 0;
            }
        }

    </style>
</head>
<body>
    <div class="header">
        <table class="table-header">
            <tr>
                <td class="icon-letter">
                    <img class="logo-letter" src="assets/img/logos.png" alt="Your Image">
                </td>                
                <td class="header-letter">
                    <b>PEMERINTAH KABUPATEN KENDAL</b><br>
                    <b>DINAS KEPENDUDUKAN DAN CATATAN SIPIL</b><br>
                    <b style="font-size: small">Jl. Pramuka (Komplek Perkantoran) Telp. (0294) 381 302 Kendal</b><br>
                </td>                   
            </tr>            
        </table>                       
    </div>
    <div>
        <table style="width: 100%;">
            <tr>
                <td style="width: 70% ;"></td>
                <td>Nomor Pendaftaran :</td>
            </tr>
        </table>
        <div class="title-letter">                        
            <b style="padding-top: 15px; padding-bottom:10px; text-align: center;"><b>FORMULIR PENDAFTARAN AKTA KELAHIRAN <br>ANAK YANG DILAHIRKAN</b></b>
        </div>        

        <div class="content">
            <table>
                <tr>
                    <td class="cell-title">NIK (Sesuai KK)</td>
                    <td>:</td>
                    <td>{{ $nik_1 }}</td>
                </tr>
                <tr>
                    <td class="cell-title">Nama Lengkap</td>
                    <td>:</td>
                    <td class="cell-desc" style="margin-right: 30px">{{ $nama_1 }}</td>
                </tr>
                <tr>
                    <td class="cell-title">Jenis Kelamin</td>
                    <td>:</td>
                    <td class="cell-desc">{{ $jenisKelamin_1 }}</td>
                    <td class="cell-title">Agama</td>
                    <td>:</td>
                    <td class="cell-desc">{{ $agama }}</td>
                </tr>
                <tr>
                    <td class="cell-title">Lahir Di</td>
                    <td>:</td>
                    <td class="cell-desc">{{  $tempatLahir_1 }}</td>
                </tr>
                <tr>
                    <td class="cell-title">Tgl/Bln/Thn Lahir</td>
                    <td>:</td>
                    <td>{{ $tanggalLahir_1 }}</td>
                    <td class="cell-title">Tempat Dilahirkan</td>
                    <td>:</td>
                    <td>{{ $tempatDilahirkan }}</td>
                </tr>
                <tr>
                    <td class="cell-title">Anak ke</td>
                    <td>:</td>
                    <td>{{ $anakKe }}</td>
                    <td class="cell-title">Penolong Kelahiran</td>
                    <td>:</td>
                    <td>{{ $penolongKelahiran }}</td>
                </tr>

                <tr>
                    <td class="cell-title" style="padding-top: 15px;"><b><u>IBU</u></b></td>
                    <td colspan="2"></td>
                    <td class="cell-title" style="padding-top: 15px;"><b><u>AYAH</u></b></td>
                </tr>
                <tr>
                    <td class="cell-title">NIK (Sesuai KK)</td>
                    <td>:</td>
                    <td>{{ $nik_2 }}</td>
                    <td class="cell-title">NIK (Sesuai KK)</td>
                    <td>:</td>
                    <td>{{ $nik_3 }}</td>
                </tr>
                <tr>
                    <td class="cell-title">Nama Lengkap</td>
                    <td>:</td>
                    <td class="cell-desc">{{ $nama_2 }}</td>
                    <td class="cell-title">Nama Lengkap</td>
                    <td>:</td>
                    <td class="cell-desc">{{ $nama_3 }}</td>
                </tr>
                <tr>
                    <td class="cell-title">Jenis Kelamin</td>
                    <td>:</td>
                    <td class="cell-desc">{{ $jenisKelamin_2 }}</td>
                    <td class="cell-title">Jenis Kelamin</td>
                    <td>:</td>
                    <td class="cell-desc">{{ $jenisKelamin_3 }}</td>                    
                </tr>
                <tr>
                    <td class="cell-title">Lahir Di</td>
                    <td>:</td>
                    <td class="cell-desc">{{ $tempatLahir_2 }}</td>
                    <td class="cell-title">Lahir Di</td>
                    <td>:</td>
                    <td class="cell-desc">{{ $tempatLahir_3 }}</td>
                </tr>
                <tr>
                    <td class="cell-title">Tgl/Bln/Thn Lahir</td>
                    <td>:</td>
                    <td class="cell-desc">{{ $tanggalLahir_2 }}</td>
                    <td class="cell-title">Tgl/Bln/Thn Lahir</td>
                    <td>:</td>
                    <td class="cell-desc">{{ $tanggalLahir_3 }}</td>
                </tr>
                <tr>
                    <td class="cell-title">Alamat</td>
                    <td>:</td>
                    <td class="cell-desc">Dusun {{ $alamat_2 }} Desa Manggungmangu RT 0{{ $rt_2 }} RW 0{{ $rw_2 }} Kec. Plantungan</td>
                    <td class="cell-title">Alamat</td>
                    <td>:</td>
                    <td class="cell-desc">Dusun {{ $alamat_3 }} Desa Manggungmangu RT 0{{ $rt_3 }} RW 0{{ $rw_3 }} Kec. Plantungan</td>
                </tr>
                <tr>
                    <td class="cell-title">Kewarganegaraan</td>
                    <td>:</td>
                    <td class="cell-desc">{{ $kebangsaan_2 }}</td>
                    <td class="cell-title">Kewarganegaraan</td>
                    <td>:</td>
                    <td class="cell-desc">{{ $kebangsaan_3 }}</td>
                </tr>

                <tr>
                    <td colspan="6" class="cell-title" style="padding-top: 15px; padding-bottom:10px; text-align: center;"><b>DATA PERKAWINAN ORANG TUA <br>(SESUAI SURAT NIKAH / AKTA NIKAH / DUPLIKAT SURAT NIKAH)</b></td>                    
                </tr>
                <tr>
                    <td class="cell-title">No. Akta Perkawinan</td>
                    <td>:</td>
                    <td class="cell-desc">{{ $nap }}</td>
                    <td class="cell-title">Tanggal Akta Perkawinan</td>
                    <td>:</td>
                    <td class="cell-desc">{{ $tap }}</td>
                </tr>
                <tr>
                    <td class="cell-title">Perkawinan Sah Di</td>
                    <td>:</td>
                    <td class="cell-desc">{{ $perkawinanSah }}</td>
                    <td class="cell-title">Diterbitkan Oleh</td>
                    <td>:</td>
                    <td class="cell-desc">{{ $penerbit }}</td>
                </tr>
                <tr>
                    <td class="cell-title" style="padding-top: 10px; padding-bottom: 5px;">Yang Melaporkan</td>
                </tr>

                <tr>
                    <td class="cell-title">NIK(Sesuai KK)</td>
                    <td>:</td>
                    <td class="cell-desc">{{ $nik_4 }}</td>                
                    <td class="cell-title">Pekerjaan</td>
                    <td>:</td>
                    <td class="cell-desc">{{ $pekerjaan_4 }}</td>                
                </tr>
                <tr>
                    <td class="cell-title">Nama Lengkap</td>
                    <td>:</td>
                    <td class="cell-desc">{{ $nama_4 }}</td>   
                    <td class="cell-title">Alamat</td>
                    <td>:</td>
                    <td class="cell-desc">Dusun {{ $alamat_4 }} Desa Manggungmangu RT 0{{ $rt_4 }} RW 0{{ $rw_4 }} Kec. Plantungan</td>                                 
                </tr>
                <tr>
                    <td class="cell-title">Tgl/Bln/Thn Lahir</td>
                    <td>:</td>
                    <td class="cell-desc">{{ $tanggalLahir_4 }}</td>
                </tr>
                <tr>
                    <td class="cell-title">Hub. Dengan Ybs</td>
                    <td>:</td>
                    <td class="cell-desc">{{ $hubungan }}</td>
                    <td class="cell-title">Kode Pos</td>
                    <td>:</td>
                    <td class="cell-desc">{{ $kodePos }}</td>
                </tr>
                <tr>
                    <td colspan="5"></td>
                    <td>Tanda Tangan</td>
                </tr>
                <tr>
                    <td colspan="5"></td>
                    <td style="padding-top: 30px;"><b>{{ $nama_4 }}</b></td>
                </tr>

                <tr>
                    <td class="cell-title"><b><u>Saksi I</u></b></td>
                    <td colspan="2"></td>
                    <td class="cell-title"><b><u>Saksi II</u></b></td>
                </tr>
                <tr>
                    <td class="cell-title">NIK (Sesuai KK)</td>
                    <td>:</td>
                    <td>{{ $nik_saksi_1 }}</td>
                    <td class="cell-title">NIK (Sesuai KK)</td>
                    <td>:</td>
                    <td>{{ $nik_saksi_2 }}</td>
                </tr>
                <tr>
                    <td class="cell-title">Nama Lengkap</td>
                    <td>:</td>
                    <td class="cell-desc">{{ $nama_saksi_1 }}</td>
                    <td class="cell-title">Nama Lengkap</td>
                    <td>:</td>
                    <td class="cell-desc">{{ $nama_saksi_2 }}</td>
                </tr>                                
                <tr>
                    <td class="cell-title">Tgl/Bln/Thn Lahir</td>
                    <td>:</td>
                    <td class="cell-desc">{{ $tanggalLahir_saksi_1 }}</td>
                    <td class="cell-title">Tgl/Bln/Thn Lahir</td>
                    <td>:</td>
                    <td class="cell-desc">{{ $tanggalLahir_saksi_2 }}</td>
                </tr>
                <tr>
                    <td class="cell-title">Pekerjaan</td>
                    <td>:</td>
                    <td class="cell-desc">{{ $pekerjaan_saksi_1 }}</td>
                    <td class="cell-title">Pekerjaan</td>
                    <td>:</td>
                    <td class="cell-desc">{{ $pekerjaan_saksi_2 }}</td>
                </tr>
                <tr>
                    <td class="cell-title">Alamat</td>
                    <td>:</td>
                    <td class="cell-desc">Dusun {{ $alamat_saksi_1 }} Desa Manggungmangu RT 0{{ $rt_saksi_1 }} RW 0{{ $rw_saksi_1 }} Kec. Plantungan</td>
                    <td class="cell-title">Alamat</td>
                    <td>:</td>
                    <td class="cell-desc">Dusun {{ $alamat_saksi_2 }} Desa Manggungmangu RT 0{{ $rt_saksi_2 }} RW 0{{ $rw_saksi_2 }} Kec. Plantungan</td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td>Tanda Tangan</td>
                    <td colspan="2"></td>
                    <td>Tanda Tangan</td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td style="padding-top: 30px;"><b>{{ $nama_saksi_1 }}</b></td>
                    <td colspan="2"></td>
                    <td style="padding-top: 30px;"><b>{{ $nama_saksi_2 }}</b></td>
                </tr>

            </table>                         
        </div>        
    </div>   
</body>
</html>
