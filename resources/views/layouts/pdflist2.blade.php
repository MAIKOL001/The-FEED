<div class="md:mb-4 mb-3">
    <h2 class="text-2xl font-semibold"> Your PDFs </h2>
    <nav class="responsive-nav border-b md:m-0 -mx-4">
        <ul>
            <li class="active"><a href="#" class="lg:px-2">All <span>{{ $files->count() }}</span></a></li>
        </ul>
    </nav>
</div>




    
    <div class="divide-y" id="pdfList">
        @foreach ($files as $file)
        <div class="flex md:space-x-6 space-x-4 md:py-5 py-3 relative">
            <a href="" class="md:w-64 md:h-40 w-36 h-24 overflow-hidden rounded-lg relative shadow-sm">
                <img src="{{ asset('/assets/images/courses/Arquivo, Pasta, Registo PNG, Design De Pasta Plana Imagens Vetoriais, Arquivos PSD - Pngtree.jpeg') }}" alt="" class="w-24  absolute inset-0 object-cover">
                <span class="absolute bg-black bg-opacity-60 bottom-1 font-semibold px-1.5 py-0.5 right-1 rounded text-white text-xs">{{ \Carbon\Carbon::parse($file->created_at)->toDateString() }}</span>
            </a>
            <div class="flex-1 space-y-2">
                <a href="" class="md:text-xl font-semibold line-clamp-2"> {{ explode('_', $file->name, 2)[1] }}</a>
                
                <a href="#" class="font-semibold block text-sm">Last update: {{ \Carbon\Carbon::parse($file->created_at)->toDateString() }}</a>
                <a href="#" class="font-semibold block text-sm">{{ $file->user }}</a>
                <div class="flex items-center justify-between">
                    <a href="{{ asset($file->location) }}" class="bg-blue-100 w-full flex font-semibold h-8 items-center justify-center mt-3 px-3 rounded-md text-blue-600 text-sm mb-1 "download><i class="icon-feather-download"> </i></a>
                <div> . </div> 
                @if (Auth::user()->is_admin == 1)
                <button class="bg-red-100 w-full flex font-semibold h-8 items-center justify-center mt-3 px-3 rounded-md text-blue-600 text-sm mb-1"><i class="icon-feather-trash"> </i></button>
                <div> . </div> 
                <a href="{{ asset($file->location) }}" target="_blank" class="bg-blue-100 w-full flex font-semibold h-8 items-center justify-center mt-3 px-3 rounded-md text-blue-600 text-sm mb-1">
                    <i class="icon-feather-eye"> </i>
                </a>
                <a href="/upload" class="is_icon" uk-tooltip="title: Upload">
                  </a>
              @endif
                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>

