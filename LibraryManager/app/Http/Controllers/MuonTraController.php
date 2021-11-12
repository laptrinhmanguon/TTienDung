<?php

namespace App\Http\Controllers;

use App\Models\tbl_sach;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\tbl_muontra;

class MuonTraController extends Controller
{
    function index()
    {

        $Tbl_muon = DB::table('muon_tra')->select('*');
        $Tbl_muon = $Tbl_muon->get();

        return view('/layout/muon_tra', compact('Tbl_muon'));
    }
    function add(Request $request){
        $Tbl_muon = new tbl_muontra;
        $Tbl_muon -> tendocgia = $request -> tendocgia;
        $Tbl_muon -> madocgia = $request -> madocgia;
        $Tbl_muon -> lop = $request -> lop;
        $Tbl_muon -> sodienthoai = $request -> sodienthoai;
        $Tbl_muon -> tensach = $request -> tensach;
        $Tbl_muon -> masach = $request -> masach;
        $Tbl_muon -> sophieu = $request -> sophieu;
        $Tbl_muon -> thuthu = $request -> thuthu;

        $Tbl_muon -> save();
        return redirect('/muon-tra');
    }
    function delete($id){
        $Tbl_muon = tbl_muontra::find($id);
        $Tbl_muon->delete();

        return redirect('/muon-tra')->with('success','đã xóa');
    }
}
