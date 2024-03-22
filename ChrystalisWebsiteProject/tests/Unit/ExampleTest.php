<?php

namespace Tests\Unit;
namespace Tests\Feature;

use PHPUnit\Framework\TestCase;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Foundation\Testing\RefreshDatabase;


class aa extends TestCase
{
    /**
     * A basic test example.
     * 
     * 

     */

     use RefreshDatabase;
   
    /** @test */
    public function it_can_create_a_product_with_basic_details()
    {
        $product = new Product([
            'name' => 'Test Product',
            'price' => 29.99,
            'category' => 'Test Category',
            'description' => 'This is a test product.',
            'gallery' => 'test/gallery/path',
        ]);

        $this->assertEquals('Test Product', $product->name);
        $this->assertEquals(29.99, $product->price);
        $this->assertEquals('Test Category', $product->category);
        $this->assertEquals('This is a test product.', $product->description);
        $this->assertEquals('test/gallery/path', $product->gallery);
    }
    
}
