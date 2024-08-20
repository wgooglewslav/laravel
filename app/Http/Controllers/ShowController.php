<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function show(){
        return view('show');
    }
}
