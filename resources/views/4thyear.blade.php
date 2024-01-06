<!DOCTYPE html>
@include('layouts.metatags')  
<body>
   
    


    <div id="wrapper">

        <!-- Header -->
        @include('layouts.header')

        <!-- sidebar -->
        @include('layouts.sidebar')
        <!-- Main Contents -->
        <div class="main_content">
            <div class="mcontainer">


                <div class="flex justify-between relative md:mb-4 mb-3">
                    <div class="flex-1">
                        <h2 class="text-2xl font-semibold"> Videos </h2>
                        <nav class="responsive-nav border-b md:m-0 -mx-4">
                            <ul>
                                <li class="active"><a href="#" class="lg:px-2">   All<span>24</span> </a></li>
                               
                            </ul>
                        </nav>
                    </div>
                    
                </div>

                <!-- Video list -->

               @include('layouts.videolist
               ')

                <!--  pdf  list -->

                @include('layouts.pdflist4')

    
   
   
    
      

    
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
    
   
    
    
    
    
    
    

</body>

<!-- Mirrored from demo.foxthemes.net/socialite/videos.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Jul 2023 17:42:47 GMT -->
</html>