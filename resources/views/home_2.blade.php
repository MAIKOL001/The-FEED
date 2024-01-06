<!DOCTYPE html>
@include('layouts.metatags') 
<body>
   
    


    <div id="wrapper">

        <!-- Header -->
        @include('layouts.header')

        <!-- sidebar -->
        @INCLUDE('layouts.sidebar')

        <!-- Main Contents -->
        <div class="main_content">
            <div class="mcontainer">

                
                    <div class="flex justify-between lg:border-t border-gray-100 flex-col-reverse lg:flex-row pt-2">
                        <nav class="responsive-nav pl-3">
                            <ul  uk-switcher="connect: #timeline-tab; animation: uk-animation-fade">
                               
                                <li><a href="#">Semester One </a></li>
                                <li><a href="#">Semester Two </a></li>
                               
                            </ul>
                        </nav>
 
                    </div>

                </div>
                    <!-- Sidebar -->
                       @include('layouts.sidebar')

                        <!-- First semester  -->
                       <div class="uk-switcher lg:mt-8 mt-4" id="timeline-tab">
                    <div class="card md:p-6 p-2 max-w-3xl mx-auto">

                        <h2 class="text-xl font-bold"> First Semesters</h2>
 
                       
                        <div class="flex justify-between relative md:mb-4 mb-3">
                            <div class="flex-1">
                                
                                
                            </div>
                           
                        </div>
        
                        <!-- section list -->
        
                       @include('layouts.section_1')
                              
                        @include('layouts.section_2')
                        @include('layouts.section_3')
                        @include('layouts.section_4')
        

                    </div>

                    <!-- Second Semester -->
                    <div class="card md:p-6 p-2 max-w-3xl mx-auto">

                        <h2 class="text-xl font-bold"> Second Semester</h2>
 
                       
                        <div class="flex justify-between relative md:mb-4 mb-3">
                            <div class="flex-1">
                                
                               
                            </div>
                            
                        </div>
        
                        <!-- Section List -->
        
                       @include('layouts.section_1')
                     
        
                        @include('layouts.section_2')
                        @include('layouts.section_3')
                        @include('layouts.section_4')
        

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