<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;

class UserController extends BaseController
{

    // GET: Hàm hiển thị danh sách
    public function index()
    {

        $users = User::select('id', 'name', 'status', 'email')->where('id', '>', 0)->get();
        $count = User::count();
        return $this->render('users.index', compact('users', 'count'));
    }

    public function create()
    {
        return $this->render('users.add', []);
    }

    public function store()
    {
        $users = new User();
        $users->name = $_POST['name'];
        $users->password = password_hash($_POST['password'], PASSWORD_BCRYPT); // ở hàm login, cần sử dụng password_verify để tiến hành kiểm tra password
        $users->email = $_POST['email'];
        $users->status = (int) $_POST['status'];

        $users->save();

        $url = BASE_URL . 'users';
        header("location: $url");
    }

    public function destroy($id)
    {
        $users = User::find($id);

        if ($users && $users->delete()) {
            $url = BASE_URL . 'users';
            header("location: $url");
        }
    }

    public function edit($id)
    {
        $users = User::find($id);

        return $this->render('users.edit', compact('users'));
    }

    public function update($id)
    {
        $users = User::find($id);
        $users->name = $_POST['name'];
        $users->password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $users->email = $_POST['email'];
        $users->status = (int) $_POST['status'];

        $users->save();

        $url = BASE_URL . 'users';
        header("location: $url");
    }
}
