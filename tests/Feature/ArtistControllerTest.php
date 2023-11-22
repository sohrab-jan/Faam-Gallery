<?php

namespace Tests\Feature;

use App\Models\Artist;
use Tests\TestCase;

class ArtistControllerTest extends TestCase
{
    public function test_can_manager_view_artists_list(): void
    {
        $artists = Artist::factory()->count(10)->create();

        $response = $this->get(route('admin.artists.index'));

        $response->assertViewIs('admin.Artist.List');
        $response->assertViewHas('artists', $artists);
    }

    public function test_it_returns_add_artist_view(): void
    {
        $response = $this->get(route('admin.artists.add'));

        $response->assertViewIs('admin.Artist.Add');
    }

    public function test_can_manager_store_a_artist()
    {
        $artist = [
            'first_name' => 'zahra',
            'last_name' => 'panahi',
            'email' => 'zahra.panahi@gmail.com',
            'phone' => '+989375559999',
            'city' => 'London',
        ];

        $response = $this->postJson(route('admin.artists.store', $artist));
        $response->assertRedirect(route('admin.artists.index'));

        // Check if the artist was stored in the database
        $this->assertDatabaseHas('artists', [
            'first_name' => $artist['first_name'],
            'city' => $artist['city'],
        ]);

    }

    public function test_it_returns_edit_artist_view(): void
    {
        $artist = Artist::factory()->create();

        $response = $this->get(route('admin.artists.add', $artist));

        $response->assertViewIs('admin.Artist.Add');
        //        $response->assertViewHas('artist', $artist);
    }

    public function test_can_manager_update_a_artist(): void
    {
        $artist = Artist::factory()->create();

        $data = [
            'first_name' => 'zahra',
            'last_name' => 'panahi',
            'email' => 'zahra.panahi@gmail.com',
            'phone' => '+989375559999',
            'city' => 'London',
        ];
        $response = $this->put(route('admin.artists.update', $artist), $data);

        $artist->refresh();
        $this->assertEquals($data['first_name'], $artist->first_name);

        $this->assertDatabaseHas('artists', [
            'id' => $artist->id,
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'city' => $data['city'],
        ]);

        $response->assertRedirect(route('admin.artists.index'));
    }

    public function test_can_manager_delete_a_artist(): void
    {
        $artist = Artist::factory()->create();
        $response = $this->get(route('admin.artists.delete', $artist));

        $this->assertSoftDeleted($artist);
        $response->assertRedirect(route('admin.artists.index'));
    }
}
