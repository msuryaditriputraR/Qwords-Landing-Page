<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DomainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $domains = ['id', 'com', 'dev', 'gov', 'lang', 'net', 'pizza', 'edu', 'xyz', 'io', 'it'];

        foreach ($domains as $domain) {
            DB::table('domain')->insert([
                'nama_domain' => $domain
            ]);
        }
    }
}
