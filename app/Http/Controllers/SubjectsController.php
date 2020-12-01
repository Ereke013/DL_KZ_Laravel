<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubjectsRequest;
use App\Models\Subjects;
use Illuminate\Http\Request;

class SubjectsController extends Controller
{
    public function submit(SubjectsRequest $req){
        $subject = new Subjects();
        echo "keldi";
        $subject->subject_name = $req->input('subject_name');
        $subject->credit = $req->input('credit');
        $subject->code = $req->input('code');

        $subject->save();

        return redirect()->route('subjects');
    }


    public function allData(){
        return view('subjectsAdmin', ['data'=>Subjects::all()]);
    }

    public function subjectDetails($id){
        $subject = new Subjects();
        return view('details', ['data'=>$subject->find($id)], ['letter'=>'subject']);
    }

    public function subjectEdit($id){
        $subject = new Subjects();
        return view('edit', ['data'=>$subject->find($id)], ['letter'=>'subject']);
    }

    public function subjectDelete($id){
        $subject = new Subjects();
        $subject->find($id)->delete();
        return redirect()->route('subjects');
    }

    public function subjectSave($id, SubjectsRequest $req){
        echo "saveke keldi";
        $subject = new Subjects();
        $subject = $subject->find($id);
        $subject->subject_name = $req->input('subject_name');
        $subject->credit = $req->input('credit');
        $subject->code = $req->input('code');

        $subject->save();

        return redirect()->route('subjects-details', $id);
    }
}
