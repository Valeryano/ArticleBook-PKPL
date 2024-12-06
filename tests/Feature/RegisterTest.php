<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;

class RegisterTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function menampilkan_form_registrasi()
    {
        $response = $this->get(route('register'));

        $response->assertStatus(200);
        $response->assertSee('Register');
        $response->assertSee('Nama');
        $response->assertSee('Email');
        $response->assertSee('Password');
        $response->assertSee('Konfirmasi Password');
    }

    /** @test */
    public function berhasil_mendaftarkan_pengguna_dengan_data_valid()
    {
        $response = $this->post(route('register'), [
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'password' => 'password123',
            'password_confirmation' => 'password123',
        ]);

        $response->assertRedirect(route('login'));


        $this->assertDatabaseHas('users', [
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
        ]);
    }

    /** @test */
    public function gagal_mendaftarkan_pengguna_dengan_data_tidak_valid()
    {
        $response = $this->post(route('register'), [
            'name' => '',
            'email' => 'invalid-email',
            'password' => 'short',
            'password_confirmation' => 'not-matching',
        ]);

        
        $response->assertSessionHasErrors(['name', 'email', 'password']);
    }

    /** @test */
    public function gagal_mendaftarkan_pengguna_dengan_email_terduplikasi()
    {
       
        User::factory()->create([
            'email' => 'johndoe@example.com',
        ]);

       
        $response = $this->post(route('register'), [
            'name' => 'Jane Doe',
            'email' => 'johndoe@example.com',
            'password' => 'password123',
            'password_confirmation' => 'password123',
        ]);

       
        $response->assertSessionHasErrors(['email']);
    }
}
