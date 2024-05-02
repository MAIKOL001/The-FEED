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
            <div class="mcontainer" >

                
                    <div class="flex justify-between lg:border-t border-gray-100 flex-col-reverse lg:flex-row pt-2">
                        
                        <nav class="responsive-nav pl--3">
                            <h2 class="text-xl font-semibold uppercase text-100" style="color: #0b0b0c;">Results &#129513;</h2>
                            
                        </nav>
 
                    </div>

                </div>
                    

                        <!-- First semester  -->
                       
        
                        <!-- section list -->
        
                       @include('layouts.show')
                              
                        

                    </div>

    </div>
</body>
                   
        
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