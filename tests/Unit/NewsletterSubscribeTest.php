<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class NewsletterSubscribeTest extends TestCase
{
    public function test_newsletter_form_on_homepage() {
        $matcher = [
            'tag' => 'div',
            'attributes' => ['class' => 'subscribe-form']
        ];
        //todo test actual check
        $this->get(route('home'))
            ->assertStatus(200);
    }

    public function test_it_can_create_subscription() {
        $data = [
            'name' => $this->faker->firstName,
            'email' => $this->faker->email,
        ];
        $this->post(route('newsletter.subscribe'), $data)
            ->assertStatus(201)
            ->assertRedirect(route('home'));
    }
}
