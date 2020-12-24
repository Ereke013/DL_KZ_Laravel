<?php

namespace App\Http\Controllers;

use App\Actions\Fortify\PasswordValidationRules;
use App\Http\Requests\UsersRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    use PasswordValidationRules;

    public function allData(){
        return view("admin",['users'=>User::all()],['layer' => 'user']);
    }

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function addUserForm(Request $request){


        $fullName = $request->input('name');
        $email = $request->input('email');

        $password = $request->input('password');

        $passwordHash = Hash::make($password);

//        $role = $request->input('role');



        $arrToInsert = array("name"=>$fullName,"email"=>$email,"password"=>$passwordHash,"utype"=>"STU");

        DB::table('users')->insert($arrToInsert);


        return redirect()->route("users");

    }

    public function userEdit($id){
        $student = new User();
        return view('edit', ['data'=>$student->find($id)], ['letter'=>'user']);
    }

    public function saveUserForm($id, Request $request){


        $fullName = $request->input('name');
        $email = $request->input('email');

        $password = $request->input('password');

        $passwordHash = Hash::make($password);

//        $role = $request->input('role');



        $arrToInsert = array("id"=>$id, "name"=>$fullName,"email"=>$email,"password"=>$passwordHash,"utype"=>"STU");

        DB::table('users')->update($arrToInsert);


        return redirect()->route("students");


    }


}
