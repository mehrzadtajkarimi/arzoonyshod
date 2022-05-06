<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function theme($type)
    {
 
        if ($type == 'dark') {
            session(['theme' => 'dark']);
        }
        if ($type == 'light') {
            session(['theme' => 'light']);
        }
        return redirect()->back();
    }

}
