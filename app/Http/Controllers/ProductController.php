<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    protected $product;

    public function js()
    {
        return view( 'js.js' );
    }

    public function addFullName()
    {
        return view( 'products.addFullName' );
    }

    public function add()
    {
        return view( 'products.add' );

    }

    public function calculator()
    {
        return view( 'calculator' );
    }
    public function addProducts()
    {
        return view( 'products.add_products' );
    }

    //For product crud........................

    public function newProduct( Request $request )
    {

        // $imageName = $image->getClientOriginalExtension();

        Product::SaveData( $request );

        return redirect()->back()->with( 'message', 'Product Created Sucessfully.' );
    }

    public function manageProduct()
    {

        // return Product::where( 'id', 3 )->first();
        // return Product::where( 'status', 0 )->first();
        // return Product::latest()->get();
        // return Product::orderBy( 'id', 'DESC' )->get();

        return view( 'products.manage_product', ['products' => Product::all()] );
    }

    public function deleteProduct( $id )
    {

        $this->product = Product::findOrFail( $id );
        // $this->product = Product::where( 'id', $id )->first();

        if ( file_exists( $this->product->product_image ) )
        {
            unlink( $this->product->product_image );
        }
        $this->product->delete();
        return redirect()->back()->with( 'message', 'product deleted successfully' );
    }

    public function productStatus( $id )
    {
        $this->product = Product::findOrFail( $id );

        // if ( $this->product->status == 1 )
        // {
        //     $this->product->status = 0;
        // }
        // elseif ( $this->product->status == 0 )
        // {
        //     $this->product->status = 1;
        // }

        $this->product->status = $this->product->status == 1 ? 0 : 1;

        $this->product->save();
        return redirect()->back()->with( 'message', 'status changed sucessfully' );

    }

    public function editProduct( $id )
    {
        return view( 'products.edit_product', [
            'product' => Product::findOrFail( $id ),
        ] );
    }

    public function updateProduct( Request $request )
    {
        Product::updateData( $request );
        return redirect( '/manage-product' )->with( 'message', 'Product Updated Sucessfully' );
    }

}