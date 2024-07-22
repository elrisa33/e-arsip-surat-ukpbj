<?php

namespace App\Http\Controllers;
use App\Models\Suratkeluar;
use Illuminate\Http\Request;

class SuratkeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $suratkeluars = Suratkeluar::all();
        return view('suratkeluar.suratkeluar', compact('suratkeluars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('suratkeluar.createsuratkeluar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [

                'nomorurut_sk' => 'required',
                'nomorberkas_sk' => 'required',
                'alamat_penerima' => 'required',
                'tanggal_sk' => 'required',
                'perihal_sk' => 'required',
                'nomorpetunjuk_sk' => 'required',
                'nomor_sk' => 'required',
            ],
            [

                'nomorurut_sk.required' => 'wajib di isi!!',
                'nomorberkas_sk.required' => 'wajib di isi!!',
                'alamat_penerima.required' => 'wajib di isi!!',
                'tanggal_sk.date.required' => 'wajib di isi!!',
                'perihal_sk.required' => 'wajib di isi!!',
                'nomorpetunjuk_sk.required' => 'wajib di isi!!',
                'nomor_sk.required' => 'wajib di isi!!d',
            ]
              );
        $suratkeluars = new Suratkeluar();

        $suratkeluars->nomorurut_sk = $request['nomorurut_sk'];
        $suratkeluars->nomorberkas_sk = $request['nomorberkas_sk'];
        $suratkeluars->alamat_penerima = $request['alamat_penerima'];
        $suratkeluars->tanggal_sk = $request['tanggal_sk'];
        $suratkeluars->perihal_sk = $request['perihal_sk'];
        $suratkeluars->nomorpetunjuk_sk = $request['nomorpetunjuk_sk'];
        $suratkeluars->nomor_sk = $request['nomor_sk'];
        $suratkeluars->save();
        return redirect('/suratkeluar')->with('status','Selamat Data Surat Keluar Sudah Di Tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Suratkeluar = Suratkeluar::find($id);
        return view('suratkeluar.updatesuratkeluar', compact('Suratkeluar'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'nomorurut_sk' => 'required',
                'nomorberkas_sk' => 'required',
                'alamat_penerima' => 'required',
                'tanggal_sk' => 'required',
                'perihal_sk' => 'required',
                'nomorpetunjuk_sk' => 'required',
                'nomor_sk' => 'required',
            ],
            [

                'nomorurut_sk.required' => 'wajib di isi!!',
                'nomorberkas_sk.required' => 'wajib di isi!!',
                'alamat_penerima.required' => 'wajib di isi!!',
                'tanggal_sk.date.required' => 'wajib di isi!!',
                'perihal_sk.required' => 'wajib di isi!!',
                'nomorpetunjuk_sk.required' => 'wajib di isi!!',
                'nomor_sk.required' => 'wajib di isi!!d',
            ]
              );
        $suratkeluars = Suratkeluar::find($id);

        $suratkeluars->nomorurut_sk = $request['nomorurut_sk'];
        $suratkeluars->nomorberkas_sk = $request['nomorberkas_sk'];
        $suratkeluars->alamat_penerima = $request['alamat_penerima'];
        $suratkeluars->tanggal_sk = $request['tanggal_sk'];
        $suratkeluars->perihal_sk = $request['perihal_sk'];
        $suratkeluars->nomorpetunjuk_sk = $request['nomorpetunjuk_sk'];
        $suratkeluars->nomor_sk = $request['nomor_sk'];
        $suratkeluars->save();
        return redirect('/suratkeluar')->with('status','Selamat Data Surat Keluar Sudah Di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Suratkeluar::destroy('id', $id);
        return redirect('/suratkeluar');
    }
}
