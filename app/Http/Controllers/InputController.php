<?php

namespace App\Http\Controllers;

use App\Input;
use Illuminate\Http\Request;

class InputController extends Controller
{
    
    // Input一覧表示 
    public function index(Input $input)
    {
        return $input->get();
    }
}
