<?php

namespace App\Http\Controllers;

use App\Http\Requests\GroupLessonRequest;
use App\Models\GroupLesson;
use App\Models\Subjects;
use App\Models\Teachers;
use Illuminate\Http\Request;

class GroupLessonController extends Controller
{
    public function submit(GroupLessonRequest $req)
    {
        $gr_lesson = new GroupLesson();
        echo "keldi";
        $gr_lesson->groupId = $req->input('groupId');
        $gr_lesson->teachId = $req->input('teachId');

        $gr_lesson->save();

        return redirect()->route('group_lessons')->with('success','New Group Lessons added successfully');
    }
    public function allData(){
        $groupLesson = GroupLesson::with('group')->with('teach')->get();
        return view('admin', ['data'=>$groupLesson, 'subjects'=>Subjects::all(), 'teachers' => Teachers::all()], ['layer' => 'groupLesson']);
    }

    public function grLessonsDetails($id){
        $grLesson = new GroupLesson();
        return view('details', ['data'=>$grLesson->find($id)], ['letter'=>'grLesson']);
    }

    public function grLessonsEdit($id){
        $grLesson = new GroupLesson();
        return view('edit', ['data'=>$grLesson->find($id)], ['letter'=>'grLesson']);
    }

    public function grLessonsDelete($id){
        $grLesson = new GroupLesson();
        $grLesson->find($id)->delete();
        return redirect()->route('group_lessons')->with('success', 'Group Lesson deleted successfully');
    }

    public function grLessonsSave($id, GroupLessonRequest $req){
        echo "saveke keldi";
        $grLesson = new GroupLesson();
        $grLesson = $grLesson->find($id);
        $grLesson->groupId = $req->input('groupId');
        $grLesson->teachId = $req->input('teachId');

        $grLesson->save();

        return redirect()->route('teaches-details', $id)->with('success', 'Group Lesson saved successully');
    }
}
