<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class TableTestController extends Controller
{
    public function index(){
    	$table = App\TableTest::all();//  Обращение к модели бд
		return view('table.index', compact('table'));
    }

    public function show($id){
    	$num = App\TableTest::find($id);
    return view('table.show', compact('num'));
    }
}
