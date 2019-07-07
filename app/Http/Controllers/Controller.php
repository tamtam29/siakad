<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function custom_message_validation()
    {
        $messages = [
            'nama.required' => 'Nama tidak boleh kosong.',
            'nim.required' => 'NIM tidak boleh kosong.',
            'nik.required' => 'NIK tidak boleh kosong.',
            'kode_matakuliah.required' => 'Kode Matakuliah tidak boleh kosong.',
            'kode_ruang.required' => 'Kode Ruang tidak boleh kosong.',
            'kode_jadwal.required' => 'Kode Jadwal tidak boleh kosong',
            'dosen_id.required' => 'Dosen tidak boleh kosong',
            'matakuliah_id.required' => 'Matakuliah tidak boleh kosong',
        ];

        return $messages;
    }
}
