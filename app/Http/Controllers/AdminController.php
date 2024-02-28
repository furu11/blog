<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Contact; 

class AdminController extends Controller
{
    public function admin() 
    {
        return view('admin');
    }
}
