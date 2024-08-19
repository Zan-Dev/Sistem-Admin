<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use thiagoalessio\TesseractOCR\TesseractOCR;
use Exception;

class DocumentController extends Controller
{
    public function read(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:jpg,png,jpeg,pdf|max:2048',
        ]);

        $file = $request->file('file');
        $fileName = uniqid() . '_' . time() . '_' . str_replace(array('!', "@", '#', '$', '%', '^', '&', ' ', '*', '(', ')', ':', ';', ',', '?', '/' . '\\', '~', '`', '-'), '_', strtolower($file->getClientOriginalName()));

        $file->move(public_path('uploads'), $fileName);

        try {
            $fileRead = (new TesseractOCR(public_path('uploads/' . $fileName)))
                ->setLanguage('eng')
                ->run();

            return redirect()->route('document.view')->with('fileRead', $fileRead);

        } catch (Exception $e) {
            return redirect()->route('document.view')->with('error', $e->getMessage());
        }
    }
}
