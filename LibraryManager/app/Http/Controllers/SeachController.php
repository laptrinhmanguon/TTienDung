<?php

namespace App\Http\Controllers;

use App\Models\tbl_sach;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeachController extends Controller
{
    function index (){
        $Tbl_sach = DB::table('sach')->select('*');
        $Tbl_sach = $Tbl_sach->get();

        return view('layout/seach', compact('Tbl_sach'));
    }
}
