<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jaga Bumi</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="FAVICON.ico">
    @vite('resources/css/app.css')
</head>
<body style="background-image: url('img/hd.jpeg'); background-position: 0px 20px; background-size: 101%; background-position: center; background-repeat: no-repeat; width: 90%; margin: auto;">
    <header>
        <nav class="navbar">
            <div class="navbar-logo">
                <img src="img/jagabumi.png" alt="Jaga Bumi Logo">
                <span onclick="window.location='/dashboard'" class="cursor-pointer" >JAGA BUMI</span>
            </div>
            <ul class="navbar-menu">
                <li class="dropdown">
                    <a href="#about" class="dropbtn">ABOUT</a>
                    <div class="dropdown-content">
                        <a href="/vision">Vision & Mission</a>
                        <a href="#">Our Team</a>
                        <a href="#">History</a>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="#articles" class="dropbtn">ARTIKEL</a>
                    <div class="dropdown-content">
                        <a href="#">Climate News</a>
                        <a href="#">Eco Tips</a>
                        <a href="#">Case Studies</a>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="#carbon" class="dropbtn">JEJAK KARBON</a>
                    <div class="dropdown-content">
                        <a href="/pe">Track Personal Emissions</a>
                        <a href="/ve">Vehicle Emissions</a>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="#information" class="dropbtn">INFORMASI</a>
                    <div class="dropdown-content">
                        <a href="#">Events</a>
                        <a href="#">Volunteer</a>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="#donation" class="dropbtn">DONASI</a>
                    <div class="dropdown-content">
                        <a href="#">Tree Planting</a>
                        <a href="#">Carbon Offset</a>
                    </div>
                </li>
            </ul>
            <div class="navbar-buttons">
                <a href="/login"class="login-btn">Login</a>
                <button class="register-btn">Register</button>
            </div>
        </nav>
    </header>
    <div>
        <section class="aboutus-section" >
            <H1 class="aboutus-section h1">
                About us
            </H1>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci eos officiis aut sapiente, quos iusto quis, consequatur aspernatur culpa ut error obcaecati sed quisquam commodi nobis. Incidunt reiciendis neque sed.
            </p>
        </section>
    </div>  
</body>
</html>