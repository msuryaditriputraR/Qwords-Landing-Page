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
        $menus = ['Cloud Hosting', 'Server', 'Domain', 'Email Suite', 'Services', 'Internet Access'];

        foreach ($menus as $index => $menu) {
            DB::table('menu')->insert([
                'nama_menu' => $menu,
                'urutan' => $index + 1
            ]);
        }
    }
}
