<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    // get list product to DB
    public function listProducts(){
        $datos=DB::select("select * from producto");
        return view('product', ['datos' => $datos]);
    }

    // fn for add prodcut to DB
    public function creacte(Requuest $req){

        $sql=DB::insert("insert into
        producto(codigo_producto,nombre,cantidad,precio,fecha_ingreso,fecha_vencimiento)
        values(?,?,?,?,?,?,?)",[
            $req -> txt_codigo,
            $req -> txt_nombre,
            $req -> txt_codigo,
            $req -> txt_nombre,
            $req -> txt_cantidad,
            $req -> txt_precio,
            $req -> txt_ingreso,
            $req -> txt_vencimiento,
        ]);
        if($sql==true){
            print "insert date";
        }else{
            print "Errro insetr";
        }
    }

}
