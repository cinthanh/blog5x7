<?php

namespace App\Http\Controllers\Abi;

use App\Account;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class HomeController extends Controller
{
    public function index()
    {
        return view('shop.home');
    }

    public function di()
    {
        //$acc = Account::updateDo();
    }
}
