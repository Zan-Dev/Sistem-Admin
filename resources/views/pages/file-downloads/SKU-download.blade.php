<!DOCTYPE html>
<html>
<head>
    <title>Surat Keterangan Usaha {{ $nama }}</title>
    <link rel="stylesheet" href="{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css') }}">
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
            margin-left: 70px;
            margin-right: 50px;
            margin-top: 30px;
            text-align: justify;
        }

        .table-content{
            margin-left: 20px;
        }
        

        .footer{
            float: right;
            margin-right: 80px;
            margin-top: 20px
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
            <h6><b><u>SURAT KETERANGAN USAHA</u></b></h6>
            <p><b>No. 472 / 44 / {{ $year }}</b></p>
        </div>        

        <div class="content">
            <p>Kepala Desa Manggungmangu Kecamatan Plantungan Kabupaten Kendal, dengan ini menerangkan bahwa :</p>
            <table class="table-content">
                <tr>
                    <td style="width: 50px;">Nama</td>
                    <td style="text-align: right; width: 50px;">:</td>
                    <td>{{ $nama }}</td>
                </tr>
                <tr>
                    <td>NIK</td>
                    <td style="text-align: right; width: 50px;">:</td>
                    <td>{{ $nik }}</td>
                </tr>
                <tr>
                    <td>Tempat/Tgl. Lahir</td>
                    <td style="text-align: right; width: 50px;">:</td>
                    <td>{{ $tempatLahir }} / {{ $tanggalLahir }}</td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td style="text-align: right; width: 50px;">:</td>
                    <td>{{ $agama }}</td>
                </tr>
                <tr>
                    <td>Pekerjaan</td>
                    <td style="text-align: right; width: 50px;">:</td>
                    <td>{{ $pekerjaan }}</td>
                </tr>
                <tr>
                    <td style="vertical-align: top;">Alamat</td>
                    <td style="vertical-align: top; text-align: right; width: 50px;">:</td>
                    <td>Dusun {{ $alamat }} RT 0{{ $rt }} RW 0{{ $rw }} Desa Manggungmangu Kecamatan Plantungan Kabupaten Kendal</td>
                </tr>
            </table>   
            <p></p>
            <p>Nama yang tersebut di atas adalah benar penduduk yang berdomisili di Desa Manggungmangu Kecamatan Plantungan Kabupaten Kendal.</p>             
            <p>Berdasarkan pengamatan kami bahwa nama tersebut di atas benar memiliki usaha sebagai berikut :</p>
            <ol>
                <li>{{ $usaha }}</li>
            </ol>
            <p>Adapun usaha yang dijalaninya sudah berjalan lebih dari 5 tahun.</p>
            <p>Demikian Surat Keterangan Usaha ini dibuat, untuk dapat dipergunakan sebagaimana mestinya.</p>
        </div>        
    </div>
    <div class="footer">
        <table class="table-footer">
            <tr>
                <td>
                    <p>Dikeluarkan di : Manggungmangu</p>
                    <p>Pada tanggal : {{ $date }}</p>                
                </td>                
            </tr>    
            <tr>
                <td>
                    <div class="signature">
                        <p>Kepala Desa Manggungmangu</p>
                        <p><b><u>SUJARMONO</u></b></p>
                    </div>
                </td>
            </tr>        
        </table>        
    </div>
</body>
</html>
