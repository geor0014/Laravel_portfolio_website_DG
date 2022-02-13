@extends('layout')

@section('styles')
    <!-- CSS -->
    <link rel="stylesheet" href="/styles/blog-posts-styles/swot-a.css" />
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
        <<div class="about">
            <header id="banner">
                <div class="banner-title">
                    <h1 class="banner-text">SWOT Analysis</h1>
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
                        <i class="fas fa-exclamation-triangle hobby-fnt"></i>
                    </div>
                    <h2 class="hobbies__single-hobby-title">Threats</h2>
                    <p class="hobbies__single-hobby-text">
                        Initially, the fact that I am transferring from another country could be a setback. As far as my weaknesses, I am aware that they may cause me some inconveniences, but I firmly believe that they will not impede me in any way to achieve my goals.
                    </p>
                </div>
                <!-- end of single hobby -->
                <!-- single hobby -->
                <div class="hobbies__single-hobby">
                    <div class="hobbies__single-hobby-icon">
                        <i class="fas fa-question hobby-fnt"></i>
                    </div>
                    <h2 class="hobbies__single-hobby-title">Opportunities</h2>
                    <p class="hobbies__single-hobby-text">
                        My curiosity and my ability to instruct myself will be of great help in this programme. When it comes to my weaknesses, overthinking can be a double-edged sword, as it can prepare you for situations others may not have considered.
                    </p>
                </div>
                <!-- end of single hobby -->
                <!-- single hobby -->
                <div class="hobbies__single-hobby">
                    <div class="hobbies__single-hobby-icon">
                        <i class="fas fa-user-minus hobby-fnt"></i>
                    </div>
                    <h2 class="hobbies__single-hobby-title">Weaknesses</h2>
                    <p class="hobbies__single-hobby-text">
                        I often suffer from imposter syndrome, considering myself not up to par with other peers, even though I know that is not the case. I am also a big overthinker, which has often impeded me in many situations. I also consider myself somewhat of a slower learner.
                    </p>
                </div>
                <!-- end of single hobby -->
                <!-- single hobby -->
                <div class="hobbies__single-hobby">
                    <div class="hobbies__single-hobby-icon">
                        <i class="fas fa-user-plus hobby-fnt"></i>
                    </div>
                    <h2 class="hobbies__single-hobby-title">Strenghts</h2>
                    <p class="hobbies__single-hobby-text">
                        I am a very good researcher. I am very curious and eager to learn. I love solving problems, even when it takes hours to do so. I also love to teach myself new things and would like to consider myself somewhat of a self-taught person.
                    </p>
                </div>
                <!-- end of single hobby -->



            </article>
        </div>
        <!-- END OF HHOBBIES SECTION -->
    </section>
    <!-- END OF PARAGRAPTH 2 -->
@endsection
