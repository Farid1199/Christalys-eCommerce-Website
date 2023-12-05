<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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






Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



// This is for the products of each product webpage
Route::get('/detail', [ProfileController::class, 'detail']);

Route::get('/product', [ProductController::class, 'index']);






//  #############################################################################################################################
//  #############################################################################################################################
// Abu Video

Route::get('/rings', [ProductController::class, 'index'])->name('rings.index');

// Route for the product details page

Route::get("detail/{id}", [ProductController::class, 'detail']);







//  #############################################################################################################################

//  #############################################################################################################################



// This is for the details of the products
Route::get('/detail', [ProfileController::class, 'detail']);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
