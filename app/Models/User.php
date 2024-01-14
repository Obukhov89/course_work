<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function login($data){
        $query = DB::select('select * from `users` where `login` = :login', ['login' => $data['login']]);
        $arrUser = [];
        foreach ($query as $item){
            if (Hash::check($data['password'], $item->password)){
                $arrUser = [
                    'id_user' => $item->id,
                    'login' => $item->login,
                    'last_name' => $item->last_name,
                    'first_name' => $item->first_name,
                    'second_name' => $item->second_name,
                    'email' => $item->email
                ];

                $query_role = DB::select('select * from `usersroles` left join `roles`
                                on `roles`.`idRole` = `usersroles`.`idRole` where `usersroles`.`idUser` = :idUser',
                                ['idUser' => $arrUser['id_user']]);
                foreach ($query_role as $value){
                    $arrUser['id_role'] = $value->idRole;
                    $arrUser['name_role'] = $value->nameRole;
                }

                return $arrUser;
            }
            else{
                return response()->json(['error' => 'no auth'], 401);
            }
        }
    }
}
