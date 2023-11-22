<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\StoreCategoryRequest;
use App\Models\Category;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index(): View
    {
        $categories = Category::latest()->get();

        return view('admin.category.list', compact('categories'));
    }

    public function AddCategory()
    {
        return view('admin.category.add');
    }

    public function StoreCategory(StoreCategoryRequest $request)
    {
        Category::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'parent_id' => $request->parent_id,
        ]);

        return redirect()->route('categories.index')->with('message', 'Category Added Successfully!');
    }

    public function EditCategory(Category $category)
    {
        return view('admin.category.edit', compact('category'));
    }

    public function UpdateCategory(Category $category, StoreCategoryRequest $request)
    {
        $name = $request->name;
        $category->update([
            'name' => $name,
            'slug' => Str::slug($name),
            'parent_id' => $request->parent_id,
        ]);

        return redirect()->route('categories.index')->with('message', 'Category Updated  Successfully!');
    }

    public function DeleteCategory(Category $category)
    {
        $category->delete();

        return redirect()->route('categories.index')->with('message', 'Category Deleted Successfully');
    }
}
