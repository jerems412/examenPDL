<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use function PHPUnit\Framework\isNull;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use App\Models\User;


class UserController extends Controller
{

    //login
    public function login(Request $request)
    {
        $trouve = false;
        $user = 0;
        $success = false;
        $listUser = User::all();
        
        foreach ($listUser as $value) {
            if($value -> login == $request -> login && Hash::check($request->password, $value->password))
            {
                $trouve = true;
                $user = $value;
            }
        }
        if($trouve)
        {
            $success = true;
            return response()->json([
                'success' => $success,
                'user' => $user,
            ]);
        }else{
            return response()->json($success);
        } 
    }

    //register
    public function register(Request $request)
    {
        $success = false;
        $trouve = false;
        $user = 0;
        $success = false;
        $listUser = User::all();
        foreach ($listUser as $value) {
            if($value -> login == $request -> login)
            {
                $trouve = true;
                $user = $value;
            }
        }
        if($trouve)
        {
            return response()->json($success);
        }else{
            $user = new User();
            $user -> login = $request -> login;
            $user -> password = $request -> password;
            $user -> save();
            $success = true;
            return response()->json($success);
        }
    }

}
