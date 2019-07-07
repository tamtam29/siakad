<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matakuliah;
use Validator;
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
        $messages  = $this->custom_message_validation();
        $validator = Validator::make($request->all(), [
            'kode_matakuliah' => 'required',
            'nama' => 'required',
        ], $messages);

        if (!$validator->fails()) {

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
        } else {
            return redirect()->back()
                ->withErrors($validator->errors())
                ->withInput();
        }
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
        $messages  = $this->custom_message_validation();
        $validator = Validator::make($request->all(), [
            'kode_matakuliah' => 'required',
            'nama' => 'required',
        ], $messages);

        if (!$validator->fails()) {

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
        } else {
            return redirect()->back()
                ->withErrors($validator->errors())
                ->withInput();
        }
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
