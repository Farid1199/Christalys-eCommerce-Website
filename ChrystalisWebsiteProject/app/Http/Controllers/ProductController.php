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
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;





class ProductController extends Controller
{


    public function productList()
    {
        $query = Product::query();

        // Filter by search term
        if (request()->has('search')) {
            $searchTerm = request('search');
            $query->where('name', 'like', '%' . $searchTerm . '%');
        }

        // Filter by category
        if (request()->has('category')) {
            $category = request('category');
            $query->where('category', $category);

        }

        // Filter by minimum price
        // Filter by minimum price
        if (request()->has('min_price')) {
            $minPrice = request('min_price');
            if (is_numeric($minPrice)) {
                $query->where('price', '>=', $minPrice);
            }
        }


        // Filter by maximum price
        if (request()->has('max_price')) {
            $maxPrice = request('max_price');
            if (is_numeric($maxPrice)) {
                $query->where('price', '<=', $maxPrice);
            }
        }

        if (request()->has('sort')) {
            $sort = request('sort');
            if ($sort === 'price_desc') {
                $query->orderByDesc('price');
            }
            if ($sort === 'name_desc') {
                $query->orderByDesc('name');
            }
            if ($sort === 'price_asc') {
                $query->orderBy('price');
            }
            if ($sort === 'name_asc') {
                $query->orderBy('name');
            }
        }

        if (request()->has('reset_filters')) {
            $products = Product::where('category', 'products')->get();
        }

        // Fetch products
        $products = $query->get();

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
        $query = Product::where('category', 'Ring');

        // Filter by search term
        if (request()->has('search')) {
            $searchTerm = request('search');
            $query->where('name', 'like', '%' . $searchTerm . '%');
        }

        // Filter by minimum price
        // Filter by minimum price
        if (request()->has('min_price')) {
            $minPrice = request('min_price');
            if (is_numeric($minPrice)) {
                $query->where('price', '>=', $minPrice);
            } else {
                // Handle the case where min_price is not a valid numeric value
                // You can log an error or provide a default behavior
            }
        }


        // Filter by maximum price
        if (request()->has('max_price')) {
            $maxPrice = request('max_price');
            if (is_numeric($maxPrice)) {
                $query->where('price', '<=', $maxPrice);
            } else {
                // Handle the case where min_price is not a valid numeric value
                // You can log an error or provide a default behavior
            }
        }

        if (request()->has('sort')) {
            $sort = request('sort');
            if ($sort === 'price_desc') {
                $query->orderByDesc('price');
            }
            if ($sort === 'name_desc') {
                $query->orderByDesc('name');
            }
            if ($sort === 'price_asc') {
                $query->orderBy('price');
            }
            if ($sort === 'name_asc') {
                $query->orderBy('name');
            }
        }

        if (request()->has('reset_filters')) {
            $query = Product::query();

        }

        // Fetch products
        $products = $query->get();

        return view('ring', ['products' => $products]);
    }

    public function getRings()
    {
        $rings = Product::where('category', 'Ring')->get();
        return view('ProductDetail.rings', compact('ring'));
    }

    // ################################       Bracelet    #############################################

    public function index1()
    {
        $query = Product::where('category', 'Bracelet');

        // Filter by search term
        if (request()->has('search')) {
            $searchTerm = request('search');
            $query->where('name', 'like', '%' . $searchTerm . '%');
        }

        // Filter by category
        if (request()->has('category')) {
            $category = request('category');
            $query->where('category', $category);

        }

        // Filter by minimum price
        // Filter by minimum price
        if (request()->has('min_price')) {
            $minPrice = request('min_price');
            if (is_numeric($minPrice)) {
                $query->where('price', '>=', $minPrice);
            } else {
                // Handle the case where min_price is not a valid numeric value
                // You can log an error or provide a default behavior
            }
        }


        // Filter by maximum price
        if (request()->has('max_price')) {
            $maxPrice = request('max_price');
            if (is_numeric($maxPrice)) {
                $query->where('price', '<=', $maxPrice);
            } else {
                // Handle the case where min_price is not a valid numeric value
                // You can log an error or provide a default behavior
            }
        }

        if (request()->has('sort')) {
            $sort = request('sort');
            if ($sort === 'price_desc') {
                $query->orderByDesc('price');
            }
            if ($sort === 'name_desc') {
                $query->orderByDesc('name');
            }
            if ($sort === 'price_asc') {
                $query->orderBy('price');
            }
            if ($sort === 'name_asc') {
                $query->orderBy('name');
            }
        }

        if (request()->has('reset_filters')) {
            $products = Product::where('category', 'Bracelet')->get();

        }

        // Fetch products
        $products = $query->get();

        return view('bracelet', ['products' => $products]);
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

        $query = Product::where('category', 'Necklace');

        // Filter by search term
        if (request()->has('search')) {
            $searchTerm = request('search');
            $query->where('name', 'like', '%' . $searchTerm . '%');
        }

        // Filter by category
        if (request()->has('category')) {
            $category = request('category');
            $query->where('category', $category);

        }

        // Filter by minimum price
        // Filter by minimum price
        if (request()->has('min_price')) {
            $minPrice = request('min_price');
            if (is_numeric($minPrice)) {
                $query->where('price', '>=', $minPrice);
            } else {
                // Handle the case where min_price is not a valid numeric value
                // You can log an error or provide a default behavior
            }
        }


        // Filter by maximum price
        if (request()->has('max_price')) {
            $maxPrice = request('max_price');
            if (is_numeric($maxPrice)) {
                $query->where('price', '<=', $maxPrice);
            } else {
                // Handle the case where min_price is not a valid numeric value
                // You can log an error or provide a default behavior
            }
        }

        if (request()->has('sort')) {
            $sort = request('sort');
            if ($sort === 'price_desc') {
                $query->orderByDesc('price');
            }
            if ($sort === 'name_desc') {
                $query->orderByDesc('name');
            }
            if ($sort === 'price_asc') {
                $query->orderBy('price');
            }
            if ($sort === 'name_asc') {
                $query->orderBy('name');
            }
        }

        if (request()->has('reset_filters')) {
            $products = Product::where('category', 'Necklace')->get();

        }

        // Fetch products
        $products = $query->get();

        return view('necklace', ['products' => $products]);
    }

    public function getNecklace()
    {
        $necklace = Product::where('category', 'Necklace')->get();
        return view('ProductDetail.necklaces', compact('necklace'));
    }

    // ################################       Earring    #############################################

    public function index3()
    {
        $query = Product::where('category', 'Earring');

        // Filter by search term
        if (request()->has('search')) {
            $searchTerm = request('search');
            $query->where('name', 'like', '%' . $searchTerm . '%');
        }

        // Filter by category
        if (request()->has('category')) {
            $category = request('category');
            $query->where('category', $category);

        }

        // Filter by minimum price
        // Filter by minimum price
        if (request()->has('min_price')) {
            $minPrice = request('min_price');
            if (is_numeric($minPrice)) {
                $query->where('price', '>=', $minPrice);
            } else {
                // Handle the case where min_price is not a valid numeric value
                // You can log an error or provide a default behavior
            }
        }


        // Filter by maximum price
        if (request()->has('max_price')) {
            $maxPrice = request('max_price');
            if (is_numeric($maxPrice)) {
                $query->where('price', '<=', $maxPrice);
            } else {
                // Handle the case where min_price is not a valid numeric value
                // You can log an error or provide a default behavior
            }
        }

        if (request()->has('sort')) {
            $sort = request('sort');
            if ($sort === 'price_desc') {
                $query->orderByDesc('price');
            }
            if ($sort === 'name_desc') {
                $query->orderByDesc('name');
            }
            if ($sort === 'price_asc') {
                $query->orderBy('price');
            }
            if ($sort === 'name_asc') {
                $query->orderBy('name');
            }
        }

        if (request()->has('reset_filters')) {
            $products = Product::where('category', 'Earring')->get();

        }

        // Fetch products
        $products = $query->get();

        return view('earring', ['products' => $products]);
    }

    public function getEarring()
    {
        $earrings = Product::where('category', 'Earring')->get();
        return view('ProductDetail.earrings', compact('earring'));
    }

    // ################################       Watch    #############################################


    public function index4()
    {
        $query = Product::where('category', 'Watch');

        // Filter by search term
        if (request()->has('search')) {
            $searchTerm = request('search');
            $query->where('name', 'like', '%' . $searchTerm . '%');
        }

        // Filter by category
        if (request()->has('category')) {
            $category = request('category');
            $query->where('category', $category);

        }

        // Filter by minimum price
        // Filter by minimum price
        if (request()->has('min_price')) {
            $minPrice = request('min_price');
            if (is_numeric($minPrice)) {
                $query->where('price', '>=', $minPrice);
            } else {
                // Handle the case where min_price is not a valid numeric value
                // You can log an error or provide a default behavior
            }
        }


        // Filter by maximum price
        if (request()->has('max_price')) {
            $maxPrice = request('max_price');
            if (is_numeric($maxPrice)) {
                $query->where('price', '<=', $maxPrice);
            } else {
                // Handle the case where min_price is not a valid numeric value
                // You can log an error or provide a default behavior
            }
        }

        if (request()->has('sort')) {
            $sort = request('sort');
            if ($sort === 'price_desc') {
                $query->orderByDesc('price');
            }
            if ($sort === 'name_desc') {
                $query->orderByDesc('name');
            }
            if ($sort === 'price_asc') {
                $query->orderBy('price');
            }
            if ($sort === 'name_asc') {
                $query->orderBy('name');
            }
        }

        if (request()->has('reset_filters')) {
            $products = Product::where('category', 'Watch')->get();

        }

        // Fetch products
        $products = $query->get();

        return view('watch', ['products' => $products]);
    }

    public function getWatch()
    {
        $watch = Product::where('category', 'Watch')->get();
        return view('ProductDetail.watches', compact('watch'));
    }


    /**
     *   ###############    This is a fuction for the cart table  ##################################
     */


     public function addToCart(Request $request)
     {
         // Retrieve product ID and quantity from the form submission
         $productId = $request->input('product_id');
         $quantity = $request->input('quantity');
     
         // Retrieve the product from the database
         $product = Product::find($productId);
     
         // Check if the product exists and if it's available
         if (!$product || $product->stock < $quantity) {
             // Handle error - product not found or not enough stock
             return redirect()->back()->with('error', 'The product is not available.');
         }
     
         // Add the product to the user's cart or update its quantity
         // Here you might interact with your cart service or session to handle cart logic
         // For simplicity, let's assume you're storing cart data in the session
         $cart = session()->get('cart', []);
     
         if (isset($cart[$productId])) {
             // If the product is already in the cart, update its quantity
             $cart[$productId]['quantity'] += $quantity;
         } else {
             // Otherwise, add the product to the cart
             $cart[$productId] = [
                 'name' => $product->name,
                 'quantity' => $quantity,
                 'price' => $product->price,
             ];
         }
     
         // Update the cart data in the session
         session()->put('cart', $cart);
     
         // Redirect back to the product page or wherever you want
         return redirect()->back()->with('success', 'Product added to cart successfully.');
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

        $remove = Cart::where('user_id', $userId)->get();

        return view('cartlist', ['products' => $products, 'remove' => $remove]);
    }

    public function removeCart($id)
    {
        // Check if the authenticated user owns the cart item before removing it
        $cartItem = Cart::where('id', $id)
            ->where('user_id', auth()->id())
            ->first();

        if (!$cartItem) {
            // If the cart item is not found or doesn't belong to the authenticated user
            abort(403, 'Unauthorized action.');
        }

        // If the user owns the cart item, proceed to remove it
        $cartItem->delete();

        return redirect()->route('cartlist')->with('success', 'Item removed from cart successfully.');
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





    public function wishlist()
    {
        $userId = Auth::id();
        $wishlistItems = Wishlist::where('user_id', $userId)->with('product')->get();
        return view('wishlist', ['wishlistItems' => $wishlistItems]);
    }

    public function addToWishlist(Request $request)
    {
        $wishlistItem = new Wishlist;
        $wishlistItem->user_id = Auth::id();
        $wishlistItem->product_id = $request->product_id;
        $wishlistItem->save();
        return back()->with('success', 'Item added to wishlist successfully.');
    }

    public function removeFromWishlist($id)
    {
        $wishlistItem = Wishlist::find($id);
        if (!$wishlistItem || $wishlistItem->user_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }
        $wishlistItem->delete();
        return redirect()->route('wishlist')->with('success', 'Item removed from wishlist successfully.');
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
