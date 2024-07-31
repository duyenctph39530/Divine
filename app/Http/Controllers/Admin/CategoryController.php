<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.list_category', compact('categories'));
    }
    public function create()
    {
        return view('admin.category.create_category');
    }
    public function store(Request $request)
    {
        $data = $request->all();
        Category::create($data);
        return redirect()->route('list-category')->with('mes', 'Thêm thành công !');
    }
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('list-category')->with('mes', 'Xóa thành công!');
    }
    public function edit(Category $category)
    {
        return view('admin.category.edit_category', compact('category'));
    }
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
        $data = $request->only('name');

        $category->update($data);
        return redirect()->back()->with('mes', 'Sửa thành công');

    }
    


}
