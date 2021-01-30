<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pertanyaan;
use Illuminate\Support\Facades\DB;

class PertanyaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pertanyaans = DB::table('pertanyaans')->get();
        // $pertanyaans = Pertanyaan::select('*')->get();
        
        return view('pertanyaan.index', compact('pertanyaans'));
        // return dd($pertanyaans);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pertanyaan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $pertanyaans = $request->all();

        // $judul = $pertanyaans['judul'];
        // $isi = $pertanyaans['isi'];

        // $data = new Pertanyaan;
        // $data->judul = $judul;
        // $data->isi = $isi;
        // $data->tanggal_dibuat = date("Y-m-d");
        // $data->tanggal_diperbaharui = date("Y-m-d");

        // $data->save();

        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
        ]);

        $query = DB::table('pertanyaans')->insert([
            "judul" => $request["judul"],
            "isi" => $request["isi"],
            "tanggal_dibuat" => date("Y-m-d"),
            "tanggal_diperbaharui" => date("Y-m-d")

        ]);

        return redirect('/pertanyaan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($pertanyaan_id)
    {
        $pertanyaan = DB::table('pertanyaans')->where('id', $pertanyaan_id)->first();
        return view('pertanyaan.show', compact('pertanyaan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($pertanyaan_id)
    {
        $pertanyaan = DB::table('pertanyaans')->where('id', $pertanyaan_id)->first();
        return view('pertanyaan.edit', compact('pertanyaan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $pertanyaan_id)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
        ]);

        $query = DB::table('pertanyaans')
            ->where('id', $pertanyaan_id)
            ->update([
            "judul" => $request["judul"],
            "isi" => $request["isi"],
            "tanggal_diperbaharui" => date("Y-m-d")

        ]);

        return redirect('/pertanyaan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($pertanyaan_id)
    {
        $query = DB::table('pertanyaans')->where('id', $pertanyaan_id)->delete();
        return back();
    }
}
