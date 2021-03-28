<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Milky Way - Our Solar System</title>
    <script src="https://kit.fontawesome.com/3319275051.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Lora|Roboto:400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/change_page.js"></script>
    <script src="js/mobile_nav.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            change_page('earth');
        });
    </script>
</head>

<body>

    <section class="landing">
        <h2 class="large">The Milky Way</h2>
        <p>Learn more about our solar system</p>
        <a class="button" href="#planet">Learn More</a>
    </section>

    <nav>
        <div class="nav toggle">
            <p onclick="change_page('earth'); toggle_nav()">Earth</p>
            <p onclick="change_page('jupiter'); toggle_nav()">Jupiter</p>
            <p onclick="change_page('neptune'); toggle_nav()">Neptune</p>
            <p onclick="change_page('saturn'); toggle_nav()">Saturn</p>
            <p onclick="change_page('mars'); toggle_nav()">Mars</p>
            <p onclick="change_page('uranus'); toggle_nav()">Uranus</p>
            <p onclick="change_page('venus'); toggle_nav()">Venus</p>
            <p onclick="change_page('mercury'); toggle_nav()">Mercury</p>
            <p onclick="toggle_nav()" class="nav-open"><i class="fas fa-angle-down"></i></p>
            <p onclick="toggle_nav()" class="nav-close"><i class="fas fa-angle-up"></i></p>
        </div>
    </nav>

    <section id="planet" class="planet">
    </section>

    <section class="footer">
        <div>
            <p>SPA (Single Page Application) made by <span class="italic"><a href="https://austinb.net">Austin Brown</a></span></p>
            <p>The purpose of this website is to show my ability to build single page applications.
                This is not an affiliate of any space program or company, and all information found
                is accredited to the following: 
            </p>
            <p><a href="https://solarsystem.nasa.gov/solar-system/our-solar-system/overview/" target="_blank">NASA</a></p>
        </div>
    </section>

</body>

</html>