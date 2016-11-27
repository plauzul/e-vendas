<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Products;

class HomeController extends Controller {

    public function index() {
        return view('home.index');
    }

    public function home($categoria = null) {
        $brands = [
            'armani' => Products::where('brand', 'armani')->count(),
            'dolceCabbana' => Products::where('brand', 'dolce-e-cabbana')->count(),
            'orient' => Products::where('brand', 'dolce-e-cabbana')->count(),
            'ralphLauren' => Products::where('brand', 'ralph-lauren')->count(),
            'calvinKlein' => Products::where('brand', 'calvin-klein')->count(),
            'gucci' => Products::where('brand', 'gucci')->count(),
            'valentino' => Products::where('brand', 'valentino')->count()
        ];

        if(!$categoria) {
            return view('home.home')->with('brands', $brands);
        }elseif($categoria == "all") {
            $products = Products::all();
        } else {
            $products = Products::where('categoria', $categoria)->get();
        }

        return view('home.list-products')->with('products', $products);
    }

    public function blog() {
        return view('home.blog');
    }

    public function contatos() {
        return view('home.contatos');
    }

    public function modaDoMomento() {
        return view('home.moda-do-momento');
    }

    public function login() {
        return view('home.login');
    }

    public function listProducts() {
        return view('home.list-products')->with('products', Products::all());
    }

    public function cart() {
        return view('home.cart');
    }

}
