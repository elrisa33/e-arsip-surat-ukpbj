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
        return view('admin.suratmasuk.suratmasuk', compact('suratmasuks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.suratmasuk.createsuratmasuk');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'nomor_urut' => 'required',
                'nomor_berkas' => 'required',
                'alamat_penerima' => 'required',
                'tanggal' => 'required',
                'nomor' => 'required',
                'perihal' => 'required',
                'nomor_petunjuk' => 'required',
                'nomor_paket' => 'required',
            ],
            [
                'nomor_urut.numeric' => 'wajib di isi!!',
                'nomor_berkas.required' => 'wajib di isi!!',
                'alamat_penerima.required' => 'wajib di isi!!',
                'tanggal' => 'wajib di isi!!',
                'nomor.numeric' => 'wajib di isi!!',
                'perihal.required' => 'wajib di isi!!',
                'nomor_petunjuk' => 'wajib di isi!!',
                'nomor_paket' => 'wajib di isi!!d',
            ]
              );
        $suratmasuks = new Suratmasuk();
        $suratmasuks->nomor_urut = $request['nomor_urut'];
        $suratmasuks->nomor_berkas = $request['nomor_berkas'];
        $suratmasuks->alamat_penerima = $request['alamat_penerima'];
        $suratmasuks->tanggal = $request['tanggal'];
        $suratmasuks->nomor = $request['nomor'];
        $suratmasuks->perihal = $request['perihal'];
        $suratmasuks->nomor_petunjuk = $request['nomor_petunjuk'];
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
        return view('admin.suratmasuk.editsuratmasuk', compact('Suratmasuk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'nomor_urut' => 'required',
                'nomor_berkas' => 'required',
                'alamat_penerima' => 'required',
                'tanggal' => 'required',
                'nomor' => 'required',
                'perihal' => 'required',
                'nomor_petunjuk' => 'required',
                'nomor_paket' => 'required',
            ],
            [
                'nomor_urut' => 'wajib di isi!!',
                'nomor_berkas' => 'wajib di isi!!',
                'alamat_penerima' => 'wajib di isi!!',
                'tanggal' => 'wajib di isi!!',
                'nomor' => 'wajib di isi!!',
                'perihal' => 'wajib di isi!!',
                'nomor_petunjuk' => 'wajib di isi!!',
                'nomor_paket' => 'wajib di isi!!d',
            ]
              );
        $suratmasuks = new Suratmasuk();
        $suratmasuks->nomor_urut = $request['nomor_urut'];
        $suratmasuks->nomor_berkas = $request['nomor_berkas'];
        $suratmasuks->alamat_penerima = $request['alamat_penerima'];
        $suratmasuks->tanggal = $request['tanggal'];
        $suratmasuks->nomor = $request['nomor'];
        $suratmasuks->perihal = $request['perihal'];
        $suratmasuks->nomor_petunjuk = $request['nomor_petunjuk'];
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
