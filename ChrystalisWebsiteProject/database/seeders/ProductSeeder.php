<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run()
    {
        //
        // Clear existing data
        
        DB::table('products')->insert([
            [
                'name' => 'Gold Ring',
                'price' => '£300',
                'Description' => '19 Gold current ring, verry highly regarded',
                'category' => 'Ring',
                'gallery' => 'Images\CatalogueImg\gold-rings-.png',
            ],
            [
                'name' => 'Gold Ring',
                'price' => '£400',
                'Description' => '19 Gold current ring',
                'category' => 'Ring',
                'gallery' => 'Images\RingImg\Ring2.webp',
            ],
            [
                'name' => 'Gold Ring',
                'price' => '£350',
                'Description' => '14 Gold current ring',
                'category' => 'Ring',
                'gallery' => 'Images\RingImg\Ring3.jpg',
            ],
            [
            'name' => 'Gold Necklace',
            'price' => '£200',
            'Description' => '19 Gold current Necklace, verry highly regarded',
            'category' => 'Necklace',
            'gallery' => 'Images\CatalogueImg\Neckless1.jpeg',
            ],
            [
            'name' => 'Gold Bracelet',
            'price' => '£250',
            'Description' => '15 current gold bracelet',
            'category' => 'Bracelet',
            'gallery' => 'Images\CatalogueImg\bracelet - 1.webp',
            ],
            [
            'name' => 'Gold Earrings',
            'price' => '£125',
            'Description' => '9 current gold earrings',
            'category' => 'Earring',
            'gallery' => 'Images\CatalogueImg\earrings - 1.jpg',
            ],
            [
                'name' => 'Gold Watch',
                'price' => '£500',
                'Description' => '19 current gold watch',
                'category' => 'Watch',
                'gallery' => 'Images\CatalogueImg\Watch-1.jpg',
            ]
        ]);


       

        
    }
}
