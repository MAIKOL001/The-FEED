<!DOCTYPE html>
@include('layouts.metatags')
 
    <style>
        input , .bootstrap-select.btn-group button{
            background-color: #f3f4f6  !important;
            height: 44px  !important;
            box-shadow: none  !important; 
        }
    </style>
</head> 
<body>

    <body class="bg-gray-100">


        <div id="wrapper" class="flex flex-col justify-between h-screen">
    
            <!-- header-->
            <div class="bg-white py-4 shadow dark:bg-gray-800">
                <div class="max-w-6xl mx-auto">
    
    
                    <div class="flex items-center lg:justify-between justify-around">
    
                        <a href="trending.html">
                           <strong>The Feed </strong>
                        </a>
    
                        <div class="capitalize flex font-semibold hidden lg:block my-2 space-x-3 text-center text-sm">
                            <a href="/login" class="py-3 px-4">Login</a>
                            <a href="/register" class="bg-purple-500 purple-500 px-6 py-3 rounded-md shadow text-white">Register</a>
                        </div>
    
                    </div>
                </div>
            </div>
    
            <!-- Content-->
            <div>
                <div class="lg:p-12 max-w-xl lg:my-0 my-12 mx-auto p-6 space-y-">
                    
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                    <h1 class="lg:text-2xl text-xl font-semibold mb-6"> Login </h1>

                        <div>
                            <x-label for="email" value="{{ __('Email') }}" />
                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />    
                        </div>
                        <div>
                            <x-label for="password" value="{{ __('Password') }}" />
                            <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />    
                        </div>
                        
                        <div>
                            <button class="button">
                                {{ __('Log in') }}
                            <button>
                            </div>

                        <div>
                            @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                        </div>
        
                    </form>
 
                </div>
            </div>
            
            <!-- Footer -->
    
            <div class="lg:mb-5 py-3 uk-link-reset">
                <div class="flex flex-col items-center justify-between lg:flex-row max-w-6xl mx-auto lg:space-y-0 space-y-3">
                    <div class="flex space-x-2 text-gray-700 uppercase">
                        <a href="#"> About</a>
                        <a href="#"> Help</a>
                        <a href="#"> Terms</a>
                        <a href="#"> Privacy</a>
                    </div>
                    <p class="capitalize">Developer Maikol</p>
                </div>
            </div>
    
        </div>
        

        
   
    <!-- For Night mode -->
    <script>
        (function (window, document, undefined) {
            'use strict';
            if (!('localStorage' in window)) return;
            var nightMode = localStorage.getItem('gmtNightMode');
            if (nightMode) {
                document.documentElement.className += ' night-mode';
            }
        })(window, document);
    
        (function (window, document, undefined) {
    
            'use strict';
    
            // Feature test
            if (!('localStorage' in window)) return;
    
            // Get our newly insert toggle
            var nightMode = document.querySelector('#night-mode');
            if (!nightMode) return;
    
            // When clicked, toggle night mode on or off
            nightMode.addEventListener('click', function (event) {
                event.preventDefault();
                document.documentElement.classList.toggle('dark');
                if (document.documentElement.classList.contains('dark')) {
                    localStorage.setItem('gmtNightMode', true);
                    return;
                }
                localStorage.removeItem('gmtNightMode');
            }, false);
    
        })(window, document);
    </script>
  
    <!-- Javascript
    ================================================== -->
    @include('layouts.scripts')
    {{-- <div class="flex justify-between items-center relative md:mb-4 mb-3 py-3">
        <div class="flex-1">
            <h2 class="text-2xl font-semibold"> Pdfs Uploaded </h2>
            
        </div>
        <a href="#offcanvas-create" uk-toggle class="flex items-center justify-center z-10 h-10 w-10 rounded-full bg-blue-600 text-white absolute right-0"
        data-tippy-placement="left" title="Create New Album">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
        </a>
    </div>
    
    <div class="grid md:grid-cols-12 grid-cols-2 gap-3 mt-5">
        @foreach($files as $file)
            <div>
                <div class="bg-green-400 max-w-full lg:h-56 h-48 rounded-lg relative overflow-hidden shadow uk-transition-toggle">
                    <img src="assets/images/post/img-1.jpg" class="w-full h-full absolute object-cover inset-0">
                    <!-- overlay -->
                    <div class="-bottom-12 absolute bg-gradient-to-b from-transparent h-1/2 to-gray-800 uk-transition-slide-bottom-small w-full"></div>
                    <div class="absolute bottom-0 w-full p-3 text-white uk-transition-slide-bottom-small flex items-center">
                        <div class="flex-1"> 
                            <div class="text-lg"> {{ $file->name }} </div>
                            <div class="flex space-x-3 lg:flex-initial text-sm">
                                <a href="#">  Like</a>
                                <a href="#">  Comment </a>
                                <a href="#">  Share </a> 
                            </div>
                        </div> 
                        <a href="{{ $file->path }}" class="btn-down text-2xl uil-cloud-download px-1"></a>
                    </div>
                </div>
                <center> <a href="{{ $file->path }}">{{ $file->name }}</a></center>
            </div>
        @endforeach
    </div>
    
    
            
            
           
            
           
            </div>
     --}}
</body>

</html>