@extends('layout')

@section('styles')
    <!-- CSS -->
    <link rel="stylesheet" href="/styles/blog-posts-styles/study-choice.css"/>
    <link rel="stylesheet" href="/styles/blog-posts-styles/main.css"/>

    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="/fontawesome-free-5.15.4-web/css/all.css"/>
@endsection

@section('java')
    <script src="../scripts/main.js"></script>
@endsection

@section('content')
    <!-- PARAGRAPH 1 -->
    <section class="item para-1">
        <
        <div class="about">
            <header id="banner">
                <div class="banner-title">
                    <h1 class="banner-text">My Study Choice</h1>
                    <div class="banner-underline"></div>
                </div>
            </header>
            </article>
        </div>
    </section>
    <!-- END OF PARAGRAPH 1 -->

    <!-- PARAGRAPTH 2 -->
    <section class="item para-2" id="target">
        <!-- HOBBIES SECTION -->
        <div class="hobbies-section">

            <article class="hobbies__center">
                <!-- single hobby -->
                <div class="hobbies__single-hobby">
                    <div class="hobbies__single-hobby-icon">
                        <i class="fas fa-search hobby-fnt"></i>
                    </div>
                    <h2 class="hobbies__single-hobby-title">Study Choice Activities</h2>
                    <p class="hobbies__single-hobby-text">
                        I knew I wanted to study in The Netherlands as the IT sector is very strong and fast-growing
                        here. Another reason were the universities of applied sciences which, I consider of great
                        importance. I researched a lot of universities but in the end what helped me make up my mind and
                        choose HZ, were the friendly people at HZ who made me feel welcomed.
                </div>
                <!-- end of single hobby -->
                <!-- single hobby -->
                <div class="hobbies__single-hobby">
                    <div class="hobbies__single-hobby-icon">
                        <i class="far fa-calendar-alt hobby-fnt"></i>
                    </div>
                    <h2 class="hobbies__single-hobby-title">After Graduating</h2>
                    <p class="hobbies__single-hobby-text">
                        A position as a full stack developer sounds very interesting to me, as it makes you constantly
                        adapt to changes. But what I would be most happy to do is combine my previous linguistic
                        experience with IT(machine translation, AI.... but that is very far in the future). From this
                        programme, I expect to take the interest I already have in this subject and transform it into
                        experience and knowledge.
                    </p>
                </div>
                <!-- end of single hobby -->
                <!-- single hobby -->
                <div class="hobbies__single-hobby">
                    <div class="hobbies__single-hobby-icon">
                        <i class="fas fa-users hobby-fnt"></i>
                    </div>
                    <h2 class="hobbies__single-hobby-title">Motivate My Study</h2>
                    <p class="hobbies__single-hobby-text">
                        I chose this programme because of the learning opportunities which it offers. One example would
                        be the teamwork. I consider working in small groups and helping each other something very
                        valuable. Another reason is the "apply what you learn" logic which this programme follows.
                        Putting theory into practice is a great way to learn and understand.
                    </p>
                </div>
                <!-- end of single hobby -->
            </article>
        </div>
        <!-- END OF HHOBBIES SECTION -->
    </section>
    <!-- END OF PARAGRAPTH 2 -->
@endsection
