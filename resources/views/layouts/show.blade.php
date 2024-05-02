<div class="grid grid-cols-3 gap-2">
    @foreach($files as $file)
        <div class="card">
            <div class="card-media h-40">
                <div class="card-media-overly"></div>
                <img src="{{ asset('/assets/images/courses/Diary Icon.jpeg') }}" class= "w-full h-full object-cover" alt="">
                <span class="absolute bg-white px-2 py-1 text-sm rounded-md m-2"> </span>
                
                    <a href="{{ asset($file->location) }}" target="_blank" class="bg-red-100 absolute right-2 top-2 p-0.5 px-1.5 rounded-full text-red-500">
                        <i class="icon-feather-eye"> </i>
                    </a>
                
            </div>
            <div class="card-body">
                <div class="-top-3 absolute bg-blue-100 font-medium px-2 py-1 right-2 rounded-full text text-blue-500 text-sm">
                    
                </div>
                <div class="text-xs font-semibold uppercase text-red-500">UNIT -> {{$file->unit_code}} :    {{$file->unit_name}}</div>
                {{-- <a href="{{ route('unit.pdfs', ['unit_code' => $unitCode,]) }}"> --}}
                <div class="ext-lg font-medium mt-1 t truncate"> {{ explode('_', $file->name, 2)[1] }}</div>
                <a href="{{ asset($file->location) }}" class="bg-blue-100 w-full flex font-semibold h-8 items-center justify-center mt-3 px-3 rounded-md text-blue-600 text-sm mb-1 "download><i class="icon-feather-download"> </i></a>
            </div>
        </div>
    @endforeach
</div>
