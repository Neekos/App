<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TableTest extends Model
{
    public static function incomplete(){
    	return static::where('completed', 0)->get();//запрос к определенным параметрам
    }
}
