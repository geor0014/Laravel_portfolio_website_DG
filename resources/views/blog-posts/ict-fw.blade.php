<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Index</title>

    <!-- JAVASCRIPT -->

    <script>
        function openSideMenu(){
            document.getElementById("menu").style.width = "200px"
            document.getElementsByClassName("sidebar").style.marginLeft = "200px"
        }
        function closeSideMenu(){
            document.getElementById("menu").style.width = "0"
            document.getElementsByClassName("sidebar").style.marginLeft = "0"
        }
    </script>

    <!-- CSS -->
    <link rel="stylesheet" href="/styles/blog-posts-styles/field-of-work.css" />
    <link rel="stylesheet" href="/styles/blog-posts-styles/main.css" />

    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="/fontawesome-free-5.15.4-web/css/all.css" />
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
                    <img src="/images/IMG_9205 G.jpg" class="profile-pic" />
                </li>
                <li class=" list-item">
                    <i class="fas fa-home"></i>
                    <a href="/" >Home</a>
                </li>
                <li class="list-item">
                    <i class="fas fa-blog"></i>
                    </i><a href="/blog">Blog</a>
                </li>
                <li class="list-item">
                    <i class="fas fa-columns"></i>
                    <a href="/dashboard">Dashboard</a>
                </li>
                <li class="list-item">
                    <i class="fas fa-question-circle"></i>
                    <a href="/faq">FAQ</a>
                </li>
                <li class="active list-item">
                    <i class="fas fa-id-badge"></i>
                    <a href="/profile">Profile</a>
                </li>
                <li>
                    <a href="https://hz.nl/en " target="_">
                        <img src="/images/HZ.jpg" class="hz-logo" />
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
            <header id="banner">
                <div class="banner-title">
                    <h1 class="banner-text">ICT FIELD OF WORK</h1>
                    <div class="banner-underline"></div>
                </div>
            </header>
            </article>
        </div>
    </section>
    <!-- END OF PARAGRAPH 1 -->

    <!-- PARAGRAPTH 2 -->
    <section class="item para-2">
        <div class="fw-header">
            <h2>Types of Data Scientists</h2>
        </div>
        <div class="fw-container">
            <!-- one scientist -->
            <div class="one-scientist">
                <h3 class="fw-title">The Data Analyst</h3>
                <div class="fw-underline"></div>
                <div class="fw-text">
                    <p >An outstanding analyst is the very prerequisite for the success of your data efforts. A solid background in statistics is what brings rigor to data-driven decision-making. A data analyst looks at industry data to answer business-relevant questions and delivers these answers to the relevant teams. Data analysts transform large data sets, form hypotheses, and communicate these to business decision-makers. So they need to demonstrate a strong sense of the processes taking place beyond the data.</p>
                    <div class="fw-img">

                        <img src="/images/blog-posts-images/data-analyst.png" alt="" class="fw-pic">
                    </div>
                </div>
            </div>
            <!-- end of one scientist -->
            <!-- one scientist -->
            <div class="one-scientist">
                <h3 class="fw-title">The Data Scientist</h3>
                <div class="fw-underline"></div>
                <div class="fw-text">

                    <p >This may involve anything from data analytics to building machine learning models that predict the future based on past data. Unlike analysts, data scientists do not stick to the facts entirely. They have more space to develop their own ideas or discover patterns in the data that seem worth pursuing..</p>
                    <div class="fw-img">

                        <img src="/images/blog-posts-images/data scientist.png" alt="" class="fw-pic">
                    </div>
                </div>
            </div>
            <!-- end of one scientist -->
            <!-- one scientist -->
            <div class="one-scientist">
                <h3 class="fw-title">The Data Engineer</h3>
                <div class="fw-underline"></div>
                <div class="fw-text">
                    <p >This is a software-development-intensive role that thrives on programming skills and the ability to make data tangible to data scientists. Data engineers manage large datasets, do the data cleaning, aggregation, and ETL processes. But they also build data pipelines to get the data to the analysts and scientists within an organization.</p>
                    <div class="fw-img">

                        <img src="/images/blog-posts-images/data-engeneer.png"  class="fw-pic" alt="">
                    </div>
                </div>

            </div>
            <!-- end of one scientist -->
        </div>
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
