<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Model yang digunakan oleh Factory.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Definisi default untuk model User.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(), // Tanggal verifikasi email
            'password' => Hash::make('password'), // Gunakan Hash untuk keamanan
            'remember_token' => Str::random(10), // Token untuk 'remember me'
        ];
    }

    /**
     * Status user tanpa verifikasi email.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(fn(array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
