<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
    public function js()
    {
        return view( 'js.js' );
    }

    public function add()
    {
        return view( 'products.add' );
    }

    public function calculator()
    {
        return view( 'calculator' );
    }

}