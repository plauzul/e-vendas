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
        if(!$categoria) {
            return view('home.home');
        }

        $products = Products::where('categoria', $categoria)->get();
        
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
