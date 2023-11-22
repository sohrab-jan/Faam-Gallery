<?php

namespace Tests\Feature;

use Tests\TestCase;

class ContactControllerTest extends TestCase
{
    public function test_can_manager_store_a_contact()
    {
        $contact = [
            'fname' => 'zahra',
            'lname' => 'panahi',
            'email' => 'zahra.panahi@gmail.com',
            'phone' => '+989375559999',
            'city' => 'London',
            'artist' => 'artist',
            'collector' => 'collector',
            'message' => 'this is a test message',
        ];

        $response = $this->postJson(route('contacts.store', $contact));
        $response->assertRedirect(route('contact'));

        // Check if the contact was stored in the database
        $this->assertDatabaseHas('contacts', [
            'fname' => $contact['fname'],
            'lname' => $contact['lname'],
            'email' => $contact['email'],
            'phone' => $contact['phone'],
            'city' => $contact['city'],
            'artist' => $contact['artist'],
            'collector' => $contact['collector'],
            'message' => $contact['message'],
        ]);
    }
}
