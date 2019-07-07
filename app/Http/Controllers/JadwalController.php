<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal;
use App\Models\Matakuliah;
use App\Models\Dosen;

class JadwalController extends Controller
{
    public function __construct(Jadwal $jadwal, Matakuliah $matakuliah, Dosen $dosen)
    {
        $this->jadwal = $jadwal;
        $this->matakuliah = $matakuliah;
        $this->dosen = $dosen;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.jadwal.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jadwal = new Jadwal();
        // get matakuliah
        $matakuliah = $this->matakuliah->get();
        $matkul = ['' => 'Pilih Matakuliah'];
        foreach ($matakuliah as $mk) {
            $matkul[$mk->id] = $mk->kode_matakuliah.' - '.$mk->nama;
        }
        // get dosen
        $dosen = $this->dosen->get();
        $dos = ['' => 'Pilih Dosen'];
        foreach ($dosen as $dsn) {
            $dos[$dsn->id] = $dsn->nama;
        }
        return view('pages.jadwal.create', compact('jadwal', 'matkul', 'dos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jadwal = new Jadwal();
        $jadwal->kode_jadwal   = $request['kode_jadwal'];
        $jadwal->matakuliah_id = $request['matakuliah_id'];
        $jadwal->dosen_id      = $request['dosen_id'];
        $jadwal->tanggal       = $request['tanggal'];
        $jadwal->jam           = $request['jam'];
        $jadwal->save();

        return redirect(route('jadwal.index'))->with([
            'status' => 'success',
            'msg'    => 'Jadwal has been created'
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
        $jadwal = $this->jadwal->find($id);
        // get matakuliah
        $matakuliah = $this->matakuliah->get();
        $matkul = ['' => 'Pilih Matakuliah'];
        foreach ($matakuliah as $mk) {
            $matkul[$mk->id] = $mk->kode_matakuliah.' - '.$mk->nama;
        }
        // get dosen
        $dosen = $this->dosen->get();
        $dos = ['' => 'Pilih Dosen'];
        foreach ($dosen as $dsn) {
            $dos[$dsn->id] = $dsn->nama;
        }
        return view('pages.jadwal.edit', compact('jadwal', 'matkul', 'dos'));
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
        $jadwal = $this->jadwal->find($id);
        $jadwal->kode_jadwal   = $request['kode_jadwal'];
        $jadwal->matakuliah_id = $request['matakuliah_id'];
        $jadwal->dosen_id      = $request['dosen_id'];
        $jadwal->tanggal       = $request['tanggal'];
        $jadwal->jam           = $request['jam'];
        $jadwal->save();

        return redirect(route('jadwal.index'))->with([
            'status' => 'success',
            'msg'    => 'Jadwal has been updated'
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
        $jadwal = $this->jadwal->find($id);
        $jadwal->delete();
        return redirect()->route('jadwal.index')->with([
            'status' => 'success',
            'msg'    => 'Jadwal has been deleted'
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
                return $this->jadwal->datatables();
                break;
        }
    }
}
