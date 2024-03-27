<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class shopifyController extends Controller
{
    function sayHi($name='-'){
        return response("Hi there, {$name}",200);
    }
 
    public function getDatails(Request $request)
    {
        $shop = User::first();
        $shop = $shop->api()->rest('GET','admin/shop.json');
        echo "<pre>";
        print_r($shop['body']);
    }

}
