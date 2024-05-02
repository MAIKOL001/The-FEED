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
            <div class="mcontainer py-3" >

                
                    <h4 class="search_title">Search Results</h4>
                    <ul>
                        
                        @isset($results)
    
        @foreach($results as $result)

        <div class="card">
           
                <a href="{{ route('show', ['unitCode' => $result->unit_code]) }}">
                
              
            <div class="card-body py-3">
                
                <div class="text-xs font-semibold uppercase text-red-500">Unit Name: {{ $result->unit_name }}</div>
                
                <div class="ext-lg font-medium mt-1 t truncate"> Unit code: {{ $result->unit_code }}</div>
                
            </div>
        </div>
        <br>
    </a>
        @endforeach
    </ul>
@endisset
@empty($results)
    <p>No results found.</p>
@endempty

              
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
 

</body>

</html>