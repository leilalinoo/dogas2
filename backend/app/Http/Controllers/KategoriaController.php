<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriaController extends Controller
{
    public function kategoriak(){
        $kategoriak = DB::select('
        SELECT *
        FROM kategorias
        ');
        return $kategoriak;
    }
}
