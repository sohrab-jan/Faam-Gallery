<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function Index()
    {

        $data['header_title'] = 'Category';

        return view('admin.category.list', $data);
    }

    public function AddCategory()
    {

        $data['header_title'] = 'Add New Category';

        return view('admin.category.add', $data);
    }
    //    public function insert(Request $request)
    //    {
    //        request()->validate([
    //            'slug' => 'required|unique:categories',
    //        ]);
    //        $category = new Category;
    //        $category->name = trim($request->name);
    //        $category->slug = trim($request->slug);
    //        $category->status = trim($request->status);
    //        $category->meta_title = trim($request->meta_title);
    //        $category->meta_description = trim($request->meta_description);
    //        $category->meta_keywords = trim($request->meta_keywords);
    //
    //        $category->save();
    // return redirect('admin/category/list')->with("Category Successfully Created");
    //
    //    }
}
