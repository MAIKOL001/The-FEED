<div class="md:mb-4 mb-3">
    {{-- <h2 class="text-xl font-semibold">
        @foreach ($files as $file)
{{$file->unit_name}}
        @endforeach
    </h2> --}}
    <nav class="responsive-nav border-b ">
        <ul>
            <li class="active"><a href="#" class="lg:px-2">All <span>{{ $files->count() }}</span></a></li>
        </ul>
    </nav>
</div>



<div class="my-4 flex items-center justify-between">
    <div>
        <h2 class="text-xl font-semibold"> Cats/Assignments </h2>
    </div>
    
</div>

<div class="relative" uk-slider="finite: true">

    <div class="uk-slider-container px-1 py-3">

        <ul class="uk-slider-items uk-child-width-1-5@m uk-child-width-1-4@s uk-child-width-1-2 uk-grid-small uk-grid">
            @foreach ($files->where('category', 'cat') as $file)
            <li>
                <div class="rounded-xl overflow-hidden relative w-full h-44 cursor-pointer transform hover:scale-105 duration-300 hover:shadow-md">
                    
                    <img src="assets/images/catimg.jpeg" class="absolute w-full h-full object-cover" alt="">
                    
                    <div class="absolute bottom-0 w-full p-3 text-white z-20 font-semibold">
                        <div class="text-sm">
                            {{-- <div class="-top-3 absolute bg-red-100 font-medium px-2 right-2 rounded-full text text-red-500 text-sm">
                               
                            </div>     --}}
                            {{$file->id }}
                        </div>
                        <a href="{{ asset($file->location) }}" target="_blank" class="bg-blue-100 w-3 flex font-semibold h-8 items-center justify-center mt-3 px-3 rounded-md text-blue-600 text-sm mb-1">
                            <i class="icon-feather-eye"> </i>
                        </a>
                        @if (Auth::user()->is_admin == 1)
                        <form action="{{ route('files.destroy', $file->id) }}" method="POST" id="deleteForm-{{ $file->id }}"> @csrf
                            @method('DELETE')
                            <button type="button" onclick="confirmDelete(event)" class="bg-red-100 w-3 flex font-semibold h-8 items-center justify-center mt-3 px-3 rounded-md text-blue-600 text-sm mb-1">
                                <i class="icon-feather-trash"></i>
                            </button>
                        </form>
                       
                      @endif
              <a href="{{ asset($file->location) }}" class="bg-blue-100 w-3 flex font-semibold h-8 items-center justify-center mt-3 px-3 rounded-md text-blue-600 text-sm mb-1 "download><i class="icon-feather-download"> </i></a>
              
                        <div class="text-xl">
                            
                            <span class="absolute bg-black  bg-opacity-60 bottom-1 font-semibold px-1.5 py-0.5 right-1 rounded text-white-400 text-sm">Due :{{ \Carbon\Carbon::parse($file->due_date)->toDateString() }}</span>
                        
                           
                        </div>
                    </div>
                </div>
            </li>
           @endforeach
        </ul>
        <a class="absolute bg-white top-20 -mt-2 flex items-center justify-center p-2 -left-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white"
            href="#" uk-slider-item="previous"> <i class="icon-feather-chevron-left"></i></a>
        <a class="absolute bg-white top-20 -mt-2 flex items-center justify-center p-2 -right-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white"
            href="#" uk-slider-item="next"> <i class="icon-feather-chevron-right"></i></a>
    </div>
</div>
    <br>
    <div class="divide-y" id="pdfList">
        <div>
            <h2 class="text-xl font-semibold"> Notes </h2>
        </div>
        @foreach ($files->where('category', 'notes') as $file)
        <div class="flex md:space-x-6 space-x-4 md:py-5 py-3 relative">
            <a href="" class="md:w-64 md:h-40 w-36 h-24 overflow-hidden rounded-lg relative shadow-sm">
                <img src="{{ asset('/assets/images/Folder Icon (1).jpeg') }}" alt="" class="w-full  absolute inset-0 object-cover">
               
            </a>
            <div class="flex-1 space-y-2">
                <a href="" class="md:text-xl font-semibold line-clamp-2"> {{ explode('_', $file->name, 2)[1] }}</a>
                
                <a href="#" class="font-semibold block text-sm">Uploaded: {{ \Carbon\Carbon::parse($file->created_at)->toDateString() }}</a>
                <a href="#" class="font-semibold block text-sm">{{ $file->user }}</a>
                <div class="flex items-center justify-between">
                    <a href="{{ asset($file->location) }}" class="bg-blue-100 w-full flex font-semibold h-8 items-center justify-center mt-3 px-3 rounded-md text-blue-600 text-sm mb-1 "download><i class="icon-feather-download"> </i></a>
                <div> . </div> 
                <a href="{{ asset($file->location) }}" target="_blank" class="bg-blue-100 w-full flex font-semibold h-8 items-center justify-center mt-3 px-3 rounded-md text-blue-600 text-sm mb-1" onclick="event.preventDefault(); openModal();">
                    <i class="icon-feather-eye"></i>
                  </a>
                  
                  <div id="create-post-modal" class="create-post" uk-modal>
                    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical shadow-2xl uk-animation-slide-bottom-small">
                  
                      <div class="py-4 border-b flex  justify-between px-6">
                        <h3 class="text-lg font-semibold"> View File </h3>
                        <div>
                          <button class="uk-modal-close-default hover:bg-gray-100 rounded-full p-2.5 block uk-icon uk-close mt-0.5"
                              type="button" uk-close>
                            <i class="icon-feather-close"></i>
                          </button>
                        </div>
                        
                      </div>
                  
                  
                      <div class="create-post-modal-body space-x-6  overflow-x-hidden mr-1" data-simplebar>
                        <iframe src="{{ asset($file->location) }}" width="100%" height="90%"></iframe>
                        </div>
                    </div>
                  </div>
                  
                
                <div> . </div> 
                @if (Auth::user()->is_admin == 1)
                <form action="{{ route('files.destroy', $file->id) }}" method="POST" id="deleteForm">
                    @csrf
                    @method('DELETE')
                    <button type="button" onclick="confirmDelete(event)" class="bg-red-100 w-full flex font-semibold h-8 items-center justify-center mt-3 px-3 rounded-md text-blue-600 text-sm mb-1">
                        <i class="icon-feather-trash"></i>
                    </button>
                </form>
                
                
                
              @endif
                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>
<script>
 function confirmDelete(event) {
  event.preventDefault();
  // Get the button that was clicked
  const clickedButton = event.target;
  // Find the closest parent form element
  const deleteForm = clickedButton.closest('form');

  if (confirm("Are you sure you want to delete this file?")) {
    // Submit the specific form
    deleteForm.submit();
  }
}


</script>

<script>
  function openModal() {
    // Get the modal element (assuming its ID is "create-post-modal")
    const modal = document.getElementById("create-post-modal");

    // Use UIKit's method to open the modal
    UIkit.modal("#create-post-modal").show();
  }
</script>

    
