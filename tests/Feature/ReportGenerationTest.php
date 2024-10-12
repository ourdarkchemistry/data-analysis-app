<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\DataRecord;

class ReportGenerationTest extends TestCase
{
    use RefreshDatabase;

    public function test_report_generation()
    {
        DataRecord::factory()->count(10)->create([
            'field1' => 'Test',
        ]);

        $response = $this->post(route('reports.generate'), [
            'field1' => 'Test',
        ]);

        $response->assertStatus(200);
        $response->assertViewHas('report');
    }
}
