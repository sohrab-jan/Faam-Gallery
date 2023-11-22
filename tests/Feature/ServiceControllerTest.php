<?php

namespace Tests\Feature;

use App\Models\Service;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class ServiceControllerTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    public function setUp(): void
    {
        parent::setUp();

        Storage::fake('public');
    }

    /** @test */
    public function it_can_create_a_service()
    {
        $this->withoutExceptionHandling();

        $response = $this->post(route('admin.services.store'), $this->data());

        $response->assertRedirect(route('admin.services.index'));
        $this->assertCount(1, Service::all());
    }

    /** @test */
    public function it_can_update_a_service()
    {
        $this->withoutExceptionHandling();

        $service = Service::factory()->create();

        $response = $this->post(route('admin.services.update', $service), $this->data());

        $service->refresh();

        $response->assertRedirect(route('admin.services.index'));
        $this->assertEquals('New Title', $service->title);
    }

    /** @test */
    public function it_can_delete_a_service()
    {
        $this->withoutExceptionHandling();

        $service = Service::factory()->create();

        $response = $this->get(route('admin.services.delete', $service));

        $response->assertRedirect(route('admin.services.index'));
        $this->assertCount(0, Service::all());
    }

    private function data()
    {
        $image = UploadedFile::fake()->image('test_image.jpg');

        return [
            'title' => 'New Title',
            'image' => $image,
            'is_active' => true,
        ];
    }
}
