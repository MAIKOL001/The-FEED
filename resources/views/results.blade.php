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
    <script src="https://sf-cdn.coze.com/obj/unpkg-va/flow-platform/chat-app-sdk/0.1.0-beta.2/libs/oversea/index.js"></script>
    <script>
        new CozeWebSDK.WebChatClient({
          config: {
            bot_id: '7368849374774460421',
          },
          componentProps: {
            title: 'Coze',
          },
        });
    </script>
  
    <!-- Javascript
    ================================================== -->
     @include('layouts.scripts')
 

</body>

</html>