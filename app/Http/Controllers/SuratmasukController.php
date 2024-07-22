<?php

namespace App\Http\Controllers;
use App\Models\Suratmasuk;
use Illuminate\Http\Request;

class SuratmasukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $suratmasuks = Suratmasuk::all();
        return view('suratmasuk.suratmasuk', compact('suratmasuks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('suratmasuk.createsuratmasuk');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [

                'nomorberkas_sm' => 'required',
                'alamat_pengirim' => 'required',
                'tanggal_sm' => 'required',
                'nomor_sm' => 'required',
                'perihal_sm' => 'required',
                'nomorpetunjuk_sm' => 'required',
                'nomor_paket' => 'required',
            ],
            [

                'nomorberkas_sm.required' => 'wajib di isi!!',
                'alamat_pengirim.required' => 'wajib di isi!!',
                'tanggal_sm.date.required' => 'wajib di isi!!',
                'nomor_sm.numeric.required' => 'wajib di isi!!',
                'perihal_sm.required' => 'wajib di isi!!',
                'nomorpetunjuk_sm.required' => 'wajib di isi!!',
                'nomor_paket.required' => 'wajib di isi!!d',
            ]
              );
        $suratmasuks = new Suratmasuk();

        $suratmasuks->nomorberkas_sm = $request['nomorberkas_sm'];
        $suratmasuks->alamat_pengirim = $request['alamat_pengirim'];
        $suratmasuks->tanggal_sm = $request['tanggal_sm'];
        $suratmasuks->nomor_sm = $request['nomor_sm'];
        $suratmasuks->perihal_sm = $request['perihal_sm'];
        $suratmasuks->nomorpetunjuk_sm = $request['nomorpetunjuk_sm'];
        $suratmasuks->nomor_paket = $request['nomor_paket'];
        $suratmasuks->save();
        return redirect('/suratmasuk')->with('status','Selamat Data Surat Masuk Sudah Di Tambahkan');
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
        $Suratmasuk = Suratmasuk::find($id);
        return view('suratmasuk.updatesuratmasuk', compact('Suratmasuk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [


                'nomorberkas_sm' => 'required',
                'alamat_pengirim' => 'required',
                'tanggal_sm' => 'required',
                'nomor_sm' => 'required',
                'perihal_sm' => 'required',
                'nomorpetunjuk_sm' => 'required',
                'nomor_paket' => 'required',
            ],
            [

                'nomorberkas_sm.required' => 'wajib di isi!!',
                'alamat_pengirim.required' => 'wajib di isi!!',
                'tanggal_sm.date.required' => 'wajib di isi!!',
                'nomor_sm.numeric.required' => 'wajib di isi!!',
                'perihal_sm.required' => 'wajib di isi!!',
                'nomorpetunjuk_sm.required' => 'wajib di isi!!',
                'nomor_paket.required' => 'wajib di isi!!d',
            ]
              );
        $suratmasuks = Suratmasuk::find($id);

        $suratmasuks->nomorberkas_sm = $request['nomorberkas_sm'];
        $suratmasuks->alamat_pengirim = $request['alamat_pengirim'];
        $suratmasuks->tanggal_sm = $request['tanggal_sm'];
        $suratmasuks->nomor_sm = $request['nomor_sm'];
        $suratmasuks->perihal_sm = $request['perihal_sm'];
        $suratmasuks->nomorpetunjuk_sm = $request['nomorpetunjuk_sm'];
        $suratmasuks->nomor_paket = $request['nomor_paket'];
        $suratmasuks->save();
        return redirect('/suratmasuk')->with('status','Selamat Data Surat Masuk Sudah Di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Suratmasuk::destroy('id', $id);
        return redirect('/suratmasuk');
    }
}
