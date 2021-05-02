<?php
namespace App\Http\Controllers;

class HomeController extends Controller{

    public function login(){
        return view('login');
    }
    public function register(){

        return view('register');
    }
    public function account(){
        return view('account');
    }
    public function findParking(){
        return view('findParking');
    }
    public function confirm(){
        return view('confirm');
    }



}
