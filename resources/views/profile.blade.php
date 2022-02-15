@extends('layout')

@section('styles')
    <link rel="stylesheet" href="./styles/profle.css" />
@endsection
@section('javascript')
    <script src="/scripts/main.js"></script>
@endsection


@section('content')
    <!-- PARAGRAPH 1 -->
    <section class="item para-1">
        <div class="about">
            <div class="about__center">
                <article class="about-img">
                    <img src="./images/image00279.jpeg" class="about-img__photo" />
                </article>
                <article class="about-info">
                    <div class="about-info__container">
                        <h3 class="about-info__small">HELLO EVERYBODY, I AM</h3>
                        <h1 class="about-info__title">Daniel Georgiev</h1>
                        <h2 class="about-info__sub">HBO-ICT Student</h2>
                        <p class="about-info__text">
                            I am a first-year student at HZ University of applied sciences. I transferred to the Netherlands to study HBO-ICT right after I finished my Bachelor's degree in applied linguistics in my home country of Bulgaria.
                        <p class="info-txt"><i class="fa fa-calendar"></i> January 31st 1998</p>
                        <p class="info-txt"><i class="fa fa-phone"></i>+359 878 180 866</p>
                        <p class="info-txt"><i class="fa fa-envelope"></i> geor0014@hz.nl</p>
                        <p class="info-txt"><i class="fa fa-home"></i> Joost de Moorstraat 21, 4382 HK Vlissingen</p>
                    </div>
            </div>
            </article>
        </div>
    </section>
    </section>
    <!-- END OF PARAGRAPH 1 -->

    <!-- PARAGRAPTH 2 -->
    <section class="item para-2" id="target">
        <!-- HOBBIES SECTION -->
        <div class="hobbies-section">
            <!-- section title -->
            <div class="section-title">
                <h1 class="section-title__name">Hobbies</h1>
            </div>
            <!-- end of section title -->

            <article class="hobbies__center">
                <!-- single hobby -->
                <div class="hobbies__single-hobby">
                    <div class="hobbies__single-hobby-icon">
                        <i class="fas fa-film hobby-fnt"></i>
                    </div>
                    <h2 class="hobbies__single-hobby-title">Cinema</h2>
                    <p class="hobbies__single-hobby-text">
                        I have always ejnoyed cinema. Whenever I have some free time I put on a movie and just lose myself in it. I adore all kinds of movies. My favorite movie so far has been "The Hateful Eight", directed by Quentin Tarantino
                    </p>
                </div>
                <!-- end of single hobby -->
                <!-- single hobby -->
                <div class="hobbies__single-hobby">
                    <div class="hobbies__single-hobby-icon">
                        <i class="fas fa-book hobby-fnt"></i>
                    </div>
                    <h2 class="hobbies__single-hobby-title">Reading</h2>
                    <p class="hobbies__single-hobby-text">
                        I am an avid reader. I read books whenever I have the time. If I do not have the time to read them I listen to audiobooks. Just like cinema, I enjoy all kinds of books. I just finished "Kafka on The Shore" by Haruki Murakami
                    </p>
                </div>
                <!-- end of single hobby -->
                <!-- single hobby -->
                <div class="hobbies__single-hobby">
                    <div class="hobbies__single-hobby-icon">
                        <i class="fas fa-dumbbell hobby-fnt"></i>
                    </div>
                    <h2 class="hobbies__single-hobby-title">Training</h2>
                    <p class="hobbies__single-hobby-text">
                        I believe that a healthy body helps our mental and also our physical health. Personally, it also helps me relax and gives me a feeling of accomplishment after a long day.
                    </p>
                </div>
                <!-- end of single hobby -->
                <!-- single hobby -->
                <div class="hobbies__single-hobby">
                    <div class="hobbies__single-hobby-icon">
                        <i class="fas fa-laptop-code hobby-fnt"></i>
                    </div>
                    <h2 class="hobbies__single-hobby-title">Programming</h2>
                    <p class="hobbies__single-hobby-text">
                        It goes without saying that programming is one of my passions. I love learning more and the best thing is that the sources of information are endless. I am fascinated by subjects like Machine Translation and Learning.
                    </p>
                </div>
                <!-- end of single hobby -->
                <!-- single hobby -->
                <div class="hobbies__single-hobby">
                    <div class="hobbies__single-hobby-icon">
                        <i class="fas fa-kiwi-bird hobby-fnt"></i>
                    </div>
                    <h2 class="hobbies__single-hobby-title">Collecting Rubber Duckies</h2>
                    <p class="hobbies__single-hobby-text">
                        This is a rather recent habit. My friends and I started this trend of buying rubber duckies for each other from different countries we visit.It started as a joke, but now every one of my friends does it, so I guess I am a rubber duckie collector now.
                    </p>
                </div>
                <!-- end of single hobby -->
                <!-- single hobby -->
                <div class="hobbies__single-hobby">
                    <div class="hobbies__single-hobby-icon">
                        <i class="fas fa-mountain hobby-fnt"></i>
                    </div>
                    <h2 class="hobbies__single-hobby-title">Hiking</h2>
                    <p class="hobbies__single-hobby-text">
                        My friends and I also love to go hiking whenever possible. We have gone on camping trips and traveled throughout my whole country, hiking and sleeping in tents. Just before I came to do my studies we climbed the highest peak in my country.
                    </p>
                </div>
                <!-- end of single hobby -->
            </article>
        </div>
        <!-- END OF HHOBBIES SECTION -->
    </section>
    <!-- END OF PARAGRAPTH 2 -->
@endsection
