<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    protected $model = Article::class;

    public function definition()
    {
        return [
            'Judul_Artikel' => $this->faker->sentence(),
            'Penulis' => $this->faker->name(),
            'Nama_Jurnal' => $this->faker->word(),
            'Volume_Jurnal' => $this->faker->randomDigitNotZero(),
            'Halaman' => $this->faker->numberBetween(1, 100),
            'ISSN' => $this->faker->randomNumber(8, true),
            'Penerbit' => $this->faker->company(),
            'URL' => $this->faker->url(),
        ];
    }
}
