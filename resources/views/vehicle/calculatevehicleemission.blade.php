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
                @auth
                    <li class="dropdown">
                        <a href="#about" class="dropbtn">Hi welcome back, {{ auth()->user()->name }}</a>
                        <div class="dropdown-content">
                            <a href="profile" class="dashboard-link">
                                My Profile 
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
            <div class="px-4 py-3 @container">
              <div class="flex overflow-hidden rounded-xl border border-[#d0d7e7] bg-[#f8f9fc]">
                <div class="pb-3 mt-5">
                  <div class="flex  min-w-full border-[#364059] px-56 object-center gap-8">
                    <form action="{{ route('calculate') }}" method="POST">
                      @csrf
                      <div class="flex overflow-hidden rounded-xl border border-[#d0d7e7] bg-[#f8f9fc] max-w-lg">
                          <div class="flex w-[480px] flex-1 flex-wrap items-end gap-4 px-4 py-3">
                              <label class="flex flex-col min-w-40 flex-1">
                              <p class="text-[#181311] text-base font-medium leading-normal pb-2">Jarak tempuh anda </p>
                              <input
                                  class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#181311] focus:outline-0 focus:ring-0 border-none bg-[#f4f2f0] focus:border-none h-14 placeholder:text-[#897061] p-4 text-base font-normal leading-normal" type="text"
                                  name="distance" id="distance" placeholder="e.g., 100km"
                              />
                              </label>
                          </div>
                      </div>
                      <div class="my-2 flex overflow-hidden rounded-xl border border-[#d0d7e7] bg-[#f8f9fc] max-w-lg">
                          <div class="flex max-w-[480px] flex-1 flex-wrap items-end gap-4 px-4 py-3">
                              <label class="flex flex-col min-w-40 flex-1">
                              <p class="text-[#181311] text-base font-medium leading-normal pb-2">Fuel Consumption L/100km</p>
                              <input
                                  class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#181311] focus:outline-0 focus:ring-0 border-none bg-[#f4f2f0] focus:border-none h-14 placeholder:text-[#897061] p-4 text-base font-normal leading-normal" type="text"
                                  name="FuelConsumption" id="FuelConsumption" placeholder="example 6.7L /100 km then only write 6.7"
                              />
                              </label>
                          </div>
                      </div>
                      <div class="my-2 flex overflow-hidden rounded-xl border border-[#d0d7e7] bg-[#f8f9fc] max-w-lg">
                          <div class="flex max-w-[480px] flex-1 flex-wrap items-end gap-4 px-4 py-3">
                              <label class="flex flex-col min-w-40 flex-1">
                              <p class="text-[#181311] text-base font-medium leading-normal pb-2">Car category</p>
                              <div class="flex items-center mb-4">
                                <input id="default-radio-1" type="radio" value="Diesel" name="radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-radio-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Diesel</label>
                              </div>
                              <div class="flex items-center mb-4">
                                <input id="default-radio-1" type="radio" value="Gasoline" name="radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-radio-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Gasoline</label>
                              </div>
                              </label>
                          </div>
                      </div>
                      <div class="flex px-4 py-3">
                          <button
                          class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-10 px-4 flex-1 bg-[#f4f2f0] text-[#181311] text-sm font-bold leading-normal tracking-[0.015em]"
                           type="submit">
                          <span class="truncate">Submit</span>
                          </button>
                      </div>
                      <div class="my-2 flex overflow-hidden rounded-xl border border-[#d0d7e7] bg-[#f8f9fc] max-w-lg">
                        <div class="flex max-w-[480px] flex-1 flex-wrap items-end gap-4 px-4 py-3">
                            <label class="flex flex-col min-w-40 flex-1">
                                <p class="text-[#181311] text-base font-medium leading-normal pb-2">Your Carbon Footprints:</p>
                                <p id="result-before" class="text-[#364059] text-lg font-semibold">
                                    Original: {{ isset($emission) ? $emission . ' kg CO₂' : 'N/A' }}
                                </p>
                                <p id="result-after" class="text-[#364059] text-lg font-semibold">
                                    Rounded: {{ isset($roundedEmission) ? $roundedEmission . ' kg CO₂' : 'N/A' }}
                                </p>
                            </label>
                        </div>
                    </div>
                  </form>
                  </div>
                </div>
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
