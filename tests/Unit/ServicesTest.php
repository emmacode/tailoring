<?php

namespace Tests\Unit;

use Illuminate\Http\UploadedFile;
use Tests\TestCase;

class ServicesTest extends TestCase
{
    public function test_services_routes_is_up() {
        $this->get(route('services'))
            ->assertStatus(200);
    }

    public function test_it_saves_service_request() {
        $data = [
            'style_description' => $this->faker->text,
            'style_file' => new UploadedFile(resource_path('test-files/sample_style.jpg'),
                'sample_style.jpg', null, null, true),
            'fabric_source' => $this->faker->text,
            'measurement_source' => $this->faker->text,
            'name' => $this->faker->name,
            'phone' => $this->faker->e164PhoneNumber,
            'address' => $this->faker->address,
            'measurement_shoulder_back' => $this->faker->randomDigit,
            'measurement_chest' => $this->faker->randomDigit,
            'measurement_top_length' => $this->faker->randomDigit,
            'measurement_neck' => $this->faker->randomDigit,
            'measurement_body_stomach' => $this->faker->randomDigit,
            'measurement_sleeves' => $this->faker->randomDigit,
            'measurement_round_sleeves' => $this->faker->randomDigit,
        ];
        $this->post(route('services.request'), $data)
            ->assertStatus(201)
            ->assertRedirect(route('services'));
    }

    public function test_it_sends_service_request_mail() {
        //todo actual test logic
        return $this->assertTrue(true);
    }
}
