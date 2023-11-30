<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
});

Route::get('/loginAdmin', function () {
    return view('loginUserAdmin');
});

#When you clcikc on the Home page, it will redirect to Home Page
Route::get('/', function () {
    return view('welcome');
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





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
