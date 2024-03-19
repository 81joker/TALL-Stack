<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class NoteTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_notes_liveiwre_volt(): void
    {
        $response = $this->view('/notes');

        $response->assertStatus(200);
    }
}
