<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryProductController extends Controller
{
    public function add_category_product()
    {
        return view('admin.add_category_product');
    }

    public function save_category_product(Request $request)
    {
        $data = $request->validate([
            'category_name' => 'required|string|max:255',
            'category_description' => 'nullable|string',
            'category_status' => 'required|boolean',
        ]);

        // Tạo danh mục mới trong database
        \DB::table('categories')->insert($data);

        return redirect()->route('add.category')->with('message', 'Danh mục sản phẩm được thêm thành công!');
    }


    public function all_category_product()
    {
        $categories = \DB::table('categories')->get();
        return view('admin.show_category_product', compact('categories'));
    }

}
