<?php

namespace App\Http\Controllers;

use App\Http\Requests\GroupsRequest;
use App\Models\Groups;
use Illuminate\Http\Request;

class GroupsController extends Controller
{
    public function addnewGroup(GroupsRequest $req){
        $groups = new Groups();
        echo "keldi";
        $groups->group_name = $req->input('group_name');

        $groups->save();

        return redirect()->route('groups');
    }

    public function submit(GroupsRequest $request){
        $groups = new Groups();
        echo "keldi";
        $groups->group_name = $request->input('group_name');

        $groups->save();

        return redirect()->route('groups');
    }

    public function allData(){
        return view('groupsAdmin', ['data'=>Groups::all()]);
    }

    public function groupsDetails($id){
        $groups = new Groups();
        return view('details', ['data'=>$groups->find($id)], ['letter'=>'group']);
    }

    public function groupsEdit($id){
        $groups = new Groups();
        return view('edit', ['data'=>$groups->find($id)], ['letter'=>'group']);
    }

    public function groupsDelete($id){
        $groups = new Groups();
        $groups->find($id)->delete();
        return redirect()->route('group');
    }

    public function groupsSave($id, GroupsRequest $req){
        echo "saveke keldi";
        $group = new Groups();
        $group = $group->find($id);
        $group->group_name = $req->input('group_name');

        $group->save();

        return redirect()->route('groups')->with('success','Edit group name is successfully saved');
    }
}
