<?php

namespace App\Http\Controllers;

use App\Models\SKK;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SkkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('skk.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
  

    /**
     * Display the specified resource.
     */
    public function status(string $id)
    {
        $SKK = DB::table('klasifikasi_kualifikasi')
                    ->where('id',$id)
                    ->first();


        return view('skk.status',['SKK'=>$SKK]);
    }


    public function lengkap($id)
    {
        DB::table('klasifikasi_kualifikasi')
            ->where('id',$id)
            ->update([
                'status' => 'lengkap'
            ]);
        
        return redirect()->route('skk.status',['id'=>$id]);
    }

    public function belumLengkap($id)
    {
        DB::table('klasifikasi_kualifikasi')
            ->where('id',$id)
            ->update([
                'status' => 'belum lengkap'
            ]);
        
        return redirect()->route('skk.status',['id'=>$id]);
    }


    public function tolak($id)
    {
        DB::table('klasifikasi_kualifikasi')
            ->where('id',$id)
            ->update([
                'status' => 'tolak'
            ]);
        
        return redirect()->route('skk.status',['id'=>$id]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
