<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catmodel;

class CatController extends Controller
{
    public function show(){
        $cat_model = new CatModel();
        $all_data = $cat_model->get();
        return view('admin.cat',["data"=> $all_data]);
    return view ('admin.cat');
}
    function insertdata(Request $req){
        $cat_name = $req->cat_name;
        $cat_model=new Catmodel();
        $cat_model->cat_name = $cat_name;
        $cat_model->save();


        return redirect('/catshow');
        
        function show(){
            // echo "Cat Show";
            $cat_model = new CatModel();
            $all_data = $cat_model->get();
            return view('admin.cat',["data"=> $all_data]);
        }
       
        function showEdit(Request $req){
            $cat_name = $req->cat_name;
            $cat_model=new Catmodel();
            $cat_model->cat_name = $cat_name;
            $cat_model->save();
    
    
            return redirect('/catshow');

    }
    
}
