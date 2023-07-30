<?php

namespace Database\Factories;

use App\Models\Siswa;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Siswa>
 */
class SiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Siswa::class;
    public function definition()
    {
        static $id = 1;
        return [
            'id_siswa' => $id++,
            'nama' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'notelp' => 0 . mt_rand(8000000000, 8999999999),
            'alamat' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.'
        ];
    }
}
