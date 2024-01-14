<?php


namespace App\Http\Controllers;


use App\Models\Group;

class GroupController extends Controller
{
    public function getAllGroups()
    {
        $arr_result = [];
        $group = new Group();

        $arr_request = $group->getAllGroup();

        foreach ($arr_request as $item){
            if (strpos($item->nameGroup, '109')){
                $arr_result['firstCourse'][]= [
                    'id' => $item->idGroup,
                    'nameGroup' => $item->nameGroup
                ];
            }

            if (strpos($item->nameGroup, '209')){
                $arr_result['secondCourse'][]= [
                    'id' => $item->idGroup,
                    'nameGroup' => $item->nameGroup
                ];
            }

            if (strpos($item->nameGroup, '309')){
                $arr_result['thirdCourse'][]= [
                    'id' => $item->idGroup,
                    'nameGroup' => $item->nameGroup
                ];
            }

            if (strpos($item->nameGroup, '409')){
                $arr_result['fourthCourse'][]= [
                    'id' => $item->idGroup,
                    'nameGroup' => $item->nameGroup
                ];
            }
        }

        return $arr_result;
    }
}
