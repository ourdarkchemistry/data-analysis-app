<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class DataImportTest extends TestCase
{
    use RefreshDatabase;

    public function test_data_import()
    {
        Storage::fake('local');

        $file = UploadedFile::fake()->create('data.csv', 100, 'text/csv');

        $response = $this->post(route('data.import'), [
            'data_file' => $file,
        ]);

        $response->assertRedirect(route('data.index'));
        $response->assertSessionHas('success', 'Data imported successfully.');
    }
}
