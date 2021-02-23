<?php

namespace Tests\Feature\Homework1;

use Tests\TestCase;

class Stage3Test extends TestCase
{
    /**
     * @test
     */
    public function shouldRejectWhenPostLotteryWithInvalidData()
    {
        $data = [
            'awards' => 'whatever',
        ];

        $this->post('/lottery', $data)
            ->assertStatus(302);
    }
}
