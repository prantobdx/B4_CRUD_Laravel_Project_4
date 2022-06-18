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

Route::get( '/add-fullname', [ProductController::class, 'addFullName'] )->name( 'add-fullname' );

Route::get( '/my-calculator', [ProductController::class, 'calculator'] )->name( 'my-calculator' );

Route::get( '/add-products', [ProductController::class, 'addProducts'] )->name( 'add-products' );

//Product Crud..................
Route::post( '/new-product', [ProductController::class, 'newProduct'] )->name( 'new-product' );

Route::post( '/update-product', [ProductController::class, 'updateProduct'] )->name( 'update-product' );

Route::get( '/manage-product', [ProductController::class, 'manageProduct'] )->name( 'manage-product' );

Route::get( '/delete-product/{productId}', [ProductController::class, 'deleteProduct'] )->name( 'delete-product' );

Route::get( '/status-change/{productId}', [ProductController::class, 'productStatus'] )->name( 'product-status' );

Route::get( '/edit-product/{productId}', [ProductController::class, 'editProduct'] )->name( 'edit-product' );

//  c:36 done

// c:35 done

// c:34 done

// c:33 done

//c:32 done