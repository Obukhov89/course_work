<?php


namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $user = new User();
        $data = [
          'login' => $request->login,
          'password' => $request->password
        ];

        if (!empty($data)){
            return $user->login($data);
        }
    }
}
