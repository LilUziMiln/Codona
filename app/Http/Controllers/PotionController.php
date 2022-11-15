<?php

declare(strict_types=1);

namespace App\Http\Controllers;
use App\Models\Ingredient;


class PotionController extends Controller
{
    function calcPhValue(Ingredient $ingredient1, Ingredient $ingredient2){
        $val1 = $ingredient1->ph_scale;
        $val2 = $ingredient2->ph_scale;
        $total_value = $val1+$val2;
        return view("potion", ["total_value" => $total_value]);
    }
}
