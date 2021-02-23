<?php

namespace Tests\Feature\Homework1;

use Tests\TestCase;

class Stage4Test extends TestCase
{
    /**
     * @test
     */
    public function shouldReturnJsonWhenCallAwards()
    {
        $this->getJson('/awards')
            ->assertStatus(200)
            ->assertJsonStructure();
    }
}
