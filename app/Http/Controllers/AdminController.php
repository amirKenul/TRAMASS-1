<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{
    public function index(){
        return view('admin.admin');
    }
    public function user(){
        return view('admin.user');
    }
}