<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Category;

class CategoriesController extends BaseController
{

    // GET: Hàm hiển thị danh sách
    public function index()
    {

        $categories = Category::select('id', 'name', 'status')->where('id', '>', 0)->get(); // lấy ra các bản ghi theo điều kiện
        $count = Category::count();
        return $this->render('categories.index', compact('categories', 'count'));
    }

    public function create()
    {
        return $this->render('categories.add', []);
    }

    public function store()
    {
        $categories = new Category();
        $categories->name = $_POST['name'];
        $categories->status = (int) $_POST['status'];

        $categories->save();

        $url = BASE_URL . 'categories';
        header("location: $url");
    }

    public function destroy($id)
    {
        $categories = Category::find($id);

        if ($categories && $categories->delete()) {
            $url = BASE_URL . 'categories';
            header("location: $url");
        }
    }

    public function edit($id)
    {
        $categories = Category::find($id);

        return $this->render('categories.edit', compact('categories'));
    }

    public function update($id)
    {
        $categories = Category::find($id);
        $categories->name = $_POST['name'];
        $categories->status = (int) $_POST['status'];

        $categories->save();

        $url = BASE_URL . 'categories';
        header("location: $url");
    }
}
