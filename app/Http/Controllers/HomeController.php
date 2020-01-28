<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = collect();
        /* Dummy data to display on the front end */
        for($i=0; $i < 25; $i++){
            $products->push(array(
                "name" => "Product Name $i",
                'img' => 'https://angularscript.com/wp-content/uploads/2018/06/Progressively-Loading-Images-With-Blur-Effect-min.png',
                'type' => 'Type',
                'label' => 'Label'
            ));
        }
        return view('index', compact('products'));
    }
}
