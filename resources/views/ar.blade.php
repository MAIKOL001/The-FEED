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

                    <ul>
        
        <div class="card">
           
               
          
            <div class="card-body py-3" id="create_feed" name="feed">
                <div class="text-xs font-semibold uppercase text-red-500">Create Feed</div>
                <div class="text-lg font-medium mt-1 t truncate"><i class="icon-feather-plus"></i></div>
            </div>
            <div id="feed_form" style="display: none;" class="p-2">
                
                <input type="text" id="feed_id" name="feed_id" hidden class="block mt-1 w-full"><br>
                <label for="feed_name">Name:</label>
                <input type="text" id="feed_name" name="feed_name" placeholder="Name" class="block mt-1 w-full"><br>
                <label for="due_date">3D File/Video</label>
                <input type="FILE" id="due_date" name="due_date" placeholder="(3D .gtlf),(Videos  .mp4)Formats"><br>
            </div>
        </div>
        <script>
            // Function to toggle visibility of feed form
            function toggleFeedForm() {
                const feedForm = document.getElementById('feed_form');
                if (feedForm.style.display === 'none') {
                    feedForm.style.display = 'block';
                } else {
                    feedForm.style.display = 'none';
                }
            }
        
            // Add event listener to the 'Create Feed' text
            const createFeed = document.getElementById('create_feed');
            createFeed.addEventListener('click', toggleFeedForm);
        </script>
        <br>
    </a>

    
    <div class="card">
           
        <a href="">

    <div class="card-body py-3">
        
        <div class="text-xs font-semibold uppercase text-red-500"></div>
        
          
        <h3 class="text-lg font-semibold mb-3"> Feeds </h3>

        <div class="flex flex-wrap gap-2">
            <a href="#" class="bg-gray-100 py-1.5 px-4 rounded-full"> Computers</a>
            <a href="#" class="bg-red-100 py-1.5 px-4 rounded-full"> Business</a>
            <a href="#" class="bg-purple-100 py-1.5 px-4 rounded-full"> News</a>
            <a href="#" class="bg-gray-100 py-1.5 px-4 rounded-full"> Architecher</a>
            <a href="#" class="bg-pink-100 py-1.5 px-4 rounded-full"> Technolgy</a>
            <a href="#" class="bg-gray-100 py-1.5 px-4 rounded-full"> Music</a>
            <a href="#" class="bg-blue-100 py-1.5 px-4 rounded-full"> Computers</a>
            <a href="#" class="bg--100 py-1.5 px-4 rounded-full"> Business</a>
            <a href="#" class="bg-gray-100 py-1.5 px-4 rounded-full"> News</a>
            <a href="#" class="bg-gray-100 py-1.5 px-4 rounded-full"> Architecher</a>
            <a href="#" class="bg-green-100 py-1.5 px-4 rounded-full"> Technolgy</a>
            <a href="#" class="bg-gray-100 py-1.5 px-4 rounded-full"> Music</a> 
        </div>
        
  
        </div><div class="uk-sticky-placeholder" style="height: 556px; margin: 0px;"></div>
        
    </div>
</div>
<br>
</a>
    </ul>             
            </div>
                    </div>
                   
        
   
  
    <!-- Javascript
    ================================================== -->
     @include('layouts.scripts')
 

</body>

</html>