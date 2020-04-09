<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Pelanggan;
use App\Provinsi;
use App\Http\Requests\Admin\pelangganFormRequest;
use Illuminate\Http\Request;
use \Session;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pelanggan = Pelanggan::all();

        return view('pages.admin.pelanggan.index', [
            'pelanggan' => $pelanggan,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provinsi = Provinsi::all();

        return view('pages.admin.pelanggan.create', [
            'provinsi' => $provinsi
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(pelangganFormRequest $request)
    {
        $data = $request->all();

        pelanggan::create($data);

        // Session::flash('message', 'Data berhasil di simpan');

        return redirect()->route('pelanggan.index')->with('success', 'Data berhasil di simpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $provinsi = Provinsi::all();
        $pelanggan = Pelanggan::findOrFail($id);

        return view('pages.admin.pelanggan.edit', [
            'pelanggan' => $pelanggan,
            'provinsi' => $provinsi
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(pelangganFormRequest $request, $id)
    {
        $data = $request->all();
        // dd($data);

        $item = pelanggan::findOrFail($id);

        $item->update($data);

        return redirect()->route('pelanggan.index')->with('success', 'Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Pelanggan::findOrFail($id);
        $item->delete();

        return redirect()->route('pelanggan.index')->with('success', 'Data berhasil di hapus');
    }
}
