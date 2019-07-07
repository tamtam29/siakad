<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function __construct(Mahasiswa $mahasiswa)
    {
        $this->mahasiswa = $mahasiswa;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.mahasiswa.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mahasiswa = new Mahasiswa();
        $mahasiswa->jk = 1;
        return view('pages.mahasiswa.create', compact('mahasiswa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mahasiswa = new Mahasiswa();
        $mahasiswa->nim         = $request['nim'];
        $mahasiswa->nama        = $request['nama'];
        $mahasiswa->alamat      = $request['alamat'];
        $mahasiswa->jk          = $request['jk'];
        $mahasiswa->pin         = $request['pin'];
        $mahasiswa->password    = $request['password'];
        $mahasiswa->foto        = 'default.jpg';
        $mahasiswa->save();

        return redirect(route('mahasiswa.index'))->with([
            'status' => 'success',
            'msg'    => 'Mahasiswa has been created'
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
        $mahasiswa = $this->mahasiswa->find($id);
        return view('pages.mahasiswa.edit', compact('mahasiswa'));
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
        $mahasiswa = $this->mahasiswa->find($id);
        $mahasiswa->nim         = $request['nim'];
        $mahasiswa->nama        = $request['nama'];
        $mahasiswa->alamat      = $request['alamat'];
        $mahasiswa->jk          = $request['jk'];
        $mahasiswa->pin         = $request['pin'];
        $mahasiswa->password    = $request['password'];
        $mahasiswa->save();

        return redirect(route('mahasiswa.index'))->with([
            'status' => 'success',
            'msg'    => 'Mahasiswa has been updated'
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
        $mahasiswa = $this->mahasiswa->find($id);
        $mahasiswa->delete();
        return redirect()->route('mahasiswa.index')->with([
            'status' => 'success',
            'msg'    => 'Mahasiswa has been deleted'
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
                return $this->mahasiswa->datatables();
                break;
        }
    }
}
