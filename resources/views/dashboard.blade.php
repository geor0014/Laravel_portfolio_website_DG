<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Index</title>


    <!-- JAVASCRIPT -->
    <script src="./scripts/main.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="./styles/main.css">
    <link rel="stylesheet" href="./styles/dashboard.css"/>

    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="./fontawesome-free-5.15.4-web/css/all.css"/>
</head>

<body>
<div class="container">
    <!-- HEADER -->
    <header class="item index-header">
        <!-- nav -->
        <nav>
            <ul class="nav-links">
                <!-- nav button -->
                <li class="nav-btn" onclick="openSideMenu()">
                    <i class="fas fa-bars fa-rotate-270"></i>
                </li>
                <!-- end of nav button -->
                <li>
                    <img src="./images/IMG_9205 G.jpg" class="profile-pic"/>
                </li>
                <li class="list-item">
                    <i class="fas fa-home"></i>
                    <a href="./">Home</a>
                </li>
                <li class="list-item">
                    <i class="fas fa-blog"></i>
                    </i><a href="/blog">Blog</a>
                </li>
                <li class="active list-item">
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
                        <img src="./images/HZ.jpg" class="hz-logo"/>
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
            <a href="https://hz.nl/uploads/documents/Regelingen/OERS/2021-2022/HZ-Course-and-Examination-Regulations-2021-2022.pdf"
               class="sidebar-link" target="_">HBO-ICT CER</a>
            <a href="https://hz.nl/uploads/documents/Regelingen/OERS/2019-2020/2020-2021-ICT-Implementation-Regulations-CER-HZ-DEF1.0.pdf"
               class="sidebar-link" target="_">HBO-ICT IR</a>
            <a href="https://learn.hz.nl/my/" class="sidebar-link" target="_">HZ Learn</a>
            <a href="https://github.com/geor0014/geor0014.github.io" class="sidebar-link" target="_">GitHub</a>
            <a href="https://teams.microsoft.com/l/channel/19%3a2e2afa0286b04932be16cb8ad2d9d2c0%40thread.skype/General?groupId=95bddebc-a340-4d88-81fc-b80e0bfc70c3&tenantId=4c16deb3-342d-4fca-bcd5-b1429308034c"
               class="sidebar-link" target="_">Teams</a>
        </div>
    </section>
    <!-- END OFF SIDEBAR -->

    <!-- PARAGRAPH 1 -->
    <section class="item para-1">
        <a href="https://hz.nl/uploads/documents/Regelingen/EN/OER-HZ-2019-2020werkdocv2018-05-17DEF_ENGELS-AC-29112019.pdf"
           target="_" class="nbsa">
            <h1><i class="fas fa-link"></i> HZ Course and Examination Regulations</h1>
        </a>
        <div class="table-container">
<!-- Table -->
    <table class="content-table">
        <!-- Table Head -->
        <thead class="border-head">
        <tr>
            <th>Quartile</th>
            <th>Course</th>
            <th>EC</th>
            <th>Exam</th>
            <th>Grade</th>
        </tr>
        </thead>
        <!-- End of Table Head -->

        <!-- Table Body  -->
        <tbody>
        <!-- one row -->
        <tr>
            <td class="quartile" rowspan="3">First</td>
            <td>Programme and Career Orientation</td>
            <td>2.5</td>
            <td>Assesment</td>
            <td>TBA</td>
        </tr>
        <!-- end of one row -->

        <!-- one row -->
        <tr>
            <td>Computer Science</td>
            <td>7.5</td>
            <td>Written</td>
            <td>TBA</td>
        </tr>
        <!-- end of one row -->

        <!-- one row -->
        <tr>
            <td>Programming Basics</td>
            <td>5</td>
            <td>Case Study</td>
            <td>TBA</td>
        </tr>
        <!-- end of one row -->

        <!-- one row -->
        <tr>
            <td class="quartile" rowspan="2">Second</td>
            <td rowspan="2">Object Oriented Programming</td>
            <td rowspan="2">10</td>
            <td>Case Study</td>
            <td>TBA</td>
        </tr>
        <!-- end of one row -->

        <!-- one row -->
        <tr>
            <td>Project</td>
            <td>TBA</td>
        </tr>
        <!-- end of one row -->

        <!-- one row -->
        <tr>
            <td class="quartile" rowspan="4">Third</td>
            <td>Framework Development 1</td>
            <td>5</td>
            <td>Case Study</td>
            <td>TBA</td>
        </tr>
        <!-- end of one row -->

        <!-- one row -->
        <tr>
            <td rowspan="3">Framework Project 1</td>
            <td rowspan="3">7.5</td>
            <td>Project</td>
            <td>TBA</td>
        </tr>
        <!-- end of one row -->

        <!-- one row -->
        <tr>
            <td>Assesment</td>
            <td>TBA</td>
        </tr>
        <!-- end of one row -->

        <!-- one row -->
        <tr>
            <td>Report</td>
            <td>TBA</td>
        </tr>
        <!-- end of one row -->

        <!-- one row -->
        <tr>
            <td class="quartile" rowspan="3">Forth</td>
            <td rowspan="3">Framework Project 2</td>
            <td rowspan="3">10</td>
            <td>Portfolio</td>
            <td>TBA</td>
        </tr>
        <!-- end of one row -->

        <!-- one row -->
        <tr>
            <td>Project</td>
            <td>TBA</td>
        </tr>
        <!-- end of one row -->

        <!-- one row -->
        <tr>
            <td>Assesment</td>
            <td>TBA</td>
        </tr>
        <!-- end of one row -->

        <!-- one row -->
        <tr>
            <td>Entire Year</td>
            <td>Personal Professional Development</td>
            <td>12.5</td>
            <td>Portfolio</td>
            <td>TBA</td>
        </tr>
        <!-- end of one row -->

        <!-- one row -->
        <tr>
            <td>Whenever</td>
            <td>Personality 1</td>
            <td>1.25</td>
            <td>Portfolio</td>
            <td>TBA</td>
        </tr>
        <!-- end of one row -->

        <!-- one row -->
        <tr>
            <td>Entire Year</td>
            <td>Personality 2</td>
            <td>1.25</td>
            <td>Portfolio</td>
            <td>TBA</td>
        </tr>
        <!-- end of one row -->
        </tbody>
        <!-- End of Table Body  -->
    </table>
    <!-- End of Table -->
        </div>
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
