<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catmodel;

class FrontController extends Controller
{
    public function homeshow(){
        return view('Front/home');
    }
    public function adminshow(){
        return view('admin/index');
       
    }
    
}
