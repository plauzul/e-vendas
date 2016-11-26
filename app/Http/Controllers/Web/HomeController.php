<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Products;

class HomeController extends Controller {

    public function index() {
        return view('index.index');
    }

    public function home() {
        return view('index.home');
    }

    public function blog() {
        return view('index.blog');
    }

    public function contatos() {
        return view('index.contatos');
    }

    public function modaDoMomento() {
        return view('index.moda-do-momento');
    }

    public function listProducts() {
        return view('index.list-products')->with('products', Products::all());
    }

    public function cart() {
        return view('index.cart');
    }

}
