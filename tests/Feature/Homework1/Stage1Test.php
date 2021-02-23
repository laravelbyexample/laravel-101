<?php

namespace Tests\Feature\Homework1;

use Tests\TestCase;

class Stage1Test extends TestCase
{
    /**
     * @test
     */
    public function shouldShowLotteryHomepage()
    {
        $this->get('/lottery')
            ->assertStatus(200)
            ->assertViewIs('lottery_page')
            ->assertSee('/lottery')
            ->assertSee('awards');
    }
}
