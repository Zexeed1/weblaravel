<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbbeli')->insert([
            'nobukti' => '4141290',
            'tanggal' => '2022-01-21',
            'idpemasok' => '111',
            'harga' => '149000',
            'ket' => 'Proses Sukses',
            'disc' => '10%'
        ]);
    }
}
