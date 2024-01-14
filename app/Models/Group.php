<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Group extends Model
{
    public function getAllGroup()
    {
        return DB::select('select * from `groups`');
    }
}
