<html>
    <head>
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
        <meta name="viewport" content="width=device-width, initial-scale=0.9">
        <link rel="stylesheet"
          as="style"
          onload="this.rel='stylesheet'"
          href="https://fonts.googleapis.com/css2?display=swap&amp;family=Inter%3Awght%40400%3B500%3B700%3B900&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900"
        />
        <link rel="stylesheet" href="/css/style.css">

    
        <title>Jaga Bumi</title>
        <link rel="icon" type="image/x-icon" href="FAVICON.ico">
        @vite('resources/css/app.css')
        <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
      </head>
  <body style="width: 90%;margin: auto;">
    <header>
        <nav class="navbar">
            <div class="navbar-logo">
                <img src="/img/jagabumi.png" alt="Jaga Bumi Logo">
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
                <p class="text-[#0e121b] tracking-light text-[32px] font-bold leading-tight">Vehicle Emission</p>
                <p class="text-[#4e6797] text-sm font-normal leading-normal">View and manage your vehicle emission</p>
              </div>
            </div>
            <div class="pb-2">
                <div class="flex border-b border-[#d0d7e7] px-4 gap-8">
                    <a class="flex flex-col items-center justify-center border-b-[3px] border-b-transparent text-[#0e121b] pb-[13px] pt-4 hover:border-b-[#D3EE98]" href="/ve">
                      <p class="text-[#4e6797] text-sm font-bold leading-normal tracking-[0.015em] hover:text-[#0e121b]">Your vehicle</p>
                    </a>
                    <a class="flex flex-col items-center justify-center border-b-[3px] border-b-[#72BF78] text-[#4e6797] pb-[13px] pt-4 hover:border-b-[#D3EE98]" href="/nv">
                      <p class="text-[#0e121b] text-sm font-bold leading-normal tracking-[0.015em] hover:text-[#6d7faa]">Edit your vehicle</p>
                    </a>
                </div>
            </div>
            <div class="px-4 py-1 @container " >
                <form action="{{ route('vehicle.update', $item->id_vehicle) }}" method="POST">
                    @csrf
                    <div class="flex overflow-hidden rounded-xl border border-[#d0d7e7] bg-[#f8f9fc] max-w-lg">
                        <div class="flex max-w-[480px] flex-1 flex-wrap items-end gap-4 px-4 py-3">
                            <label class="flex flex-col min-w-40 flex-1">
                            <p class="text-[#181311] text-base font-medium leading-normal pb-2">Car Brand</p>
                            <input
                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#181311] focus:outline-0 focus:ring-0 border-none bg-[#f4f2f0] focus:border-none h-14 placeholder:text-[#897061] p-4 text-base font-normal leading-normal" type="text"
                                value="{{ $item->manufacturer }}" name="manufacturer" id="formGroupCar1" placeholder="e.g., Honda, BMW, Mercedes Benz"
                            />
                            @error('manufacturer')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </label>
                        </div>
                    </div>
                    <div class="my-2 flex overflow-hidden rounded-xl border border-[#d0d7e7] bg-[#f8f9fc] max-w-lg">
                        <div class="flex max-w-[480px] flex-1 flex-wrap items-end gap-4 px-4 py-3">
                            <label class="flex flex-col min-w-40 flex-1">
                            <p class="text-[#181311] text-base font-medium leading-normal pb-2">Car type</p>
                            <input
                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#181311] focus:outline-0 focus:ring-0 border-none bg-[#f4f2f0] focus:border-none h-14 placeholder:text-[#897061] p-4 text-base font-normal leading-normal" type="text"
                                value="{{ $item->vehicle_type }}" name="type" id="formGroupCar2" placeholder="e.g., CRV, 320i, Hilux"
                            />
                            @error('type')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </label>
                        </div>
                    </div>
                    <div class="my-2 flex overflow-hidden rounded-xl border border-[#d0d7e7] bg-[#f8f9fc] max-w-lg">
                        <div class="flex max-w-[480px] flex-1 flex-wrap items-end gap-4 px-4 py-3">
                            <label class="flex flex-col min-w-40 flex-1">
                            <p class="text-[#181311] text-base font-medium leading-normal pb-2">Car category</p>
                            <input
                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#181311] focus:outline-0 focus:ring-0 border-none bg-[#f4f2f0] focus:border-none h-14 placeholder:text-[#897061] p-4 text-base font-normal leading-normal" type="text"
                                value="{{ $item->vehicle_category }}" name="category" id="formGroupCar3" placeholder="e.g., Sedan, SUV, Coupe"
                            />
                            @error('category')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </label>
                        </div>
                    </div>
                    <div class="my-2 flex overflow-hidden rounded-xl border border-[#d0d7e7] bg-[#f8f9fc] max-w-lg">
                        <div class="flex max-w-[480px] flex-1 flex-wrap items-end gap-4 px-4 py-3">
                            <label class="flex flex-col min-w-40 flex-1">
                            <p class="text-[#181311] text-base font-medium leading-normal pb-2">Engine capacity</p>
                            <input
                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#181311] focus:outline-0 focus:ring-0 border-none bg-[#f4f2f0] focus:border-none h-14 placeholder:text-[#897061] p-4 text-base font-normal leading-normal" type="number"
                                value="{{ $item->engine_capacity }}" name="cc" id="formGroupCar4" placeholder="e.g., 2000, 3500, 1200"
                            />
                            @error('cc')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </label>
                        </div>
                    </div>
                    <div class="my-2 flex overflow-hidden rounded-xl border border-[#d0d7e7] bg-[#f8f9fc] max-w-lg">
                        <div class="flex max-w-[480px] flex-1 flex-wrap items-end gap-4 px-4 py-3">
                            <label class="flex flex-col min-w-40 flex-1">
                            <p class="text-[#181311] text-base font-medium leading-normal pb-2">Car Year</p>
                            <input
                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#181311] focus:outline-0 focus:ring-0 border-none bg-[#f4f2f0] focus:border-none h-14 placeholder:text-[#897061] p-4 text-base font-normal leading-normal" type="number"
                                value="{{ $item->vehicle_year }}" name="year" id="formGroupCar5" placeholder="e.g., 2006, 2022, 1980"
                            />
                            @error('year')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </label>
                        </div>
                    </div>
                    <div class="flex px-4 py-3">
                        <button
                        class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-10 px-4 flex-1 bg-[#f4f2f0] text-[#181311] text-sm font-bold leading-normal tracking-[0.015em]"
                         type="submit">
                        <span class="truncate">Update</span>
                        </button>
                    </div>
                </form>
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
