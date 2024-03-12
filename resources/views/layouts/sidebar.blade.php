<div class="sidebar" style="background-image: url('/assets/images/courses/meetings-page-bg.jpg');">
        
    <div class="sidebar_inner" data-simplebar>

        <ul>
            <li><a href="/dashboard"> 
                <svg fill="currentColor" class="text-indigo-500" viewBox="0 0 24 24" id="dashboard" data-name="Flat Color" xmlns="http://www.w3.org/2000/svg"><path id="secondary" d="M22,4V7a2,2,0,0,1-2,2H15a2,2,0,0,1-2-2V4a2,2,0,0,1,2-2h5A2,2,0,0,1,22,4ZM9,15H4a2,2,0,0,0-2,2v3a2,2,0,0,0,2,2H9a2,2,0,0,0,2-2V17A2,2,0,0,0,9,15Z"></path><path id="primary" d="M11,4v7a2,2,0,0,1-2,2H4a2,2,0,0,1-2-2V4A2,2,0,0,1,4,2H9A2,2,0,0,1,11,4Zm9,7H15a2,2,0,0,0-2,2v7a2,2,0,0,0,2,2h5a2,2,0,0,0,2-2V13A2,2,0,0,0,20,11Z"></path></svg>
                <span> Dashboard </span> </a> 
            </li>
            @if (Auth::user()->is_admin == 1)
            <li><a href="/upload"> 
                <svg fill="currentColor" class="text-yellow-500" viewBox="0 0 24 24" id="upload" data-name="Flat Line" xmlns="http://www.w3.org/2000/svg" ><line id="primary" x1="12" y1="16" x2="12" y2="3" style="fill: none; stroke: rgb(253, 187, 45); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></line><polyline id="primary-2" data-name="primary" points="16 7 12 3 8 7" style="fill: none; stroke:rgb(253, 187, 45); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></polyline><path id="primary-3" data-name="primary" d="M20,16v4a1.08,1.08,0,0,1-1.14,1H5.14A1.08,1.08,0,0,1,4,20V16" style="fill: none; stroke: rgb(253, 187, 45); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></path></svg> 
                <span> Upload </span> </a> 
            </li>
            @endif
            

        <a href="#" class="see-mover h-10 flex my-1 pl-2 rounded-xl text-gray-600" uk-toggle="target: #more-veiw; animation: uk-animation-fade"> 
            <span class="w-full flex items-center" id="more-veiw">
                <svg class="  bg-gray-100 mr-2 p-0.5 rounded-full text-lg w-7" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                See More  
            </span>
            <span class="w-full flex items-center" id="more-veiw" hidden>
                <svg  class="bg-gray-100 mr-2 p-0.5 rounded-full text-lg w-7"  fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd"></path></svg> 
                See Less 
            </span>
        </a>  
        
        
            
        </ul>

        <div class="footer-links">
            <a href="#">Founder</a>
            <a href="#">Maikol </a>
            <a href="#">GitHub repository</a>
            
        </div>

    </div>

    <!-- sidebar overly for mobile -->
    <div class="side_overly" uk-toggle="target: #wrapper ; cls: is-collapse is-active"></div>

</div>