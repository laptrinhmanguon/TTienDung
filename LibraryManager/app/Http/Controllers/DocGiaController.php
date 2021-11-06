<?php

namespace App\Http\Controllers;

use App\Models\tbl_docgia;
use App\Models\tbl_sach;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function Sodium\compare;

class DocGiaController extends Controller
{
    function index(){
        $Tbl_docgia = DB::table('doc_gia')->select('*');
        $Tbl_docgia = $Tbl_docgia->get();

        return view('layout/docgia', compact('Tbl_docgia'));
    }
    function add(Request $request){
        $Tbl_docgia = new tbl_docgia;
        $Tbl_docgia -> tendocgia = $request -> tendocgia;
        $Tbl_docgia -> madocgia = $request -> madocgia;
        $Tbl_docgia -> diachi = $request -> diachi;
        $Tbl_docgia -> sodienthoai = $request -> sodienthoai;
        $Tbl_docgia -> sachdangmuon = $request -> sachdangmuon;


        $Tbl_docgia->save();
        return redirect('/docgia');

    }
    function delete($id){
        $Tbl_docgia = tbl_docgia::find($id);
        $Tbl_docgia->delete();

        return redirect('/docgia')->with('success','đã xóa');
    }
}
