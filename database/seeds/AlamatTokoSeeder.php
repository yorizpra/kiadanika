<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlamatTokoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alamat_toko')->insert([
            'city_id' => '149',
            'detail'  => 'Lohbener'
        ]);
    }
}
