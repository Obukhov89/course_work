<?php


namespace App\Http\Controllers;


use App\Models\Discipline;
use Illuminate\Http\Request;

class DisciplineController extends Controller
{
    public function get_discipline(Request $request)
    {
        $id_group = $request->id_group;
        $discipline = new Discipline();

        return $discipline->list_disciplines($id_group);
    }
}
