<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PaymentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ProjectController::class,'index']);


Route::get('single_product',function(){
    return view('single_product');
});

Route::get('/products',[ProjectController::class,'products'])->name('products');

Route::get('/about',function(){
    return view('about');
});
Route::get('/service',function(){
    return view('service');
});
Route::get('/menu',function(){
    return view('menu');
});
Route::get('/contact',function(){
    return view('contact');
});
Route::get('/reservation',function(){
    return view('reservation');
});
Route::get('/testimonial',function(){
    return view('testimonial');
});
Route::get('/cart',function(){
    return view('cart');
});

Route::get('/single_product/{id}',[ProjectController::class,'single_product'])->name('single_product');

Route::get('cart',[CartController::class,'cart'])->name('cart');


Route::post('/add_to_cart',[CartController::class,'add_to_cart'])->name('add_to_cart');

Route::get('/add_to_cart',function(){
        return redirect('/');
});

Route::post('/remove_from_cart',[CartController::class,'remove_from_cart'])->name('remove_from_cart');

Route::get('/remove_from_cart',function(){
        return redirect('/');

});
Route::get('/checkout',[CartController::class,'checkout'])->name('checkout');


Route::post('/edit_product_quantity',[CartController::class,'edit_product_quantity'])->name('edit_product_quantity');

Route::get('/edit_product_quantity',function(){
        return redirect('/');
});

Route::post('/place_order',[CartController::class,'place_order'])->name('place_order');

Route::get('/payment',[PaymentController::class,'payment'])->name('payment');
