<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    public function listProducts(){
        $datos=DB::select("select * from producto");
        return view('product', ['datos' => $datos]);
    }
}
