<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\StripePaymentController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\CsvFileController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\CsvProductStatsController;
use App\Http\Controllers\OrderController;

use App\Http\Controllers\ContactController;

use \App\Models\Order;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');



Route::get('/loginAdmin', function () {
    return view('loginUserAdmin');
});





Route::get('/layout', function () {
    return view('mainLayout.layout');
});
# I used <'/products'> from the a tag in the welcome page, and then used the name of the catalogue page.
Route::get('/products', function () {
    return view('productCatalogue');
})->name('products');

#About Us
Route::get('/aboutus', function () {
    return view('aboutUs');
})->name('aboutus');

# Contact Us
Route::get('/contactus', function () {
    return view('contactUs');
})->name('contactus');

Route::get('/searchlist', function () {
    return view('searchProducts');
})->name('searchlist');



# Product Catalogue to Rings Webpage
# Product Catalogue to Rings Webpage
Route::get('/rings', function () {
    return view('ring');
})->name('rings');


# Product Catalogue to Necklace Webpage
Route::get('/necklaces', function () {
    return view('necklace');
})->name('necklaces');

# Product Catalogue to Bracelet Webpage
Route::get('/bracelets', function () {
    return view('bracelet');
})->name('bracelets');

# Product Catalogue to Earring Webpage
Route::get('/earrings', function () {
    return view('earring');
})->name('earrings');

# Product Catalogue to Watches Webpage
Route::get('/watches', function () {
    return view('watch');
})->name('watches');

# Privacy policy
Route::get('/privacy', function () {
    return view('privacy');
})->name('privacy');

# terms and conditions
Route::get('/terms', function () {
    return view('terms');
})->name('terms');











Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



// This is for the products of each product webpage
Route::get('/detail', [ProfileController::class, 'detail']);

Route::get('/product', [ProductController::class, 'index']);

//Route::get('/searchlist', [ProductController::class, 'productList']);

Route::get('/search', [ProductController::class, 'productList'])->name('search');





//  #############################################################################################################################
//  #############################################################################################################################
// Abu Video

// Route for the product details page for Rings
Route::get('/rings', [ProductController::class, 'index'])->name('rings.index');

// Route for the product details page for bracelets
Route::get('/bracelets', [ProductController::class, 'index1'])->name('bracelets.index');

// Route for the product details page for necklaces
Route::get('/necklaces', [ProductController::class, 'index2'])->name('necklaces.index');

// Route for the product details page for earrings
Route::get('/earrings', [ProductController::class, 'index3'])->name('earrings.index');

// Route for the product details page for watches
Route::get('/watches', [ProductController::class, 'index4'])->name('watches.index');

// Route for the product details page

Route::get("detail/{id}", [ProductController::class, 'detail']);

// Route for the order details page
Route::get("receipt/{order_id}", [ProductController::class, 'receipt']);





//  ##############################          Route for the Cart Table             ########################################################


Route::post("/add_to_cart", [App\Http\Controllers\ProductController::class, 'addToCart'])->name('addToCart');

Route::get("checkout", [App\Http\Controllers\ProductController::class, 'checkoutList'])->name('checkout');

Route::get("cartlist", [App\Http\Controllers\ProductController::class, 'cartList'])->name('cartlist');





//  ##############################          Route for the WishList             ########################################################

//route for wishlist

Route::get('/wishlist', [ProductController::class, 'wishlist'])->name('wishlist');
Route::post('/add_to_wishlist', [ProductController::class, 'addToWishlist']);
Route::delete('/wishlist/{id}', [ProductController::class, 'removeFromWishlist'])->name('wishlist.remove');


// Route::get("wishlist", [App\Http\Controllers\ProductController::class, 'wishList'])->name('wishlist');


// Route::get('/wishlist', [ProductController::class, 'wishList'])->name('wishlist');
// Route::get('/add_to_wishlist', [ProductController::class, 'addToWishlist']);
// Route::delete('/wishlist/{id}', [ProductController::class, 'removeFromWishlist'])->name('wishlist.remove');


//  #############################################################################################################################



// This is for the details of the products
Route::get('/detail', [ProfileController::class, 'detail']);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post("add_to_cart", [ProductController::class, 'addToCart']);
    Route::delete('/cart/{id}', [ProductController::class, 'removeCart'])->name('cart.remove');
    Route::delete('/cart', [ProductController::class, 'removeAllCartItems'])->name('cart.removeAll');
});

require __DIR__ . '/auth.php';




/* Dashboard test - NOT WORKING
Route::get('/usertest', function () {
    return view('usertest');
})->name('usertest');

# Test for specific product - NOT WORKING
Route::get('/detailcheck', function () {
    return view('DetailCheck');
})->name('detailcheck'); */

# Test 2 for specific product
Route::get('/t2detail', function () {
    return view('testdetail2');
})->name('t2detail');

# Dashboard test
Route::get('/t3users', function () {
    return view('t3usertest');
})->name('t3users');



//  ##############################          Stripe/Checkout             ########################################################


Route::controller(StripePaymentController::class)->group(function () {
    Route::get('stripe', 'stripe')->name('stripe.index');
    Route::get('stripe/checkout', 'stripeCheckout')->name('stripe.checkout');
    Route::get('stripe/checkout/success', 'stripeCheckoutSuccess')->name('stripe.checkout.success');
});


Route::post('/update-cart-quantity/{id}', [ProductController::class, 'updateCartQuantity'])->name('update.cart.quantity');




Route::stripeWebhooks('/webhook');


// Route for the dashboard page for Rings
Route::get('/previousOrders', [ProductController::class, 'previousOrders'])->name('previousOrders');

// Route::get('/previousOrders', function () {
//     return view('previousOrders');
// })->name('previousOrders');


Route::get('/UserExport', [CsvFileController::class, 'export'])->name('UserExport');






//  Product Review Route

Route::post('/submit_review', [ReviewController::class, 'store'])->name('reviews.store');



// Startistics for the Products

Route::get('/productExport', [CsvProductStatsController::class, 'export'])->name('productExport');


//   Product Return

Route::post('/orders/{order}/request-return', [OrderController::class, 'requestReturn'])->name('orders.requestReturn');

Route::post('/my-returns/{order}', [OrderController::class, 'returnOrder'])->name('orders.myReturns');



// Contact Us post
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');


Route::post('/review', [AboutUsController::class, 'submit'])->name('review.submit');


Route::post('/cart/update', 'ProductController@updateCartQuantity')->name('cart.update');



