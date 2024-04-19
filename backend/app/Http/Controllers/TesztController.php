<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TesztController extends Controller
{
    public function tesztek(){
        $tesztek = DB::select('
        SELECT *, kategorias.kategorianev
        FROM teszts
        inner join kategorias
        on teszts.kategoriaId = kategorias.id
        ');
        return $tesztek;
    }

    public function teszt_kat($katId){
        $teszt = DB::table('teszts')
        ->select(
            '*',
        )
        ->join('kategorias', 'teszts.kategoriaId', '=', 'kategorias.id')
        ->where('kategoriaId', '=', $katId)
        ->get();
        return $teszt;
    }
}
