<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    private $users;

    public function __construct()
    {
        $this->users = new User();
    }
    public function index()
    {
        $userList = $this->users->getAllUser();
        return $userList;
    }


    public function store(Request $request)
    {
        $data = $request->all();
        $addUser = DB::table('users')->insert($data);
        return $addUser;
    }


    public function show($id)
    {
        $getUser = DB::table('users')->where('id', $id)->get();
        return $getUser;
    }

    public function update($id, Request $request)
    {
        $data = $request->all();
        $updateUser = DB::table('users')->where('id', $id)->update($data);
        return $updateUser;
    }

    public function destroy($id)
    {
        $destroyUser = DB::table('users')->where('id', $id)->delete();
        return $destroyUser;
    }
}
