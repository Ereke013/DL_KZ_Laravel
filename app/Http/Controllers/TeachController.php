<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeachRequest;
use App\Models\Subjects;
use App\Models\Teach;
use App\Models\Teachers;
use Illuminate\Http\Request;

class TeachController extends Controller
{
    public function submit(TeachRequest $req)
    {
        $teach = new Teach();
        echo "keldi";
        $teach->teacherId = $req->input('teacherId');
        $teach->subjectId = $req->input('subjectId');

        $teach->save();

        return redirect()->route('teaches')->with('success','New Teacher Subject added successfully');
    }
    public function allData(){
        $teach = Teach::with('teacher')->with('subject')->get();
        return view('admin', ['data'=>$teach, 'teachers' => Teachers::all(), 'subjects' => Subjects::all()], ['layer' => 'teach']);
    }

    public function teachDetails($id){
        $teach = new Teach();
        return view('details', ['data'=>$teach->find($id)], ['letter'=>'teach']);
    }

    public function teachEdit($id){
        $teach = new Teach();
        return view('edit', ['data'=>$teach->find($id)], ['letter'=>'teach']);
    }

    public function teachDelete($id){
        $teach = new Teach();
        $teach->find($id)->delete();
        return redirect()->route('teaches');
    }

    public function teachSave($id, TeachRequest $req){
        echo "saveke keldi";
        $teach = new Teach();
        $teach = $teach->find($id);
        $teach->teacherId = $req->input('teacherId');
        $teach->subjectId = $req->input('subjectId');

        $teach->save();

        return redirect()->route('teaches-details', $id)->with('success', 'Teacher Subject saved successully');
    }
}
