<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;

class EditController extends Controller
{
public function edit(){
    return view('edit');
}
}
