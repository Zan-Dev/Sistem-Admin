<?php
  
namespace App\Http\Controllers;
   
use Illuminate\Http\Request;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Penduduk;
use App\Models\Pekerjaan;
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
        
        Carbon::setLocale('id');
        $path = public_path('assets/img/logo.jpg');
        $base64Image = $this->base64Image($path);
        $currentYear = Carbon::now()->year;
        $currentDate = Carbon::now()->translatedFormat('d F Y');

        $data = [
            'nik' => $request->nik,
            'nama' => $request->nama,
            'tempatLahir' => $request->tempatLahir,    
            'tanggalLahir' => Carbon::parse($request->tanggalLahir)->translatedFormat('d F Y'),
            'pekerjaan' => $request->pekerjaan,
            'agama' => $request->agama,
            'alamat' => $request->alamat,
            'rw' => $request->rw,
            'rt' => $request->rt,
            'usaha' => $request->usaha,
            'base64Image' => $base64Image,
            'date' => $currentDate, 
            'year' => $currentYear,
        ]; 
              
        $pdf = PDF::loadView('pages.file-downloads.SKU-download', $data);
       
        return $pdf->stream('SKU_' . $request->nama . '.pdf');
    }    

    public function generateSP(Request $request)
    {
        // $penduduk = Penduduk::find($id);            
        
        Carbon::setLocale('id');
        $path = public_path('assets/img/logo.jpg');
        $base64Image = $this->base64Image($path);
        $pekerjaan = Pekerjaan::find($request->pekerjaan);
        $penduduk = Penduduk::where('nik', $request->nik)->first();
        $currentYear = Carbon::now()->year;
        $currentDate = Carbon::now()->translatedFormat('d F Y');

        $data = [
            'nik' => $request->nik,
            'noKK' => $request->noKK,
            'nama' => $request->nama,
            'tempatLahir' => $request->tempatLahir,    
            'tanggalLahir' => Carbon::parse($request->tanggalLahir)->translatedFormat('d F Y'),
            'pekerjaan' => $pekerjaan->pekerjaan,
            'kewarganegaraan' => $penduduk->kewarganegaraan,
            'agama' => $request->agama,
            'alamat' => $request->alamat,
            'rw' => $request->rw,
            'rt' => $request->rt,
            'keperluan' => $request->keperluan,
            'keterangan' => $request->keterangan,
            'base64Image' => $base64Image,
            'date' => $currentDate, 
            'year' => $currentYear,
        ]; 
              
        $pdf = PDF::loadView('pages.file-downloads.surat-pengantar-download', $data);
       
        return $pdf->stream('Surat_Pengantar_' . $request->nama . '.pdf');
    }   

    public function generateSPTJM(Request $request)
    {
        // $penduduk = Penduduk::find($id);            
        
        Carbon::setLocale('id');
        $path = public_path('assets/img/logo.jpg');
        $base64Image = $this->base64Image($path);
        $pekerjaan = Pekerjaan::find($request->pekerjaan);    
        $pekerjaanIstri = Pekerjaan::find($request->pekerjaanIstri);
        $pekerjaanSuami = Pekerjaan::find($request->pekerjaanSuami);
        $currentYear = Carbon::now()->year;
        $currentDate = Carbon::now()->translatedFormat('d F Y');

        $data = [
            'nik' => $request->nik,
            'noKK' => $request->noKK,
            'nama' => $request->nama,
            'tempatLahir' => $request->tempatLahir,    
            'tanggalLahir' => Carbon::parse($request->tanggalLahir)->translatedFormat('d F Y'),
            'pekerjaan' => $pekerjaan->pekerjaan,               
            'alamat' => $request->alamat,
            'rw' => $request->rw,
            'rt' => $request->rt,     

            'nikIstri' => $request->nikIstri,            
            'namaIstri' => $request->namaIstri,
            'tempatLahirIstri' => $request->tempatLahirIstri,    
            'tanggalLahirIstri' => Carbon::parse($request->tanggalLahirIstri)->translatedFormat('d F Y'),
            'pekerjaanIstri' => $pekerjaanIstri->pekerjaan,               
            'alamatIstri' => $request->alamatIstri,
            'rwIstri' => $request->rwIstri,
            'rtIstri' => $request->rtIstri, 

            'nikSuami' => $request->nikSuami,            
            'namaSuami' => $request->namaSuami,
            'tempatLahirSuami' => $request->tempatLahirSuami,    
            'tanggalLahirSuami' => Carbon::parse($request->tanggalLahirSuami)->translatedFormat('d F Y'),
            'pekerjaanSuami' => $pekerjaanSuami->pekerjaan,               
            'alamatSuami' => $request->alamatSuami,
            'rwSuami' => $request->rwSuami,
            'rtSuami' => $request->rtSuami,   

            'base64Image' => $base64Image,
            'date' => $currentDate, 
            'year' => $currentYear,
        ]; 
              
        $pdf = PDF::loadView('pages.file-downloads.sptjm-pasutri-download', $data);
       
        return $pdf->stream('SPTJM_PASUTRI_' . $request->nama . '.pdf');
    }   

    public function generatePDF(){
        $path = public_path('assets/img/logo.jpg');
        $base64Image = $this->base64Image($path);
        $data = ['base64Image' => $base64Image,];

        $pdf = PDF::loadView('pages.file-downloads.sptjm-kelahiran-download', $data);
        return $pdf->stream('SP.pdf');

    }
}