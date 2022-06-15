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
        Role::create(['name' => 'admin']);

        $admin =  User::create(
            [
                'name' => 'Ahab',
                'email' => 'ahab@admin.com',
                'email_verified_at' => now(),
                'password' => Hash::make('OpenSesame', ['rounds' => 14]),
            ]
        );

        $admin->assignRole('admin');

        $this->assertTrue($admin->hasRole('admin'));
    }
}
