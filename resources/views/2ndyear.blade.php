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

    
   
   
  
    <!-- Javascript
    ================================================== -->
    
    @include('layouts.scripts')
 

</body>
</html>