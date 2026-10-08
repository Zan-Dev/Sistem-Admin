<!DOCTYPE html>
<html>
<head>
    <title>Surat Keterangan Usaha</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;               
        }        

        .table-header{
            margin-left: 20px;                       
            border-bottom: 5px solid black;   
            width: 95%         
        }

        .icon-letter{
            width: 1%;            
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
            margin-left: 50px;
            margin-right: 20px;
            margin-top: 30px;
            text-align: justify;
        }

        .table-content{
            margin-left: 20px;
        }

        .table-content tr td{
            /* border: 1px solid black; */
        }
        
        .cell-kolon{
            text-align: center; 
            width: 20px;
        }

        .cell-title{
            width: 200px;
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

    </style>
</head>
<body>
    <div class="header">
        <table class="table-header">
            <tr>
                <td class="icon-letter">
                    <img class="logo-letter" src="{{ $base64Image }}" alt="Your Image">
                </td>                
                <td class="header-letter">
                    <h5><b>PEMERINTAH KABUPATEN KENDAL</b></h5>
                    <h5><b>KECAMATAN PLANTUNGAN</b></h5>
                    <h4><b>DESA MANGGUNGMANGU</b></h4>                                
                    <p><b>Kode Wilayah : 33.24.01.2005</b></p>                
                </td>                   
            </tr>            
        </table>                       
    </div>
    <div>
        <div class="title-letter">
            <h6><b><u>SURAT PENGANTAR KETERANGAN</u></b></h6>
            <p><b>No. 472 / 44 / MG / {{ $year }}</b></p>
        </div>        

        <div class="content">
            <p>Yang bertanda tangan dibawah ini Kepala Desa Manggungmangu Kecamatan Plantungan Kabupaten Kendal, menerangkan bahwa :</p>
            <table class="table-content">
                <tr>
                    <td class="cell-title">Nama</td>
                    <td class="cell-kolon">:</td>
                    <td>{{ $nama }}</td>
                </tr>
                <tr>
                    <td>Tempat & tanggal lahir</td>
                    <td class="cell-kolon">:</td>
                    <td>{{ $tempatLahir }} / {{ $tanggalLahir }}</td>                  
                </tr>
                <tr>
                    <td>Kewarganegaraan & Agama</td>
                    <td class="cell-kolon">:</td>
                    <td>{{ $kewarganegaraan }}</td>
                    <td>/</td>
                    <td>{{ $agama }}</td>
                </tr>
                <tr>
                    <td>Pekerjaan</td>
                    <td class="cell-kolon">:</td>
                    <td>{{ $pekerjaan }}</td>
                </tr>
                <tr>
                    <td>Alamat Tempat Tinggal</td>
                    <td class="cell-kolon">:</td>
                    <td colspan="4">Dusun {{ $alamat }} RT 0{{ $rt }} RW 0{{ $rw }} Kecamatan Plantungan Kabupaten Kendal</td>
                </tr>
                <tr>
                    <td>Surat Bukti Diri (NIK/NKK)</td>
                    <td class="cell-kolon">:</td>
                    <td>{{ $nik }}</td>
                    <td style="padding-left: 5px; padding-right: 5px;">/</td>
                    <td>{{ $noKK }}</td>
                </tr>
                <tr>
                    <td>Keperluan</td>
                    <td class="cell-kolon">:</td>
                    <td>{{ $keperluan }}</td>
                </tr>
                <tr>
                    <td>Berlaku Mulai</td>
                    <td class="cell-kolon">:</td>
                    <td>{{ $date }} s.d Selesai</td>                    
                </tr>
                <tr>
                    <td>Keterangan lain-lain</td>
                    <td class="cell-kolon">:</td>
                    <td colspan="4">Yang bersangkutan benar-benar warga Desa Manggungmangu</td>
                </tr>  
                <tr>
                    <td></td><td></td>
                    <td colspan="4">{{ $keterangan }}</td>
                </tr>              
            </table>                           
        </div>        
    </div>
    <div class="footer">
        <table class="table-footer">
            <tr>
                <td></td>
                <td></td>
                <td style="text-align: center;"><p>Manggungmangu, {{ $date }}</p></td>                
            </tr>    
            <tr>
                <td><p>Mengetahui</p></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td style="text-align: center; padding-bottom: 60px;"><p>{{ $jabatanPerangkat }}</p></td>
                <td></td>
                <td style="text-align: center; padding-bottom: 60px;"><p>Nama Pemohon</p></td>
            </tr>
            <tr>
                <td style="text-align: center;"><p><b><u>{{ $namaPerangkat }}</u></b></p></td>
                <td></td>
                <td style="text-align: center;"><p>{{ $nama }}</p></td>
            </tr>   
            <tr>
                <td></td>
                <td style="text-align: center; padding-bottom: 60px;"><p>Camat Plantungan</p></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td style="text-align: center;"><p>..........</p></td>
                <td></td>
            </tr>
        </table>        
    </div>
</body>
</html>
