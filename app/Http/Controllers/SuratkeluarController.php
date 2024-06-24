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
        return view('admin.suratkeluar.suratkeluar', compact('suratkeluars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.suratkeluar.createsuratkeluar');
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
                'perihal' => 'required',
                'nomor_petunjuk' => 'required',
                'nomor' => 'required',
            ],
            [
                'nomor_urut' => 'wajib di isi!!',
                'nomor_berkas' => 'wajib di isi!!',
                'alamat_penerima' => 'wajib di isi!!',
                'tanggal' => 'wajib di isi!!',
                'perihal' => 'wajib di isi!!',
                'nomor_petunjuk' => 'wajib di isi!!',
                'nomor' => 'wajib di isi!!d',
            ]
              );
        $suratkeluars = new Suratkeluar();
        $suratkeluars->nomor_urut = $request['nomor_urut'];
        $suratkeluars->nomor_berkas = $request['nomor_berkas'];
        $suratkeluars->alamat_penerima = $request['alamat_penerima'];
        $suratkeluars->tanggal = $request['tanggal'];
        $suratkeluars->perihal = $request['perihal'];
        $suratkeluars->nomor_petunjuk = $request['nomor_petunjuk'];
        $suratkeluars->nomor = $request['nomor'];
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
        return view('admin.suratkeluar.editsuratkeluar', compact('Suratkeluar'));
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
                'perihal' => 'required',
                'nomor_petunjuk' => 'required',
                'nomor' => 'required',
            ],
            [
                'nomor_urut' => 'wajib di isi!!',
                'nomor_berkas' => 'wajib di isi!!',
                'alamat_penerima' => 'wajib di isi!!',
                'tanggal' => 'wajib di isi!!',
                'perihal' => 'wajib di isi!!',
                'nomor_petunjuk' => 'wajib di isi!!',
                'nomor' => 'wajib di isi!!d',
            ]
              );
        $suratkeluars = new Suratkeluar();
        $suratkeluars->nomor_urut = $request['nomor_urut'];
        $suratkeluars->nomor_berkas = $request['nomor_berkas'];
        $suratkeluars->alamat_penerima = $request['alamat_penerima'];
        $suratkeluars->tanggal = $request['tanggal'];
        $suratkeluars->perihal = $request['perihal'];
        $suratkeluars->nomor_petunjuk = $request['nomor_petunjuk'];
        $suratkeluars->nomor = $request['nomor'];
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
