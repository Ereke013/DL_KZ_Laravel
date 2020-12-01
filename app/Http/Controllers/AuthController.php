<?php

namespace App\Http\Controllers;

use App\Models\GroupLesson;
use App\Models\Groups;
use App\Models\Students;
use App\Models\Subjects;
use App\Models\Teach;
use App\Models\Teachers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function GuzzleHttp\Promise\all;

class AuthController extends Controller
{
    public function auth(Request $request){

        $student = new Students();
        $login = $request->input('login');
        $password = $request->input('password');

        if($login=='admin' && $password=='admin'){
            return redirect(route('admin'));
        }
        else {
            $student = $student->where(['login' => $login])->first();
            if (password_verify($password, $student->password)){
                $teachers = Teachers::all();
                $subjects = Subjects::all();
                $teach = DB::table('teaches')
                    ->join('teachers', 'teachers.id', '=', 'teaches.teacherId')
                    ->join('subjects', 'subjects.id', '=', 'teaches.subjectId')
                    ->select('teaches.*', 'teachers.name', 'teachers.surname', 'subjects.subject_name', 'subjects.code')
                    ->get();

                $gr_lesson = DB::table('group_lessons')
                    ->join('groups', 'groups.id', '=','group_lessons.groupId')
                    ->join('teaches', 'teaches.id', '=','group_lessons.teachId')
                    ->select('group_lessons.*','groups.group_name')->get();
//                return view('signIn', ['user'=>$student,'ttt'=>$teach, 'grLes'=>$gr_lesson, 'teachers'=>Teachers::all(), 'subjects'=>Subjects::all(), 'teaches'=>Teach::all(),'groups'=>Groups::all(),'groupSubj'=>GroupLesson::all()], ['check'=>'jai']);
                return view('userPage', ['user'=>$student,'ttt'=>$teach, 'grLes'=>$gr_lesson, 'teachers'=>Teachers::all(), 'subjects'=>Subjects::all(), 'teaches'=>Teach::all(),'groups'=>Groups::all(),'groupSubj'=>GroupLesson::all()]);
//                return view('user', ['user'=>$student, 'group'=>Groups::find($student->groupId), 'teachers'=>Teachers::all(), 'subjects'=>Subjects::all()]);
            }
            else{
                return redirect()->route('signIn')->with('error','Login or password incorrect');
            }
        }
    }
}
