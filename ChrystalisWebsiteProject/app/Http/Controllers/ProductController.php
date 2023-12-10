<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;



class ProductController extends Controller
{


    public function productList()
    {

        if (request()->has('search')) {
            $searchTerm = request('search');
            $products = Product::where('name', 'like', '%' . $searchTerm . '%')->get();
        } else {
            $products = Product::all();
            //$bracelets = Product::where('category', 'Bracelet')->get();

        }

        //$bracelets = Product::where('category', 'Bracelet')->get();
        return view('searchProducts', ['products' => $products]);
    }



    function detail($id)
    {
        $data = Product::find($id);
        return view('ProductDetail', ['product' => $data]);

    }


    // ################################       Ring    #############################################
    public function index()
    {

        if (request()->has('search')) {
            $searchTerm = request('search');
            $rings = Product::where('category', 'Ring')
                ->where('name', 'like', '%' . $searchTerm . '%')->get();
        } else {
            $rings = Product::where('category', 'Ring')->get();

        }
        return view('ring', ['products' => $rings]);
    }

    public function getRings()
    {
        $rings = Product::where('category', 'Ring')->get();
        return view('ProductDetail.rings', compact('ring'));
    }

    // ################################       Bracelet    #############################################

    /*public function index1()
    {
        //
        //$bracelets = Product::where('category', 'Bracelet')->get();
        //return view('bracelet', ['products' => $bracelets]);

        if (request('search')) {
            $bracelets = Product::where('category', '%' . request('search') . '%')->get();
            //$bracelets = Product::where('category', 'Bracelet')->get();
        } else {
            $bracelets = Product::where('category', 'Bracelet')->get();
        }

        return view('bracelet', ['products' => $bracelets]);

                /*if (request()->has('search')) {
            $searchTerm = request('search');
            $bracelets = Product::where('name', 'like', '%' . $searchTerm . '%')->get();
        } else {
            $bracelets = Product::all();
            $bracelets = Product::where('category', 'Bracelet')->get();

        }

    }*/


    public function index1()
    {

        if (request()->has('search')) {
            $searchTerm = request('search');
            $bracelets = Product::where('category', 'Bracelet')
                ->where('name', 'like', '%' . $searchTerm . '%')
                ->get();
        } else {
            $bracelets = Product::where('category', 'Bracelet')->get();

        }
        return view('bracelet', ['products' => $bracelets]);
    }

    public function getBracelet()
    {
        $bracelets = Product::where('category', 'Bracelet')->get();
        return view('ProductDetail.bracelets', compact('Bracelet'));
    }




    // ################################       Necklace    #############################################

    /*public function index2()
    {
        //
        //$necklace = Product::where('category', 'Necklace')->get();
        //return view('necklace', ['products' => $necklace]);

        if (request()->has('search')) {
            $searchTerm = request('search');
            $necklace = Product::where('name', 'like', '%' . $searchTerm . '%')->get();
        } else {
            //$necklace = Product::all();
            $necklace = Product::where('category', 'Necklace')->get();

        }

        //$bracelets = Product::where('category', 'Bracelet')->get();
        return view('necklace', ['products' => $necklace]);
    }*/

    public function index2()
    {
        if (request()->has('search')) {
            $searchTerm = request('search');
            $necklace = Product::where('category', 'Necklace')
                ->where('name', 'like', '%' . $searchTerm . '%')
                ->get();
        } else {
            $necklace = Product::where('category', 'Necklace')->get();
        }

        return view('necklace', ['products' => $necklace]);
    }

    public function getNecklace()
    {
        $necklace = Product::where('category', 'Necklace')->get();
        return view('ProductDetail.necklaces', compact('necklace'));
    }

    // ################################       Earring    #############################################

    public function index3()
    {
        if (request()->has('search')) {
            $searchTerm = request('search');
            $earrings = Product::where('category', 'Earring')
                ->where('name', 'like', '%' . $searchTerm . '%')
                ->get();
        } else {
            $earrings = Product::where('category', 'Earring')->get();

        }
        return view('earring', ['products' => $earrings]);
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
        //$watch = Product::where('category', 'Watch')->get();
        //return view('watch', ['products' => $watch]);

        if (request()->has('search')) {
            $searchTerm = request('search');
            $watch = Product::where('category', 'Watch')
                ->where('name', 'like', '%' . $searchTerm . '%')
                ->get();
        } else {
            $watch = Product::where('category', 'Watch')->get();
        }

        //$bracelets = Product::where('category', 'Bracelet')->get();
        return view('watch', ['products' => $watch]);

    }

    public function getWatch()
    {
        $watch = Product::where('category', 'Watch')->get();
        return view('ProductDetail.watches', compact('watch'));
    }


    /**
     *   ###############    This is a fuction for the cart table  ##################################
     */


    function addToCart(Request $reg)
    {


        $cart = new Cart;
        $cart->user_id = auth()->user()->id;
        $cart->product_id = $reg->product_id;
        # then we are saving it
        $cart->save();
        return redirect('/');

    }


    static function cartItem()
    {
        // $userId=Session::get('user')['id'];
        $userId = auth()->id();

        return Cart::where('user_id', $userId)->count();

    }


    function cartList()
    {
        $userId = auth()->id();

        $products = DB::table('cart')
            ->join('products', 'cart.product_id', '=', 'products.id')
            ->where('cart.user_id', $userId)
            ->select('products.*', 'cart.id as cart_id')
            ->get();

        $remove = Cart::where('user_id',$userId )->get();

        return view('cartlist', ['products' => $products, 'remove' =>$remove]);
    }

    function checkoutList()
    {
        $userId = auth()->id();

        $products = DB::table('cart')
            ->join('products', 'cart.product_id', '=', 'products.id')
            ->where('cart.user_id', $userId)
            ->select('products.*', 'cart.id as cart_id')
            ->get();

        return view('checkout', ['products' => $products]);
    }


    ####################          Remove from cart fuunction         #######################

    public function removeCart($id)
    {
        // Check if the authenticated user owns the cart item before removing it
        $cartItem = Cart::find($id);

        if ($cartItem->user_id !== auth()->id()) {
            // If the cart item is not found or doesn't belong to the authenticated user
            abort(403, 'Unauthorized action.');
        }

        // If the user owns the cart item, proceed to remove it
        Cart::destroy($id);

        return redirect('cartlist');

    }
















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
