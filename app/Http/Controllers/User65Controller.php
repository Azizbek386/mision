<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function PHPUnit\Framework\returnArgument;

class User65Controller extends Controller
{
    public function index()
    {
       return view("user65");
    }   
}
