<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Tests\TestCase;

class TestWriterEditPermisssion extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_if_writer_can_create_faq()
    {
        $response = $this->get('/faq');

        $response->assertStatus(200);

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
      
            $this->actingAs($writer)->get('/faq')->assertSee('Add FAQ');

            $this->actingAs($writer)
                ->get(route('faq.create'))
                ->assertStatus(200);

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
    }
    
    
    public function test_if_writer_can_edit_only_the_faq_he_created(){
        $response = $this->get('/faq');

        $response->assertStatus(200);

        Role::create(['name' => 'writer']);

        // Create  writer 1
        $writer1 = User::create(
            [
                'name' => 'Ahab',
                'email' => 'ahab@admin.com',
                'email_verified_at' => now(),
                'password' => Hash::make('OpenSesame', ['rounds' => 14]),
            ]
            );

            // Create  writer 2
        $writer2 = User::create(
            [
                'name' => 'Ahab',
                'email' => 'ahab@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('OpenSesame', ['rounds' => 14]),
            ]
            );

     
            // Assign roles
            $writer1->assignRole('writer');
            $writer2->assignRole('writer');

            // Writer 1 creates a faq
            $this->actingAs($writer1)
            ->post(route('faq.store'), [
                'question' => 'BONNIE AND CLYDE 1967',
                'answer' => 'We Rob Banks',
                'user_id' => $writer1->id,
            ])
            ->assertStatus(302);

            // Writer 2 creates a faq
            $this->actingAs($writer2)
            ->post(route('faq.store'), [
                'question' => 'GONE WITH THE WIND 1939',
                'answer' => "Frankly, my dear, I don't give a damn.",
                'user_id' => $writer2->id,
            ])
            ->assertStatus(302);

            // Writer 1 edits the faq he created
            $this->actingAs($writer1)->get('/faq/1/edit')->assertStatus(200);

            // Writer 1 edits the faq he created
            $this->actingAs($writer1)
                ->put(route('faq.update', 1), [
                    'question' => 'SHE DONE HIM WRONG 1970',
                    'answer' => "Here's Looking at You, Kid",
                    'user_id' => $writer1->id,
                ])
                ->assertStatus(302);
        
                // Check if the faq was updated
              $this->assertDatabaseHas('faqs', [
                'question' => 'SHE DONE HIM WRONG 1970',
                'answer' => "Here's Looking at You, Kid",
            ]);

            // Writer 1 tries to edit the faq he didn't create
            $this->actingAs($writer1)->get('/faq/2/edit')->assertStatus(403);

            // Writer 2 tries to edit the faq he create
            $this->actingAs($writer2)->get('/faq/2/edit')->assertStatus(200);
        }
}
