<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    function addperson()
   {
    return view('persons/addperson');
   }
}
