<?php
  
namespace App\Http\Controllers;
   
use Illuminate\Http\Request;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Penduduk;
use App\Models\Pekerjaan;
use App\Models\Pegawai;
use App\Models\RW;
use App\Models\RT;
use Carbon\Carbon;

    
class PdfController extends Controller
{
    /**
     * Convert image to base64
     */
    private function base64Image($path)
    {
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        return 'data:image/' . $type . ';base64,' . base64_encode($data);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generateSKU(Request $request)
    {
        // $penduduk = Penduduk::find($id);     

        $nikPerangkat = $request->ttdPerangkat;        
        $perangkat = Pegawai::where('nik',$nikPerangkat)->first(); 
        $namaPerangkat = Penduduk::where('nik',$nikPerangkat)->first();
        $pekerjaan = Pekerjaan::find($request->pekerjaan_1);
        Carbon::setLocale('id');
        $path = public_path('assets/img/logo.jpg');
        $base64Image = $this->base64Image($path);
        $currentYear = Carbon::now()->year;
        $currentDate = Carbon::now()->translatedFormat('d F Y');

        $data = [
            'nik' => $request->nik_1,
            'nama' => $request->nama_1,
            'tempatLahir' => $request->tempatLahir_1,    
            'tanggalLahir' => Carbon::parse($request->tanggalLahir_1)->translatedFormat('d F Y'),
            'pekerjaan' => $pekerjaan->pekerjaan,
            'agama' => $request->agama_1,
            'alamat' => $request->alamat_1,
            'rw' => $request->rw_1,
            'rt' => $request->rt_1,
            'jabatanPerangkat' => $perangkat->jabatan,
            'namaPerangkat' => $namaPerangkat->nama,
            'usaha' => $request->usaha,
            'base64Image' => $base64Image,
            'date' => $currentDate, 
            'year' => $currentYear,
        ]; 
              
        $pdf = PDF::loadView('pages.file-downloads.SKU-download', $data);
       
        return $pdf->stream('SKU_' . $request->nama . '.pdf');
    }  
    
    public function generateSPMARMS(Request $request)
    {                       
        Carbon::setLocale('id');
        $path = public_path('assets/img/logo.jpg');
        $base64Image = $this->base64Image($path);
        $currentYear = Carbon::now()->year;
        $currentDate = Carbon::now()->translatedFormat('d F Y');
        $rw = RW::where('id', $request->rw_1)->first();    
        $rt = RT::where('id', $request->rt_1)->first();
        $pekerjaan = Pekerjaan::where('id', $request->pekerjaan_1)->first();

        $data = [
            'nik' => $request->nik_1,
            'nama' => $request->nama_1,
            'tempatLahir' => $request->tempatLahir_1,    
            'tanggalLahir' => Carbon::parse($request->tanggalLahir_1)->translatedFormat('d F Y'),
            'pekerjaan' => $pekerjaan->pekerjaan,            
            'alamat' => $request->alamat_1,
            'rw' => $request->rw_1,
            'rt' => $request->rt_1,   
            'ketuaRW' => $rw->ketua_rw,
            'ketuaRT' => $rt->ketua_rt,
            'base64Image' => $base64Image,
            'date' => $currentDate, 
            'year' => $currentYear,
        ]; 
              
        $pdf = PDF::loadView('pages.file-downloads.SPMARMS-download', $data);
       
        return $pdf->stream('SKU_' . $request->nama . '.pdf');
    }  

    public function generateSP(Request $request)
    {
        // $penduduk = Penduduk::find($id);            
        
        Carbon::setLocale('id');
        $path = public_path('assets/img/logo.jpg');
        $base64Image = $this->base64Image($path);
        $pekerjaan = Pekerjaan::find($request->pekerjaan_1);
        $penduduk = Penduduk::where('nik', $request->nik_1)->first();
        $nikPerangkat = $request->ttdPerangkat;        
        $perangkat = Pegawai::where('nik',$nikPerangkat)->first(); 
        $namaPerangkat = Penduduk::where('nik',$nikPerangkat)->first();     
        $currentYear = Carbon::now()->year;
        $currentDate = Carbon::now()->translatedFormat('d F Y');

        $data = [
            'nik' => $request->nik_1,
            'noKK' => $request->noKK_1,
            'nama' => $request->nama_1,
            'tempatLahir' => $request->tempatLahir_1,    
            'tanggalLahir' => Carbon::parse($request->tanggalLahir_1)->translatedFormat('d F Y'),
            'pekerjaan' => $pekerjaan->pekerjaan,
            'kewarganegaraan' => $penduduk->kewarganegaraan,
            'agama' => $request->agama_1,
            'alamat' => $request->alamat_1,
            'rw' => $request->rw_1,
            'rt' => $request->rt_1,
            'jabatanPerangkat' => $perangkat->jabatan,
            'namaPerangkat' => $namaPerangkat->nama,
            'keperluan' => $request->keperluan,
            'keterangan' => $request->keterangan,
            'base64Image' => $base64Image,
            'date' => $currentDate, 
            'year' => $currentYear,
        ]; 
              
        // dd($data);
        $pdf = PDF::loadView('pages.file-downloads.surat-pengantar-download', $data);
       
        return $pdf->stream('Surat_Pengantar_' . $request->nama . '.pdf');
    }   

    public function generatePendaftaranAkta(Request $request)
    {
        $penduduk_2 = Penduduk::where('nik', $request->nik_2)->first();            
        $penduduk_3 = Penduduk::where('nik', $request->nik_3)->first();            

        $saksi_1 = Penduduk::where('nik', $request->nik_saksi_1)->first();
        $saksi_2 = Penduduk::where('nik', $request->nik_saksi_2)->first();

        $pekerjaan_saksi_1 = $saksi_1->pekerjaan;    
        $pekerjaan_saksi_2 = $saksi_2->pekerjaan;        
        
        Carbon::setLocale('id');
        $path = public_path('assets/img/logo.jpg');
        $base64Image = $this->base64Image($path);
        $pekerjaan = Pekerjaan::find($request->pekerjaan_4);
        $pekerjaan_saksi_1 = Pekerjaan::find($saksi_1->id);    
        $pekerjaan_saksi_2 = Pekerjaan::find($saksi_2->id);              
        
        $currentYear = Carbon::now()->year;
        $currentDate = Carbon::now()->translatedFormat('d F Y');

        $data = [
            'nik_1' => $request->nik_1,
            'noKK' => $request->noKK,
            'nama_1' => $request->nama_1,
            'tempatLahir_1' => $request->tempatLahir_1,    
            'tanggalLahir_1' => Carbon::parse($request->tanggalLahir_1)->translatedFormat('d F Y'),
            'jenisKelamin_1' => $request->jenisKelamin,                          
            'anakKe'=> $request->anakKe,
            'agama' => $request->agama,
            'tempatDilahirkan' => $request->tempatDilahirkan,
            'penolongKelahiran' => $request->penolongKelahiran,

            'nik_2' => $request->nik_2,            
            'nama_2' => $request->nama_2,
            'jenisKelamin_2' => $penduduk_2->jenisKelamin,
            'tempatLahir_2' => $request->tempatLahir_2,    
            'tanggalLahir_2' => Carbon::parse($request->tanggalLahir_2)->translatedFormat('d F Y'),                          
            'alamat_2' => $request->alamat_2,
            'rw_2' => $request->rw_2,
            'rt_2' => $request->rt_2, 
            'kebangsaan_2' => $penduduk_2->kewarganegaraan,

            'nik_3' => $request->nik_3,            
            'nama_3' => $request->nama_3,
            'jenisKelamin_3' => $penduduk_3->jenisKelamin,
            'tempatLahir_3' => $request->tempatLahir_3,    
            'tanggalLahir_3' => Carbon::parse($request->tanggalLahir_3)->translatedFormat('d F Y'),                          
            'alamat_3' => $request->alamat_3,
            'rw_3' => $request->rw_3,
            'rt_3' => $request->rt_3, 
            'kebangsaan_3' => $penduduk_3->kewarganegaraan,

            'nik_4' => $request->nik_4,            
            'nama_4' => $request->nama_4,
            'tempatLahir_4' => $request->tempatLahir_4,    
            'tanggalLahir_4' => Carbon::parse($request->tanggalLahir_4)->translatedFormat('d F Y'),
            'pekerjaan_4' => $pekerjaan->pekerjaan,           
            'alamat_4' => $request->alamat_4,
            'rw_4' => $request->rw_4,
            'rt_4' => $request->rt_4,
            'hubungan' => $request->hubungan,
            'kodePos' => $request->kodePos,

            'nap' => $request->nap,
            'tap' => Carbon::parse($request->tap)->translatedFormat('d F Y'),
            'perkawinanSah' => $request->perkawinanSah,
            'penerbit' => $request->penerbit,
            
            'nik_saksi_1' => $request->nik_saksi_1,
            'nama_saksi_1' => $request->nama_saksi_1,
            'tempatLahir_saksi_1' => $request->tempatLahir_saksi_1,
            'tanggalLahir_saksi_1' => Carbon::parse($request->tanggalLahir_saksi_1)->translatedFormat('d F Y'),
            'alamat_saksi_1' => $request->alamat_saksi_1,
            'rw_saksi_1' => $request->rw_saksi_1,
            'rt_saksi_1' => $request->rt_saksi_1,
            'pekerjaan_saksi_1' => $pekerjaan_saksi_1->pekerjaan,

            'nik_saksi_2' => $request->nik_saksi_2,
            'nama_saksi_2' => $request->nama_saksi_2,
            'tempatLahir_saksi_2' => $request->tempatLahir_saksi_2,
            'tanggalLahir_saksi_2' => Carbon::parse($request->tanggalLahir_saksi_2)->translatedFormat('d F Y'),
            'alamat_saksi_2' => $request->alamat_saksi_2,
            'rw_saksi_2' => $request->rw_saksi_2,
            'rt_saksi_2' => $request->rt_saksi_2,
            'pekerjaan_saksi_2' => $saksi_2->pekerjaan->pekerjaan,
            
            'base64Image' => $base64Image,
            'date' => $currentDate, 
            'year' => $currentYear,
        ]; 
              
        $pdf = PDF::loadView('pages.file-downloads.pendaftaran-aktakelahiran-download', $data);
       
        return $pdf->stream('Pendaftaran_Akta_Kelahiran_' . $request->nama . '.pdf');
    }   

    public function generateSPTJMPasutri(Request $request)
    {
        // $penduduk = Penduduk::find($id);            
        
        Carbon::setLocale('id');
        $path = public_path('assets/img/logo.jpg');
        $base64Image = $this->base64Image($path);
        $pekerjaan_1 = Pekerjaan::find($request->pekerjaan_1);    
        $pekerjaan_2 = Pekerjaan::find($request->pekerjaan_2);
        $pekerjaan_3 = Pekerjaan::find($request->pekerjaan_3);
        $currentYear = Carbon::now()->year;
        $currentDate = Carbon::now()->translatedFormat('d F Y');

        $data = [
            'nik_1' => $request->nik_1,            
            'nama_1' => $request->nama_1,
            'tempatLahir_1' => $request->tempatLahir_1,    
            'tanggalLahir_1' => Carbon::parse($request->tanggalLahir_1)->translatedFormat('d F Y'),
            'pekerjaan_1' => $pekerjaan_1->pekerjaan,               
            'alamat_1' => $request->alamat_1,
            'rw_1' => $request->rw_1,
            'rt_1' => $request->rt_1,     

            'nik_2' => $request->nik_2,            
            'nama_2' => $request->nama_2,
            'tempatLahir_2' => $request->tempatLahir_2,    
            'tanggalLahir_2' => Carbon::parse($request->tanggalLahir_2)->translatedFormat('d F Y'),
            'pekerjaan_2' => $pekerjaan_2->pekerjaan,               
            'alamat_2' => $request->alamat_2,
            'rw_2' => $request->rw_2,
            'rt_2' => $request->rt_2, 

            'nik_3' => $request->nik_3,
            'noKK_3' => $request->noKK_3,            
            'nama_3' => $request->nama_3,
            'tempatLahir_3' => $request->tempatLahir_3,    
            'tanggalLahir_3' => Carbon::parse($request->tanggalLahir_3)->translatedFormat('d F Y'),
            'pekerjaan_3' => $pekerjaan_3->pekerjaan,               
            'alamat_3' => $request->alamat_3,
            'rw_3' => $request->rw_3,
            'rt_3' => $request->rt_3,   

            'base64Image' => $base64Image,
            'date' => $currentDate, 
            'year' => $currentYear,
        ]; 
              
        $pdf = PDF::loadView('pages.file-downloads.sptjm-pasutri-download', $data);
       
        return $pdf->stream('SPTJM_PASUTRI_' . $request->nama . '.pdf');
    }   

    public function generateSPTJMKelahiran(Request $request)
    {
        // $penduduk = Penduduk::find($id);            
        
        Carbon::setLocale('id');
        $path = public_path('assets/img/logo.jpg');
        $base64Image = $this->base64Image($path);
        $pekerjaan_1 = Pekerjaan::find($request->pekerjaan_1);    
        $pekerjaan_2 = Pekerjaan::find($request->pekerjaan_2);
        $pekerjaan_3 = Pekerjaan::find($request->pekerjaan_3);
        $currentYear = Carbon::now()->year;
        $currentDate = Carbon::now()->translatedFormat('d F Y');

        $data = [
            'nik_1' => $request->nik_1,
            'noKK' => $request->noKK,
            'nama_1' => $request->nama_1,
            'anakKe' => $request->anakKe,
            'jenisKelahiran' => $request->jenisKelahiran,
            'tempatLahir_1' => $request->tempatLahir_1,    
            'tanggalLahir_1' => Carbon::parse($request->tanggalLahir_1)->translatedFormat('d F Y'),
            'pekerjaan_1' => $pekerjaan_1->pekerjaan,               
            'alamat_1' => $request->alamat_1,
            'rw_1' => $request->rw_1,
            'rt_1' => $request->rt_1,           

            'nik_2' => $request->nik_2,            
            'nama_2' => $request->nama_2,
            'tempatLahir_2' => $request->tempatLahir_2,    
            'tanggalLahir_2' => Carbon::parse($request->tanggalLahir_2)->translatedFormat('d F Y'),
            'pekerjaan_2' => $pekerjaan_2->pekerjaan,               
            'alamat_2' => $request->alamat_2,
            'rw_2' => $request->rw_2,
            'rt_2' => $request->rt_2, 

            'nik_3' => $request->nik_3,            
            'nama_3' => $request->nama_3,
            'tempatLahir_3' => $request->tempatLahir_3,    
            'tanggalLahir_3' => Carbon::parse($request->tanggalLahir_3)->translatedFormat('d F Y'),
            'pekerjaan_3' => $pekerjaan_3->pekerjaan,               
            'alamat_3' => $request->alamat_3,
            'rw_3' => $request->rw_3,
            'rt_3' => $request->rt_3,   

            'base64Image' => $base64Image,
            'date' => $currentDate, 
            'year' => $currentYear,
        ]; 
              
        $pdf = PDF::loadView('pages.file-downloads.sptjm-kelahiran-download', $data);
       
        return $pdf->stream('SPTJM_KELAHIRAN_' . $request->nama . '.pdf');
    }   

    public function generatePDF(){
        $path = public_path('assets/img/logo.jpg');
        $base64Image = $this->base64Image($path);
        $data = ['base64Image' => $base64Image,];

        $pdf = PDF::loadView('pages.file-downloads.perpindahan-penduduk-download', $data);
        return $pdf->stream('SP.pdf');

    }
}