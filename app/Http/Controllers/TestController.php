<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Test;

use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    //
    public function index(){

        $users = DB::table('tests')
        ->select('id')
        ->get();
        // dd($users);


        $values = Test::all();
        // dd($values);
        return view('tests.test', compact('values'));
    }
}
