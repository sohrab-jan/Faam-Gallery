<?php

namespace Tests\Feature\Admin;

use App\Models\Admin;
use Tests\TestCase;

class AdminTest extends TestCase
{
    public function test_admin_can_see_login_page(): void
    {
        $response = $this->get(route('admin.login.form'));

        $response->assertStatus(200);
        $response->assertViewIs('admin.auth.login');
        $response->assertSee('Forgot your password?');
    }

    public function test_admin_can_login(): void
    {
        $admin = Admin::factory()->create();

        $data = [
            'email' => $admin->email,
            'password' => 12345678,
        ];

        $response = $this->post(route('login.functionality'), $data);

        $response->assertRedirect('/');
    }

    public function test_admin_cannot_login(): void
    {

        $data = [
            'email' => 'fake@gmail.com',
            'password' => 1234567,
        ];

        $response = $this->post(route('login.functionality'), $data);

        $response->assertRedirect('/');
    }
}
