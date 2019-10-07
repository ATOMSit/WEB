<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StripeController extends Controller
{
    public function create()
    {
        return view('users.cards');
    }
}
