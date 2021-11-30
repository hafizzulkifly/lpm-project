<?php

namespace App\Http\Controllers\Ejen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Permohonan;
use DB;

class PermohonanController extends Controller
{
    public function index()
    {
        //list all authenticate ppermohonan
        $permohonan = Permohonan::all(); 
        return view('ejen.permohonan.index', compact('permohonan'));
    }


    public function create()
    {
        //list all authenticate ppermohonan
        return view('ejen.permohonan.create');
    }


    public function store(Request $request)
    {
        //list all authenticate ppermohonan
        
       // $data = $request->all();
       // $permohonan = Permohonan::create($data);
       $permohonan = new Permohonan();
       $permohonan->tajuk = $request->tajuk;
       $permohonan->tarikh = $request->tarikh;
       $permohonan->user_id = auth()->user()->id;
       $permohonan->save();
        return redirect()->route('ejen.index');
    }
}
