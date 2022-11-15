<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ingredient;


class IngredientController extends Controller
{
    function index(){
        $ingredients = Ingredient::all();
        return view("master", ["ingredients" => $ingredients]);
    }
}
