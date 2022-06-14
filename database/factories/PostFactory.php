<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $this->faker->addProvider(new \Mmo\Faker\PicsumProvider($this->faker));
        $titulo=$this->faker->unique()->sentence();
        return [
            'titulo'=>$titulo,
            'slug'=>Str::slug($titulo),
            'contenido'=>$this->faker->text(),
            'publicado'=>random_int(1,2),
            'imagen'=>'imagen/'.$this->faker->picsum('public/storage/imagen', 640, 480, null, false),
            'user_id'=>User::all()->random()->id
        ];
    }
}
