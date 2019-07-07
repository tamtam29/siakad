<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Yajra\Datatables\Datatables;
use DB;

class Jadwal extends Model
{
    protected $table = 'jadwal';

    /**
     * Get Datatables Data
     * @return Json Array
     */
    public function datatables()
    {
        $model = DB::table('jadwal')
		->select(
            'jadwal.*',
            'dosen.nama AS dosen',
            DB::raw('CONCAT(matakuliah.kode_matakuliah, " - ", matakuliah.nama) AS kode_matakuliah'),
            DB::raw('CONCAT(ruang.kode_ruang, " - ", ruang.nama) AS kode_ruang'))
        ->join('matakuliah', 'jadwal.matakuliah_id', '=', 'matakuliah.id')
        ->join('dosen', 'jadwal.dosen_id', '=', 'dosen.id')
        ->join('ruang', 'matakuliah.id', '=', 'ruang.matakuliah_id')
        ->get();
        return Datatables::of($model)
                ->addColumn('action', function ($data) {
                    $html = '';
                    $html = '<div class="button-demo">
                        <a href="'.url('jadwal/'.$data->id).'/edit" type="button" class="btn btn-info waves-effect">Edit</a>
                        <a href="#" type="button" data-url="'.url('jadwal/'.$data->id).'" class="btn btn-danger waves-effect delete-data">Delete</a>
                    </div>';

                    return $html;
                })
                ->editColumn('created_at', function ($data) {
                    return date('d M Y H:i', strtotime($data->created_at));
                })
                ->editColumn('updated_at', function ($data) {
                    return date('d M Y H:i', strtotime($data->updated_at));
                })
                ->rawColumns(['action', 'option'])
                ->make(true);
    }
}
