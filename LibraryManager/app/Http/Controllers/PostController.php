<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    function detail(){
        $tieude = "Hello Word";
        $noidung ="Trương Tiến Dũng";
        return view('detail',[
            'tieude'=> $tieude,
            'noidung'=> $noidung
        ]);
    }
}
