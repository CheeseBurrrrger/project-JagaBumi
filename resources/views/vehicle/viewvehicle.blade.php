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
        <nav class="navbar shadow-xl">
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
    <div class="relative flex size-full min-h-screen flex-col rounded-xl bg-[#f3f5fa] group/design-root overflow-x-hidden mt-4 " style='font-family: Inter, "Noto Sans", sans-serif;'>
      <div class="layout-container flex h-full grow flex-col">
        <div class="px-40 flex flex-1 justify-center py-5">
          <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
            <div class="flex flex-wrap justify-between gap-3 p-4 ">
              <div class="flex min-w-72 flex-col gap-3 ">
                <p class="text-[#0e121b] tracking-light text-[32px] font-bold leading-tight">Vehicle Emission</p>
                <p class="text-[#4e6797] text-sm font-normal leading-normal">View and manage your vehicle emission</p>
              </div>
            </div>
            <div class="pb-3">
              <div class="flex border-b border-[#d0d7e7] px-4 gap-8">
                <a class="flex flex-col items-center justify-center border-b-[3px] border-b-[#72BF78] text-[#0e121b] pb-[13px] pt-4 hover:border-b-[#D3EE98]" href="/ve">
                  <p class="text-[#0e121b] text-sm font-bold leading-normal tracking-[0.015em] hover:text-[#6d7faa]">Your vehicle</p>
                </a>
                <a class="flex flex-col items-center justify-center border-b-[3px] border-b-transparent text-[#4e6797] pb-[13px] pt-4 hover:border-b-[#D3EE98]" href="/nv">
                  <p class="text-[#4e6797] text-sm font-bold leading-normal tracking-[0.015em] hover:text-[#0e121b]">Add new vehicle</p>
                </a>
              </div>
            </div>
            <div class="px-4 py-3 @container">
              <div class="flex overflow-hidden rounded-xl border border-[#d0d7e7] bg-[#f8f9fc]">
                <table class="flex-1">
                  <thead>
                    <tr class="bg-[#f8f9fc]">
                      <th class="table-a589e3d2-3512-4ac2-81b6-837810765f5f-column-120 px-4 py-3 text-left text-[#0e121b] w-[400px] text-sm font-medium leading-normal">Manufacturer</th>
                      <th class="table-a589e3d2-3512-4ac2-81b6-837810765f5f-column-240 px-4 py-3 text-left text-[#0e121b] w-[400px] text-sm font-medium leading-normal">Type</th>
                      <th class="table-a589e3d2-3512-4ac2-81b6-837810765f5f-column-360 px-4 py-3 text-left text-[#0e121b] w-60 text-sm font-medium leading-normal">Category</th>
                      <th class="table-a589e3d2-3512-4ac2-81b6-837810765f5f-column-480 px-4 py-3 text-left text-[#0e121b] w-[400px] text-sm font-medium leading-normal">
                        Engine Capacity
                      </th>
                      <th class="table-a589e3d2-3512-4ac2-81b6-837810765f5f-column-600 px-4 py-3 text-left text-[#0e121b] w-[400px] text-sm font-medium leading-normal">
                        Year
                      </th>
                      <th
                        class="table-a589e3d2-3512-4ac2-81b6-837810765f5f-column-720 px-4 py-3 text-left text-sm font-medium leading-normal"
                      ></th>
                      <th
                        class="table-a589e3d2-3512-4ac2-81b6-837810765f5f-column-720 px-4 py-3 text-left text-sm font-medium leading-normal"
                      ></th>
                      <th
                        class="table-a589e3d2-3512-4ac2-81b6-837810765f5f-column-720 px-4 py-3 text-left text-sm font-medium leading-normal"
                      ></th>
                    </tr>
                  </thead>
                  <tbody>
                    @if (count($all_vehicle) > 0)
                        @foreach ($all_vehicle as $item)
                            <tr class="border-t border-t-[#d0d7e7]">
                                <td class="table-a589e3d2-3512-4ac2-81b6-837810765f5f-column-120 h-[72px] px-4 py-2 w-[400px] text-[#4e6797] text-sm font-normal leading-normal">{{ $item->manufacturer }}</td>
                                <td class="table-a589e3d2-3512-4ac2-81b6-837810765f5f-column-240 h-[72px] px-4 py-2 w-[400px] text-[#0e121b] text-sm font-normal leading-normal">
                                    {{$item->vehicle_type}}</td>
                                <td class="table-a589e3d2-3512-4ac2-81b6-837810765f5f-column-360 h-[72px] px-4 py-2 w-60 text-sm font-normal leading-normal">
                                    {{$item->vehicle_category}}</td>
                                <td class="table-a589e3d2-3512-4ac2-81b6-837810765f5f-column-360 h-[72px] px-4 py-2 w-60 text-sm font-normal leading-normal">
                                    {{$item->engine_capacity}}</td>
                                <td class="table-a589e3d2-3512-4ac2-81b6-837810765f5f-column-600 h-[72px] px-4 py-2 w-[400px] text-[#4e6797] text-sm font-normal leading-normal">
                                    {{$item->vehicle_year}}</td>
                                <td class="table-a589e3d2-3512-4ac2-81b6-837810765f5f-column-720 h-[72px] px-4 py-2 w-60 text-[#4e6797] text-sm font-bold leading-normal tracking-[0.015em]">
                                  <a href="{{ route('calculate') }}" class="cursor-pointer  text-green-600 dark:text-green-500 hover:underline">Check Your Emission</a></td>
                                <td class="table-a589e3d2-3512-4ac2-81b6-837810765f5f-column-720 h-[72px] px-4 py-2 w-60 text-[#4e6797] text-sm font-bold leading-normal tracking-[0.015em]">
                                    <a href="{{ route('vehicle.edit',$item->id_vehicle ) }}" class="cursor-pointer  text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                    @csrf
                                </td>
                                <td class="table-a589e3d2-3512-4ac2-81b6-837810765f5f-column-720 h-[72px] px-4 py-2 w-60 text-[#4e6797] text-sm font-bold leading-normal tracking-[0.015em]">
                                    <form action="{{ route ('vehicle.delete',$item->id_vehicle) }}" method="POST">
                                      @csrf
                                      <button class="cursor-pointer text-red-600 dark:text-red-500 hover:underline">Delete</button>
                                    </form>
                                </td>
                            </tr>    
                        @endforeach
                        {{-- <a href="/ve" class="cursor-pointer hover:text-[#7b92bc]">Delete</a> --}}
                    @else
                    <tr class="border-t border-t-[#d0d7e7]">
                      <td class="table-a589e3d2-3512-4ac2-81b6-837810765f5f-column-120 h-[72px] px-4 py-2 w-[400px] text-[#4e6797] text-sm font-normal leading-normal">No vehicles found. Please add some vehicle</td>
                    </tr>
                    @endif
                  </tbody>
                </table>
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
