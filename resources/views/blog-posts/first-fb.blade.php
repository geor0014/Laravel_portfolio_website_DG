@extends('layout')

@section('styles')
    <!-- CSS -->
    <link rel="stylesheet" href="/styles/blog-posts-styles/first-fb.css" />
    <link rel="stylesheet" href="/styles/blog-posts-styles/main.css" />
    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="/fontawesome-free-5.15.4-web/css/all.css"/>
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
                    <h1 class="banner-text">SKC First Feedback</h1>
                    <div class="banner-underline"></div>
                </div>
            </header>
            </article>
        </div>
    </section>
    <!-- END OF PARAGRAPH 1 -->

    <!-- PARAGRAPTH 2 -->
    <section class="item para-2">
        <div class="feedback-container">

            <h2 class="feedback-header">Positives</h2>
            <div class="fw-underline"></div>
            <div class="positives">
                <div class="feedback-img"> <img src="/images/blog-posts-images/happy.png" alt="" class="feedback-pic"></div>
                <ul class="feedback-text">
                    <li class="feedback-text-item"> All necessary pages are there with content</li>
                    <li class="feedback-text-item"> Nicely styled</li>
                    <li class="feedback-text-item"> Navigation, side menu, SEO, and hosting implemented </li>
                    <li class="feedback-text-item"> Good code editor, website, hosted on URL or IP address</li>
                    <li class="feedback-text-item"> Code and files are well structured.</li>
                </ul>
            </div>

            <h2 class="feedback-header">Improvements</h2>
            <div class="fw-underline"></div>
            <div class="negatives">
                <div class="feedback-img"> <img src="/images/blog-posts-images/improvement.png" alt="" class="feedback-pic"></div>
                <ul class="feedback-text">
                    <li class="feedback-text-item"> Mind code duplication</li>
                    <li class="feedback-text-item"> Careful with text over images. Might become difficult to read. </li>
                    <li class="feedback-text-item"> Social media not linked. </li>
                    <li class="feedback-text-item"> Put JS in external file. </li>
                    <li class="feedback-text-item"> Story did not appear to be well prepared.</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- END OF PARAGRAPTH 2 -->
@endsection
