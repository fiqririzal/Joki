<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index(){
        $mahasiswa =Mahasiswa::all();
        return view('pagess.mahasiswa.mahasiswa',compact('mahasiswa'));
    }
    public function indexx(){
        $mahasiswa =Mahasiswa::all();
        return view('pages.mahasiswa',compact('mahasiswa'));
    }
    public function create(){
        return view('pagess.mahasiswa.create');
    }
    public function store(Request $request){
        $mahasiswa = Mahasiswa::create([
            'nama'=>$request->nama,
            'nim' =>$request->nim,
            'tgl_lahir'=>$request->tgl_lahir,
            'daerah'=>$request->daerah,
            'moto'=>$request->motto,
        ]);
        return redirect('/mahasiswa');
    }
    public function destroy($id)
    {
        $mahasiswa=Mahasiswa::find($id);

        $mahasiswa->delete();

        return redirect('/mahasiswa');
    }
}
