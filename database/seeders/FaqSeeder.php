<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Faq::create([
            'question' => 'How Can You Print A Document From Your Laptop At HZ?',
            'answer' => 'By Simply connecting to one of the printers at school.',
            'user_id' => 1,
        ]);

        Faq::create([
            'question' => 'How Can You Scan A Document A Send It To Your Laptop At HZ?',
            'answer' => 'Use the same printer, scan your paper and it should added on your pc if you do it right.',
            'user_id' => 1,
        ]);

        Faq::create([
            'question' => 'What Do You Need To Do When You Are Sick / Show Symptoms Of Coronavirus?',
            'answer' => 'Contact the teachers/helpdesk at school and stay home. Follow the lessons on stream to compensate for that unusual sickness.
            ',
            'user_id' => 1,
        ]);

        Faq::create([
            'question' => 'How Can You Book A Project Space In One Of The Wings?',
            'answer' => 'You can book a room on the HZ page after logging in by pressing the Self-service Portal, it should be easy from thereon out.',
            'user_id' => 1,
        ]);

        Faq::create([
            'question' => 'What Are The Instructions If You Want To Park Your Car At The HZ Parking Lot?',
            'answer' => 'You must park your car "across the road", at the parking lot of the former PEZM.',
            'user_id' => 1,
        ]);

        Faq::create([
            'question' => 'How To Get A Student Travel Product??',
            'answer' => 'On DUO you can find all the information you need and the requirements for it.',
            'user_id' => 1,
        ]);
    }
}
