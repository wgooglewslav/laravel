<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;

class Main1Controller extends Controller
{
    public function index(){
        return view('main1');
    }
}
