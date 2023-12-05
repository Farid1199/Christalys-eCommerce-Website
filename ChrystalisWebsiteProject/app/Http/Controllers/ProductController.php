<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Controllers;

class ProductController extends Controller
{



    public function index()
    {
        //
        $data= Product::all();
        return view('ring', ['products' =>$data]);
    
    }


    function detail($id)
    {
        $data =  Product::find($id);
        return view('ProductDetail', ['product' => $data]);
        
    }
    /**
     * Display a listing of the resource.
     */

     
    //  public function index()
    //  {
    //      //
    //      $rings = Product::where('category', 'rings')->get( );
    //      $bracelets = Product::where('category', 'bracelet')->get();
    //      $watches = Product::where('category', 'watch')->get();
    //      $necklaces = Product::where('category', 'necklace')->get();
    //      $earrings = Product::where('category', 'earring')->get();
 
    //      return view('ProductDetail', compact('rings', 'bracelets', 'watches', 'necklaces', 'earrings'));
    //  }


    

    // public function getBracelets()
    // {
    //     $bracelets = Product::where('category', 'bracelet')->get();
    //     return view('ProductDetail.rings.bracelets', compact('bracelets'));
    // }

    // public function getWatches()
    // {
    //     $watches = Product::where('category', 'watch')->get();
    //     return view('ProductDetail.rings.watches', compact('watches'));
    // }

    // public function getNecklaces()
    // {
    //     $necklaces = Product::where('category', 'necklace')->get();
    //     return view('ProductDetail.rings.necklaces', compact('necklaces'));
    // }

    // public function getEarrings()
    // {
    //     $earrings = Product::where('category', 'earring')->get();
    //     return view('ProductDetail.rings.earrings', compact('earrings'));
    // }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }



}
