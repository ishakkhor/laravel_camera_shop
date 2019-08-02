<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class CheckoutController extends Controller
{
    public function index()
    {
        return view ('frontend.pages.checkout');
    }
}
