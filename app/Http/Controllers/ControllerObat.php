<?php

namespace App\Http\Controllers;

use App\Obat;
use Illuminate\Http\Request;

class ControllerObat extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $obats = Obat::all();
        return view('obat', ['obats' => $obats, 'layout' => 'index']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $obats = Obat::all();
        return view('obat', ['obats' => $obats, 'layout' => 'create']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!is_null($request->foto)) {

            $this->validate($request, [
                'foto' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            ]);


            $foto = $request->file('foto');

            $nama_foto = time() . "_" . $foto->getClientOriginalName();

            $tujuan_upload = 'image';
            $foto->move($tujuan_upload, $nama_foto);
        } else {
            $nama_foto = ' ';
        }

        $obat = new Obat();
        $obat->noproduksi = $request->input('noproduksi');
        $obat->foto = $nama_foto;
        $obat->namaobat = $request->input('namaobat');
        $obat->exp = $request->input('exp');
        $obat->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $obat = Obat::find($id);
        $obats = Obat::all();
        return view('obat', ['obats' => $obats, 'obat' => $obat, 'layout' => 'show']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $obat = Obat::find($id);
        $obats = Obat::all();
        return view('obat', ['obats' => $obats, 'obat' => $obat, 'layout' => 'edit']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (!is_null($request->foto)) {

            $this->validate($request, [
                'foto' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            ]);

            // menyimpan data file yang diupload ke variabel $file
            $foto = $request->file('foto');

            $nama_foto = time() . "_" . $foto->getClientOriginalName();

            // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'image';
            $foto->move($tujuan_upload, $nama_foto);
        } else {
            $nama_foto = " ";
        }


        $obat = Obat::find($id);
        $obat->noproduksi = $request->input('noproduksi');
        if ($nama_foto != " ") {
            $obat->foto = $nama_foto;
        }
        $obat->namaobat = $request->input('namaobat');
        $obat->exp = $request->input('exp');
        $obat->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obat = Obat::find($id);
        $obat->delete();
        return redirect('/');
    }
}
