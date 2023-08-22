<?php

namespace App\Http\Controllers;

use App\Models\FileManager;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FileManagerController extends Controller
{
    public function store(Request $request)
    {
        // dd($request->all());
        // if ($request->hasFile('image')) {
        //     $file = $request->file('image');
        //     $file_extension = $file->getClientOriginalExtension();
        //     $lokasiFile = public_path() . '/' . 'berita';
        //     $this->fotoFile = 'foto-berita-' . $request->name . Str::random(5) . '.' . $file_extension;
        //     $request->file('image')->move($lokasiFile, $this->fotoFile);
        //     $fotoFile = $this->fotoFile;
        // }
        FileManager::create([
            'image' => $request->image
        ]);
        return back();
    }

    public function index(Request $request)
    {
        $file = FileManager::get();
        return view('filemanager', compact('file'));
    }
}
