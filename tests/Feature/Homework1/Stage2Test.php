<?php

namespace Tests\Feature\Homework1;

use Tests\TestCase;

class Stage2Test extends TestCase
{
    /**
     * @test
     */
    public function shouldCanFormPostToLottery()
    {
        $data = [
            'awards' => '1',
        ];

        $this->post('/lottery', $data)
            ->assertStatus(200)
            ->assertViewIs('lottery');
    }
}
