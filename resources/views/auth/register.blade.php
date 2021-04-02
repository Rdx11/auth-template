<html lang="en">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="dist/images/logo.svg" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="LaraXam is free application for administering exams at school">
        <meta name="keywords" content="sourcode exam app, simple exam app">
        <meta name="author" content="Rdx11">
        <title>Register - Topson - Tailwind HTML Admin Template</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="{{ asset('dist/css/app.css') }}" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Alpine js -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
    </head>
    <body>
        <div class="w-full min-h-screen p-5 md:p-20 flex items-center justify-center">
            <div class="intro-y auth">
                <div class="flex intro-y">
                    <img class="intro-y ml-auto mr-2 w-16" alt="LaraXam logo" src="dist/images/logo.svg">
                    <div class="intro-y text-2xl font-medium text-center mr-auto text-blue-300"><span class="text-theme-1">Lara</span>Xam</div>
                </div>
                <div class="intro-y box px-5 py-8 mt-16">
                    <div class="intro-y">
                        <form action="{{ route('register') }}" method="post">
                            @csrf
                            
                            <input name="name" type="text" class="form-control py-3 px-4 intro-y auth__input @error('name') border-2 border-red-400 @enderror" 
                            placeholder="Name"
                            value="{{ old('name') }}"
                            {{-- required --}}
                            autocomplete="name"
                            autofocus/>
                            @error('name')
                            <p class="text-red-400 mt-2 ml-1 font-medium">
                                {{ $message }}
                            </p>
                            @enderror
                            
                            <input name="email" type="email" class="form-control py-3 px-4 intro-y mt-4 auth__input @error('email') border-2 border-red-400 @enderror" 
                            placeholder="Email"
                            value="{{ old('email') }}"
                            {{-- required --}}
                            autocomplete="email"
                            autofocus/>
                            @error('email')
                                <p class="text-red-400 mt-2 ml-1 font-medium">
                                    {{ $message }}
                                </p>
                            @enderror
                            
                            <div class="py-2 mt-2" x-data="{ show: true }">
                                <div class="relative">
                                  <input placeholder="Password" :type="show ? 'password' : 'text'" class="form-control px-4 py-3 auth__input @error('password') border-2 border-red-400 @enderror"
                                  name="password" 
                                  autocomplete="password" 
                                  autofocus/>
                                  <div class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5">
                
                                    <svg class="h-6 text-theme-1" fill="none" @click="show = !show"
                                      :class="{'hidden': !show, 'block':show }" xmlns="http://www.w3.org/2000/svg"
                                      viewbox="0 0 576 512">
                                      <path fill="currentColor"
                                        d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z">
                                      </path>
                                    </svg>
                
                                    <svg class="h-6 text-blue-300" fill="none" @click="show = !show"
                                      :class="{'block': !show, 'hidden':show }" xmlns="http://www.w3.org/2000/svg"
                                      viewbox="0 0 640 512">
                                      <path fill="currentColor"
                                        d="M320 400c-75.85 0-137.25-58.71-142.9-133.11L72.2 185.82c-13.79 17.3-26.48 35.59-36.72 55.59a32.35 32.35 0 0 0 0 29.19C89.71 376.41 197.07 448 320 448c26.91 0 52.87-4 77.89-10.46L346 397.39a144.13 144.13 0 0 1-26 2.61zm313.82 58.1l-110.55-85.44a331.25 331.25 0 0 0 81.25-102.07 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64a308.15 308.15 0 0 0-147.32 37.7L45.46 3.37A16 16 0 0 0 23 6.18L3.37 31.45A16 16 0 0 0 6.18 53.9l588.36 454.73a16 16 0 0 0 22.46-2.81l19.64-25.27a16 16 0 0 0-2.82-22.45zm-183.72-142l-39.3-30.38A94.75 94.75 0 0 0 416 256a94.76 94.76 0 0 0-121.31-92.21A47.65 47.65 0 0 1 304 192a46.64 46.64 0 0 1-1.54 10l-73.61-56.89A142.31 142.31 0 0 1 320 112a143.92 143.92 0 0 1 144 144c0 21.63-5.29 41.79-13.9 60.11z">
                                      </path>
                                    </svg>
                
                                  </div>
                                </div>
                                @error('password')
                                <p class="text-red-400 mt-2 ml-1 font-medium">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>
                            
                            <input name="password_confirmation" type="password" class="form-control py-3 px-4 intro-y mt-2 auth__input" placeholder="Password Confirmation">
                        </div>
                        <div class="intro-y mt-5 xl:mt-8 text-center xl:text-left">
                            <button class="btn btn-primary intro-y w-full xl:mr-3">Register</button>
                        </form>
                        
                            <a href="{{ route('login') }}" class="btn btn-outline-secondary intro-y w-full mt-3">Sign in</a>
                        </div>
                </div>
            </div>
        </div>
        <!-- BEGIN: JS Assets-->
        <script src="dist/js/app.js"></script>
        <!-- END: JS Assets-->
    </body>
</html>