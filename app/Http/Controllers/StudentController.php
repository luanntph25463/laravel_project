<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class StudentController extends Controller
{
    //
    public function index(){
        $title = "Hello larravel";

        $name = "luan";
        $user1 = DB::table('student')->get();
        $user2 = DB::table('student')->select('id','name','email','image')->get();
        $user3 = DB::table('student')->where('id','=',1)->first();
        $countstudents = DB::table('student')->count();
        $studentCondition = DB::table('student')->where('id','>=',1)->where('id','<=',5)->orWhere('id','=',10)->get();
        // dd($user3);
        // dd($studentCondition);
        $user = student::all();
        return view('student.index',compact("title","user1","name"));
    }
    public function store(StudentRequest $request){
        if($request->post()){
            // nếu như tồn tại file sẽ upload file
            $params = $request->except('_token');
            if($request->hasFile('image') && $request->file('image')->isValid()){
                $params['image'] = uploadFile('hinh', $request->file('image'));
            }
            $student  = student::create($params);
            if($student->id){
                Session::flash('success','ADD Thành Công');
                return redirect()->route('student.list');
            }
            // $student->fill($request->post())->save();

        }

        return view('student.create');
    }
    public function edit(StudentRequest $request,$id){
        if($request->isMethod('post')){
            $student  = DB::table('student')->where('id',$id)->update($request->except("_token"));
            if($student){
                Session::flash('success','Sửa Thành Công');
                return redirect()->route('student.list');
            }
            // $student->fill($request->post())->save();

        }
        $student = Student::find($id);
        return view('student.update',compact('student'));
    }
    public function delete(){
        $student = Student::find(1);
        $student->delete();
        return redirect()->route('student.list');
    }
}
