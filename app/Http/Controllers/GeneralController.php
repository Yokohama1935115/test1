<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GeneralController extends Controller
{
    public function searchdate(Request $request)
    {
        $date = Carbon::now()->toDateTimeString();
        return view('recipesearch.date',['date'=>$date]);
    }
    public function recipesearch(Request $request)
    {
        //$items = DB::table('recipetitle')->get();
        $items = DB::select('SELECT DISTINCT recipe_name 
        FROM recipetitle, stocks, recipedetails 
        WHERE stocks.ingredients_id = recipedetails.ingredients_id AND
        recipedetails.recipe = recipetitle.recipe');
        $date = $request->theDate;
        $count = $request->count;
        return view('recipesearch.search')->with(['items'=>$items,'date'=>$date,'count'=>$count]);
    }
    public function recipefind(Request $request)
    {
        return view('recipesearch.find',['recipe_name'=>'']);
    }
    public function recipesearch1(Request $request)
    {
        $item = DB::table('recipetitle')->where('recipe_name', $request->recipe_name)->first();
        return view('recipesearch.find', ['item'=>$item]);
    }
}
