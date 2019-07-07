<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Yajra\Datatables\Datatables;
use DB;

class Dosen extends Model
{
    protected $table = 'dosen';

    /**
     * Get Datatables Data
     * @return Json Array
     */
    public function datatables()
    {
        $model = Self::select('*', DB::RAW('CASE jk WHEN 1 THEN "Laki - laki" ELSE "Perempuan" END AS jenis_kelamin'))->get();
        return Datatables::of($model)
                ->addColumn('action', function ($data) {
                    $html = '';
                    $html = '<div class="button-demo">
                        <a href="'.url('dosen/'.$data->id).'/edit" type="button" class="btn btn-info waves-effect">Edit</a>
                        <a href="#" type="button" data-url="'.url('dosen/'.$data->id).'" class="btn btn-danger waves-effect delete-data">Delete</a>
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
