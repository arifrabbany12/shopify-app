<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class faqController extends Controller
{
   public function groupIndex(){
    return view('group.index');
   }
}
