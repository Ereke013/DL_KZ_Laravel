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
                $request->session()->put('student', $student);
                return redirect()->route('dlKz');
            }
            else{
                return redirect()->route('signIn')->with('error','Login or password incorrect');
            }
        }
    }
}
