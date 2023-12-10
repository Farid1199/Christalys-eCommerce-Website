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
                'name' => 'Sparkling Infinity Stud Earrings',
                'price' => '£25.00',
                'Description' => 'Enhance your elegance with these Sparkling Infinity Stud Earrings crafted from high-quality sterling silver. The timeless design adds a touch of sophistication to any look, making them a versatile accessory for various occasions.',
                'category' => 'Earring',
                'gallery' => 'Images\EarringImg\Sparkling Infinity Stud Earrings.jpg',
            ],
            [
                'name' => 'Sparkling Blue Herbarium Cluster Stud Earrings',
                'price' => '£60.00',
                'Description' => 'Adorn yourself with these Sparkling Blue Herbarium Cluster Stud Earrings, meticulously crafted from sterling silver. The blue herbarium cluster design adds a pop of color and nature-inspired charm to your jewelry collection.',
                'category' => 'Earring',
                'gallery' => 'Images/EarringImg/Sparkling Blue Herbarium Cluster Stud Earrings.jpg',
            ],
            [
                'name' => 'Pandora Timeless Pavé Single-row Bar Stud Earrings',
                'price' => '£55.00',
                'Description' => 'Make a bold statement with these Pandora Timeless Pavé Single-row Bar Stud Earrings, featuring a 14k gold-plated unique metal blend. The pavé design adds a touch of glamour and modern elegance to elevate your style.',
                'category' => 'Earring',
                'gallery' => 'Images\EarringImg\Pandora Timeless Pavé Single-row Bar Stud Earrings.jpg',
            ],
            [
                'name' => 'Sparkling Wave Stud Earrings',
                'price' => '£55.00',
                'Description' => 'Capture the essence of the ocean with these Sparkling Wave Stud Earrings crafted from sterling silver. The wave-inspired design adds a sense of movement and fluidity to your ensemble, perfect for a beach-inspired look.',
                'category' => 'Earring',
                'gallery' => 'Images/EarringImg/Sparkling Wave Stud Earrings.jpg',
            ],
            [
                'name' => 'Pandora Timeless Pavé Double-row Hoop Earrings',
                'price' => '£90.00',
                'Description' => 'Upgrade your style with these Pandora Timeless Pavé Double-row Hoop Earrings featuring a 14k rose gold-plated unique metal blend. The double-row pavé design creates a luxurious and sophisticated look for any occasion.',
                'category' => 'Earring',
                'gallery' => 'Images\EarringImg\Pandora Timeless Pavé Double-row Hoop Earrings.jpg',
            ],
            [
                'name' => 'Square Sparkle Halo Stud Earrings',
                'price' => '£90.00',
                'Description' => 'Add a touch of modern glamour with these Square Sparkle Halo Stud Earrings featuring a 14k rose gold-plated unique metal blend. The square halo design creates a contemporary and chic look, perfect for expressing your unique style.',
                'category' => 'Earring',
                'gallery' => 'Images\EarringImg\Square Sparkle Halo Stud Earrings.jpg',
            ],
            [
                'name' => 'Pandora Nova 14k Gold Lab-grown Diamond Earrings',
                'price' => '£725.00',
                'Description' => 'Indulge in luxury with these Pandora Nova 14k Gold Lab-grown Diamond Earrings. The exquisite design, coupled with lab-grown diamonds, adds a touch of opulence and sophistication to your jewelry collection.',
                'category' => 'Earring',
                'gallery' => 'Images\EarringImg\Pandora Nova 14k Gold Lab-grown Diamond Earrings.jpg',
            ],
            [
                'name' => 'Pandora Era Bezel Sterling Silver Lab-grown Diamond Earrings',
                'price' => '£350.00',
                'Description' => 'Radiate elegance with these Pandora Era Bezel Sterling Silver Lab-grown Diamond Earrings. The bezel setting and lab-grown diamonds create a timeless and classic look, making them a versatile accessory for any outfit.',
                'category' => 'Earring',
                'gallery' => 'Images\EarringImg\Pandora Era Bezel Sterling Silver Lab-grown Diamond Earrings.jpg',
            ],
            [
                'name' => 'Pandora Timeless Pavé Single-row Hoop Earrings',
                'price' => '£115.00',
                'Description' => 'Embrace classic style with these Pandora Timeless Pavé Single-row Hoop Earrings crafted from sterling silver. The pavé detailing adds a touch of sparkle, making them a perfect accessory for both casual and formal occasions.',
                'category' => 'Earring',
                'gallery' => 'Images\EarringImg\Pandora Timeless Pavé Single-row Hoop Earrings.jpg',
            ],
            [
                'name' => 'Sparkling Row Eternity Hoop Earrings',
                'price' => '£100.00',
                'Description' => 'Elevate your look with these Sparkling Row Eternity Hoop Earrings featuring a 14k gold-plated unique metal blend. The eternity hoop design adds a sense of timeless elegance, making them a versatile and sophisticated accessory.',
                'category' => 'Earring',
                'gallery' => 'Images\EarringImg\Sparkling Row Eternity Hoop Earrings.jpg',
            ]
        ]);
        
    }
}
