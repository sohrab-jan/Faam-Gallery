<?php

namespace Tests\Feature;

use App\Models\Product;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class ProductControllerTest extends TestCase
{
    public function test_can_manager_view_products_list(): void
    {
        $products = Product::factory()->count(10)->create();

        $response = $this->get(route('products.index'));

        $response->assertViewHas('products', $products);
        $response->assertViewIs('admin.Product.products');
    }

    public function test_it_returns_add_product_view(): void
    {
        $response = $this->get(route('products.add'));

        $response->assertViewIs('admin.Product.add');
    }

    public function test_can_manager_store_a_product(): void
    {
        Storage::fake('/public');
        $image = UploadedFile::fake()->image('test.png');
        $product = Product::factory()->make(['image' => $image]);

        $response = $this->withHeaders(['Accept' => 'application/json'])
            ->postJson(route('products.store'), $product->toArray());
        $response->assertRedirect(route('products.index'));

        // Check if the product was stored in the database
        $this->assertDatabaseHas('products', [
            'name' => $product['name'],
            'size' => $product['size'],
            'width' => $product['width'],
            'height' => $product['height'],
            //            'image' => $image,
            'price' => $product['price'],
            'product_short_des' => $product['product_short_des'],
            'product_long_des' => $product['product_long_des'],
            'artist_id' => $product['artist_id'],
            'category_id' => $product['category_id'],
        ]);
        Storage::delete($image->path());
    }

    public function test_it_returns_edit_product_view(): void
    {
        $product = Product::factory()->create();

        $response = $this->get(route('products.add', $product));

        $response->assertViewIs('admin.Product.add');
    }

    public function test_can_manager_update_a_product(): void
    {
        $product = Product::factory()->create();
        $image = UploadedFile::fake()->image('test.png');
        $productData = Product::factory()->make(['image' => $image]);
        $response = $this->put(route('products.update', $product), $productData->toArray());

        $product->refresh();

        $this->assertDatabaseHas('products', [
            'name' => $product['name'],
            'size' => $product['size'],
            'width' => $product['width'],
            'height' => $product['height'],
            //            'image' => $image,
            'price' => $product['price'],
            'product_short_des' => $product['product_short_des'],
            'product_long_des' => $product['product_long_des'],
            'artist_id' => $product['artist_id'],
            'category_id' => $product['category_id'],
        ]);

        $response->assertRedirect(route('products.index'));
        Storage::delete($image->path());
    }

    public function test_can_manager_delete_a_product(): void
    {
        $product = Product::factory()->create();
        $response = $this->get(route('products.delete', $product));

        $this->assertSoftDeleted($product);
        $response->assertRedirect(route('products.index'));
    }

    public function test_manager_can_update_product_image(): void
    {
        // Create a product
        $product = Product::factory()->create();

        // Simulate a PUT request with a new image
        $response = $this->post(route('products.image.update', $product), [
            'image' => UploadedFile::fake()->image('new_image.jpg'),
        ]);

        // Assert that the response is a redirect
        $response->assertRedirect(route('products.index'));

        // Assert that the product's image has been updated
        $product->refresh();
        $this->assertNotNull($product->image);
        $this->assertTrue(file_exists(public_path($product->image)));
    }
}
