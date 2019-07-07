<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ruang;
use App\Models\Matakuliah;

class RuangController extends Controller
{
    public function __construct(Ruang $ruang, Matakuliah $matakuliah)
    {
        $this->ruang = $ruang;
        $this->matakuliah = $matakuliah;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.ruang.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ruang = new Ruang();
        $matakuliah = $this->matakuliah->get();
        $matkul = ['' => 'Pilih Matakuliah'];
        foreach ($matakuliah as $mk) {
            $matkul[$mk->id] = $mk->kode_matakuliah.' - '.$mk->nama;
        }
        return view('pages.ruang.create', compact('ruang', 'matkul'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ruang = new Ruang();
        $ruang->kode_ruang    = $request['kode_ruang'];
        $ruang->matakuliah_id = $request['matakuliah_id'];
        $ruang->nama          = $request['nama'];
        $ruang->jadwal        = $request['jadwal'];
        $ruang->save();

        return redirect(route('ruang.index'))->with([
            'status' => 'success',
            'msg'    => 'Ruangan has been created'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ruang = $this->ruang->find($id);
        $matakuliah = $this->matakuliah->get();
        $matkul = ['' => 'Pilih Matakuliah'];
        foreach ($matakuliah as $mk) {
            $matkul[$mk->id] = $mk->kode_matakuliah.' - '.$mk->nama;
        }
        return view('pages.ruang.edit', compact('ruang', 'matkul'));
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
        $ruang = $this->ruang->find($id);
        $ruang->kode_ruang    = $request['kode_ruang'];
        $ruang->matakuliah_id = $request['matakuliah_id'];
        $ruang->nama          = $request['nama'];
        $ruang->jadwal         = $request['jadwal'];
        $ruang->save();

        return redirect(route('ruang.index'))->with([
            'status' => 'success',
            'msg'    => 'Ruangan has been updated'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ruang = $this->ruang->find($id);
        $ruang->delete();
        return redirect()->route('ruang.index')->with([
            'status' => 'success',
            'msg'    => 'Ruangan has been deleted'
        ]);
    }

    /**
     * Ajax Request
     * @param  Request $request
     * @return \Illuminate\Http\Response
     */
    public function ajax(Request $request)
    {
        switch ($request->mode) {
            case 'datatable':
                return $this->ruang->datatables();
                break;
        }
    }
}
