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
                   
        

    <!-- Javascript
    ================================================== -->
     @include('layouts.scripts')
 

</body>

</html>