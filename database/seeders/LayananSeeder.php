<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $layanans = [['nama_layanan' => 'VCH1', 'desc' => "Value Cloud Hosting", 'harga' => 'Rp 14.500', 'harga-full' => 'Rp 24.500', 'disk' => "3 GB", 'bandwidth' => 'Unlimited', 'core' => '0.5 Core', 'addon' => 'No'], ['nama_layanan' => 'Signature', 'desc' => "Unlimited Hosting", 'harga' => "Rp 89.900", 'harga-full' => "Rp 109.000", 'disk' => "Unlimited", 'bandwidth' => 'Unlimited', 'core' => '1 Core', 'addon' => '5 / 5'], ['nama_layanan' => 'HPCH Bisnis 1', 'desc' => 'High Performance', 'harga' => 'Rp 79.000', 'harga-full' => 'Rp 90.000', 'disk' => '3 GB', 'bandwidth' => 'Unlimited', 'core' => '1 Core', 'addon' => '-'], ['nama_layanan' => 'VPS SC1', 'desc' => 'Cloud VPS KVM SSD', 'harga' => 'Rp 75.000', 'harga-full' => "Rp 135.000", 'disk' => '25 GB', 'bandwidth' => 'Unlimited', 'core' => '1 Core', 'addon' => 'Unlimited']];

        DB::table('layanan')->insert($layanans);
    }
}
