<header>
    <div class="header_wrap">
        <div class="header_inner mcontainer">
            <div class="left_side">
                
               

                <div id="logo">
                    <a href=""> 
                        <img src="assets/images/logo.png"  alt="The Feed">
                        <img src="assets/images/logo.png" class="logo_mobile" alt="">
                    </a>
                </div>
            </div>
             
            <!-- search icon for mobile -->
            <div class="header-search-icon" uk-toggle="target: #wrapper ; cls: show-searchbox"> </div>
            <div class="header_search"><i class="uil-search-alt"></i> 
                <input value="" type="text" class="form-control" placeholder="Search for Friends , Videos and more.." autocomplete="off">
                <div uk-drop="mode: click" class="header_search_dropdown">
                       
                    <h4 class="search_title"> Recently </h4>
                    <ul>
                        <li> 
                            <a href="#">  
                                <img src="assets/images/avatars/avatar-1.jpg" alt="" class="list-avatar">
                                <div class="list-name">  Erica Jones </div>
                            </a> 
                        </li> 
                        <li> 
                            <a href="#">  
                                <img src="assets/images/avatars/avatar-2.jpg" alt="" class="list-avatar">
                                <div class="list-name">  Coffee  Addicts </div>
                            </a> 
                        </li>
                        <li> 
                            <a href="#">  
                                <img src="assets/images/avatars/avatar-3.jpg" alt="" class="list-avatar">
                                <div class="list-name"> Mountain Riders </div>
                            </a> 
                        </li>
                        <li> 
                            <a href="#">  
                                <img src="assets/images/avatars/avatar-4.jpg" alt="" class="list-avatar">
                                <div class="list-name"> Property Rent And Sale  </div>
                            </a> 
                        </li>
                        <li> 
                            <a href="#">  
                                <img src="assets/images/avatars/avatar-5.jpg" alt="" class="list-avatar">
                                <div class="list-name">  Erica Jones </div>
                            </a> 
                        </li>
                    </ul>

                </div>
            </div>
          

            <div class="right_side">

                <div class="header_widgets"> 
                      
                    <a href="/home_2" class="is_icon" uk-tooltip="title:Home">
                        <?xml version="1.0" encoding="utf-8"?>
                       
                        <svg fill="#000000"  viewBox="-2 -2 24 24" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMinYMin" class="jam jam-home"><path d='M18 18V7.132l-8-4.8-8 4.8V18h4v-2.75a4 4 0 1 1 8 0V18h4zm-6 2v-4.75a2 2 0 1 0-4 0V20H2a2 2 0 0 1-2-2V7.132a2 2 0 0 1 .971-1.715l8-4.8a2 2 0 0 1 2.058 0l8 4.8A2 2 0 0 1 20 7.132V18a2 2 0 0 1-2 2h-6z'/></svg>    
                    </a>
                    
                     
                       

                       
                    <a href="home" class="is_icon" uk-tooltip="title: Upload">
                        <svg fill="#000000" viewBox="0 0 24 24" id="upload" data-name="Flat Line" xmlns="http://www.w3.org/2000/svg" class="icon flat-line"><line id="primary" x1="12" y1="16" x2="12" y2="3" style="fill: none; stroke: rgb(0, 0, 0); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></line><polyline id="primary-2" data-name="primary" points="16 7 12 3 8 7" style="fill: none; stroke: rgb(0, 0, 0); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></polyline><path id="primary-3" data-name="primary" d="M20,16v4a1.08,1.08,0,0,1-1.14,1H5.14A1.08,1.08,0,0,1,4,20V16" style="fill: none; stroke: rgb(0, 0, 0); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></path></svg>
                    </a>
                    

                    <!-- Message -->
                    <a href="#" class="is_icon" uk-tooltip="title: Message">
                        <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd"></path></svg>
                        <span>4</span>
                    </a>
                    

                    <a href="#">
                        <img src="assets/images/avatars/avatar-2.jpg" class="is_avatar" alt="">
                    </a>
                    <div uk-drop="mode: click;offset:5" class="header_dropdown profile_dropdown">

                        <a href="timeline.html" class="user">
                            <div class="user_avatar">
                                <img src="assets/images/avatars/avatar-2.jpg" alt="">
                            </div>
                            <div class="user_name">
                                <div> {{Auth::user()->email}} </div>
                                <span> {{Auth::user()->name}}</span>
                            </div>
                        </a>
                        <hr>
                        
                        <a href="/user/profile">
                            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path></svg>
                            My Account 
                        </a>
                        <a href="groups.html">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M3 6a3 3 0 013-3h10a1 1 0 01.8 1.6L14.25 8l2.55 3.4A1 1 0 0116 13H6a1 1 0 00-1 1v3a1 1 0 11-2 0V6z"  clip-rule="evenodd" />
                            </svg>
                            Manage Pages 
                        </a>
                        <a href="pages-setting.html">
                            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z"></path><path fill-rule="evenodd" d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z" clip-rule="evenodd"></path></svg>
                            My Billing 
                        </a>
                        <a href="#" id="night-mode" class="btn-night-mode">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z" />
                              </svg>
                             Night mode
                            <span class="btn-night-mode-switch">
                                <span class="uk-switch-button"></span>
                            </span>
                        </a>
                        <a href="{{ route('logout') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                            </svg>
                            Log Out 
                        </a>

                        
                    </div>

                </div>
                
            </div>
        </div>
    </div>
</header>