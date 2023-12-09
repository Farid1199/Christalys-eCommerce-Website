<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\LoginController;


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

# About Us
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


/*CHECKOUT
Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');
*/






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







//  ##############################          Route for the Cart Table             ########################################################


Route::get("/add_to_cart", [App\Http\Controllers\ProductController::class, 'addToCart']);

Route::get("checkout", [App\Http\Controllers\ProductController::class, 'checkoutList'])->name('checkout');

Route::get("cartlist", [App\Http\Controllers\ProductController::class, 'cartList'])->name('cartlist');










//  #############################################################################################################################



// This is for the details of the products
Route::get('/detail', [ProfileController::class, 'detail']);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post("add_to_cart", [ProductController::class, 'addToCart']);
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

