<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        $dosen=Dosen::all();
        return view('pagess.dosen.dosen',compact('dosen'));
    }
    public function indexx(){
        $dosen=Dosen::all();
        return view('pages.dosen',compact('dosen'));
    }
    public function create(){
        return view('pagess.dosen.create');
    }
    public function store(Request $request){

        $extension = $request->file('image')->getClientOriginalExtension();
        $image = strtotime(date('Y-m-d H:i:s')).'.'.$extension;
        if(env('APP_ENV') == 'local') {
            $destination = base_path('public/images/dosen');
        } else {
            $destination = '/home/pusatani/public_html/images/toko';
        }
        $request->file('image')->move($destination,$image);

        $dosen = Dosen::create([
        'name'=>$request->name,
        'image'=>$image,
        'jabatan'=>$request->jabatan,

    ]);
    return redirect('/dosen');
}
public function destroy($id)
{
    $dosen=Dosen::find($id);

    $dosen->delete();

    return redirect('/dosen');
}
}
