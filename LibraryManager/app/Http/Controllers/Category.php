<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Category extends Controller
{
    function index(){
        echo 'hiện thị danh mục';
    }

    function add(){
        echo 'add';
    }

    function update($id, $parrent='100'){
        echo "giá trị được chuyển vào là : id=$id và parren=$parrent";
    }

    function delete(){
        echo 'delete';
    }

    function GetData(Request $request){
        // var_dump, die, beautifull
        // dd($request -> except('age'));
        // die();
        dd($request -> all());
        $ten = $request -> is('lay*');

        echo $ten;
        //$request
    }

    function SetCookie(){
        $res = new Response();
        $res -> withCookie('name', 'IT18A1.11');
        $res -> withCookie('School', 'DongA');


        return $res;
    }

    function GetCookie(Request $request){
        echo $request -> cookie('School');
    }

    function Upload(Request $request){
        echo $request -> hasFile('image');
        $request -> file('image') -> store('/');
    }
}