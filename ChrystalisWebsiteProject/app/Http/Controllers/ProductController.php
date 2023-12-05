<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Controllers;

class ProductController extends Controller
{



 


    function detail($id)
    {
        $data =  Product::find($id);
        return view('ProductDetail', ['product' => $data]);
        
    }
  

     // ################################       Ring    #############################################
     public function index()
     {
         //
         $rings = Product::where('category', 'Ring')->get();
         return view('ring', ['products' =>$rings]);
     }
     public function getRings()
     {
         $rings = Product::where('category', 'Ring')->get();
         return view('ProductDetail.rings', compact('ring'));
     }

     // ################################       Bracelet    #############################################

     public function index1()
     {
         //
         $bracelets = Product::where('category', 'Bracelet')->get();
         return view('bracelet', ['products' =>$bracelets]);
     }

     public function getBracelet()
     {
         $bracelets = Product::where('category', 'Bracelet')->get();
         return view('ProductDetail.bracelets', compact('Bracelet'));
     }




     // ################################       Necklace    #############################################

     public function index2()
     {
         //
         $necklace = Product::where('category', 'Necklace')->get();
         return view('necklace', ['products' =>$necklace]);
     }

     public function getNecklace()
     {
         $necklace = Product::where('category', 'Necklace')->get();
         return view('ProductDetail.necklaces', compact('necklace'));
     }

    // ################################       Earring    #############################################

    public function index3()
     {
         //
         $earrings = Product::where('category', 'Earring')->get();
         return view('earring', ['products' =>$earrings]);
     }

     public function getEarring()
     {
         $earrings = Product::where('category', 'Earring')->get();
         return view('ProductDetail.earrings', compact('earring'));
     }

     // ################################       Watch    #############################################


     public function index4()
     {
         //
         $watch = Product::where('category', 'Watch')->get();
         return view('watch', ['products' =>$watch]);
     }

     public function getWatch()
     {
         $watch = Product::where('category', 'Watch')->get();
         return view('ProductDetail.watches', compact('watch'));
     }



     

    

 

    
   

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
