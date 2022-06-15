<?php

namespace Tests\Unit;


namespace Tests\Unit;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
//use PHPUnit\Framework\TestCase;
use Spatie\Permission\Models\Role;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
class WriterCanCreateFAQTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_if_users_with_writer_account_can_creeate_faq()
    {
        $response = $this->get('/faq');

        $response->assertStatus(200);

        Role::create(['name' => 'writer']);

        $writer = User::factory()->create();
    
            $writer->assignRole('writer');

            $this->actingAs($writer)->get('/faq')->assertSee('Add FAQ');
    }
}
