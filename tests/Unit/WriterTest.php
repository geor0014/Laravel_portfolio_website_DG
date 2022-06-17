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

    public function test_if_writer_role_is_assigned()
    {

        // Create Writer Role
        Role::create(['name' => 'writer']);

        // Create Writer
        $writer = User::factory()->create();
    
        // Assign Writer Role
            $writer->assignRole('writer');

            // Check if writer has writer role
            $this->assertTrue($writer->hasRole('writer'));
    }
}
