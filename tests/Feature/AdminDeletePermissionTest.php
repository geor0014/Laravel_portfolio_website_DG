<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Tests\TestCase;

class PermissionTest extends TestCase
{
    use RefreshDatabase;
        public function test_if_writer_cannot_delete_any_faq(){
            $response = $this->get('/faq');

            $response->assertStatus(200);

            Role::create(['name' => 'writer']);


            $writer =  User::factory()->create();


                $writer->assignRole('writer');

                $this->actingAs($writer)
            ->post(route('faq.store'), [
                'question' => 'BONNIE AND CLYDE 1967',
                'answer' => 'We Rob Banks',
                'user_id' => $writer->id,
            ])
            ->assertStatus(302);

            $this->assertDatabaseHas('faqs', [
                'question' => 'BONNIE AND CLYDE 1967',
                'answer' => 'We Rob Banks',
            ]);

            $this->actingAs($writer)
                ->delete(route('faq.destroy', 1))
                ->assertStatus(302);

            $this->actingAs($writer)->get(route('faq.edit',1))->assertDontSee('Delete');    
        }

        public function test_if_admin_can_delete_faq(){
            $response = $this->get('/faq');

            $response->assertStatus(200);

            Role::create(['name' => 'admin']);
            Role::create(['name' => 'writer']);


            // Create  admin
            $admin =  User::factory()->create();


                // Assign admin
            $admin->assignRole('admin');

            // Create  writer
            $writer = User::factory()->create([
                'email' => 'writer@admin.com'
            ]);


                // Assign writer
            $writer->assignRole('writer');


            // Writer creates a faq
            $this->actingAs($writer)->post(route('faq.store'), [
                'question' => 'BONNIE AND CLYDE 1967',
                'answer' => 'We Rob Banks',
                'user_id' => $writer->id,
            ]);

            // Check if the faq was created
            $this->assertDatabaseHas('faqs', [
                'question' => 'BONNIE AND CLYDE 1967',
                'answer' => 'We Rob Banks',
            ]);

            // Admin deletes the faq
            $this->actingAs($admin)->delete(route('faq.destroy', 1))->assertStatus(302);

            // Check if the faq was deleted
            $this->assertDatabaseMissing('faqs', [
                'question' => 'BONNIE AND CLYDE 1967',
                'answer' => 'We Rob Banks',
            ]);

        }


}
