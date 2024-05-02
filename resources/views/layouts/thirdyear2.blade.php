<div class="flex justify-between items-center relative md:mb-4 mb-3 border-b mb-3">
</div>
<div class="flex-1">
    <h2 class="text-xl font-semibold"> 3RD YEAR </h2>

</div>
<div class="relative" uk-slider="finite: true">

    <div class="uk-slider-container px-1 py-3">
        <ul class="uk-slider-items uk-child-width-1-5@m uk-child-width-1-3@s uk-child-width-1-2 uk-grid-small uk-grid">
            @foreach($files->groupBy('unit_code') as $unitCode => $unitFiles)
            @if($unitFiles->first()->year == 3 && $unitFiles->first()->semester == 2)
                <li>
                        <div class="card">
                            <div class="card-media h-40">
                                <div class="card-media-overly"></div>
                                <a href="{{ route('unit.pdfs', ['unit_code' => $unitCode,]) }}">
                                <img src="{{ asset('/assets/images/courses/SanDiego Magazine illustrations.jpeg') }}" alt="">
                                <span class="absolute bg-white px-2 py-1 text-sm rounded-md m-2"> Label</span>
                                
                            </div>
                            <div class="card-body">
                                <div class="-top-3 absolute bg-blue-100 font-medium px-2 py-1 right-2 rounded-full text text-blue-500 text-sm">
                                    {{ count($unitFiles) }}pdfs 
                                </div>
                                <div class="text-xs font-semibold uppercase text-red-500">{{ $unitCode }}</div>
                                
                                <div class="ext-lg font-medium mt-1 t uppercase truncate">{{ $unitNames[$unitCode] }}</div>
                                {{-- {{ $unitFiles->first()->name }} --}}
                            </div>
                        </div>
                    </a>
                </li>
                @endif
            
            @endforeach
        </ul>
    
    
            
        <a class="absolute bg-white bottom-1/2 flex items-center justify-center p-2 -left-4 rounded-full shadow-md text-xl w-9 z-10"
            href="#" uk-slider-item="previous"> <i class="icon-feather-chevron-left"></i></a>
        <a class="absolute bg-white bottom-1/2 flex items-center justify-center p-2 -right-4 rounded-full shadow-md text-xl w-9 z-10"
            href="#" uk-slider-item="next"> <i class="icon-feather-chevron-right"></i></a>

    </div>
</div>
