<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Tests\TestCase;

class AdminTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_if_admin_can_see_admin_dashboard()
    {
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'writer']);

       $admin =  User::create(
        [
            'name' => 'Ahab',
            'email' => 'ahab@admin.com',
            'email_verified_at' => now(),
            'password' => Hash::make('OpenSesame', ['rounds' => 14]),
        ]
    );

        $admin->assignRole('admin', 'writer');

        $this->actingAs($admin)->get('/')->assertSee('Admin Page');

        $this->actingAs($admin)
            ->get(route('admin.index'))
            ->assertStatus(200);
    }
    
    public function test_if_writer_cannot_see_admin_dashboard()
    {
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'writer']);

      $writer = User::create(
        [
            'name' => 'Ahab',
            'email' => 'ahab@admin.com',
            'email_verified_at' => now(),
            'password' => Hash::make('OpenSesame', ['rounds' => 14]),
        ]
        );

        $writer->assignRole('writer');

        $this->actingAs($writer)->get('/')->assertDontSee('Admin Page');

        $this->actingAs($writer)
            ->get(route('admin.index'))
            ->assertStatus(403);
    }
}
