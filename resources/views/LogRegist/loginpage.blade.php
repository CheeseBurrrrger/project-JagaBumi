<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.9">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <title>Jaga Bumi</title>
    @vite('resources/css/app.css')

</head>
<body>
<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      @if (session()->has('loginError'))
      {{-- <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="close" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>         --}}
      <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
        <span class="font-medium">{{ session('loginError') }}</span> Cek ulang kredensial anda
      </div>
      @endif
      <img class="mx-auto h-20 w-auto" src="img/jagabumi.png" alt="Jaga Bumi">
      <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Login to your account</h2>
    </div>
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
      <form class="space-y-6" action="/" method="POST">
        @csrf
        <div>
          <label for="email" class="block text-sm/6 font-medium text-gray-900">Email address</label>
          <div class="mt-2">
            <input id="email" name="email" type="email" autocomplete="email" autofocus required required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6 p-2 " value="{{ old ('email')}}">  
            @error('email')
              <div class="invalid-feedback block text-sm/6 font-medium text-gray-900"> 
                {{ $message }}
              </div>
            @enderror
          </div>
        </div>
  
        <div>
          <div class="flex items-center justify-between">
            <label for="password" class="block text-sm/6 font-medium text-gray-900">Password</label>
            <div class="text-sm">
              <a href="#" class="font-semibold text-lime-600 hover:text-lime-500">Forgot password?</a>
            </div>
          </div>
        <div class="mt-2">
          <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6 p-2">
        </div>
    </div>
  
      <div>
            <button class="flex w-full justify-center rounded-md bg-lime-700 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-sm hover:bg-lime-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign in</button>
      </div>
      </form>
      <p class="mt-10 text-center text-sm/6 text-gray-500">
        Don't have an account?
        <a href="{{ route ('regis') }}" class="font-semibold text-lime-600 hover:text-lime-500">Sign Up</a>
      </p>
      <p class="mt-10 text-center text-sm/6 text-gray-500">
        wanna login using google?
        {{-- <a href="{{ route ('google-auth') }}" class="font-semibold text-lime-600 hover:text-lime-500">login with google</a> --}}
        <button  id="google-login-button" type="button" class="text-white bg-[#4285F4] hover:bg-[#4285F4]/90 focus:ring-4 focus:outline-none focus:ring-[#4285F4]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#4285F4]/55 me-2 mb-2">
            <svg class="w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 19">
            <path fill-rule="evenodd" d="M8.842 18.083a8.8 8.8 0 0 1-8.65-8.948 8.841 8.841 0 0 1 8.8-8.652h.153a8.464 8.464 0 0 1 5.7 2.257l-2.193 2.038A5.27 5.27 0 0 0 9.09 3.4a5.882 5.882 0 0 0-.2 11.76h.124a5.091 5.091 0 0 0 5.248-4.057L14.3 11H9V8h8.34c.066.543.095 1.09.088 1.636-.086 5.053-3.463 8.449-8.4 8.449l-.186-.002Z" clip-rule="evenodd"/>
            </svg>
            Sign in with Google
        </button>
        <script>
          document.getElementById('google-login-button').addEventListener('click', function () {
              window.location.href = "{{ route('google-auth') }}";
          });
      </script>
      </p>
    </div>
  </div>
  
</body>
</html>