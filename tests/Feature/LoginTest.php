<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\RateLimiter;

class LoginTest extends TestCase
{
    use RefreshDatabase;

    public function test_login_gagal_dengan_data_salah()
    {
        
        $user = User::factory()->create([
            'password' => bcrypt('password123'), 
        ]);

        
        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'wrongpassword', 
        ]);

        
        $response->assertSessionHas('error', 'Email atau password salah.');

        
        $this->assertGuest();
    }

    public function test_user_dapat_login_dengan_data_valid()
    {
        
        $user = User::factory()->create([
            'password' => bcrypt('password123'), 
        ]);

       
        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password123', 
        ]);

        
        $response->assertRedirect(route('welcome'));

       
        $this->assertAuthenticatedAs($user);
    }

    public function test_login_dibatasi_setelah_beberapa_percobaan_gagal()
    {
        
        $user = User::factory()->create([
            'password' => bcrypt('password123'), 
        ]);

        
        for ($i = 0; $i < 5; $i++) {
            $response = $this->post('/login', [
                'email' => $user->email,
                'password' => 'wrongpassword', 
            ]);
        }

        
        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'wrongpassword', 
        ]);

        
        $response->assertSessionHas('error', 'Terlalu banyak percobaan login. Silakan coba lagi setelah beberapa saat.');
    }

    public function test_login_gagal_untuk_user_yang_belum_verifikasi()
    {
        
        $user = User::factory()->unverified()->create([
            'password' => bcrypt('password123'), 
        ]);

        
        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password123', 
        ]);

        
        $response->assertSessionHas('error', 'Email belum terverifikasi.');
        $this->assertGuest();
    }
}
