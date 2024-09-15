<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BooksTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/api/books');

        $response->assertStatus(200);
    }

    public function test_the_application_returns_a_failed_response(): void
    {
        $response = $this->get('/api/books/abdcd');

        $response->assertStatus(404);
        $response->assertContent('{"error":"Book not found"}');
    }

    public function test_the_application_shows_a_book(): void
    {
        $response = $this->get('/api/books/1');

        $response->assertStatus(200);
    }

    public function test_the_application_fails_showing_book(): void
    {
        $response = $this->get('/api/books/abdcd');

        $response->assertStatus(404);
        $response->assertContent('{"error":"Book not found"}');
    }

    public function test_the_application_deletes_a_book(): void
    {
        $response = $this->delete('/api/books/1');

        $response->assertStatus(202);
    }
}
