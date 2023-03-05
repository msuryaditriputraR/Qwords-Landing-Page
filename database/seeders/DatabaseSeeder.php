<?php

namespace Database\Seeders;

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
        $menu = ['Cloud Hosting', 'Server', 'Domain', 'Email Suite', 'Services', 'Internet Access'];

        foreach ($menu as $i => $m) {
            DB::table('menu')->insert([
                'nama_menu' => $m,
                'urutan' => $i + 1
            ]);
        }
    }
}
