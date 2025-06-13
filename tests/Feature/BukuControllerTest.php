<?php

namespace Tests\Feature;

use Tests\TestCase;
use PHPUnit\Framework\Attributes\Test;

class BukuControllerTest extends TestCase
{
    #[Test]
    public function test_testing_index_buku()
    {
        $this->getJson('/api/buku')
             ->assertOk()
             ->assertJsonPath('status', 'success')
             ->assertJsonStructure([
                 'code',
                 'status',
                 'data' => [
                     '*' => ['id', 'judul', 'penulis', 'penerbit', 'tahun_terbit', 'genre']
                 ]
             ]);
    }
}
