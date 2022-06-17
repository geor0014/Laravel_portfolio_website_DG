<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
//use PHPUnit\Framework\TestCase;
use Spatie\Permission\Models\Role;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminTest extends TestCase
{
    use RefreshDatabase;
    public function test_if_admin_role_is_assigned()
    {
        // Create Admin Role
        Role::create(['name' => 'admin']);

        // Create Admin
        $admin =  User::factory()->create();

        // Assign Admin Role
        $admin->assignRole('admin');

        // Check if admin has admin role
        $this->assertTrue($admin->hasRole('admin'));
    }
}
