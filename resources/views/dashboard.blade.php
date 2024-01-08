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

                <!-- Profile cover -->
                <div class="profile user-profile">
  
                    <div class="profiles_banner">
                        <img src="assets/images/avatars/profile-cover.jpg" alt="">
                        <div class="profile_action absolute bottom-0 right-0 space-x-1.5 p-3 text-sm z-50 hidden lg:flex">
                          <a href="#" class="flex items-center justify-center h-8 px-3 rounded-md bg-gray-700 bg-opacity-70 text-white space-x-1.5"> 
                              <ion-icon name="crop-outline" class="text-xl"></ion-icon>
                              <span> Crop  </span>
                          </a>
                          <a href="#" class="flex items-center justify-center h-8 px-3 rounded-md bg-gray-700 bg-opacity-70 text-white space-x-1.5"> 
                              <ion-icon name="create-outline" class="text-xl"></ion-icon>
                              <span> Edit </span>
                          </a>
                      </div>
                    </div>
                    <div class="profiles_content">

                        <div class="profile_avatar">
                            <div class="profile_avatar_holder"> 
                                <img src="assets/images/avatars/avatar-8.jpg" alt="">
                            </div>
                            <div class="user_status status_online"></div>
                            <div class="icon_change_photo" hidden> <ion-icon name="camera" class="text-xl"></ion-icon> </div>
                        </div>

                        <div class="profile_info">
                            <h1> Josephine Williams </h1>
                            <p> Family , Food , Fashion , Fourever <a href="#">Edit </a></p>
                        </div>

                    </div>

                    <div class="flex justify-between lg:border-t border-gray-100 flex-col-reverse lg:flex-row pt-2">
                        <nav class="responsive-nav pl-3">
                            <ul  uk-switcher="connect: #timeline-tab; animation: uk-animation-fade">
                                
                                <li><a href="#">Upload secttion<span style="text=bold">^</span> </a></li>
                                <li><a href="#">Uploads<span>43</span> </a></li> 
                            </ul>
                        </nav>
 
                        <!-- button actions -->
                        <div class="flex items-center space-x-1.5 flex-shrink-0 pr-4 mb-2 justify-center order-1 relative">
                            
                            <!-- search icon -->
                            <a href="#" class="flex items-center justify-center h-10 w-10 rounded-md bg-gray-100" uk-toggle="target: #profile-search;animation: uk-animation-slide-top-small"> 
                              <ion-icon name="search" class="text-xl"></ion-icon>
                            </a>
                            <!-- search dropdown -->
                            <div class="absolute right-3 bg-white z-10 w-full flex items-center border rounded-md"
                                id="profile-search" hidden>
                                <input type="text" placeholder="Search.." class="flex-1">
                                <ion-icon name="close-outline" class="text-2xl hover:bg-gray-100 p-1 rounded-full mr-2 cursor-pointer" uk-toggle="target: #profile-search;animation: uk-animation-slide-top-small"></ion-icon>
                            </div>
                        </div>

                    </div>

                </div>
                
                
                    <!-- UPLOAD SECTION  -->
                    <div class="uk-switcher lg:mt-8 mt-4" id="timeline-tab">
                    @include('layouts.uploadingsection')

                     <!-- Videos -->
                    @include('layouts.uploadssection')      
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
    
   

</body>

</html>