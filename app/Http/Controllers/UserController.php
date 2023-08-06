<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return User::all();
    }

    public function show($id)
    {
        return User::find($id);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'password' => 'required',
            'email' => 'required|email|unique:users'
        ]);

        $insert_data = $request->all();
        $insert_data['password'] = Hash::make($insert_data['password']);
        return User::create($insert_data);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'password' => 'sometimes|required',
            'email' => 'required|email|unique:users,email,'.$id
        ]);

        $user = User::find($id);
        $user->update($request->all());
        return $user;
    }

    public function destroy($id)
    {
        User::find($id)->delete();
        return response()->json(['message' => 'User deleted successfully']);
    }
}

