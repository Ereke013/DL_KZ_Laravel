<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeachersRequest;
use App\Models\Teachers;
use http\Env\Url;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeachersController extends Controller
{
    public function submit(TeachersRequest $req){
//        dd($req->input('email'));
//        echo $req->input('email');
//        $validation = $req->validate([
//           'email'=> 'required|min:5|max:50',
//            'message' => 'required|min:15|max:150'
//        ]);
        $teacher = new Teachers();
        echo "keldi";
        $teacher->name = $req->input('name');
        $teacher->surname = $req->input('surname');
        $teacher->email = $req->input('email');
        $teacher->level = $req->input('level');

        $teacher->save();

        return redirect()->route('teachers');
    }


    public function allData(){
        return view('teachersAdmin', ['data'=>Teachers::all()]);
    }

    public function teacherDetails($id){
        $teacher = new Teachers();
        return view('details', ['data'=>$teacher->find($id)], ['letter'=>'teacher']);
    }

    public function teacherEdit($id){
        $teacher = new Teachers();
        return view('edit', ['data'=>$teacher->find($id)], ['letter'=>'teacher']);
    }

    public function teacherDelete($id){
        $teacher = new Teachers();
        $teacher->find($id)->delete();
        return redirect()->route('teachers');
    }

    public function teacherSave($id, TeachersRequest $req){
        echo "saveke keldi";
        $teacher = new Teachers();
        $teacher = $teacher->find($id);
        $teacher->name = $req->input('name');
        $teacher->surname = $req->input('surname');
        $teacher->email = $req->input('email');
        $teacher->level = $req->input('level');

        $teacher->save();

        return redirect()->route('teachers-details', $id);
    }
}
