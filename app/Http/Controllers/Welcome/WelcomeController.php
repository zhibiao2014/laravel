<?php
namespace App\Http\Controller;

use App\Http\Controllers\Controller;

class WelcomeController extends Controller{
	public function welcome(){
		return view('welcome.welcome');
	}
}