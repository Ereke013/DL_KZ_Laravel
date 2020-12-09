<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentsRequest;
use App\Models\Groups;
use App\Models\Role;
use App\Models\Students;
use App\Models\Teachers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

class StudentsController extends Controller
{
    public function submit(StudentsRequest $req)
    {
//        dd($req->input('email'));
//        echo $req->input('email');
//        $validation = $req->validate([
//           'email'=> 'required|min:5|max:50',
//            'message' => 'required|min:15|max:150'
//        ]);
        $students = new Students();
        echo "keldi";
        $students->name = $req->input('name');
        $students->surname = $req->input('surname');
        $students->bday = $req->input('bday');
        $students->phoneNumber = $req->input('phoneNumber');
        $students->email = $req->input('email');
        $students->speciality = $req->input('speciality');
        $students->groupId = $req->input('groupId');
        $students->login = $req->input('login');
        $students->password = password_hash($req->input('password'), PASSWORD_DEFAULT);

        $students->save();

        return redirect()->route('students')->with('success','New Student added successfully');
    }
    public function allData(){
        $students = Students::with('group')->get();
//        $students = DB::table('students')
//            ->join('roles', 'roles.id','=', 'students.roleId')
//            ->join('groups','groups.id','=','students.groupId')
//            ->select('students.*','groups.group_name','roles.role_name')
//            ->get();
        return view('studentsAdmin', ['data'=>$students, 'roles'=>Role::all()], ['dataGroups' => Groups::all()]);
    }

    public function studentDetails($id){
        $student = new Students();
        return view('details', ['data'=>$student->find($id)], ['letter'=>'student']);
    }

    public function studentEdit($id){
        $student = new Students();
        return view('edit', ['data'=>$student->find($id)], ['letter'=>'student']);
    }

    public function studentDelete($id){
        $student = new Students();
        $student->find($id)->delete();
        return redirect()->route('students');
    }

    public function studentSave($id, StudentsRequest $req){
        echo "saveke keldi";
        $student = new Students();
        $student = $student->find($id);
        $student->name = $req->input('name');
        $student->surname = $req->input('surname');
        $student->bday = $req->input('bday');
        $student->phoneNumber = $req->input('phoneNumber');
        $student->email = $req->input('email');
        $student->speciality = $req->input('speciality');
        $student->groupId = $req->input('groupId');
//        $student->password = password_hash($req->input('password'), PASSWORD_DEFAULT);
//        $student->password = Crypt::encrypt($req->input('password'));

        $student->save();

        return redirect()->route('students-details', $id)->with('success', 'Student saved successully');
    }

    public function profile($id){
        $student = new Students();
        $student = $student->find($id);


    }
}
