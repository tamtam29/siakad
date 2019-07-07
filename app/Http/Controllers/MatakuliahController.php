<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matakuliah;

class MatakuliahController extends Controller
{
    public function __construct(Matakuliah $matakuliah)
    {
        $this->matakuliah = $matakuliah;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.matakuliah.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $matakuliah = new Matakuliah();
        return view('pages.matakuliah.create', compact('matakuliah'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $matakuliah = new Matakuliah();
        $matakuliah->kode_matakuliah    = $request['kode_matakuliah'];
        $matakuliah->nama               = $request['nama'];
        $matakuliah->sks                = $request['sks'];
        $matakuliah->semester           = $request['semester'];
        $matakuliah->save();

        return redirect(route('matakuliah.index'))->with([
            'status' => 'success',
            'msg'    => 'Matakuliah has been created'
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
        $matakuliah = $this->matakuliah->find($id);
        return view('pages.matakuliah.edit', compact('matakuliah'));
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
        $matakuliah = $this->matakuliah->find($id);
        $matakuliah->kode_matakuliah    = $request['kode_matakuliah'];
        $matakuliah->nama               = $request['nama'];
        $matakuliah->sks                = $request['sks'];
        $matakuliah->semester           = $request['semester'];
        $matakuliah->save();

        return redirect(route('matakuliah.index'))->with([
            'status' => 'success',
            'msg'    => 'Matakuliah has been updated'
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
        $matakuliah = $this->matakuliah->find($id);
        $matakuliah->delete();
        return redirect()->route('matakuliah.index')->with([
            'status' => 'success',
            'msg'    => 'Matakuliah has been deleted'
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
                return $this->matakuliah->datatables();
                break;
        }
    }
}
