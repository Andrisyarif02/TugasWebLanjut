<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
    	return 'Selamat Datang Andri';
    }
    public function about(){
    	return 'Nama 	: Muhammad Andri Syarifudin <br>
 				NIM 	: 1931710074';
    }
    public function articles($id){
    	return 'Halaman artikel dengan Id '.$id;
    }
   
}
