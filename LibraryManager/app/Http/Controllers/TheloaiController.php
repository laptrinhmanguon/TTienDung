<?php

namespace App\Http\Controllers;

use App\Models\tbl_sach;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TheloaiController extends Controller
{
    function index()
    {

    }
    function truyentranh(){
        $Tbl_sach = DB::table('sach')->where('theloai','Truyện Tranh')->orderBy('id','desc')->get();

        return view('/layout/theloai',compact('Tbl_sach'));
    }
    function khoahoc(){
        $Tbl_sach = DB::table('sach')->where('theloai','Khoa Học')->get();

        return view('/layout/theloai',compact('Tbl_sach'));
    }
    function daoly(){
        $Tbl_sach = DB::table('sach')->where('theloai','Đạo Lý')->get();

        return view('/layout/theloai',compact('Tbl_sach'));
    }
    function kinhdoanh(){
        $Tbl_sach = DB::table('sach')->where('theloai','Kinh Doanh')->get();

        return view('/layout/theloai',compact('Tbl_sach'));
    }
    function truyen18(){
        $Tbl_sach = DB::table('sach')->where('theloai','Truyện 18+')->get();

        return view('/layout/theloai',compact('Tbl_sach'));
    }
    function truyenthieunhi(){
        $Tbl_sach = DB::table('sach')->where('theloai','Truyện Thiếu Nhi')->get();

        return view('/layout/theloai',compact('Tbl_sach'));
    }

}
