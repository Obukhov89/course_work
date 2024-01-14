<?php


namespace App\Http\Controllers;


use App\Models\Group;

class GroupController extends Controller
{
    public function getAllGroups()
    {
        $group = new Group();

        return $group->getAllGroup();
    }
}
