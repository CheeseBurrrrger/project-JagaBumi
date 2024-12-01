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
      <img class="mx-auto h-20 w-auto" src="/img/jagabumi.png" alt="Jaga Bumi">
      <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Edit your profile</h2>
    </div>
  
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
      <form class="space-y-6" action="{{ route('edit.post', $item->id) }}" method="POST">
        @csrf
        <div>
            <label for="name" class="block text-sm/6 font-medium text-gray-900">Name</label>
            <div class="mt-2 ">
            <input id="email" name="name" type="text" autocomplete="name" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6 p-2 " value="{{ $item->name }}">
            @error('name')
            <span class="text-danger font-sans font-medium">{{ $message }}</span>
            @enderror
            </div>
        </div>
        
        <div>
          <label for="phone-input" class="block text-sm font-medium text-gray-900 dark:text-white">Phone number</label>
          <div class="relative">
              <div class="absolute inset-y-0 start-0 top-0 flex items-center ps-3.5 pointer-events-none pb-1">
                  <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 19 18">
                      <path d="M18 13.446a3.02 3.02 0 0 0-.946-1.985l-1.4-1.4a3.054 3.054 0 0 0-4.218 0l-.7.7a.983.983 0 0 1-1.39 0l-2.1-2.1a.983.983 0 0 1 0-1.389l.7-.7a2.98 2.98 0 0 0 0-4.217l-1.4-1.4a2.824 2.824 0 0 0-4.218 0c-3.619 3.619-3 8.229 1.752 12.979C6.785 16.639 9.45 18 11.912 18a7.175 7.175 0 0 0 5.139-2.325A2.9 2.9 0 0 0 18 13.446Z"/>
                  </svg>
              </div>
              <input type="text" name="phone" id="phone-input" aria-describedby="helper-text-explanation" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="081948795649" required value="{{ $item->phone }} "/>
              @error('telpon')
              <span class="mt-2 text-danger font-sans font-medium">{{ $message }}</span>
              @enderror
          </div>
          <p id="helper-text-explanation" class="mt-2 text-sm text-gray-500 dark:text-gray-400">masukkan nomor telepon sesuai dengan format.</p>
        </div>


        <div>
            <label for="email" class="block text-sm/6 font-medium text-gray-900">Email address</label>
            <div class="mt-2">
              <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6 p-2" value="{{ $item->email }}"/>
              @error('email')
              <span class="text-danger font-sans font-medium">{{ $message }}</span>
              @enderror
            </div>
          </div>

        <div>
            <div class="flex items-center justify-between">
                <label for="password" class="block text-sm/6 font-medium text-gray-900">Password</label>
                <div class="text-sm">
                </div>
            </div>
            <div class="mt-2">
                <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6 p-2">
            </div>
            @error('password')
              <span class="text-danger font-sans font-medium">{{ $message }}</span>
            @enderror
        </div>
  
        <div>
            <button type="submit" class="flex w-full justify-center rounded-md bg-lime-700 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-sm hover:bg-lime-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Edit</button>
        </div>
      </form>
    </div>
  </div>
  
</body>
</html>