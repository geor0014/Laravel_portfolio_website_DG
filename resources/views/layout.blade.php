<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible"
          content="IE=edge"/>
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0"/>
    <title>Index</title>
    <!-- CSS -->
    <link rel="stylesheet"
          href="/styles/main.css">
    <!-- FONTAWESOME -->
    <script src="https://kit.fontawesome.com/d0ae553ab5.js" crossorigin="anonymous"></script>
    <!-- INDIVIDUAL CSS  -->
@yield('styles')
<!-- JS -->
    @yield('javascript')
</head>

<body>
<div class="container">
    <!-- HEADER -->
    <header class="item index-header">
        <!-- nav -->
        <nav>
            <ul class="nav-links">
                <!-- nav button -->
                <li class="nav-btn"
                    onclick="openSideMenu()">
                    <i class="fas fa-bars fa-rotate-270"></i>
                </li>
                <!-- end of nav button -->
                <li>
                    <img
                        src="/images/IMG_9205 G.jpg"
                        class="profile-pic"
                        alt="passport-photo"/>
                </li>
                <li class="{{ Request::path() === '/'?'active list-item':'list-item'}}">
                    <i class="fas fa-home"></i>
                    <a href="/">Home</a>
                </li>
                <li class="{{ Request::path() === 'blog'?'active list-item':'list-item'}}">
                    <i class="fas fa-blog"></i>
                    </i><a href="/blog">Blog</a>
                </li>
                <li class="{{ Request::path() === 'dashboard'?'active list-item':'list-item'}}">
                    <i class="fas fa-columns"></i>
                    <a href="/dashboard">Dashboard</a>
                </li>
                <li class="{{ Request::path() === 'faq'?'active list-item':'list-item'}}">
                    <i class="fas fa-question-circle"></i>
                    <a href="/faq">FAQ</a>
                </li>
                <li class="{{ Request::path() === 'profile'?'active list-item':'list-item'}}">
                    <i class="fas fa-id-badge"></i>
                    <a href="/profile">Profile</a>
                </li>
                <li>
                    <a href="https://hz.nl/en "
                       target="_">
                        <img src="/images/HZ.jpg"
                             class="hz-logo"
                             alt="HZ-uni-logo"/>
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
            <a href="#" class="close"
               onclick="closeSideMenu()">
                <i class="fas fa-times"></i>
            </a>
            <a href="https://hz.nl/uploads/documents/Regelingen/OERS/2021-2022/HZ-Course-and-Examination-Regulations-2021-2022.pdf"
               class="sidebar-link" target="_">HBO-ICT
                CER</a>
            <a href="https://hz.nl/uploads/documents/Regelingen/OERS/2019-2020/2020-2021-ICT-Implementation-Regulations-CER-HZ-DEF1.0.pdf"
               class="sidebar-link" target="_">HBO-ICT
                IR</a>
            <a href="https://learn.hz.nl/my/"
               class="sidebar-link" target="_">HZ
                Learn</a>
            <a href="https://github.com/geor0014/geor0014.github.io"
               class="sidebar-link" target="_">GitHub</a>
            <a href="https://teams.microsoft.com/l/channel/19%3a2e2afa0286b04932be16cb8ad2d9d2c0%40thread.skype/General?groupId=95bddebc-a340-4d88-81fc-b80e0bfc70c3&tenantId=4c16deb3-342d-4fca-bcd5-b1429308034c"
               class="sidebar-link" target="_">Teams</a>
        </div>
    </section>
    <!-- END OFF SIDEBAR -->


{{-- CONTENT --}}
@yield('content')
{{-- END OF CONTENT --}}


<!-- FOOTER -->
    <footer class="item footer">
        <div class="footer-icons">
            <a href="https://www.facebook.com/daniel.cvetanov.92"
               class="footer-single-icon"
               target="_">
                <i class="fab fa-facebook"></i>
            </a>
            <a href="https://www.instagram.com/cvetanovdaniel/"
               target="_"
               class="footer-single-icon">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://www.linkedin.com/in/daniel-georgiev-2171811b5/"
               target="_"
               class="footer-single-icon">
                <i class="fab fa-linkedin-in"></i>
            </a>
            <a href="https://github.com/geor0014"
               target="_"
               class="footer-single-icon">
                <i class="fab fa-github-alt"></i>
            </a>
        </div>
    </footer>
    <!-- END OF FOOTER -->
</div>

<!-- INDIVIDUAL SCRIPTS -->
@yield('scripts')
<!-- END OF INDIVIDUAL SCRIPTS -->

</body>
</html>
