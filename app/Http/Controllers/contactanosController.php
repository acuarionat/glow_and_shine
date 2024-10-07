<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class contactanosController extends Controller
{
    public function __invoke()
    {
        return view('pages.contactanos');   
    }
}
