<!DOCTYPE html>
<html lang="en">

<head>
    <!--
    Web Developer Portfolio
    Author: Austin Brown
    Last Modified Date: 11/26/20
    Thank you for viewing!
    -->
    <title>Austin Brown Portfolio</title>
    <meta charset="UTF-8">
    <meta name="description" content="Web Developer portfolio for Austin Brown. Learn about me, my skills, view my work and contact me.">
    <meta name="keywords" content="graphic design, web design, web developer, web application, responsive web design" />
    <meta name="author" content="Austin Brown" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Files -->
    <link rel="stylesheet" href="css/compiled.css">
    <script src="js/menu_toggle.js"></script>
    <script src="js/page_change.js"></script>
    <script src="js/submit_login.js"></script>
    <script src="js/form_validation.js"></script>
</head>

<body>

    <nav>
        <!-- Site Navigation -->
        <div class="logo">
            <!-- Logo -->
            <img onclick="change_page('home')" src="images/logo.png" alt="Austin Brown Logo">
        </div>
        <div class="nav">
            <!-- Navigation -->
            <div class="hamburger">
                <!-- Hamburger -->
                <img onclick="menu_toggle()" src="icons/right_arrow_white.png" alt="Right Arrow">
            </div>
            <div class="social_media">
                <!-- Social Media Icons -->
                <a target="blank" href="https://github.com/austinbnetworking/austinb.net"><img src="icons/github.png" alt="GitHub Logo"></a>
                <a target="blank" href="https://www.linkedin.com/in/austinbnetworking/"><img src="icons/linkedin.png" alt="LinkedIn Logo"></a>
            </div>
        </div>
        <!-- Mobile Site Menu -->
        <div class="site_menu">
            <button onclick="change_page('home'), menu_toggle()"><span>Home</span><img src="icons/home.png" alt="Home Icon"></button>
            <button onclick="change_page('about'), menu_toggle()"><span>About</span><img src="icons/work.png" alt="Home Icon"></button>
            <button onclick="change_page('work'), menu_toggle()"><span>Work</span><img src="icons/skills.png" alt="Home Icon"></button>
            <button onclick="change_page('contact'), menu_toggle()"><span>Contact</span><img src="icons/mail.png" alt="Home Icon"></button>
        </div>
    </nav>
    <!-- Page Content -->
    <section class="page_content">
        <!-- Ajax Request Location -->
        <div class="ajax_location">
            <!-- Landing Page -->
            <div class="home">
                <!-- Landing Page Content -->
                <h1>Hello, I'm Austin.</h1>
                <p>Hello, thanks for stopping by my website. Here you can find projects of mine, artwork I've created or even shoot me a message!</p>
                <p>By profession, I am a Junior Web Developer. That just means I build websites, to learn more about my process, <span onclick="open_modal('process')">click here</span>.</p>
                <button onclick="change_page('work')">See Work<img src="icons/right_arrow.png" alt="Right Arrow"></button>
            </div>
            <section class="process">
            </section>
        </div>
        <div class="page_overlay">
            <img src="images/logo.png" alt="Austin Brown Logo">
        </div>
    </section>

</body>

</html>