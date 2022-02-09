<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Index</title>

    <!-- JAVASCRIPT -->
    <script src="./scripts/main.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="./styles/main.css">
    <link rel="stylesheet" href="./styles/profle.css" />

    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="./fontawesome-free-5.15.4-web/css/all.css" />
</head>

<body>
<div class="container">
    <!-- HEADER -->
    <header class="item index-header">
        <!-- nav -->
        <nav>
            <ul class="nav-links">
                <!-- nav button -->
                <li class="nav-btn" onclick="openSideMenu()" >
                    <i class="fas fa-bars fa-rotate-270" ></i>
                </li>
                <!-- end of nav button -->
                <li>
                    <img src="./images/IMG_9205 G.jpg" class="profile-pic" />
                </li>
                <li class=" list-item">
                    <i class="fas fa-home"></i>
                    <a href="./" >Home</a>
                </li>
                <li class="list-item">
                    <i class="fas fa-blog"></i>
                    </i><a href="/blog">Blog</a>
                </li>
                <li class="list-item">
                    <i class="fas fa-columns"></i>
                    <a href="./dashboard">Dashboard</a>
                </li>
                <li class="list-item">
                    <i class="fas fa-question-circle"></i>
                    <a href="./faq">FAQ</a>
                </li>
                <li class="active list-item">
                    <i class="fas fa-id-badge"></i>
                    <a href="./profile">Profile</a>
                </li>
                <li>
                    <a href="https://hz.nl/en " target="_">
                        <img src="./images/HZ.jpg" class="hz-logo" />
                </li>
                </a>
            </ul>
        </nav>
        <!-- end of nav -->
    </header>
    <!--END OF HEADER -->

    <!-- SIDEBAR -->
    <section class="item sidebar">
        <div id="menu" class="slidebar">
            <a href="#" class="close" onclick="closeSideMenu()">
                <i class="fas fa-times"></i>
            </a>
            <a href="https://hz.nl/uploads/documents/Regelingen/OERS/2021-2022/HZ-Course-and-Examination-Regulations-2021-2022.pdf" class="sidebar-link" target="_">HBO-ICT CER</a>
            <a href="https://hz.nl/uploads/documents/Regelingen/OERS/2019-2020/2020-2021-ICT-Implementation-Regulations-CER-HZ-DEF1.0.pdf" class="sidebar-link" target="_">HBO-ICT IR</a>
            <a href="https://learn.hz.nl/my/" class="sidebar-link" target="_">HZ Learn</a>
            <a href="https://github.com/geor0014/geor0014.github.io" class="sidebar-link" target="_">GitHub</a>
            <a href="https://teams.microsoft.com/l/channel/19%3a2e2afa0286b04932be16cb8ad2d9d2c0%40thread.skype/General?groupId=95bddebc-a340-4d88-81fc-b80e0bfc70c3&tenantId=4c16deb3-342d-4fca-bcd5-b1429308034c" class="sidebar-link" target="_">Teams</a>
        </div>
    </section>
    <!-- END OFF SIDEBAR -->

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

    <!-- FOOTER -->
    <footer class="item footer">
        <div class="footer-icons">
            <a href="https://www.facebook.com/daniel.cvetanov.92" class="footer-single-icon" target="_">
                <i class="fab fa-facebook"></i>
            </a>
            <a href="https://www.instagram.com/cvetanovdaniel/" target="_" class="footer-single-icon">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://www.linkedin.com/in/daniel-georgiev-2171811b5/" target="_" class="footer-single-icon">
                <i class="fab fa-linkedin-in"></i>
            </a>
            <a href="https://github.com/geor0014" target="_" class="footer-single-icon">
                <i class="fab fa-github-alt"></i>
            </a>
        </div>
    </footer>
    <!-- END OF FOOTER -->
</div>
</body>
</html>
