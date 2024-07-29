<?php
  
namespace App\Http\Controllers;
   
use Illuminate\Http\Request;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Penduduk;
use Carbon\Carbon;

    
class PdfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatePDF(Request $request)
    {
        // $penduduk = Penduduk::find($id);        
    
        // Path ke gambar yang akan diubah menjadi base64
        $path = public_path('assets/img/logo.jpg');
        $base64Image = $this->base64Image($path);
        $currentYear = Carbon::now()->year;

        $data = [
            'nik' => $request->nik,
            'nama' => $request->nama,
            'tempatLahir' => $request->tempatLahir,    
            'tanggalLahir' => $request->tanggalLahir,
            'pekerjaan' => $request->pekerjaan,
            'agama' => $request->agama,
            'alamat' => $request->alamat,
            'rw' => $request->rw,
            'rt' => $request->rt,
            'usaha' => $request->usaha,
            'base64Image' => $base64Image,
            'date' => now(), 
            'year' => $currentYear,
        ]; 
              
        $pdf = PDF::loadView('pages.file-downloads.SKU-download', $data);
       
        return $pdf->stream('SKU.pdf');
    }

    /**
     * Convert image to base64
     */
    private function base64Image($path)
    {
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        return 'data:image/' . $type . ';base64,' . base64_encode($data);
    }
}