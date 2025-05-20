<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class pagina2 extends Controller
{
    public function index(): View
    {
        return view('pagina2');
    }
}
