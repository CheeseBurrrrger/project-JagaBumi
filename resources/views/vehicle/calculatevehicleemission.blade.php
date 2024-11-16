<html>
  <head>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <meta name="viewport" content="width=device-width, initial-scale=0.9">
    <link rel="stylesheet"
      as="style"
      onload="this.rel='stylesheet'"
      href="https://fonts.googleapis.com/css2?display=swap&amp;family=Inter%3Awght%40400%3B500%3B700%3B900&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900"
    />

    <title>Jaga Bumi</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="FAVICON.ico">
    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  </head>
  <body style="width: 90%;margin: auto;">
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
                <a href="/login" class="login-btn">Login</a>
                <button class="register-btn">Register</button>
            </div>
        </nav>
        
    
    </header>
    <div class="relative flex size-full min-h-screen flex-col bg-[#f8f9fc] group/design-root overflow-x-hidden" style='font-family: Inter, "Noto Sans", sans-serif;'>
      <div class="layout-container flex h-full grow flex-col">
        <div class="px-40 flex flex-1 justify-center py-5">
          <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
            <div class="flex flex-wrap justify-between gap-3 p-4">
              <div class="flex min-w-72 flex-col gap-3">
                <img src="/img/exhaust128.png" alt="exhaust-illustration" style="margin: auto">
                <p class="text-[#0e121b] tracking-light text-[32px] font-bold leading-tight">Check Your Emission</p>
                <p class="text-[#4e6797] text-sm font-normal leading-normal">View and calculate emission produce by your vehicle
                </p>
              </div>
            </div>
            <div class="pb-3 mt-5">
              <div class="flex border-b border-[#364059] px-4 gap-8">
                
              </div>
            </div>
            <div class="px-4 py-3 @container">
              <div class="flex overflow-hidden rounded-xl border border-[#d0d7e7] bg-[#f8f9fc]">
              </div>
              <style>
                @container(max-width:120px){.table-a589e3d2-3512-4ac2-81b6-837810765f5f-column-120{display: none;}}
                @container(max-width:240px){.table-a589e3d2-3512-4ac2-81b6-837810765f5f-column-240{display: none;}}
                @container(max-width:360px){.table-a589e3d2-3512-4ac2-81b6-837810765f5f-column-360{display: none;}}
                @container(max-width:480px){.table-a589e3d2-3512-4ac2-81b6-837810765f5f-column-480{display: none;}}
                @container(max-width:600px){.table-a589e3d2-3512-4ac2-81b6-837810765f5f-column-600{display: none;}}
                @container(max-width:720px){.table-a589e3d2-3512-4ac2-81b6-837810765f5f-column-720{display: none;}}
              </style>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
