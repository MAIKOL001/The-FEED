<div class="card md:p-6 p-2 max-w-3xl mx-auto "style="overlay-x:true;">  
    <div class="col-8">
        <h2 class="text-xl font-bold"> Uploads</h2>
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
</div>

    <div class="flex justify-center mt-6">
        <a href="#" class="bg-white font-semibold my-3 px-6 py-2 rounded-full shadow-md dark:bg-gray-800 dark:text-white">
            Load more ..</a>
    </div>
    
</div>


</div>

</div>
</div>