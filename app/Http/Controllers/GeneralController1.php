<?php

namespace App\Http\Controllers;

use App\teamcbd;
use App\Generalusers;
use App\recipetitle;
use App\menus;
use App\Models\Menu;
use App\Models\Recipetitles;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;

class GeneralController extends Controller
{

    public function add(Request $request)
    {
        return view('signup.add');
    }

    public function create(Request $request)
    {
        $param = [
            'mail' => $request->mail,
            'password' => $request->password,
            'gender' => $request->gender,
            'date' => $request->date,
            'area_id' => $request->area_id,
            'station_id' => $request->station_id,
            'people_ind' => $request->people_ind,
            'nickname' => $request->nickname,
        ];
        DB::table('generalusers')->insert($param);

        return view('signup.done');
    }
    public function find(Request $request)
    {
        return view('menu.choice',['input' => '']);
    }
    public function search(Request $request)
    {
        $item = Menu::where('day', $request->input)->first();
        $param = ['input' => $request->input, 'item' => $item];
        return view('menu.choice', $param);
    }
}