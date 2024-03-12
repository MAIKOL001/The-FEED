<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.foxthemes.net/socialite/timeline-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Jul 2023 17:43:10 GMT -->
<head>
    @include('layouts.metatags')

</head> 
<body>
   
    


    <div id="wrapper">

        <!-- Header -->
       @include('layouts.header')

        <!-- sidebar -->
       @include('layouts.sidebar')

        
        <div class="main_content">
            <div class="mcontainer">

                <div class="profile is_page">

                    <div class="profiles_banner">
                        <img src="assets/images/group/group-cover-1.jpg" alt="">
                    </div>
                    <div class="profiles_content">
                        <div class="profile_avatar">
                            <div class="profile_avatar_holder"> 
                                <img src="assets/images/group/group-3.jpg" alt="">
                            </div>
                            <div class="icon_change_photo" hidden> <ion-icon name="camera" class="text-xl"></ion-icon> </div>
                        </div>
                        <div class="profile_info">
                            <h1> <span> {{Auth::user()->name}}  </h1>
                            <p> Student</p>
                        </div>
                        <div class="flex items-center space-x-7 ">
                            <div class="flex items-center -space-x-4 p-1">
                               <span>Course ID</span>
                                </div>
                            </div>
                            
                        
                            <a href="#" class="flex items-center justify-center h-9 px-5 rounded-md bg-red-600 text-white  space-x-1.5">
                                <ion-icon name="thumbs-up"></ion-icon>
                                <span>  {{Auth::user()->course_id}}</span>
                            </a>
                        </div>

                    </div>

                    <nav class="responsive-nav border-t -mb-0.5 lg:pl-2">
                        <ul>
                            <li><a>School : {{Auth::user()->school}}</a></li>
                            <li>
                            <li><a>Course : {{Auth::user()->course_name}}</a></li>
                            
                        </ul>
                    </nav>
                </div>
                    <!--about-->
                    @include('layouts.about')

                    <!--coursemates-->
                        @include('layouts.album')
                      
                            </div>
                        </div>
 

                    </div>
                </div>

            </div>
        </div>

    </div>
     
            
                </div>
            
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
     <script src="../../code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="assets/js/tippy.all.min.js"></script>
    <script src="assets/js/uikit.js"></script>
    <script src="assets/js/simplebar.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="../../unpkg.com/ionicons%405.2.3/dist/ionicons.js"></script>

</body>

<!-- Mirrored from demo.foxthemes.net/socialite/timeline-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Jul 2023 17:43:10 GMT -->
</html>