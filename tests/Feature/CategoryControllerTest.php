<?php

namespace Tests\Feature;

use App\Models\Category;
use Tests\TestCase;

class CategoryControllerTest extends TestCase
{
    public function test_can_manager_view_categories_list(): void
    {
        $categories = Category::factory()->count(10)->create();

        $response = $this->get(route('categories.index'));

        $response->assertViewIs('admin.category.list');
        $response->assertViewHas('categories', $categories);
    }

    public function test_it_returns_add_category_view(): void
    {
        $response = $this->get(route('categories.add'));

        $response->assertViewIs('admin.category.add');
    }

    public function test_can_manager_store_a_category()
    {
        $data = [
            'name' => 'Test Category',
            'parent_id' => Category::factory()->create()->id,
        ];

        $response = $this->postJson(route('categories.store', $data));
        $response->assertRedirect(route('categories.index'));

        // Check if the category was stored in the database
        $this->assertDatabaseHas('categories', [
            'name' => $data['name'],
            'parent_id' => $data['parent_id'],
        ]);

    }

    public function test_it_returns_edit_category_view(): void
    {
        $category = Category::factory()->create();

        $response = $this->get(route('categories.edit', $category));

        $response->assertViewIs('admin.category.edit');
        $response->assertViewHas('category', $category);
    }

    public function test_can_manager_update_a_category(): void
    {
        $category = Category::factory()->create();

        $data = [
            'name' => 'new name',
            'parent_id' => Category::factory()->create()->id,
        ];
        $response = $this->put(route('categories.update', $category), $data);

        $category->refresh();
        $this->assertEquals($data['name'], $category->name);

        $this->assertDatabaseHas('categories', [
            'id' => $category->id,
            'name' => $data['name'],
            'parent_id' => $data['parent_id'],
        ]);

        $response->assertRedirect(route('categories.index'));
    }

    public function test_can_manager_delete_a_category(): void
    {
        $category = Category::factory()->create();
        $response = $this->get(route('categories.delete', $category));

        $this->assertSoftDeleted($category);
        $response->assertRedirect(route('categories.index'));
    }
}
