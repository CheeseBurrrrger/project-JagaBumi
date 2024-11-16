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
      <img class="mx-auto h-20 w-auto" src="img/jagabumi.png" alt="Jaga Bumi">
      <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Sign up to help save mother earth</h2>
    </div>
  
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
      <form class="space-y-6" action="/regis" method="POST">
        @csrf
        <div>
            <label for="name" class="block text-sm/6 font-medium text-gray-900">Name</label>
            <div class="mt-2">
            <input id="email" name="name" type="text" autocomplete="name" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6 p-2">
            @error('name')
            <span class="text-danger">{{ $message }}</span>
            @enderror
            </div>
        </div>
        
        <div>
            <label for="email" class="block text-sm/6 font-medium text-gray-900">Email address</label>
            <div class="mt-2">
              <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6 p-2">
              @error('email')
              <span class="text-danger">{{ $message }}</span>
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
            @error('password')
              <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
  
        <div>
            <button class="flex w-full justify-center rounded-md bg-lime-700 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-sm hover:bg-lime-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Submit</button>
        </div>
      </form>
      <p class="mt-10 text-center text-sm/6 text-gray-500">
        already have an account?
        <a href="{{ route ('login') }}" class="font-semibold text-lime-600 hover:text-lime-500">Login here</a>
      </p>
      <p class="mt-10 text-center text-sm/6 text-gray-500">
        wanna login using google?
        <a href="{{ route ('google-auth') }}" class="font-semibold text-lime-600 hover:text-lime-500">login with google</a>
      </p>
    </div>
  </div>
  
</body>
</html>