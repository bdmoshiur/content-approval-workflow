<?php

namespace Tests\Feature;

use Tests\TestCase;

class ContentApprovalWorkflowTest extends TestCase
{
    public function test_index()
    {
        $response = $this->get('/content-approval');
        $response->assertStatus(200);
    }

    public function test_store()
    {
        $response = $this->post('/content-approval/store', [
            'title' => 'Test Title',
            'description' => 'Test Description',
        ]);
        $response->assertStatus(201);
    }
}
