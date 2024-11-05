<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class WebController extends Controller
{

    public function index()
    {
        return view('student.index'); 
    }
    public function products()
    {
        return view('student.products'); 
    }
    public function contact()
    {
        return view('student.contact'); 
    }
    public function cart()
    {
        return view('student.cart'); 
    }
    public function detail()
    {
        return view('student.product_detail'); 
    }

}
