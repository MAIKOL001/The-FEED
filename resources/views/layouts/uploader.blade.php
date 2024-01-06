<div id="offcanvas-create" uk-offcanvas="flip: true; overlay: true">
    <div class="uk-offcanvas-bar lg:w-4/12 w-full dark:bg-gray-700 dark:text-gray-300 p-0 bg-white flex flex-col justify-center shadow-2xl">

        <button class="uk-offcanvas-close absolute" type="button" uk-close></button>

        <!-- notivication header -->
        <div class="-mb-1 border-b font-semibold px-5 py-5 text-lg">
            <h4> Create album </h4>
        </div>

        <div class="p-6 space-y-3 flex-1">
            <div>
                <form method="POST" action="{{ route('home.file') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                {{-- <label> Year  </label>
                <input type="number" name="year" placeholder="Year">
            </div>
            <div>
                <label> Course code  </label>
                <input type="text" name="unit_code" placeholder="Unit Code">
            </div> --}}
            {{-- <div>
                <label> Category  </label>
                <input type="text" class="with-border" placeholder="">
            </div> --}}
            
            <div uk-form-custom class="w-full py-3">
                    <div class="bg-gray-100 border-2 border-dashed flex flex-col h-32 items-center justify-center relative w-full rounded-lg dark:bg-gray-800 dark:border-gray-600">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-12">
                            <path d="M5.5 13a3.5 3.5 0 01-.369-6.98 4 4 0 117.753-1.977A4.5 4.5 0 1113.5 13H11V9.413l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13H5.5z" />
                            <path d="M9 13h2v5a1 1 0 11-2 0v-5z" />
                        </svg>
                    </div>
                    <input type="file" name="file[]" multiple><br><br>
            </div>
           
        </div>
        <div class="p-5">
            <button type="submit">Upload PDFs</button>
        </div>

    </form> 
    <div class="col-8">
        <h2>Files Table</h2>
            <table class="table table-bordered table-striped">
                <thead>
                    <th>Photo</th>
                    <th>File Name</th>
                    <th>File Size</th>
                    <th>Date Uploaded</th>
                    <th>File Location</th>
                </thead>
                <tbody>
                    @if(count($files) > 0)
                        @foreach($files as $file)
                            <tr>
                                <td><img src='storage/{{$file->name}}' name="{{$file->name}}" style="width:90px;height:90px;"></td>
                                <td>{{ $file->name }}</td>
                                <td> 
                                    @if($file->size < 1000)
                                        {{ number_format($file->size,2) }} bytes
                                    @elseif($file->size >= 1000000)
                                        {{ number_format($file->size/1000000,2) }} mb
                                    @else
                                        {{ number_format($file->size/1000,2) }} kb
                                    @endif
                                </td>
                                <td>{{ date('M d, Y h:i A', strtotime($file->created_at)) }}</td>
                                <td><a href="{{ $file->location }}">{{ $file->location }}</a></td>

                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="5" class="text-center">No Table Data</td>
                        </tr>
                    @endif
                </tbody>
            </table>
    </div>
    <div style="margin-top:20px;">
        @if(count($errors) > 0)
            @foreach($errors->all() as $error)
                <div class="alert alert-danger text-center">
                    {{$error}}
                </div>
            @endforeach
        @endif

        @if(session('success'))
            <div class="alert alert-success text-center">
                {{session('success')}}
            </div>
        @endif
        </div>
    </div>
    </div>
</div>