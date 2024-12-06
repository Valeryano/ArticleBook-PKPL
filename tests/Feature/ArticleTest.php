<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;
use App\Models\Article;

class ArticleTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function menampilkan_form_artikel()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('articles.create'));

        $response->assertStatus(200);
        $response->assertSee('Create Your Inspiration Article');
        $response->assertSee('Judul Artikel');
        $response->assertSee('Penulis');
    }

    /** @test */
    public function submit_form_artikel()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->post(route('articles.store'), [
            'Judul_Artikel' => 'The Power of Knowledge',
            'Penulis' => 'John Doe',
            'Nama_Jurnal' => 'Science Journal',
            'Volume_Jurnal' => '10',
            'Halaman' => 15,
            'ISSN' => 12345678,
            'Penerbit' => 'Academic Press',
            'URL' => 'https://www.example.com',
        ]);

        $this->assertDatabaseHas('articles', [
            'Judul_Artikel' => 'The Power of Knowledge',
            'Penulis' => 'John Doe',
        ]);

        $articleId = Article::latest()->first()->id;

        $response->assertRedirect(route('articles.show', $articleId));
    }

    /** @test */
    public function validasi_form_artikel()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->post(route('articles.store'), [
            'Judul_Artikel' => '',
            'Penulis' => 'John Doe',
            'Nama_Jurnal' => 'Science Journal',
            'Volume_Jurnal' => '10',
            'Halaman' => 15,
            'ISSN' => 12345678,
            'Penerbit' => 'Academic Press',
            'URL' => 'https://www.example.com',
        ]);

        $response->assertSessionHasErrors(['Judul_Artikel']);
    }

    /** @test */
    public function mengupdate_artikel()
    {
        $user = User::factory()->create();
        $article = Article::factory()->create([
            'Judul_Artikel' => 'Original Title',
            'Penulis' => 'Original Author',
        ]);

        $response = $this->actingAs($user)->put(route('articles.update', $article->id), [
            'Judul_Artikel' => 'Updated Title',
            'Penulis' => 'Updated Author',
            'Nama_Jurnal' => 'Updated Journal',
            'Volume_Jurnal' => '5',
            'Halaman' => 20,
            'ISSN' => 98765432,
            'Penerbit' => 'Updated Press',
            'URL' => 'https://www.updated-example.com',
        ]);

        $this->assertDatabaseHas('articles', [
            'id' => $article->id,
            'Judul_Artikel' => 'Updated Title',
            'Penulis' => 'Updated Author',
        ]);

        $response->assertRedirect(route('articles.show', $article->id));
    }

    /** @test */
    public function menghapus_artikel()
    {
        $user = User::factory()->create();
        $article = Article::factory()->create();

        $response = $this->actingAs($user)->delete(route('articles.destroy', $article->id));

        $this->assertDatabaseMissing('articles', ['id' => $article->id]);

        $response->assertStatus(204);
    }
}
