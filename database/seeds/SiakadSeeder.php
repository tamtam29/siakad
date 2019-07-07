<?php

use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;
use App\Models\Dosen;
use App\Models\Matakuliah;
use App\Models\Ruang;
use App\Models\Jadwal;

class SiakadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mahsiswa = [
            [
                'nim' => '192.168.0.1',
                'nama' => 'Wijayanto',
                'alamat' => 'Malang',
                'pin' => mt_rand(111111, 999999),
                'password' => bin2hex(random_bytes(10)),
                'foto' => 'default.jpg'
            ],
            [
                'nim' => '192.168.0.2',
                'nama' => 'Anditia Putra Utama',
                'alamat' => 'Probolinggo',
                'pin' => mt_rand(111111, 999999),
                'password' => bin2hex(random_bytes(10)),
                'foto' => 'default.jpg'
            ],
            [
                'nim' => '192.168.0.3',
                'nama' => 'Jon',
                'alamat' => 'Surabaya',
                'pin' => mt_rand(111111, 999999),
                'password' => bin2hex(random_bytes(10)),
                'foto' => 'default.jpg'
            ],
            [
                'nim' => '192.168.0.4',
                'nama' => 'Cristiano Ronaldo',
                'alamat' => 'Malang',
                'pin' => mt_rand(111111, 999999),
                'password' => bin2hex(random_bytes(10)),
                'foto' => 'default.jpg'
            ],
            [
                'nim' => '192.168.0.5',
                'nama' => 'Lionel Messi',
                'alamat' => 'Malang',
                'pin' => mt_rand(111111, 999999),
                'password' => bin2hex(random_bytes(10)),
                'foto' => 'default.jpg'
            ]
        ];

        foreach ($mahsiswa as $mhs) {
            Mahasiswa::create($mhs);
        }     
        
        $dosen = [
            [
                'nik' => '127.0.0.1',
                'nama' => 'Dosen Wijayanto',
                'alamat' => 'Malang',
                'pin' => mt_rand(111111, 999999),
                'password' => bin2hex(random_bytes(10)),
                'foto' => 'default.jpg'
            ],
            [
                'nik' => '127.0.0.2',
                'nama' => 'Dosen Anditia Putra Utama',
                'alamat' => 'Probolinggo',
                'pin' => mt_rand(111111, 999999),
                'password' => bin2hex(random_bytes(10)),
                'foto' => 'default.jpg'
            ],
            [
                'nik' => '127.0.0.3',
                'nama' => 'Dosen Jon',
                'alamat' => 'Surabaya',
                'pin' => mt_rand(111111, 999999),
                'password' => bin2hex(random_bytes(10)),
                'foto' => 'default.jpg'
            ],
            [
                'nik' => '127.0.0.4',
                'nama' => 'Dosen Cristiano Ronaldo',
                'alamat' => 'Malang',
                'pin' => mt_rand(111111, 999999),
                'password' => bin2hex(random_bytes(10)),
                'foto' => 'default.jpg'
            ],
            [
                'nik' => '127.0.0.5',
                'nama' => 'Dosen Lionel Messi',
                'alamat' => 'Malang',
                'pin' => mt_rand(111111, 999999),
                'password' => bin2hex(random_bytes(10)),
                'foto' => 'default.jpg'
            ]
        ];

        foreach ($dosen as $ds) {
            Dosen::create($ds);
        }

        $matakuliah = [
            [
                'kode_matakuliah' => 'MK0001',
                'nama' => 'Kalkulus',
                'sks' => 4,
                'semester' => 'Ganjil'
            ],
            [
                'kode_matakuliah' => 'MK0002',
                'nama' => 'Fisika',
                'sks' => 2,
                'semester' => 'Genap'
            ],
            [
                'kode_matakuliah' => 'MK0003',
                'nama' => 'Kimia',
                'sks' => 4,
                'semester' => 'Genap'
            ],
            [
                'kode_matakuliah' => 'MK0004',
                'nama' => 'Sejarah',
                'sks' => 3,
                'semester' => 'Ganjil'
            ],
            [
                'kode_matakuliah' => 'MK0005',
                'nama' => 'PPKN',
                'sks' => 4,
                'semester' => 'Ganjil'
            ]
        ];

        foreach ($matakuliah as $mk) {
            Matakuliah::create($mk);
        }

        $ruangan = [
            [
                'kode_ruang' => 'RA0001',
                'matakuliah_id' => 1,
                'nama' => 'Ruang A1'
            ],
            [
                'kode_ruang' => 'RA0002',
                'matakuliah_id' => 2,
                'nama' => 'Ruang A2'
            ],
            [
                'kode_ruang' => 'RA0003',
                'matakuliah_id' => 3,
                'nama' => 'Ruang A3'
            ],
            [
                'kode_ruang' => 'RA0004',
                'matakuliah_id' => 4,
                'nama' => 'Ruang A4'
            ],
            [
                'kode_ruang' => 'RA0005',
                'matakuliah_id' => 5,
                'nama' => 'Ruang A5'
            ]
        ];

        foreach ($ruangan as $ruang) {
            Ruang::create($ruang);
        }

        $jadwal = [
            [
                'kode_jadwal' => 'KJ0001',
                'matakuliah_id' => 1,
                'dosen_id' => 1,
                'tanggal' => '2021/07/14',
                'jam' => '10:00 AM'
            ],
            [
                'kode_jadwal' => 'KJ0002',
                'matakuliah_id' => 2,
                'dosen_id' => 2,
                'tanggal' => '2021/07/14',
                'jam' => '10:00 AM'
            ],
            [
                'kode_jadwal' => 'KJ0003',
                'matakuliah_id' => 3,
                'dosen_id' => 3,
                'tanggal' => '2021/07/14',
                'jam' => '10:00 AM'
            ],
            [
                'kode_jadwal' => 'KJ0004',
                'matakuliah_id' => 4,
                'dosen_id' => 4,
                'tanggal' => '2021/07/14',
                'jam' => '10:00 AM'
            ],
            [
                'kode_jadwal' => 'KJ0005',
                'matakuliah_id' => 5,
                'dosen_id' => 5,
                'tanggal' => '2021/07/14',
                'jam' => '10:00 AM'
            ],
        ];

        foreach ($jadwal as $j) {
            Jadwal::create($j);
        }
    }
}
