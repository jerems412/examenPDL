<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use function PHPUnit\Framework\isNull;
use Illuminate\Support\Facades\DB;

use App\Models\User;
use App\Models\Date;

class DateController extends Controller
{
    //persist date
    public function persist(Request $request,$id)
    {
        $date = new Date();
        $user = User::find($id);
        $date -> libelle = $request -> libelle;
        $date -> idUser = $user->id;
        $date -> save();
    }

    //find all dates with id user
    public function findAll($id)
    {
        $dates = Date::where('idUser', $id)->get();
        return response()->json($dates);
    }
}
