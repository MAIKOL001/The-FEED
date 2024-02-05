<div class="w-full flex-shirink-0">

                        <div class="card p-5 mb-5">

                            <h1 class="block text-lg font-bold"> About  </h1>

                            <div class="space-y-4 mt-3">
                                
                                <div class="flex items-center space-x-3">
                                    <ion-icon name="alert-circle" class="bg-gray-100 p-1.5 rounded-full text-xl"></ion-icon>
                                    <div class="flex-1">
                                        <div class="font-semibold">User Id : {{Auth::user()->id}} </div>
                                    </div>
                                </div> 
                                <div class="flex items-center space-x-3">
                                    <ion-icon name="thumbs-up" class="bg-gray-100 p-1.5 rounded-full text-xl"></ion-icon>
                                    <div class="flex-1">
                                        <div class="font-semibold"> Name : {{Auth::user()->name}} </div>
                                    </div>
                                </div> 
                                
                               
                                <div class="flex items-center space-x-3">
                                    <ion-icon name="albums" class="bg-gray-100 p-1.5 rounded-full text-xl"></ion-icon>
                                    <div class="flex-1">
                                        <div class="font-semibold"> Joined : {{Auth::user()->created_at}} </div> 
                                    </div>
                                </div>
                                 
                            </div>
                            

                        </div>