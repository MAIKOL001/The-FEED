<!DOCTYPE html>
@include('layouts.metatags')

{{-- <link rel="stylesheet" type="text/css" href="/vendors/styles/style.css" /> --}}

		<!-- Google Tag Manager -->
		
<body>
   
    <div id="wrapper">
      
        <!-- Header -->
        @include('layouts.header')

        <!-- sidebar -->
        @include('layouts.sidebar')

        <!-- Main Contents -->
        <div class="main_content ">
            <div class="mcontainer">

                
                    <div class="flex justify-between lg:border-t border-gray-100 flex-col-reverse lg:flex-row pt-2">
                        
                        <nav class="responsive-nav">
                            <h2 class="text-xl font-semibold uppercase text-100" style="color: #2a41e8;">{{ Auth::user()->name }} &#129513;</h2>
                            <ul  uk-switcher="connect: #timeline-tab; animation: uk-animation-fade">
                               
                                <li><a href="#">Semester One </a></li>
                                <li><a href="#">Semester Two </a></li>
                               
                            </ul>
                        </nav>
 
                    </div>

                </div>
                    

                        <!-- First semester  -->
                       <div class="uk-switcher lg:mt-8 mt-4 " id="timeline-tab">
                    <div class="card md:p-6 p-2 max-w-8xl mx-auto" style="margin-left: 0.1rem; margin-right:0.1rem;">   
                        <div class="flex justify-between relative md:mb-4 mb-3">
                            <div class="flex-1">
                                
                                
                            </div>
                           
                        </div>
        
                        <!-- section list -->
        
                       @include('layouts.firstyear1')
                              
                        @include('layouts.secondyear1')
                        @include('layouts.thirdyear1')
                        @include('layouts.fourthyear1')
        

                    </div>

                    <!-- Second Semester -->
                    <div class="card md:p-6 p-2 max-w-8xl mx-auto" style="margin-left: 0.1rem; margin-right:0.1rem;"> 
                        <div class="flex justify-between relative md:mb-4 mb-3">
                            <div class="flex-1">
                                
                               
                            </div>
                            
                        </div>
        
                        <!-- Section List -->
        
                       @include('layouts.firstyear2')
                     
        
                        @include('layouts.secondyear2')
                        @include('layouts.thirdyear2')
                        @include('layouts.fourthyear2')
        

                    </div>
                   
        
    <!-- For Night mode -->
  


    <script src="https://sf-cdn.coze.com/obj/unpkg-va/flow-platform/chat-app-sdk/0.1.0-beta.2/libs/oversea/index.js"></script>
    <script>
        new CozeWebSDK.WebChatClient({
          config: {
            bot_id: '7368849374774460421',
          },
          componentProps: {
            title: 'Emilly',
          },
        });
    </script>


  
    <!-- Javascript
    ================================================== -->
     @include('layouts.scripts')
 

</body>

</html>