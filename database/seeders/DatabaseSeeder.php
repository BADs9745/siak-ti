<?php

namespace Database\Seeders;

use App\Models\Dosen;
use App\Models\Jabatan;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Mahasiswa;
use App\Models\Matakuliah;
use App\Models\Prodi;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        Prodi::create([
            'nama' => 'Manajemen Informatika',
        ]);
        Prodi::create([
            'nama' => 'Teknik Komputer',
        ]);
        Prodi::create([
            'nama' => 'TRPL',
        ]);

        Mahasiswa::factory(20)->create();



        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'admin' => true,
        ]);

        Matakuliah::factory(10)->create();
        Jabatan::create([
            'kode_jabatan' => '001',
            'nama_jabatan' => 'lektor',
            'keterangan' => 'lektor'
        ]);
        Jabatan::create([
            'kode_jabatan' => '002',
            'nama_jabatan' => 'dosen',
            'keterangan' => 'dosen'
        ]);

        Jabatan::create([
            'kode_jabatan' => '003',
            'nama_jabatan' => 'pengawas',
            'keterangan' => 'pengawas'
        ]);
        Dosen::factory(20)->create();
    }
}
