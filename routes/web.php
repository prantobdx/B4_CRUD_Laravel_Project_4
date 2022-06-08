<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::get( '/', function ()
{
    return view( 'welcome' );
} );

Route::get( '/', [ProductController::class, 'js'] )->name( 'js' );

Route::get( '/add', [ProductController::class, 'add'] )->name( 'add-product' );

Route::get( '/my-calculator', [ProductController::class, 'calculator'] )->name( 'my-calculator' );

// done c:34

// c:33 done

//c:32 done