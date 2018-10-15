<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Account extends Model
{
    //
    public static function updateDo()
    {
        return DB::table('accounts')->where('id','=',2)->update(['fname' => 'JJJ']);

    }
}
