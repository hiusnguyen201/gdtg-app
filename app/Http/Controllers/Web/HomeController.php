<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homePage()
    {
        return view("client.home");
    }

    public function buyerCreatePage()
    {
        return view("client.buyerCreate");
    }

    public function sellerCreatePage()
    {
        return view("client.sellerCreate");
    }
}
