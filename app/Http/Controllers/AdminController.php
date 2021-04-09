<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
    }

    public function addcategory(){
        return view('admin.addcategory');
    }

    public function addproduct(){
        $categories= Category::All();
        return view('admin.addproduct')->with('categories',$categories);

    }

    public function addslider(){
        return view('admin.addslider');

    }


}


