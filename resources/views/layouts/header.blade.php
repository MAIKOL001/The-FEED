<header>
    <div class="header_wrap" >
        <div class="header_inner mcontainer">
            <div class="left_side">
                
               

                <div id="logo">
                    <a href=""> 
                        <img  style="" src="/assets/images/logo.png" class="logo_mobile" alt="The Feed">
                        <img src="/assets/images/logo.png" class="" alt="">
                    </a>
                </div>
            </div>
             
            <!-- search icon for mobile -->
            <div class="header-search-icon" uk-toggle="target: #wrapper ; cls: show-searchbox"> </div>
<div class="header_search">
    <i class="uil-search-alt"></i>
    <form action="{{ route('search') }}" method="GET">
        <input type="text" name="query" class="form-control" placeholder="Search for unit codes, unit names, and more.." autocomplete="on">
        <input type="hidden" name="course_id" value="{{ auth()->user()->course_id }}">
        <button type="submit" hidden>Search</button>
    </form>
    
</div>


            
          

            <div class="right_side">

                <div class="header_widgets"> 
                      
                    <a href="/dashboard" class="is_icon" uk-tooltip="title:Dashboard">
                        <?xml version="1.0" encoding="utf-8"?>
                       
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m4 12 8-8 8 8M6 10.5V19a1 1 0 0 0 1 1h3v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h3a1 1 0 0 0 1-1v-8.5"/>
                          </svg>
                           </a>
                    
                     
                       

                    @if (Auth::user()->is_admin == 1)
                    <a href="/upload" class="is_icon" uk-tooltip="title: Upload">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v9m-5 0H5a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1h-2M8 9l4-5 4 5m1 8h.01"/>
                          </svg>
                          </a>
                    @endif
                   
                    <a href="/ai" class="is_icon" uk-tooltip="title: Ai">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M21 11V9h-2V7a2.006 2.006 0 0 0-2-2h-2V3h-2v2h-2V3H9v2H7a2.006 2.006 0 0 0-2 2v2H3v2h2v2H3v2h2v2a2.006 2.006 0 0 0 2 2h2v2h2v-2h2v2h2v-2h2a2.006 2.006 0 0 0 2-2v-2h2v-2h-2v-2Zm-4 6H7V7h10Z"/><path fill="currentColor" d="M11.361 8h-1.345l-2.01 8h1.027l.464-1.875h2.316L12.265 16h1.062Zm-1.729 5.324L10.65 8.95h.046l.983 4.374ZM14.244 8h1v8h-1z"/></svg>
                    
                    </a>

                    <a href="/ar" class="is_icon" uk-tooltip="title: Ar">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-width="1.5"><path d="M2 15V9a6 6 0 0 1 6-6h8a6 6 0 0 1 6 6v6a6 6 0 0 1-6 6H8a6 6 0 0 1-6-6Z"/><path stroke-linecap="round" stroke-linejoin="round" d="M13 15.5v-2.8m2.857 0c.714 0 2.143 0 2.143-2.1s-1.429-2.1-2.143-2.1H13v4.2m2.857 0H13m2.857 0L18 15.5m-7 0L9.929 13M5 15.5L6.071 13m0 0L8 8.5L9.929 13M6.07 13h3.86"/></g></svg>
                    </a>
                    <!-- Message -->
                    <a href="#" class="is_icon" uk-tooltip="title: Coming soon">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5.464V3.099m0 2.365a5.338 5.338 0 0 1 5.133 5.368v1.8c0 2.386 1.867 2.982 1.867 4.175C19 17.4 19 18 18.462 18H5.538C5 18 5 17.4 5 16.807c0-1.193 1.867-1.789 1.867-4.175v-1.8A5.338 5.338 0 0 1 12 5.464ZM6 5 5 4M4 9H3m15-4 1-1m1 5h1M8.54 18a3.48 3.48 0 0 0 6.92 0H8.54Z"/>
                          </svg>
                           <span>4</span>
                    </a>

                   
                    
                    

                    <div uk-drop="mode: click" class="header_dropdown is_message">
                        <div  class="dropdown_scrollbar" data-simplebar>
                            <div class="drop_headline">
                                 <h4>Notifications </h4>
                                <div class="btn_action">
                                    <a href="#" data-tippy-placement="left" title="Notifications">
                                        <ion-icon name="settings-outline" uk-tooltip="title: Message settings ; pos: left"></ion-icon>
                                    </a>
                                    <a href="#" data-tippy-placement="left" title="Mark as read all">
                                        <ion-icon name="checkbox-outline"></ion-icon>
                                    </a>
                                </div>
                            </div>
                            
                            <ul>
                                <li class="un-read">
                                    <a href="#">
                                        <div class="drop_avatar"> <img src="assets/images/avatars/avatar-7.jpg" alt="">
                                        </div>
                                        <div class="drop_text">
                                            <strong> Stella Johnson </strong> <time>12:43 PM</time>
                                            <p>  New content posted  </p>
                                        </div>
                                    </a>
                                </li>
                               
                            </ul>
                        </div>
                        
                    </div>

                    <a href="#">
                        <img src="/assets/images/avatars/avatar-2.jpg" class="is_avatar" alt="">
                    </a>
                    <div uk-drop="mode: click;offset:5" class="header_dropdown profile_dropdown">

                        <a href="/account" class="user">
                            <div class="user_avatar">
                                <img src="assets/images/avatars/avatar-2.jpg" alt="">
                            </div>
                            <div class="user_name">
                                <div> {{Auth::user()->email}} </div>
                                <span>  Profile </span>
                            </div>
                        </a>
                            <div class="user_name">
                                <a href="/user/profile">
                                    <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd">
                                            </path>
                                            </svg>
                                            Settings/logout
                                          
                                </a>
                            </div>
                        
                        <hr>
                        
                        
                        
                        
                        


                        
                    </div>

                </div>
                
            </div>
        </div>
    </div>
</header>