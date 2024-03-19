<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\CartItem;
use App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;
// use App\Http\Controllers\Log;
use Illuminate\Support\Facades\Log;
use \App\Models\Order;




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
        try {
            // Retrieve product ID and quantity from the form submission
            Log::info('Worked ');
            echo 'Worked';
            $productId = $request->input('product_id');

            if (!is_null($request->input('quantity'))) {
                echo 'Worked1';
                Log::info('Worked1 ');
                $quantity = $request->input('quantity');
            } else {
                $quantity = 1;
            }
            Log::info($productId);

            // Retrieve the product from the database
            $product = Product::find($productId);
            Log::info('Worked2dfgdfgd ');

            // Check if the inventory count is more than 0
            if ($product->inventory_count <= 0) {
                // If not, redirect back with an error message
                return redirect()->back()->with('error', 'This product is currently out of stock.');
            }

            $price = $product->price;


            $cartItem = CartItem::where('product_id', $product)
                ->where('user_id', Auth::id())->first();
            // Create or update cart item
            session()->flash('success', 'Product added successfully');
            Log::info('Worked3 ');


            if ($cartItem) {
                Log::info('Worked3 ');
                // If the product is already in the cart, update its quantity and total price
                $cartItem->quantity += $quantity;
                // Ensure that updating the cart item doesn't exceed the inventory count
                if ($cartItem->quantity > $product->inventory_count) {
                    // Adjust the cart item quantity to the maximum available inventory or handle as needed
                    return redirect()->back()->with('error', 'Unable to add the desired quantity to cart. Limited stock available.');
                }
                // $cartItem->total_price += $totalPrice;
            } else {
                // Otherwise, add a new item to the cart
                Log::info('Worked4');
                $cartItem = new CartItem([
                    'user_id' => Auth::id(),
                    'product_id' => $productId,
                    'quantity' => $quantity,
                    'total_amount' => $quantity * $price,

                ]);
            }

            // Save the cart item to the database
            $cartItem->save();

            // Redirect back to the product page or wherever you want
            return redirect()->back()->with('success', 'Product added to cart successfully.');
        } catch (\Exception $e) {
            // Log the exception for debugging
            Log::error('Error adding product to cart: ' . $e->getMessage());

            // Redirect back with an error message
            echo 'Fail';

            return redirect()->back()->with('error', 'An error occurred while adding the product to cart. Please try again later.');

        }

        // Fetch the quantity from the database
        $quantity = DB::table('cart_items')->value('quantity');

        // Pass the quantity value to the view
        return view('cartlist', ['quantity' => $quantity]);
    }



    static function cartItem()
    {
        // $userId=Session::get('user')['id'];
        $userId = auth()->id();
        $total = CartItem::where('user_id', $userId)->get();
        return count($total);

    }




    public function cartList()
    {
        $userId = auth()->id();

        $cartItems = DB::table('cart_items')
            ->join('products', 'cart_items.product_id', '=', 'products.id')
            ->where('cart_items.user_id', $userId)
            ->select('products.*', 'cart_items.id as cart_id', 'cart_items.quantity', 'cart_items.total_amount')
            ->get();

        $totalPrice = $cartItems->sum('total_amount');

        return view('cartlist', ['cartItems' => $cartItems, 'totalPrice' => $totalPrice]);
    }


    public function removeCart($id)
    {
        // Check if the authenticated user owns the cart item before removing it
        $cartItem = CartItem::where('id', $id)
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
     *   ########################       Oder History      ##################################
     */
    public function previousOrders()
    {
        $userId = Auth::id(); // Retrieve user_id for the order

        $orders = DB::table('orders')
            ->where('user_id', $userId)
            ->orderBy('created_at', 'desc')
            ->get();

        // Assuming each order has associated products details directly or through a pivot table
        // This is a placeholder. You should replace it with actual logic to fetch associated products
        foreach ($orders as $order) {
            // Here, you would typically fetch product details for each order
            // For demonstration, let's assume we're appending a mock list of products
            $order->products = "1x Gold Ring, 2x Silver Necklace"; // Placeholder, replace with actual product fetching logic
        }

        return view('previousOrders', ['orders' => $orders]);
    }




    /**
     *   ########################       Product Availability Allert      ##################################
     */










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