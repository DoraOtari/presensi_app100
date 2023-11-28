<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jabatan')->insert([
            'nama_jabatan' => 'Direktur',
            'gaji_jabatan' => '30000000',
            'status' => 'tetap',
        ]);
        DB::table('jabatan')->insert([
            'nama_jabatan' => 'Manager',
            'gaji_jabatan' => '15000000',
            'status' => 'tetap',
        ]);
        DB::table('jabatan')->insert([
            'nama_jabatan' => 'Supervisor',
            'gaji_jabatan' => '8000000',
            'status' => 'tetap',
        ]);
        DB::table('jabatan')->insert([
            'nama_jabatan' => 'Staff',
            'gaji_jabatan' => '700000',
            'status' => 'tetap',
        ]);


    }
}
