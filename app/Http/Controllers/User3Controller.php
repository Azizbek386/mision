<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User3Controller extends Controller
{
    public function index()
{
    return response("user" . str_replace('User', '', class_basename($this)));
}

}
