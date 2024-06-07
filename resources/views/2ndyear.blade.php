<!DOCTYPE html>
@include('layouts.metatags')  

<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.17.268/pdf.min.js"></script>

<body>
    
    <div id="wrapper">

        <!-- Header -->
        @include('layouts.header')

        <!-- sidebar -->
        @include('layouts.sidebar')
        <!-- Main Contents -->
        <div class="main_content">
            <div class="mcontainer">


                

                <!--  pdf  list -->

                @include('layouts.pdflist2')

    
   
   
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