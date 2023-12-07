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

            //Necklaces

            [
            'name' => 'Sparkling Blue Herbarium Cluster Pendant Necklace',
            'price' => '£80.00',
            'Description' => 'Sterling Silver',
            'category' => 'Necklace',
            'gallery' => 'Sparkling Blue Herbarium Cluster Pendant Necklace.jpg',
            ],
            [
            'name' => 'Pandora Infinite Sterling Silver Lab-grown Diamond Pendant Necklace',
            'price' => '£350.00',
            'Description' => 'Sterling Silver Lab-Grown Diamond',
            'category' => 'Necklace',
            'gallery' => 'Pandora Infinite Sterling Silver Lab-grown Diamond Pendant Necklace.jpg',
            ],
            [
            'name' => 'Pandora Nova 14k Gold Lab-grown Diamond Pendant Necklace',
            'price' => '£1,490.00',
            'Description' => '14k Gold Lab-Grown Diamond',
            'category' => 'Necklace',
            'gallery' => 'Pandora Nova 14k Gold Lab-grown Diamond Pendant Necklace.jpg',
            ],
            [
            'name' => 'Pandora Timeless Pavé Double-row Bar Collier Necklace',
            'price' => '£125.00',
            'Description' => '14k Rose Gold-Plated Unique Metal Blend',
            'category' => 'Necklace',
            'gallery' => 'Pandora Timeless Pavé Double-row Bar Collier Necklace.jpg',
            ],
            [
            'name' => 'Sparkling Pear Halo Collier Necklace',
            'price' => '£80.00',
            'Description' => 'Sterling Silver',
            'category' => 'Necklace',
            'gallery' => 'Sparkling Pear Halo Collier Necklace.jpg',
            ],
            [
            'name' => 'Sparkling Infinity Collier Necklace',
            'price' => '£115.00',
            'Description' => '14k Gold-Plated Unique Metal Blend',
            'category' => 'Necklace',
            'gallery' => 'Sparkling Infinity Collier Necklace.jpg',
            ],
            [
            'name' => 'Pandora Timeless Pavé Single-row Bar Collier Necklace',
            'price' => '£125.00',
            'Description' => '14k Gold-Plated Unique Metal Blend',
            'category' => 'Necklace',
            'gallery' => 'Pandora Timeless Pavé Single-row Bar Collier Necklace.jpg',
            ],
            [
            'name' => 'Sparkling Round Halo Pendant Collier Necklace',
            'price' => '£125.00',
            'Description' => '14k Gold-Plated Unique Metal Blend',
            'category' => 'Necklace',
            'gallery' => 'Sparkling Round Halo Pendant Collier Necklace.jpg',
            ],
            [
            'name' => 'Round Sparkle Halo Necklace',
            'price' => '£125.00',
            'Description' => '14k Rose Gold-Plated Unique Metal Blend',
            'category' => 'Necklace',
            'gallery' => 'Round Sparkle Halo Necklace.jpg',
            ],
            [
            'name' => 'Pandora Infinite 14k Gold Lab-grown Diamond Pendant Necklace',
            'price' => '£690.00',
            'Description' => '14k Gold Lab-Grown Diamond',
            'category' => 'Necklace',
            'gallery' => 'Pandora Infinite 14k Gold Lab-grown Diamond Pendant Necklace.jpg',
            ],

            //Earrings

            [
            'name' => 'Sparkling Infinity Stud Earrings',
            'price' => '£25.00',
            'Description' => 'Sterling Silver',
            'category' => 'Earring',
            'gallery' => 'Sparkling Infinity Stud Earrings.jpg',
            ],
            [
            'name' => 'Sparkling Blue Herbarium Cluster Stud Earrings',
            'price' => '£60.00',
            'Description' => 'Sterling Silver',
            'category' => 'Earring',
            'gallery' => 'Sparkling Blue Herbarium Cluster Stud Earrings.jpg',
            ],
            [
            'name' => 'Pandora Timeless Pavé Single-row Bar Stud Earrings',
            'price' => '£55.00',
            'Description' => '14k Gold-Plated Unique Metal Blend',
            'category' => 'Earring',
            'gallery' => 'Pandora Timeless Pavé Single-row Bar Stud Earrings.jpg',
            ],
            [
            'name' => 'Sparkling Wave Stud Earrings',
            'price' => '£55.00',
            'Description' => 'Sterling Silver',
            'category' => 'Earring',
            'gallery' => 'Sparkling Wave Stud Earrings.jpg',
            ],
            [
            'name' => 'Pandora Timeless Pavé Double-row Hoop Earrings',
            'price' => '£90.00',
            'Description' => '14k Rose Gold-Plated Unique Metal Blend',
            'category' => 'Earring',
            'gallery' => 'Pandora Timeless Pavé Double-row Hoop Earrings.jpg',
            ],
            [
            'name' => 'Square Sparkle Halo Stud Earrings',
            'price' => '£90.00',
            'Description' => '14k Rose Gold-Plated Unique Metal Blend',
            'category' => 'Earring',
            'gallery' => 'Square Sparkle Halo Stud Earrings.jpg',
            ],
            [
            'name' => 'Pandora Nova 14k Gold Lab-grown Diamond Earrings',
            'price' => '£725.00',
            'Description' => '14k Gold Lab-Grown Diamond',
            'category' => 'Earring',
            'gallery' => 'Pandora Nova 14k Gold Lab-grown Diamond Earrings.jpg',
            ],
            [
            'name' => 'Pandora Era Bezel Sterling Silver Lab-grown Diamond Earrings',
            'price' => '£350.00',
            'Description' => 'Sterling Silver Lab-Grown Diamond',
            'category' => 'Earring',
            'gallery' => 'Pandora Era Bezel Sterling Silver Lab-grown Diamond Earrings.jpg',
            ],
            [
            'name' => 'Pandora Timeless Pavé Single-row Hoop Earrings',
            'price' => '£115.00',
            'Description' => 'Sterling Silver',
            'category' => 'Earring',
            'gallery' => 'Pandora Timeless Pavé Single-row Hoop Earrings.jpg',
            ],
            [
            'name' => 'Sparkling Row Eternity Hoop Earrings',
            'price' => '£100.00',
            'Description' => '14k Gold-Plated Unique Metal Blend',
            'category' => 'Earring',
            'gallery' => 'Sparkling Row Eternity Hoop Earrings.jpg',
            ]
        ]);


       

        
    }
}
