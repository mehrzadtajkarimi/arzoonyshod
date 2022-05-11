<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
   public function index()
   {
      // Session::forget('theme');
// dd(session()->all());

      $data = [
         'theme' =>  's',
      ];
      return view('front.master', $data);
   }
}
