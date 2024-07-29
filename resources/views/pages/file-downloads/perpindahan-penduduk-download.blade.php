<!DOCTYPE html>
<html>
<head>
    <title>Surat Keterangan Usaha</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            font-size: xx-small;
        }
        .header {
            text-align: center;
            margin-bottom: 50px; 
            margin-top: 10px;              
        }           

        .header p{
            margin-bottom: 2px;
            clear: right;
        }

        .header table{
            float: inline-end;            
            /* border: 1px solid black; */
            margin-right: 20px;                      
        }           
                  

        .content{
            margin-left: 20px;
            margin-right: 20px;
            margin-top: 30px;
            text-align: justify;
        }

        .table-content{
            margin-left: 20px;
        }

       
        
        .cell-kolon{
            text-align: center;             
        }

        .cell-title{
            width: 150px;
            border: 1px black solid;
        }
        

        .footer{                  
            margin-right: 80px;
            margin-top: 20px
        }

        .table-footer{          
            width: 95%;  
            margin-left: 70px; 
            text-align: center;           
        }

        .table-footer tr td{
            width: 60px;
        }

        .table-footer tr td p{
            margin-bottom: 2px   
                 
        }
        
        .table-footer tr td {
            /* border: 1px solid black; */
        }

        .data tr td{ 
            /* border: 1px solid black; */
        }

        .cell-number, .cell-gap{
            width: 30px;          
        }

        .chekcbox-field{
            display: flex;
            flex-direction: column;
        }

    </style>
</head>
<body>
    <div class="header">
        <table>
            <tr><td style="padding-left: 10px; padding-right: 10px;"><p><b>F-1.03</b></p></td></tr>
        </table>
        <p><b>FORMULIR PENDAFTARAN PERPINDAHAN PENDUDUK</b></p>                                                      
    </div>

    <div class="content">       
       <table class="data">
            <tr>                
                <td colspan="2" class="cell-title">1. No KK</td>
                <td class="cell-gap"></td>
                <td class="cell-kolon">:</td>
                <td colspan="31" style="border: 1px solid black;">12344</td>                
            </tr>
            <tr>                
                <td colspan="2" class="cell-title">2. Nama Lengkap Pemohon</td>
                <td class="cell-gap"></td>
                <td class="cell-kolon">:</td>
                <td colspan="31" style="border: 1px solid black;">Nama</td>
            </tr>
            <tr>                
                <td colspan="2" class="cell-title">3. NIK</td>
                <td class="cell-gap"></td>
                <td class="cell-kolon">:</td>
                <td colspan="31" style="border: 1px solid black;">1234</td>
            </tr>
            <tr>            
                <td colspan="2" class="cell-title">4. Jenis Permohonan</td>
                <td class="cell-gap"></td>
                <td class="cell-kolon">:</td>
                <td style="border: 1px solid black; text-align: center;">
                    <input type="checkbox">
                </td>       
                <td colspan="30">
                    <label>Surat Ketarangan Pindah</label>                    
                </td>                        
            </tr>  
            <tr>
                <td></td><td></td><td></td><td></td>
                <td style="border: 1px solid black; text-align: center;">
                    <input type="checkbox">
                </td>
                <td colspan="31">
                    <label>Surat Ketarangan Pindah Luar Negeri (SKPLN)</label>
                </td>
            </tr>  
            <tr>
                <td></td><td></td><td></td><td></td>                
                <td style="border: 1px solid black; text-align: center;">
                    <input type="checkbox">
                </td>
                <td colspan="30">
                    <label>Surat Ketarangan Tempat Tinggal (SKTT)</label>
                </td>
            </tr>                
            <tr>
                <td></td><td></td><td></td><td></td>
                <td colspan="31">
                    <p><i>Bagi Orang Asing Tinggal Terbatas</i></p>
                </td>
            </tr>
            <tr>                
                <td colspan="2" class="cell-title">5. Alamat Jelas</td>
                <td class="cell-gap"></td>
                <td class="cell-kolon">:</td>
                <td colspan="20" style="border: 1px solid black;">Dusun Apa</td>
                <td style="text-align: center;">RT</td>
                <td class="cell-number" style="border: 1px solid black; text-align: center;"></td>
                <td class="cell-number" style="border: 1px solid black; text-align: center;"></td>
                <td class="cell-number" style="border: 1px solid black; text-align: center;"></td>
                <td style="text-align: center;">RW</td>
                <td class="cell-number" style="border: 1px solid black; text-align: center;"></td>
                <td class="cell-number" style="border: 1px solid black; text-align: center;"></td>                                
                <td class="cell-number" style="border: 1px solid black; text-align: center;"></td>  
            </tr>
            <tr>
                <td></td><td></td><td></td><td></td>
                <td colspan="6">a. Desa/Kelurahan</td>
                <td class="cell-gap"></td>                
                <td colspan="9" style="border: 1px solid black;">MANGGUNGMANGU</td>
                <td class="cell-gap"></td>
                <td colspan="3">b. Kecamatan</td>
                <td class="cell-gap"></td> 
                <td colspan="8" style="border: 1px solid black;">APA</td>                
            </tr>
            <tr>
                <td></td><td></td><td></td><td></td>
                <td colspan="6">c. Kabupaten/Kota</td>
                <td class="cell-gap"></td>                
                <td colspan="9" style="border: 1px solid black;">MANGGUNGMANGU</td>
                <td class="cell-gap"></td>
                <td colspan="3">d. Provinsi</td>
                <td class="cell-gap"></td> 
                <td colspan="8" style="border: 1px solid black;">APA</td>                
            </tr>
            <tr>
                <td></td><td></td><td></td><td></td>
                <td colspan="6">Kode Pos</td>               
                <td class="cell-gap"></td>
                <td class="cell-number" style="border: 1px solid black; text-align: center;">5</td>
                <td class="cell-number" style="border: 1px solid black; text-align: center;">3</td>
                <td class="cell-number" style="border: 1px solid black; text-align: center;">1</td>
                <td class="cell-number" style="border: 1px solid black; text-align: center;">9</td>
                <td class="cell-number" style="border: 1px solid black; text-align: center;">6</td>
                <td class="cell-number" style="border: 1px solid black; text-align: center;"></td>
                <td colspan="18"></td>
            </tr>
            <tr>
                <td></td><td></td><td></td><td></td>
                <td style="border: 1px solid black; text-align: center;">
                    <input type="checkbox">
                </td>
                <td colspan="30">
                    <label>Dalam satu desa/kelurahan atau yang disebut dengan nama lain</label>
                </td>
            </tr>
            <tr>
                <td></td><td></td><td></td><td></td>
                <td style="border: 1px solid black; text-align: center;">
                    <input type="checkbox">
                </td>
                <td colspan="30">
                    <label>Antar desa/kelurahan atau yang disebut dengan nama lain dalam satu kecamatan</label>
                </td>
            </tr>
            <tr>
                <td></td><td></td><td></td><td></td>
                <td style="border: 1px solid black; text-align: center;">
                    <input type="checkbox">
                </td>
                <td colspan="30">
                    <label>Antar kecamatan atau yang disebut dengan nama lain dalam satu kabupaten/kota</label>
                </td>
            </tr>
            <tr>
                <td></td><td></td><td></td><td></td>
                <td style="border: 1px solid black; text-align: center;">
                    <input type="checkbox">
                </td>
                <td colspan="30">
                    <label>Antar kabupaten/kota dalam satu provinsi</label>
                </td>
            </tr>
            <tr>
                <td></td><td></td><td></td><td></td>
                <td style="border: 1px solid black; text-align: center;">
                    <input type="checkbox">
                </td>
                <td colspan="30">
                    <label>Antar provinsi</label>
                </td>
            </tr>
            <tr>                
                <td colspan="2" class="cell-title">6. Alamat Pindah</td>
                <td class="cell-gap"></td>
                <td class="cell-kolon">:</td>
                <td colspan="20" style="border: 1px solid black; text-align: center;">Dusun Apa</td>
                <td style="text-align: center;">RT</td>
                <td class="cell-number" style="border: 1px solid black; text-align: center;"></td>
                <td class="cell-number" style="border: 1px solid black; text-align: center;"></td>
                <td class="cell-number" style="border: 1px solid black; text-align: center;"></td>
                <td style="text-align: center;">RW</td>
                <td class="cell-number" style="border: 1px solid black; text-align: center;"></td>
                <td class="cell-number" style="border: 1px solid black; text-align: center;"></td>
                <td class="cell-number" style="border: 1px solid black; text-align: center;"></td>
            </tr>
            <tr>
                <td></td><td></td><td></td><td></td>
                <td colspan="6">a. Desa/Kelurahan</td>
                <td class="cell-gap"></td>                
                <td colspan="9" style="border: 1px solid black;">MANGGUNGMANGU</td>
                <td class="cell-gap"></td>
                <td colspan="3">b. Kecamatan</td>
                <td class="cell-gap"></td> 
                <td colspan="8" style="border: 1px solid black;">APA</td>                
            </tr>
            <tr>
                <td></td><td></td><td></td><td></td>
                <td colspan="6">c. Kabupaten/Kota</td>
                <td class="cell-gap"></td>                
                <td colspan="9" style="border: 1px solid black;">MANGGUNGMANGU</td>
                <td class="cell-gap"></td>
                <td colspan="3">d. Provinsi</td>
                <td class="cell-gap"></td> 
                <td colspan="8" style="border: 1px solid black;">APA</td>                
            </tr>
            <tr>
                <td></td><td></td><td></td><td></td>
                <td colspan="6">Kode Pos</td>               
                <td class="cell-gap"></td>
                <td class="cell-number" style="border: 1px solid black; text-align: center;">5</td>
                <td class="cell-number" style="border: 1px solid black; text-align: center;">3</td>
                <td class="cell-number" style="border: 1px solid black; text-align: center;">1</td>
                <td class="cell-number" style="border: 1px solid black; text-align: center;">9</td>
                <td class="cell-number" style="border: 1px solid black; text-align: center;">6</td>
                <td class="cell-number" style="border: 1px solid black; text-align: center;"></td>
                <td colspan="18"></td>
            </tr>
            <tr>                
                <td colspan="2" class="cell-title">7. Alasan Pindah</td>
                <td class="cell-gap"></td>
                <td class="cell-kolon">:</td>
                <td style="border: 1px solid black; text-align: center;">
                    <input type="checkbox">
                </td>
                <td colspan="3">
                    <label>Pekerjaan</label>
                </td>
                <td colspan="10" class="cell-gap"></td>
                <td style="border: 1px solid black; text-align: center;">
                    <input type="checkbox">
                </td>
                <td colspan="4"> <label>Keamanan</label></td>                
                <td style="border: 1px solid black; text-align: center;">
                    <input type="checkbox">
                </td>
                <td colspan="4"> <label>Perumahan</label> </td>                
                <td colspan="7"> <label>Lainnya<input type="text" style="height: 20px;"></label> </td>
            </tr>
            <tr>
                <td colspan="4" class="cell-gap"></td>
                <td style="border: 1px solid black; text-align: center;">
                    <input type="checkbox">
                </td>
                <td colspan="3"> <label>Pendidikan</label> </td>
                <td colspan="10" class="cell-gap"></td>
                <td style="border: 1px solid black; text-align: center;">
                    <input type="checkbox">
                </td>
                <td colspan="4"> <label>Kesehatan</label></td>                
                <td style="border: 1px solid black; text-align: center;">
                    <input type="checkbox">
                </td>
                <td colspan="4"> <label>Keluarga</label> </td>                
                <td colspan="7"></td>
            </tr>
            <tr>                
                <td colspan="2" class="cell-title">8. Jenis Kepindahan</td>
                <td class="cell-gap"></td>
                <td class="cell-kolon">:</td>
                <td style="border: 1px solid black; text-align: center;">
                    <input type="checkbox">
                </td>
                <td colspan="12"> <label>Kepala Keluarga</label> </td>  
                <td class="cell-gap"></td>      
                <td style="border: 1px solid black; text-align: center;">
                    <input type="checkbox">
                </td>
                <td colspan="10"> <label>Kepala Keluarga dan Sebagaian Anggota Keluarga</label></td>                                                
            </tr>
            <tr>
                <td colspan="4" class="cell-gap"></td>
                <td style="border: 1px solid black; text-align: center;">
                    <input type="checkbox">
                </td>
                <td colspan="13"> <label>Kepala Keluarga dan Seluruh Anggota Keluarga</label> </td>                
                <td style="border: 1px solid black; text-align: center;">
                    <input type="checkbox">
                </td>
                <td colspan="11"> <label>Anggota Keluarga</label></td>                                                
            </tr>
            <tr>                
                <td colspan="2" class="cell-title">9. Anggota Keluarga Tidak Pindah</td>
                <td class="cell-gap"></td>
                <td class="cell-kolon">:</td>
                <td style="border: 1px solid black; text-align: center;">
                    <input type="checkbox">
                </td>
                <td colspan="13"> <label>Numpang KK</label> </td>                
                <td style="border: 1px solid black; text-align: center;">
                    <input type="checkbox">
                </td>
                <td colspan="11"> <label>Membuat Baru</label></td>                                                
            </tr>
            <tr>                
                <td colspan="2" class="cell-title">10. Anggota Keluarga Yang Pindah</td>
                <td class="cell-gap"></td>
                <td class="cell-kolon">:</td>
                <td style="border: 1px solid black; text-align: center;">
                    <input type="checkbox">
                </td>
                <td colspan="13"> <label>Numpang KK</label> </td>
                <td style="border: 1px solid black; text-align: center;">
                    <input type="checkbox">
                </td>
                <td colspan="11"> <label>Membuat Baru</label></td>                                
                
            </tr>
            <tr>                
                <td colspan="6" class="cell-title">11. Daftar Anggota Keluarga yang Pindah</td>                
                <td class="cell-gap"></td>
            </tr>
            <tr style="text-align: center;">                
                <td colspan="2" style="border: 1px solid black; text-align: center; background-color: gray;">NO</td>
                <td class="cell-gap"></td>
                <td class="cell-gap"></td>
                <td colspan="16" style="border: 1px solid black; text-align: center; background-color: gray;">NIK</td>
                <td class="cell-gap"></td>
                <td colspan="10" style="border: 1px solid black; text-align: center; background-color: gray;">NAMA LENGKAP</td>
                <td class="cell-gap"></td>
                <td colspan="2" style="border: 1px solid black; text-align: center; background-color: gray;">SHDK</td>
            </tr>
            <tr>                
                <td class="cell-number" style="border: 1px solid black; text-align: center;">.</td>
                <td class="cell-number" style="border: 1px solid black; text-align: center;"></td>
                <td class="cell-gap"></td>
                <td class="cell-gap"></td>
                <td class="cell-number" style="border: 1px solid black; text-align: center;"></td>
                <td class="cell-number" style="border: 1px solid black; text-align: center;"></td>
                <td class="cell-number" style="border: 1px solid black; text-align: center;"></td>
                <td class="cell-number" style="border: 1px solid black; text-align: center;"></td>
                <td class="cell-number" style="border: 1px solid black; text-align: center;"></td>
                <td class="cell-number" style="border: 1px solid black; text-align: center;"></td>
                <td class="cell-number" style="border: 1px solid black; text-align: center;"></td>
                <td class="cell-number" style="border: 1px solid black; text-align: center;"></td>
                <td class="cell-number" style="border: 1px solid black; text-align: center;"></td>
                <td class="cell-number" style="border: 1px solid black; text-align: center;"></td>
                <td class="cell-number" style="border: 1px solid black; text-align: center;"></td>
                <td class="cell-number" style="border: 1px solid black; text-align: center;"></td>
                <td class="cell-number" style="border: 1px solid black; text-align: center;"></td>
                <td class="cell-number" style="border: 1px solid black; text-align: center;"></td>
                <td class="cell-number" style="border: 1px solid black; text-align: center;"></td>
                <td class="cell-number" style="border: 1px solid black; text-align: center;"></td>
                <td class="cell-gap"></td>
                <td class="cell-number" style="border: 1px solid black; text-align: center;"></td>
                <td class="cell-number" style="border: 1px solid black; text-align: center;"></td>
                <td class="cell-number" style="border: 1px solid black; text-align: center;"></td>
                <td class="cell-number" style="border: 1px solid black; text-align: center;"></td>
                <td class="cell-number" style="border: 1px solid black; text-align: center;"></td>
                <td class="cell-number" style="border: 1px solid black; text-align: center;"></td>
                <td class="cell-number" style="border: 1px solid black; text-align: center;"></td>
                <td class="cell-number" style="border: 1px solid black; text-align: center;"></td>
                <td class="cell-number" style="border: 1px solid black; text-align: center;"></td>
                <td class="cell-number" style="border: 1px solid black; text-align: center;"></td>
                <td class="cell-gap"></td>
                <td class="cell-number" style="border: 1px solid black; text-align: center;"></td>
                <td class="cell-number" style="border: 1px solid black; text-align: center;"></td>
            </tr>
            <tr>
                <td colspan="34"><b>Diisi oleh Penduduk (Orang Asing) pemegang ITAS yang mengajukan SKTT dan OA pemegang ITAP yang mengajukan Surat Keterangan Kependudukan Lainnya</b></td>
            </tr>
            <tr>                
                <td colspan="2" class="cell-title">12. Nama Sponsor</td>
                <td class="cell-gap"></td>
                <td class="cell-kolon">:</td>
                <td colspan="24" style="border: 1px solid black;"></td>
            </tr>
            <tr>
                <td colspan="2" class="cell-title">13. Tipe Sponsor</td>
                <td class="cell-gap"></td>
                <td class="cell-kolon">:</td>
                <td style="border: 1px solid black; text-align: center;">
                    <input type="checkbox">
                </td>
                <td colspan="8"> <label>Organisasi Internasional</label> </td>
                <td colspan="5" class="cell-gap"></td>
                <td style="border: 1px solid black; text-align: center;">
                    <input type="checkbox">
                </td>
                <td colspan="5"> <label>Pemerintah</label></td>                
                <td style="border: 1px solid black; text-align: center;">
                    <input type="checkbox">
                </td>
                <td colspan="4"> <label>Perusahaan</label> </td>                                
            </tr>
            <tr>
                <td colspan="4" class="cell-gap"></td>
                <td style="border: 1px solid black; text-align: center;">
                    <input type="checkbox">
                </td>
                <td colspan="8"> <label>Perorangan</label> </td>
                <td colspan="5" class="cell-gap"></td>        
                <td style="border: 1px solid black; text-align: center;">
                    <input type="checkbox">
                </td>
                <td colspan="5"> <label>Tanpa Sponsor</label></td>                                
            </tr>
            <tr>                
                <td colspan="2" class="cell-title">14. Alamat Sponsor</td>
                <td class="cell-gap"></td>
                <td class="cell-kolon">:</td>
                <td colspan="24" style="border: 1px solid black; text-align: center;"></td>
            </tr>
            <tr>
                <td colspan="4"></td>
                <td colspan="24" style="border: 1px solid black; text-align: center;">,</td>
            </tr>
            <tr>            
                <td colspan="2" rowspan="2" class="cell-title">15. Nomor dan Tanggal ITAS & ITAP</td>
                <td class="cell-gap"></td>
                <td rowspan="2" class="cell-kolon">:</td>
                <td class="cell-number" style="border: 1px solid black; text-align: center;">.</td>
                <td class="cell-number" style="border: 1px solid black; text-align: center;"></td>
                <td class="cell-number" style="border: 1px solid black; text-align: center;"></td>
                <td class="cell-number" style="border: 1px solid black; text-align: center;"></td>
                <td class="cell-number" style="border: 1px solid black; text-align: center;"></td>
                <td class="cell-number" style="border: 1px solid black; text-align: center;"></td>
                <td class="cell-number" style="border: 1px solid black; text-align: center;"></td>
                <td class="cell-number" style="border: 1px solid black; text-align: center;"></td>
                <td class="cell-number" style="border: 1px solid black; text-align: center;"></td>
                <td class="cell-number" style="border: 1px solid black; text-align: center;"></td>
                <td class="cell-gap"></td>
                <td class="cell-gap"></td>
                <td class="cell-number" style="border: 1px solid black; text-align: center;"></td>
                <td class="cell-number" style="border: 1px solid black; text-align: center;"></td>
                <td class="cell-number" style="border: 1px solid black; text-align: center;"></td>
                <td class="cell-number" style="border: 1px solid black; text-align: center;"></td>
                <td class="cell-number" style="border: 1px solid black; text-align: center;"></td>
                <td class="cell-number" style="border: 1px solid black; text-align: center;"></td>
                <td class="cell-number" style="border: 1px solid black; text-align: center;"></td>
            </tr>
            <tr style="text-align: center;">   
                <td colspan="2"></td>             
                <td colspan="10" >Nomor</td>
                <td class="cell-gap"></td>
                <td class="cell-gap"></td>
                <td colspan="7" >Tanggal Masa Berlaku</td>
            </tr>
            <tr>
                <td colspan="34" class="cell-title"><b>Diisi oleh Penduduk yang mengajukan Surat Keterangan Pindah Luar Negeri</b></td>
            </tr>
            <tr>                
                <td colspan="2" class="cell-title">16. Negara Tujuan</td>
                <td class="cell-gap"></td>
                <td class="cell-kolon">:</td>
                <td colspan="26" style="border: 1px solid black;"></td>
                <td class="cell-gap"></td>
                <td class="cell-gap" style="border: 1px solid black; text-align: center;"></td>
                <td class="cell-gap" style="border: 1px solid black; text-align: center;"></td>
                <td class="cell-gap" style="border: 1px solid black; text-align: center;"></td>
            </tr>
            <tr style="text-align: center;">
                <td colspan="31"></td>
                <td colspan="3" >Kode Negara</td>
            </tr>
            <tr>                
                <td colspan="2" class="cell-title">17. Alamat Tujuan</td>
                <td class="cell-gap"></td>
                <td class="cell-kolon">:</td>
                <td colspan="24" style="border: 1px solid black;"></td>
            </tr>
            <tr>
                <td colspan="4"></td>
                <td colspan="24" style="border: 1px solid black;">.</td>
            </tr>
            <tr>                
                <td colspan="2" class="cell-title">18. Penanggung Jawab</td>
                <td class="cell-gap"></td>
                <td class="cell-kolon">:</td>
                <td colspan="24" style="border: 1px solid black; text-align: center;"></td>
            </tr>
            <tr>                
                <td colspan="2" class="cell-title">19. Rencana Pindah Tanggal</td>
                <td class="cell-gap"></td>
                <td class="cell-kolon">:</td>
                <td style="text-align: center;">Tgl.</td>
                <td class="cell-gap"></td>
                <td class="cell-number" style="border: 1px solid black; text-align: center;"></td>
                <td class="cell-number" style="border: 1px solid black; text-align: center;"></td>
                <td class="cell-gap"></td>
                <td class="cell-gap"></td>
                <td style="text-align: center;">Bln.</td>
                <td class="cell-gap"></td>
                <td class="cell-number" style="border: 1px solid black; text-align: center;"></td>
                <td class="cell-number" style="border: 1px solid black; text-align: center;"></td>
                <td class="cell-gap"></td>
                <td class="cell-gap"></td>
                <td style="text-align: center;">Thn.</td>
                <td class="cell-gap"></td>
                <td class="cell-number" style="border: 1px solid black; text-align: center;"></td>
                <td class="cell-number" style="border: 1px solid black; text-align: center;"></td>
                <td class="cell-number" style="border: 1px solid black; text-align: center;"></td>
                <td class="cell-number" style="border: 1px solid black; text-align: center;"></td>
            </tr>
            <tr>                
                <td colspan="2" class="cell-title">20. Nomor Handphone</td>
                <td class="cell-gap"></td>
                <td class="cell-kolon">:</td>
                <td colspan="24" style="border: 1px solid black;"></td>
            </tr>
            <tr>                
                <td colspan="2" class="cell-title">21. Alamat Email</td>
                <td class="cell-gap"></td>
                <td class="cell-kolon">:</td>
                <td colspan="24" style="border: 1px solid black;"></td>
            </tr>
       </table>
    </div>

    <!-- Footer -->
    <div class="footer">
        <table class="table-footer">
            <tr>
                <td></td>
                <td></td>
                <td style="text-align: center;"><p>Manggungmangu, 29 Juni 2024</p></td>                
            </tr>    
            <tr>
                <td><p>Mengetahui</p></td>
                <td></td>
                <td></td>
            </tr>            
            <tr>
                <td style="padding-bottom: 60px;"><p>Kepala Desa Manggungmangu</p></td>
                <td></td>
                <td style="padding-bottom: 60px;"><p>Pemohon,</p></td>
            </tr>           
            <tr>
                <td><p>SUJARMONO</p></td>
                <td></td>
                <td><p><b><u>RIA RAHARDIAN</u></b></p></td>
            </tr>
        </table>        
    </div>
</body>
</html>
