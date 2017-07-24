<?php

namespace App\Http\Controllers;

use App\AddUser;
use App\User;
use Illuminate\Http\Request;


class AddUserController extends Controller
{
    public function adduser(Request $request)
    {
        $request['password'] = bcrypt($request->password);
        //dd($request->all());
        $adduser = new User($request->all());
        $adduser->save();

        return redirect('/addusers')->with('status', $adduser->users_first_name . '   Successfully Added');
    }

    public function updateUser(Request $request)
    {
        $request['password'] = bcrypt($request->password);
        //dd($request->all());
        $adduser = User::where('email', $request['email'])->first();
        $adduser->update($request->all());

        return redirect('/edit_user')->with('status', $adduser->users_first_name . '   Successfully Updated');
    }
    public function updateUserview(){
        return view('forms.edit_user');
    }

    public function showusers()
    {
        $users = User::all();
        return view('tables.usersmaster', compact('users'));
    }

    public function delete($id)
    {
        $adduser = User::findorFail($id);
        $adduser->delete();
        return redirect('/usersmaster')->with('status', $adduser->first_name . '   Successfully deleted');

    }

    public function edit(Request $request)
    {
        $adduser = User::findorFail($request->id);
        $adduser->update($request->all());
        return redirect('/usersmaster')->with('status', $adduser->name . '   Successfully Edited');

    }

    public function profile()
    {
        return redirect('/profile');
    }


}
