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

        .header b{
            margin-bottom: 1px;
            clear: right;
        }

        .header table{
            float: right;            
            border: 1px solid black;
            margin-right: 20px;                      
        }
        .icon-letter{
            width: 1%;            
        }

        .logo-letter{
            width: 130px;
        }    
                  

        .content{
            margin-left: 30px;
            margin-right: 20px;            
            text-align: justify;
        }
        
        .content p {
            margin-bottom: 1px;
            margin-top: 15px;
        }

        .table-content{
            margin-left: 20px;
        }

        .table-content tr td{
            /* border: 1px solid black; */
        }
        
        .cell-kolon{
            text-align: center; 
            width: 50px;
        }

        .cell-title{
            width: 150px;
        }

        .footer{                  
            margin-right: 80px;
            margin-top: 10px
        }

        .table-footer{          
            width: 95%;  
            margin-left: 70px;            
        }

        .table-footer tr td p{
            margin-bottom: 2px   
                 
        }
        
        .table-footer tr td {
            /* border: 1px solid black; */
        }

    </style>
</head>
<body>
    <div class="header">
        <table>
            <tr><td style="padding-left: 10px; padding-right: 10px;"><b>F-2.04</b></td></tr>
        </table>
        <b>SURAT PERNYATAAN TANGGUNG JAWAB MUTLAK (SPTJM)</b>                  
        <b>KEBENARAN SEBAGAI PASANGAN SUAMI ISTERI</b>                          
    </div>
    <div>       
        <div class="content">
            <p>Saya yang bertanda tangan di bawah ini :</p>
            <table class="table-content">
                <tr>
                    <td class="cell-title">Nama</td>
                    <td class="cell-kolon">:</td>
                    <td>{{ $nama }}</td>
                </tr>
                <tr>
                    <td class="cell-title">NIK</td>
                    <td class="cell-kolon">:</td>
                    <td>{{ $nik }}</td>
                </tr>
                <tr>
                    <td>Tempat & tanggal lahir</td>
                    <td class="cell-kolon">:</td>
                    <td>{{ $tempatLahir }} / {{ $tanggalLahir }}</td>                   
                </tr>                
                <tr>
                    <td>Pekerjaan</td>
                    <td class="cell-kolon">:</td>
                    <td>{{ $pekerjaan }}</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td class="cell-kolon">:</td>
                    <td colspan="3">Dusun {{ $alamat }} Desa Manggungmangu RT 0{{ $rt }} RW 0{{ $rw }} Kecamatan Plantungan Kabupaten Kendal Jawa Tengah</td>
                </tr>                
            </table> 

            <p>Menyatakan bahwa :</p>
            <table class="table-content">
                <tr>
                    <td class="cell-title">Nama</td>
                    <td class="cell-kolon">:</td>
                    <td>{{ $namaIstri }}</td>
                </tr>
                <tr>
                    <td class="cell-title">NIK</td>
                    <td class="cell-kolon">:</td>
                    <td>{{ $nikIstri }}</td>
                </tr>
                <tr>
                    <td>Tempat & tanggal lahir</td>
                    <td class="cell-kolon">:</td>
                    <td>{{ $tempatLahirIstri }} / {{ $tanggalLahirIstri }}</td>                   
                </tr>                
                <tr>
                    <td>Pekerjaan</td>
                    <td class="cell-kolon">:</td>
                    <td>{{ $pekerjaanIstri }}</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td class="cell-kolon">:</td>
                    <td colspan="3">Dusun {{ $alamatIstri }} Desa Manggungmangu RT 0{{ $rtIstri }} RW 0{{ $rwIstri }} Kecamatan Plantungan Kabupaten Kendal Jawa Tengah</td>
                </tr>                
            </table> 

            <p>Adalah <b>ISTRI</b> dari :</p>
            <table class="table-content">
                <tr>
                    <td class="cell-title">Nama</td>
                    <td class="cell-kolon">:</td>
                    <td>{{ $namaSuami }}</td>
                </tr>
                <tr>
                    <td class="cell-title">NIK</td>
                    <td class="cell-kolon">:</td>
                    <td>{{ $nikSuami }}</td>
                </tr>
                <tr>
                    <td>Tempat & tanggal lahir</td>
                    <td class="cell-kolon">:</td>
                    <td>{{ $tempatLahirSuami }} / {{ $tempatLahirSuami }}</td>                  
                </tr>                
                <tr>
                    <td>Pekerjaan</td>
                    <td class="cell-kolon">:</td>
                    <td>{{ $pekerjaanSuami }}</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td class="cell-kolon">:</td>
                    <td colspan="3">Dusun {{ $alamatSuami }} Desa Manggungmangu RT 0{{ $rtSuami }} RW 0{{ $rwSuami }} Kecamatan Plantungan Kabupaten Kendal Jawa Tengah</td>
                </tr>                
            </table> 
            <p>Sebagaimana tercantum dalam Kartu Keluarga (KK) Nomor : {{ $noKK }}</p>
            <p>Demikian surat pernyataan ini saya buat dengan sebenar-benarnya dan apabila dikemudian hari 
                ternyata pernyataan saya ini tidak benar, maka saya bersedia diproses secara hukum sesuai dengan 
                peraturan perundang-undangan dan dokumen yang diterbitkan dari pernyataan ini menjadi tidak sah.</p>
        </div>        
    </div>
    <div class="footer">
        <table class="table-footer">
            <tr>
                <td></td>
                <td></td>
                <td style="text-align: center;">Kendal, {{ $date }}</td>                
            </tr>    
            <tr>
                <td style="text-align: center; padding-bottom: 60px;">Saksi I</td>
                <td></td>
                <td style="text-align: center; padding-bottom: 60px;">Saya Yang Menyatakan,</td>
            </tr>            
            <tr>
                <td style="text-align: center;"><b><u>MISRONDI</u></b></td>
                <td></td>
                <td style="text-align: center;"><b><u>{{ $nama }}</u></b></td>
            </tr>   
            <tr>
                <td style="text-align: center; padding-bottom: 60px;"><p>Saksi II</p></td>                
            </tr>
            <tr>
                <td style="text-align: center;"><b><u>SARYONO</u></b></td>                
            </tr>
        </table>        
    </div>
</body>
</html>
