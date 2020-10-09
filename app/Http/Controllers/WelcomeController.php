<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function about(){
    	return 'Nama 	: Muhammad Andri Syarifudin <br>
 				NIM 	: 1931710074';
    }
    
}
