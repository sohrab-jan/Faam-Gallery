<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\Product\CreateProductRequest;
use App\Http\Requests\Admin\Product\UpdateProductImageRequest;
use App\Models\Artist;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->get();

        return view('admin.Product.products', compact('products'));
    }

    public function AddProduct()
    {
        $categories = Category::latest()->get();
        $artists = Artist::latest()->get();

        return view('admin.Product.add', compact('categories', 'artists'));
    }

    public function store(CreateProductRequest $request)
    {
        $image = $request->file('image');
        $img_name = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $img_name);
        $img_url = 'images/'.$img_name;

        Product::create([
            'name' => $request->name,
            'size' => $request->size,
            'width' => $request->width,
            'height' => $request->height,
            'product_short_des' => $request->product_short_des,
            'product_long_des' => $request->product_long_des,
            'price' => $request->price,
            'artist_id' => $request->artist_id,
            'category_id' => $request->category_id,
            'quantity' => $request->quantity,
            'image' => $img_url,
            'slug' => strtolower(str_replace('', '-', $request->name)),
        ]);

        return redirect()->route('products.index')->with('message', 'Product Added  Successfully!');
    }

    public function editImage(Product $product)
    {
        return view('admin.Product.editImage', compact('product'));
    }

    public function updateProductImg(UpdateProductImageRequest $request, Product $product)
    {
        $previous_img_url = $product->image;

        // Check if a new image was uploaded
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $img_name = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $request->image->move(public_path('images'), $img_name);
            $img_url = 'images/'.$img_name;

            // Delete the previous image
            if ($previous_img_url && file_exists(public_path($previous_img_url))) {
                unlink(public_path($previous_img_url));
            }

            // Update the product with the new image
            $product->update(['image' => $img_url]);
            $product->refresh();
        }

        return redirect()->route('products.index')->with('message', 'Product Image Updated Successfully!');
    }

    public function editProduct(Product $product)
    {
        return view('admin.Product.edit', compact('product'));
    }

    public function update(CreateProductRequest $request, Product $product)
    {
        $product->update([
            'name' => $request->name,
            'size' => $request->size,
            'width' => $request->width,
            'height' => $request->height,
            'product_short_des' => $request->product_short_des,
            'product_long_des' => $request->product_long_des,
            'price' => $request->price,
            'artist_id' => $request->artist_id,
            'category_id' => $request->category_id,
            'quantity' => $request->quantity,
            'slug' => strtolower(str_replace('', '-', $request->name)),
        ]);

        return redirect()->route('products.index')->with('message', 'Product Information Updated Successfully!');
    }

    public function delete(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')->with('message', 'Product Deleted  Successfully!');
    }

    public function cart()
    {
        return view('pages.addtocart');
    }
}
