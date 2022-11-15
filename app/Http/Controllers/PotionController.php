<?php

declare(strict_types=1);

namespace App\Http\Controllers;
use App\Models\Ingredient;
use Illuminate\Http\Request;




class PotionController extends Controller
{
    function calcPhValue(Request $request){
        $val1 = $request->ingredient1;
        $val2 = $request->ingredient2;
        $total_value = $val1+$val2;
        return view("potion", ["total_value" => $request->ingredient1]);
    }
}
