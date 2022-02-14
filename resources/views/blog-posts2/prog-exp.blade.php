@extends('layout')

@section('styles')
    <!-- CSS -->
    <link rel="stylesheet" href="/styles/blog-posts-styles/experience.css" />
    <link rel="stylesheet" href="/styles/blog-posts-styles/main.css" />

    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="/fontawesome-free-5.15.4-web/css/all.css" />
@endsection

@section('java')
    <script src="../scripts/main.js"></script>
@endsection


@section('content')
    <!-- PARAGRAPH 1 -->
    <section class="item para-1">
        <div class="about">
            <header id="banner">
                <div class="banner-title">
                    <h1 class="banner-text">My Programming Experience</h1>
                    <div class="banner-underline"></div>
                </div>
            </header>
            </article>
        </div>
    </section>
    <!-- END OF PARAGRAPH 1 -->

    <!-- PARAGRAPTH 2 -->
    <section class="item para-2">
        <h2 class="experience-header">Not Much To Talk About</h2>
        <div class="experience">
            <p class="experience-text">All the knowledge I have acquired is due to my own research and curiosity and it is all very basic beginner and introductory thinks. A couple of years ago I started to watch the CS50: Introduction to Computer Science by Harvard University, which really piqued my curiosity and from there I started watching online videos (Beginner Guides/Introduction Courser etc.) mostly in Python and JS. Again, all very basic and beginner-level content, but I must say it really fascinates me and I definitely am eager to learn more.</p>
            <div >
                <img src="/images/blog-posts-images/experience.png" alt="" class="experience-img">
            </div>
        </div>
    </section>
    <!-- END OF PARAGRAPTH 2 -->
@endsection
