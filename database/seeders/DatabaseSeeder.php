<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Course;
use App\Models\Faq;
use App\Models\Grade;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run ()
    {
        // \App\Models\User::factory(10)->create();
        Grade::truncate();
        Article::truncate();
        Faq::truncate();
//        Course::truncate();

//        Grade::factory(10)->create();

        Faq::create([
            'question' => 'How Can You Print A Document From Your Laptop At HZ?',
            'answer' => 'By Simply connecting to one of the printers at school.'
        ]);

        Faq::create([
            'question' => 'How Can You Scan A Document A Send It To Your Laptop At HZ?',
            'answer' => 'Use the same printer, scan your paper and it should added on your pc if you do it right.'
        ]);

        Faq::create([
            'question' => 'What Do You Need To Do When You Are Sick / Show Symptoms Of Coronavirus?',
            'answer' => 'Contact the teachers/helpdesk at school and stay home. Follow the lessons on stream to compensate for that unusual sickness.
            ']);

        Faq::create([
            'question' => 'How Can You Book A Project Space In One Of The Wings?',
            'answer' => 'You can book a room on the HZ page after logging in by pressing the Self-service Portal, it should be easy from thereon out.'
        ]);

        Faq::create([
            'question' => 'What Are The Instructions If You Want To Park Your Car At The HZ Parking Lot?',
            'answer' => 'You must park your car "across the road", at the parking lot of the former PEZM.'
        ]);

        Faq::create([
            'question' => 'How To Get A Student Travel Product??',
            'answer' => 'On DUO you can find all the information you need and the requirements for it.'
        ]);

        Article::create([
            'title' => 'ICT FIELD OF WORK',
            'header1' => 'Types of Data Scientists',
            'header2' => 'The Data Analyst',
            'paragraph1' => 'An outstanding analyst is the very prerequisite for the success of your data efforts. A solid
                        background in statistics is what brings rigor to data-driven decision-making. A data analyst
                        looks at industry data to answer business-relevant questions and delivers these answers to the
                        relevant teams. Data analysts transform large data sets, form hypotheses, and communicate these
                        to business decision-makers. So they need to demonstrate a strong sense of the processes taking
                        place beyond the data.',
            'paragraph_image' => '/images/blog-posts-images/data-analyst.png',
            ]);
        Article::create([
            'title' => 'SKC First Feedback',
            'header2' => 'Positives and Negatives',
            'paragraph1' => 'Positives: All necessary pages are there with content/Nicely styled/Navigation, side menu, SEO, and hosting implemented/Good code editor, website, hosted on URL or IP address/Code and files are well structured.
             Negatives: Mind code duplication/Careful with text over images. Might become difficult to read./ Social media not linked./Put JS in external file./Story did not appear to be well prepared.',
            ]);
        Article::create([
            'title' => 'My Programming Experience',
            'header2' => 'Not Much To Talk About',
            'paragraph1' => 'All the knowledge I have acquired is due to my own research and curiosity and it is all very basic beginner and introductory thinks. A couple of years ago I started to watch the CS50: Introduction to Computer Science by Harvard University, which really piqued my curiosity and from there I started watching online videos (Beginner Guides/Introduction Courser etc.) mostly in Python and JS. Again, all very basic and beginner-level content, but I must say it really fascinates me and I definitely am eager to learn more.',
            'paragraph_image' => '/images/blog-posts-images/experience.png'
        ]);

        Article::create([
            'title' => 'My Study Choice',
            'header2' => 'Study Choice Activities',
            'paragraph1' => '   I knew I wanted to study in The Netherlands as the IT sector is very strong and fast-growing
                        here. Another reason were the universities of applied sciences which, I consider of great
                        importance. I researched a lot of universities but in the end what helped me make up my mind and
                        choose HZ, were the friendly people at HZ who made me feel welcomed.',
            ]);

        Article::create([
            'title' => 'SWOT Analysis',
            'header2' => 'Threats',
            'paragraph1' => 'Initially, the fact that I am transferring from another country could be a setback. As far as my weaknesses, I am aware that they may cause me some inconveniences, but I firmly believe that they will not impede me in any way to achieve my goals.',
            ]);
    }
}
