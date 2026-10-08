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
        }           

        .header b{
            margin-bottom: 2px;
            clear: right;
            padding-left: 10px; 
            padding-right: 10px;
        }

        .header .tipe-doc{
            /* float: right;             */
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
            margin-left: 20px;
            margin-right: 50px;            
            text-align: justify;
        }

        .table-content{
            margin-left: 20px;
            margin-bottom: 5px
        }

        .table-content tr td{
            /* border: 1px solid black; */
        }
        
        .cell-kolon{
            text-align: center; 
            width: 30px;
        }

        .cell-title{
            width: 150px;
        }

        .footer{                  
            margin-right: 80px;            
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
        <div style="width: 100%; text-align: right;">
            <b class="tipe-doc">F-2.03</b>        
        </div>               
        <b>SURAT PERNYATAAN TANGGUNG JAWAB MUTLAK (SPTJM)</b>
        <b>KEBENARAN DATA KELAHIRAN</b>            
    </div>
    <div>       
        <div class="content">
            Saya yang bertanda tangan di bawah ini :
            <table class="table-content">
                <tr>
                    <td class="cell-title">Nama</td>
                    <td class="cell-kolon">:</td>
                    <td>{{ $nama_1 }}</td>
                </tr>
                <tr>
                    <td class="cell-title">NIK</td>
                    <td class="cell-kolon">:</td>
                    <td>{{ $nik_1 }}</td>
                </tr>
                <tr>
                    <td>Tempat & tanggal lahir</td>
                    <td class="cell-kolon">:</td>
                    <td>{{ $tempatLahir_1 }} / {{ $tanggalLahir_1 }}</td>                    
                </tr>                
                <tr>
                    <td>Pekerjaan</td>
                    <td class="cell-kolon">:</td>
                    <td>{{ $pekerjaan_1 }}</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td class="cell-kolon">:</td>
                    <td colspan="3">Dusun {{ $alamat_1 }} Desa Manggungmangu RT 0{{ $rt_1 }} RW 0{{ $rw_1 }} Kecamatan Plantungan Kabupaten Kendal Jawa Tengah</td>
                </tr>                
            </table> 

            Menyatakan bahwa :
            <table class="table-content">
                <tr>
                    <td class="cell-title">Nama</td>
                    <td class="cell-kolon">:</td>
                    <td>{{ $nama_2 }}</td>
                </tr>
                <tr>
                    <td class="cell-title">NIK</td>
                    <td class="cell-kolon">:</td>
                    <td>{{ $nik_2 }}</td>
                </tr>
                <tr>
                    <td>Tempat & tanggal lahir</td>
                    <td class="cell-kolon">:</td>
                    <td>{{ $tempatLahir_2 }} / {{ $tanggalLahir_2 }}</td>                    
                </tr>                
                <tr>
                    <td>Anak Ke</td>
                    <td class="cell-kolon">:</td>
                    <td>{{ $anakKe }}</td>
                </tr>
                <tr>
                    <td>Jenis Kelahiran</td>
                    <td class="cell-kolon">:</td>
                    <td>{{ $jenisKelahiran }}</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td class="cell-kolon">:</td>
                    <td colspan="3">Dusun {{ $alamat_2 }} Desa Manggungmangu RT 0{{ $rt_2 }} RW 0{{ $rw_2 }} Kecamatan Plantungan Kabupaten Kendal Jawa Tengah</td>
                </tr>                
            </table> 

            Adalah <b>Anak Kandung</b> dari :
            <table class="table-content">
                <tr>
                    <td class="cell-title">Nama</td>
                    <td class="cell-kolon">:</td>
                    <td>{{ $nama_3 }}</td>
                </tr>
                <tr>
                    <td class="cell-title">NIK</td>
                    <td class="cell-kolon">:</td>
                    <td>{{ $nik_3 }}</td>
                </tr>
                <tr>
                    <td>Tempat & tanggal lahir</td>
                    <td class="cell-kolon">:</td>
                    <td>{{ $tempatLahir_3 }} / {{ $tanggalLahir_3 }}</td>                    
                </tr>                
                <tr>
                    <td>Pekerjaan</td>
                    <td class="cell-kolon">:</td>
                    <td>{{ $pekerjaan_3 }}</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td class="cell-kolon">:</td>
                    <td colspan="3">Dusun {{ $alamat_3 }} Desa Manggungmangu RT 0{{ $rt_3 }} RW 0{{ $rw_3 }} Kecamatan Plantungan Kabupaten Kendal Jawa Tengah</td>
                </tr>                
            </table>             
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
                <td style="text-align: center; padding-bottom: 10px;"><b><u>MISRONDI</u></b></td>
                <td></td>
                <td style="text-align: center; padding-bottom: 10px;"><b><u>{{ $nama_1 }}</u></b></td>
            </tr>
            <tr>
                <td style="text-align: center; padding-bottom: 60px;"><p>Saksi II</p></td>                
            </tr>
            <tr>
                <td style="text-align: center;"><p><b><u>SARYONO</u></b></p></td>                
            </tr>
        </table>        
    </div>
</body>
</html>
