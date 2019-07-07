<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Yajra\Datatables\Datatables;
use DB;

class Ruang extends Model
{
    protected $table = 'ruang';

    /**
     * Get Datatables Data
     * @return Json Array
     */
    public function datatables()
    {
        $model = DB::table('ruang')
		->select(
			'ruang.*',
            DB::raw('CONCAT(matakuliah.kode_matakuliah, " - ", matakuliah.nama) AS kode_matakuliah'))
        ->join('matakuliah', 'ruang.matakuliah_id', '=', 'matakuliah.id')
        ->get();
        return Datatables::of($model)
                ->addColumn('action', function ($data) {
                    $html = '';
                    $html = '<div class="button-demo">
                        <a href="'.url('ruang/'.$data->id).'/edit" type="button" class="btn btn-info waves-effect">Edit</a>
                        <a href="#" type="button" data-url="'.url('ruang/'.$data->id).'" class="btn btn-danger waves-effect delete-data">Delete</a>
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
