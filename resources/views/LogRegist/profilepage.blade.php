<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=0.8">
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
        <link rel="stylesheet" as="style"
            onload="this.rel='stylesheet'"
            href="https://fonts.googleapis.com/css2?display=swap&amp;family=Inter%3Awght%40400%3B500%3B700%3B900&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900"
          />
        <title>Jaga Bumi</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="icon" type="image/x-icon" href="FAVICON.ico">
        @vite('resources/css/app.css')
        <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
</head>
<body>
    <div class="relative flex size-full min-h-screen flex-col bg-[#f8f9fc] group/design-root overflow-x-hidden" style='font-family: Inter, "Noto Sans", sans-serif;'>
        <div class="layout-container flex h-full grow flex-col">
            <div class="px-40 flex flex-1 justify-center py-5">
                <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
                    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                        <img class="mx-auto h-20 w-auto" src="/img/jagabumi.png" alt="Jaga Bumi">
                        <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">About you</h2>
                    </div>
                    <div class="px-4 py-3 @container">
                        <div class="bg-white overflow-hidden shadow rounded-lg border">
                            <div class="px-4 py-5 sm:px-6">
                                <h3 class="text-lg leading-6 font-medium text-gray-900">
                                    User Profile
                                </h3>
                                <p class="mt-1 max-w-2xl text-sm text-gray-500">
                                    Here some information about you.
                                </p>
                            </div>
                            <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
                                <dl class="sm:divide-y sm:divide-gray-200">
                                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="text-sm font-medium text-gray-500">Name</dt>
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            {{ $user->name }}
                                        </dd>
                                    </div>
                                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="text-sm font-medium text-gray-500">Email address</dt>
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            {{ $user->email }}
                                        </dd>
                                    </div>
                                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="text-sm font-medium text-gray-500">Phone number</dt>
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            {{ $user->phone }}
                                        </dd>
                                    </div>
                                    <div class="px-4 py-5 sm:px-6 grid grid-cols-12 gap-40 self-center">
                                        <a href="{{ route('edit.form',$user->id ) }}"  class="self-center w-28 h-10  text-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 shadow-lg shadow-cyan-500/50 dark:shadow-lg dark:shadow-cyan-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Edit</a>
                                        {{-- <div class="mt-2"> --}}
                                            <form action="{{ route('delete.post',$user->id) }}" method="POST">
                                                @csrf
                                                <button type="submit" class="self-center w-28 text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Delete</button>
                                            </form>
                                        {{-- </div> --}}
                                        <a href="/dashboard"  class="self-center mx-auto w-28 text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Home</a>

                                        
                                        
                                    </div>
                                </dl>
                            </div>
                    </div >
                </div>
            </div>
        </div>
    </div>
</body>
</html>