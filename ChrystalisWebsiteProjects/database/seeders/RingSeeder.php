<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        DB::table('rings')->insert([
            [
            'name' => 'Gold Ring',
            'price' => '£200',
            'Description' => '19 Gold current ring',
            'category' => 'Ring',
            'gallery' => 'Images\CatalogueImg\gold-rings-.png',
            ],
            [
            'name' => 'Silver Ring',
            'price' => '£100',
            'Description' => '19 Silver current ring',
            'category' => 'Ring',
            'gallery' => 'Images\RingImg\Ring2.webp',
            ],
            [
            'name' => 'Bronze Ring',
            'price' => '£50',
            'Description' => '19 Bronze current ring',
            'category' => 'Ring',
            'gallery' => 'Images\RingImg\Ring3.jpg',
            ]
        ]);
    }
}
