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
                'name' => 'TAG HEUER Aquaracer Professional',
                'price' => '£2,700.00',
                'Description' => 'TAG Heuer Aquaracer Professional 200 Solargraph - A solar-powered watch designed for the outdoors, integrating the innovative Solargraph module to harness limitless solar energy.',
                'category' => 'Watch',
                'gallery' => 'Images\WatchImg\TAG.webp',
            ],
            [
                'name' => 'OMEGA De Ville Mens Co-Axial 39.5mm Automatic Watch',
                'price' => '£3,200',
                'Description' => 'OMEGA De Ville Prestige - Showcasing timeless elegance with a 39.5mm stainless steel case and a black leather strap, paying homage to De Ville\'s heritage.',
                'category' => 'Watch',
                'gallery' => 'Images\WatchImg\omega.webp',
            ],
            [
                'name' => 'Conquest 43mm / Automatic',
                'price' => '£1,200',
                'Description' => 'Longines Conquest 43mm L37284769 - A masterpiece of precision and style with an automatic movement, stainless steel case, and sporty design.',
                'category' => 'Watch',
                'gallery' => 'Images\WatchImg\conquestl.avif',
            ],
            [
                'name' => 'HAMILTON Khaki-Navy 40mm Mens Watch',
                'price' => '£790.00',
                'Description' => 'HAMILTON Khaki Navy Scuba - Versatile and stylish, transitioning from summer days at sea to busy days in the office. Three captivating color combinations make it eye-catching and ready for any adventure.',
                'category' => 'Watch',
                'gallery' => 'Images\WatchImg\ham.avif',
            ],
            [
                'name' => 'TISSOT T-Sport 43mm Mens Watch',
                'price' => '£470.00',
                'Description' => 'TISSOT T-Sport 43mm T1164071601100 - Perfect blend of style and functionality, crafted with precision to complement your active lifestyle.',
                'category' => 'Watch',
                'gallery' => 'Images\WatchImg\tissot.avif',
            ],
            [
                'name' => 'LONGINES DolceVita 27.7x43.8mm Mens Watch',
                'price' => '£1,000',
                'Description' => 'LONGINES DolceVita L57574710 - Make a statement with this elegant timepiece, combining style and sophistication for any occasion.',
                'category' => 'Watch',
                'gallery' => 'Images\WatchImg\longines.avif',
            ],
            [
                'name' => 'JUNGHANS Max Bill 38mm Automatic Mens Watch',
                'price' => '£875.00',
                'Description' => 'JUNGHANS Max Bill 38mm - Seamlessly combining precision engineering with minimalist design, reflecting the iconic style of Max Bill.',
                'category' => 'Watch',
                'gallery' => 'Images\WatchImg\JUNGHANS.avif',
            ],
            [
                'name' => 'BREITLING Superocean Heritage B20 Automatic 46 Stainless Steel Watch',
                'price' => '£2,300',
                'Description' => 'BREITLING Superocean Heritage B20 - A robust and stylish timepiece designed for diving enthusiasts, featuring durable stainless steel construction and a 46mm case.',
                'category' => 'Watch',
                'gallery' => 'Images\WatchImg\BREITLING.avif',
            ],
            [
                'name' => 'RADO HyperChrome 44mm Mens Watch',
                'price' => '£2,300',
                'Description' => 'RADO HyperChrome 44mm - A contemporary timepiece blending modern aesthetics with advanced materials and precision engineering, making a distinctive statement on the wrist.',
                'category' => 'Watch',
                'gallery' => 'Images\WatchImg\RADO.avif',
            ],
            [
                'name' => 'TISSOT Gentleman Powermatic 80 Open Heart 40mm Mens Watch Grey',
                'price' => '£760',
                'Description' => 'TISSOT Gentleman Powermatic 80 - A sophisticated timepiece seamlessly blending modern design with precision engineering, a testament to TISSOT\'s commitment to craftsmanship.',
                'category' => 'Watch',
                'gallery' => 'Images\WatchImg\tissotGentleman.webp',
            ],
            

        ]);
        
    }
}
