<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;

class DosenController extends Controller
{
    public function __construct(Dosen $dosen)
    {
        $this->dosen = $dosen;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.dosen.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dosen = new Dosen();
        $dosen->jk = 1;
        return view('pages.dosen.create', compact('dosen'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dosen = new Dosen();
        $dosen->nik         = $request['nik'];
        $dosen->nama        = $request['nama'];
        $dosen->alamat      = $request['alamat'];
        $dosen->jk          = $request['jk'];
        $dosen->pin         = $request['pin'];
        $dosen->password    = $request['password'];
        $dosen->foto        = 'default.jpg';
        $dosen->save();

        return redirect(route('dosen.index'))->with([
            'status' => 'success',
            'msg'    => 'Dosen has been created'
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
        $dosen = $this->dosen->find($id);
        return view('pages.dosen.edit', compact('dosen'));
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
        $dosen = $this->dosen->find($id);
        $dosen->nik         = $request['nik'];
        $dosen->nama        = $request['nama'];
        $dosen->alamat      = $request['alamat'];
        $dosen->jk          = $request['jk'];
        $dosen->pin         = $request['pin'];
        $dosen->password    = $request['password'];
        $dosen->save();

        return redirect(route('dosen.index'))->with([
            'status' => 'success',
            'msg'    => 'Dosen has been updated'
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
        $dosen = $this->dosen->find($id);
        $dosen->delete();
        return redirect()->route('dosen.index')->with([
            'status' => 'success',
            'msg'    => 'Dosen has been deleted'
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
                return $this->dosen->datatables();
                break;
        }
    }
}
