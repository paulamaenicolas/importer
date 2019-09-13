<?php

namespace Tests\Unit;

use App\Http\Controllers\ImporterController;
use App\Importer;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ImporterTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testImportPlayers()
    {
        $importer = factory(Importer::class, 2)->create();
        $this->get('/api/getAllPlayers')
            ->assertStatus(200)
            ->assertJsonStructure([
                '*' => [ 'id', 'first_name'],
            ]);
    }

    public function testGetAllPlayers()
    {
        $this->get('/api/getAllPlayers/')
            ->assertStatus(200)
            ->assertJsonStructure([
                '*' => ['id', 'first_name', 'second_name']
            ]);
    }

    public function testShow()
    {
        $importer = factory(Importer::class)->create();
        $this->get(route('findPlayer', $importer->id))
            ->assertStatus(200);
    }
}
