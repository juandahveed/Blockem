<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;

class LoginController extends Controller{
    // The middleware('guest'); means that any one can access this controller
    
    public function __construct()
    {
        $this->middleware('guest');
    }
    public function index(){
        return view('login');
    }
}