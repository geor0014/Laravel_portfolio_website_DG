@extends('layout')

@section('styles')
    <link rel="stylesheet"
          href="./styles/index.css"/>
@endsection

@section('javascript')
    <script src="/scripts/main.js"></script>
@endsection


@section('content')
    <!-- PARAGRAPH 1 -->
    <section class="item para-1">
        <header id="banner">
            <div class="banner-title">
                <h1 class="banner-text">Daniel
                    Georgiev</h1>
                <div
                    class="banner-underline"></div>
                <div class="banner-btn">
                    <button type="button"><a
                            href="./profile">More
                            About Me</a></button>
                    <button type="button"><a
                            href="#target">Why
                            I chose HBO-ICT</a>
                    </button>
                </div>
            </div>
        </header>
    </section>
    <!-- END OF PARAGRAPH 1 -->

    <!-- PARAGRAPTH 2 -->
    <section class="item para-2" id="target">
        <div id="skills">
            <div class="skills-container">
                <!-- single skill  -->
                <article class="skills-item">
                    <i class="fa fa-code"></i>
                    <h1>It is the next logical
                        step for me</h1>
                    <p>As a person with a
                        linguistic background, I
                        believe that programming
                        is the “language” of the
                        future. Although, it
                        differs from the languages
                        I studied before, my
                        previous experience will
                        really be of use to me in
                        this programme, because
                        programming languages have
                        similar concepts, just
                        like human ones. </p>
                </article>
                <!-- end of   single skill  -->
                <!-- single skill  -->
                <article class="skills-item">
                    <i class="fa fa-broadcast-tower"></i>
                    <h1>My way of expression</h1>
                    <p>I have always enjoyed
                        making things from
                        scratch. Which is strange
                        because I have never been
                        an artistic person. I am
                        not able to sing, I cannot
                        play any instruments, nor
                        paint a straight line. But
                        ever since I printed my
                        first "Hello World" I felt
                        "power" in my hands. I
                        created something. What is
                        more, the world of IT is
                        so vast that it is just
                        impossible to get bored of
                        it. </p>
                </article>
                <!-- end of   single skill  -->
                <!-- single skill  -->
                <article class="skills-item">
                    <i class="fa fa-language"></i>
                    <h1> It is a language</h1>
                    <p>
                        Before enrolling in the
                        ICT programme I completed
                        my bachelor’s degree in
                        Applied Linguistics,
                        initially I thought IT and
                        languages belonged in
                        different categories, but
                        I very quickly realized
                        they are very similar. I
                        would really love to take
                        my passion for human
                        languages and the
                        experience from my
                        previous studies and apply
                        it to my future IT carrier
                        path.
                    </p>
                </article>
                <!-- end of   single skill  -->
                <!-- single skill  -->
                <article class="skills-item">
                    <i class="fa fa-lightbulb"></i>
                    <h1>"Eureka"</h1>
                    <p>
                        I love to solve problems.
                        My fascination with
                        problem solving started
                        from installing games on
                        my computer, which I would
                        later uninstall without
                        ever playing them because
                        the process of solving all
                        the small problems that
                        came up was more
                        interesting to me than the
                        games themselves. I
                        believe the feeling of
                        accomplishment and that
                        “eureka” moment I get when
                        I, for example solve a
                        simple bug in a code or
                        understand what a
                        particular line of code
                        does, makes it all worth
                        it.
                </article>
                <!-- end of   single skill  -->
            </div>
        </div>
        <!-- END OF SKILLS  -->
    </section>
    <!-- END OF PARAGRAPTH 2 -->
@endsection
