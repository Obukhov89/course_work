<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Discipline extends Model
{
    public function list_disciplines($id_group)
    {
        $id_direction = '';

        $query = DB::select('select `idDirection` from `groups-and-directions` where `idGroup` = :idGroup',
            ['idGroup' => $id_group]);

        foreach ($query as $value){
            $id_direction = $value->idDirection;
        }

        $query_disciple = DB::select
        ('select * from `disciplines` left join `infodisciplines`
        on `infodisciplines`.`idDiscipline` = `disciplines`.`id` where `infodisciplines`.`idDirection` =:idDirection',
        ['idDirection' => $id_direction]);

        return $query_disciple;
    }
}
