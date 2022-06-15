<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
//use PHPUnit\Framework\TestCase;
use Spatie\Permission\Models\Role;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class WriterTest extends TestCase
{
    use RefreshDatabase;

    public function test_example_if_writer_role_is_assigned()
    {

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

            $this->assertTrue($writer->hasRole('writer'));
    }
}
