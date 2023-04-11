<?php

namespace App\Http\Controllers;

use App\Models\BiodataModel;
use Illuminate\Http\Request;

class BiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('biodata.index', [
            "bio" => BiodataModel::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('biodata.create', [
            'bio' => BiodataModel::all()

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'Nama' => 'required',
            'NIK' => 'required',
            'No_HP' => 'required',
            'Kelas_Penumpang' => 'required',
            'Tgl_Lahir' => 'required',
            'Tentang_Saya' => 'required',
            'Pendidikan' => 'required',
            'Pengalaman' => 'required',

        ]);



        BiodataModel::create($validatedData);

        return redirect('/biodata')->with('success', 'Biodata berhasil di entry!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BiodataModel  $biodataModel
     * @return \Illuminate\Http\Response
     */
    public function show(BiodataModel $biodataModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BiodataModel  $biodataModel
     * @return \Illuminate\Http\Response
     */
    public function edit(BiodataModel $biodataModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BiodataModel  $biodataModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BiodataModel $biodataModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BiodataModel  $biodataModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(BiodataModel $biodataModel)
    {
        //
    }
}
