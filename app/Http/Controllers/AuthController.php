<?php

namespace App\Http\Controllers;

use App\Models\GroupLesson;
use App\Models\Groups;
use App\Models\Students;
use App\Models\Subjects;
use App\Models\Teach;
use App\Models\Teachers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function auth(Request $request){

        $student = new Students();
        $login = $request->input('login');
        $password = $request->input('password');

        if($login=='admin' && $password=='admin'){
            $request->session()->put('admin', "admin");
            return redirect(route('admin'));
        }
        else {
            $student = $student->where(['login' => $login])->first();
            if (password_verify($password, $student->password)){
                $request->session()->put('student', $student);
                return redirect()->route('dlKz');
            }
            else{
                return redirect()->route('signIn')->with('error','Login or password incorrect');
            }
        }
    }

    public function changePassword($id, Request $request){

        $old_password = $request->input('old_password');
        $new_password = $request->input('new_password');
        $re_password = $request->input('re_password');

        if($new_password==$re_password){
            $student = new Students();
            $student = $student->find($id);

            $user = new User();
            $user = $user->find($student->userId);
            if(password_verify($old_password, $user->password)){
                $user->password = Hash::make($new_password);
                $user->save();
                return redirect()->route('settings')->with('success', 'Password changed successfully');
            }
            return redirect()->route('settings')->with('error', 'Old password is incorrect');
        }
        return redirect()->route('settings')->with('error', 'New password and re-password is incorrect');
    }
}
