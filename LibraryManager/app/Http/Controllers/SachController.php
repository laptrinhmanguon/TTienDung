<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tbl_sach;
use Illuminate\Support\Facades\DB;

class SachController extends Controller
{
    function index()
    {
        $Tbl_sach = DB::table('sach')->select('*');
        $Tbl_sach = $Tbl_sach->get();

        return view('layout/index', compact('Tbl_sach'));

    }

    function add(Request $request)
    {
        $Tbl_sach = new tbl_sach;
        $Tbl_sach->tensach = $request->tensach;
        $Tbl_sach->theloai = $request->theloai;
        $Tbl_sach->namxuatban = $request->namxuatban;
        $Tbl_sach->tacgia = $request->tacgia;
        $Tbl_sach->masach = $request->masach;

        $Tbl_sach->save();
        return redirect('/');
    }
    function delete($id){
        $Tbl_sach = tbl_sach::find($id);
        $Tbl_sach->delete();

        return redirect('/')->with('success','đã xóa');
    }
}
