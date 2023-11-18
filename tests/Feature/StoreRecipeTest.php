<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class StoreRecipeTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_storing_recipe_with_tx_in_model(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
