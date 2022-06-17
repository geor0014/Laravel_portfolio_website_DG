<?php

namespace Tests\Feature;

use App\Models\User;
use Database\Factories\AdminFactory;
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
        // Create Roles
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'writer']);

        // Create Admin
        $admin = User::factory()->create();

        // Assign Admin Role
        $admin->assignRole('admin', 'writer');

        // Check if admin can see admin dashboard link
        $this->actingAs($admin)->get('/')->assertSee('Admin Page');

        // Check if admin can visit admin dashboard
        $this->actingAs($admin)
            ->get(route('admin.index'))
            ->assertStatus(200);
    }
    
    public function test_if_writer_cannot_see_admin_dashboard()
    {
        // Create Roles
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'writer']);

        // Create Writer
      $writer =  User::factory()->create();

      // Assign Writer Role
        $writer->assignRole('writer');

        // Check if writer cannot see admin dashboard link
        $this->actingAs($writer)->get('/')->assertDontSee('Admin Page');

        // Check if writer cannot visit admin dashboard
        $this->actingAs($writer)
            ->get(route('admin.index'))
            ->assertStatus(403);
    }
}
