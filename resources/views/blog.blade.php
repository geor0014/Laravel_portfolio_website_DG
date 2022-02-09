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
    <link rel="stylesheet" href="./styles/blog.css" />

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
                <li class="list-item">
                    <i class="fas fa-home"></i>
                    <a href="./" >Home</a>
                </li>
                <li class="active list-item">
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
                <li class="list-item">
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
        <h1 class="banner-text">Welcome To My Blog</h1>
        <div class="banner-underline"></div>
        <header id="banner">
            <div class="blog-content">
                <!-- one blog -->
                <div class="card">
                    <div class="icon">
                        <i class="fab fa-git-alt"></i>
                    </div>
                    <div class="content">
                        <h3>ICT Field of Work</h3>
                        <p>An outstanding analyst is the very prerequisite for the success of your data efforts. A solid background in statistics is what brings rigor to data-driven decision-making. A data analyst looks at industry data to answer business-relevant questions and delivers these answers to the relevant teams. Data analysts transform large data sets, form hypotheses, and communicate these to business decision-makers. So they need to demonstrate a strong sense of the processes taking place beyond the data.</p>
                    </div>
                    <a href="./blogposts/1" class="read-more"></a>
                </div>
                <!-- end of one blog -->
                <!-- one blog -->
                <div class="card">
                    <div class="icon">
                        <i class="fas fa-comment-dots"></i>
                    </div>
                    <div class="content">
                        <h3>SKC First Feedback</h3>
                        <p>All necessary pages are there with content.Nicely styled.Navigation, side menu, SEO, and hosting implemented.Good code editor, website, hosted on URL or IP address</p>
                    </div>
                    <a href="./blogposts/2" class="read-more"></a>
                </div>
                <!-- end of one blog -->
                <!-- one blog -->
                <div class="card">
                    <div class="icon">
                        <i class="fas fa-terminal"></i>
                    </div>
                    <div class="content">
                        <h3>Programming Experience</h3>
                        <p>All the knowledge I have acquired is due to my own research and curiosity and it is all very basic beginner and introductory thinks. A couple of years ago I started to watch the CS50: Introduction to Computer Science by Harvard University, which really piqued my curiosity and from there I started watching online videos (Beginner Guides/Introduction Courser etc.) mostly in Python and JS. Again, all very basic and beginner-level content, but I must say it really fascinates me and I definitely am eager to learn more.</p>
                    </div>
                    <a href="./blogposts/3" class="read-more"></a>
                </div>
                <!-- end of one blog -->
                <!-- one blog -->
                <div class="card">
                    <div class="icon">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <div class="content">
                        <h3>SWOT Analysis</h3>
                        <p>  Initially, the fact that I am transferring from another country with a different language could be a little bit of a setback, but that is only until the adjustment period passes.  As far as my weaknesses, I am aware that they may cause me some inconveniences in my studies, but I firmly believe that they will not impede me in any way whatsoever to achieve my goals</p>
                    </div>
                    <a href="./blogposts/4" class="read-more"></a>
                </div>
                <!-- end of one blog -->
                <!-- one blog -->
                <div class="card">
                    <div class="icon">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <div class="content">
                        <h3>Study Choise</h3>
                        <p>I chose this programme because of the unique opportunities in regards to learning which it offers. One example would be the teamwork. I consider working in small groups and helping each other something very valuable. Myself being a person without a dense programming background, the possibility to turn to some of my more experienced fellow students sounds very study-friendly. Another reason is the "apply what you learn" logic which this programme follows. In this field especially, putting theory into practice is a great way to learn and understand.</p>
                    </div>
                    <a href="./blogposts/5" class="read-more"></a>
                </div>
                <!-- end of one blog -->
                <!-- one blog -->
                <!-- <div class="card">
                  <div class="icon">
                    <i class="fas fa-home "></i>
                  </div>
                  <div class="content">
                    <h3>My Expectations</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque sequi quibusdam excepturi eligendi minima tempore eaque animi soluta velit odit delectus officia, nobis illo. Nihil, odio qui, omnis possimus tempora ipsa id repellat molestiae voluptates quaerat, odit enim quo distinctio. Molestias eligendi, omnis ducimus voluptates accusamus maxime ad fugiat facere nobis, sunt tempore, vero quo aspernatur. Itaque error eligendi, aliquam nulla doloremque nemo dolores impedit odit accusantium ex! Voluptatibus quod deserunt itaque placeat. Maxime harum dolorum dignissimos inventore, enim culpa ullam eos quasi aliquam ea dolores architecto mollitia exercitationem optio incidunt ex. Doloremque, tempore. Natus quo modi sit adipisci laborum?</p>
                  </div>
                  <a href="" class="read-more"></a>
                </div> -->
                <!-- end of one blog -->

            </div>
        </header>
    </section>
    <!-- END OF PARAGRAPH 1 -->


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
