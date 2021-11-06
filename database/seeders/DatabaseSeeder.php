<?php

namespace Database\Seeders;

use App\Models\Barang;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('gudangs')->insert([
            'nama' => 'Gudang Permen',
            'alamat' => 'Jl.Jonggol No.5',
            'kapasitas' => '24000',
        ]);

        DB::table('gudangs')->insert([
            'nama' => 'Gudang Mobil',
            'alamat' => 'Jl.Jonggol No.19',
            'kapasitas' => '10000',
        ]);
        Barang::factory(40)->create();
    }
}
