<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    //
    public function index(){
        $title = "Hello larravel";

        $name = "luan";
        $user1 = DB::table('student')->get();
        $user2 = DB::table('student')->select('id','name','email')->get();
        $user3 = DB::table('student')->where('id','=',1)->first();
        $countstudents = DB::table('student')->count();
        $studentCondition = DB::table('student')->where('id','>=',1)->where('id','<=',5)->orWhere('id','=',10)->get();
        // dd($user3);
        dd($studentCondition);
        $user = student::all();
        return view('student.index',compact("title","user3","name"));
    }
}
