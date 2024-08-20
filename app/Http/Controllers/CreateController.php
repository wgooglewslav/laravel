<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;

class CreateController extends Controller
{
public function create ()
{
    return view('creates');
}
}
