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

                
                    <h4 class="search_title">Search Results</h4>
                    <ul>
                        
                        @isset($results)
    <ul>
        @foreach($results as $result)
            <li>
                <a href="{{ route('show', ['unitCode' => $result->unit_code]) }}">
                    Unit Name: {{ $result->unit_name }}, Unit code: {{ $result->unit_code }}
                </a>
            </li>
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