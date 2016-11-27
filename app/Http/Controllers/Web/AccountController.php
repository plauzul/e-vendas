<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller {
    
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('account.index');
    }


}
