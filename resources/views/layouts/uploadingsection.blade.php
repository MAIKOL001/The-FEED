<div class="card md:p-6 p-2 max-w-3xl mx-auto">
    <h2 class="text-xl font-bold"> Upload Section</h2>

    <div class="grid md:grid-cols-1 sm:grid-cols-3 grid-cols-1 gap-x-2 gap-y-4 mt-3">
        <div class="p-6 space-y-3 flex-1">
            <form method="POST" action="{{ route('upload.file') }}" enctype="multipart/form-data">
                {{ csrf_field() }}

               

                <label for="course_id">Course ID(Automated)</label>
                <input type="text" name="course_id" placeholder="Course_id" value="{{ auth()->user()->course_id }}" readonly readonly style="border: 1px solid #ccc; padding: 8px;"><br><br>
                
                <!-- New input for Semester with values 1 and 2 -->
                <label for="semester">Semester:</label>
                <select name="semester" id="semester" readonly style="border: 1px solid #ccc; padding: 8px;">
                    <option value="1">Semester 1</option>
                    <option value="2">Semester 2</option>
                </select><br><br>

                <label for="category">Category</label>
                <select name="category" id="category" readonly style="border: 1px solid #ccc; padding: 8px;">
                    <option value="1">PDFs</option>
                    <option value="2">Videos</option>
                </select><br><br>

                <label for="unit_code">Unit Code</label>
                <input type="text" name="unit_code" placeholder="Unit Code"  required style="border: 1px solid #ccc; padding: 8px;"><br><br>

                <div uk-form-custom class="w-full py-3">
                    <div class="bg-gray-100 border-2 border-dashed flex flex-col h-32 items-center justify-center relative w-full rounded-lg dark:bg-gray-800 dark:border-gray-600">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-12">
                            <path d="M5.5 13a3.5 3.5 0 01-.369-6.98 4 4 0 117.753-1.977A4.5 4.5 0 1113.5 13H11V9.413l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13H5.5z" />
                            <path d="M9 13h2v5a1 1 0 11-2 0v-5z" />
                        </svg>
                    </div>
                    <input type="file" name="file[]" multiple class="bg-gray-200 flex font-medium h-9 items-center justify-center px-5 rounded-b-xl text-blue-600 text-white uk-position-bottom uk-transition-bottom-small">
                    Choose file<br><br>
                </div>
                   
                <div class="p-5">
                    <button type="submit" class="border-b-3" readonly style="border: 1px solid #ccc; padding: 8px;">Upload PDFs</button>
                </div>
            </form> 
        </div> 
    </div>
</div>
