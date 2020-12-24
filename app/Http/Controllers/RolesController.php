<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoleRequest;
use App\Models\Role;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    public function submit(RoleRequest $req){
        $role = new Role();
        echo "keldi";
        $role->role_name = $req->input('role_name');

        $role->save();

        return redirect()->route('roles');
    }


    public function allData(){
        return view('Admin', ['data'=>Role::all()], ['layer'=>'role']);
    }


    public function rolesEdit($id){
        $role = new Role();
        return view('edit', ['data'=>$role->find($id)], ['letter'=>'role']);
    }

    public function rolesDelete($id){
        $role = new Role();
        $role->find($id)->delete();
        return redirect()->route('roles');
    }

    public function rolesSave($id, RoleRequest $req){
        echo "saveke keldi";
        $role = new Role();
        $role = $role->find($id);
        $role->subject_name = $req->input('role_name');

        $role->save();

        return redirect()->route('roles');
    }
}
