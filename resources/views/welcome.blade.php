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
<body style="width: 90%; margin: auto;">
    <!-- Navigation Bar -->
    <header>
        <nav class="navbar">
            <div class="navbar-logo">
                <img src="img/jagabumi.png" alt="Jaga Bumi Logo">
                <span>JAGA BUMI</span>
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
                @auth
                    <li class="dropdown">
                        <a href="#about" class="dropbtn">Hi welcome back, {{ auth()->user()->name }}</a>
                        <div class="dropdown-content">
                            <!-- Add styles or classes for proper alignment -->
                            <a href="/vision" class="dashboard-link">
                                My Dashboard 
                                <img src="img/exhaust16.png" alt="exhaust picture" class="dashboard-icon">
                            </a>
                            <hr class="border-t border-gray-200">
                            <form action="/logout" class="min-w-40" method="POST">
                                @csrf
                                <button class="flex items-center gap-2 px-4 py-2 font-sans text-sm text-white w-full font-semibold font hover:bg-green-700 text-left">
                                    Logout
                                </button>                            
                            </form>
                        </div>
                    </li>
                @else
                    <div class="navbar-buttons">
                        <a href="/" class="login-btn">Login</a>
                        <a href="/regis" class="register-btn">Register</a>
                    </div>
                @endauth
            
            </ul>
        </nav>
    </header>

    <!-- Welcome Section with Carousel -->
    <section class="welcome-section">
        <h1>Selamat Datang di Website Jaga Bumi</h1>
        <div class="carousel">
            <img src="img/1.jpg" alt="Nature Image 1" class="carousel-image">
            <img src="img/2.jpg" alt="Nature Image 2" class="carousel-image">
            <img src="img/3.jpg" alt="Nature Image 3" class="carousel-image">
            <!-- Add more images as needed -->
        </div>
    </section>

    <!-- Contact and Feedback Section -->
    <section class="contact-feedback-section">
        <h2>Kontak Kami</h2>
        <p>Email: info@jagabumi.com | Telepon: +62 123 4567 890</p>
        <h3>Feedback</h3>
        <form action="#" method="post">
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="message">Pesan:</label>
            <textarea id="message" name="message" rows="4" required></textarea>
            
            <button type="submit">Kirim</button>
        </form>
    </section>

    <!-- Main Content (Profile and Carbon Tracking) remains the same -->
    <!-- Include Profile and Carbon Tracking Sections here -->

    <script src="js/script.js"></script>
</body>
</html>