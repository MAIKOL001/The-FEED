@if (Auth::user()->is_admin == 1)
<div class="mb-6">
    <h2 class="text-2xl font-semibold"> Upload </h2>
    <nav class="responsive-nav border-b md:m-0 -mx-4">
        <ul uk-switcher="connect: #form-type; animation: uk-animation-fade">
            <li><a href="#" class="lg:px-2"> Read the guide</a></li>
            
        </ul>
    </nav>
</div>

<div class="grid lg:grid-cols-3 mt-12 gap-8">
    <div>
        <h3 class="text-xl mb-2 font-semibold"> Guide</h3>
        <p>1.Fill in the spaces to upload the files </p>
        <p>2.Unit Code (eg. inf320) in smallletters & no spaces</p>
        <p>3.Unit Name (eg. data structures) in smallletters</p>
    </div>
    <div class="bg-white rounded-md lg:shadow-md shadow col-span-2 lg:mx-16">

        <div class="grid grid-cols-1 gap-3 lg:p-6 p-4">
            
            <form method="POST" action="{{ route('upload.file') }}" enctype="multipart/form-data">
                @csrf
                {{ csrf_field() }}
                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div hidden>
                <label for="course_id">Course ID(Automated)</label>
                <input type="text" name="course_id" placeholder="Course_id" value="{{ auth()->user()->course_id }}" readonly readonly style="border: 1px solid #ccc; padding: 8px;"><br><br>
                    
            </div>

            <div class="col-span-2">
                <label for="Year">Year</label>
                <select name="year" id="year" readonly style="border: 1px solid #ccc; padding: 8px;">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select><br><br>    
            </div>


            <div>
                <label for="semester">Semester:</label>
                <select name="semester" id="semester" readonly style="border: 1px solid #ccc; padding: 8px;">
                    <option value="1">Semester 1</option>
                    <option value="2">Semester 2</option>
                </select><br><br>    
            </div>

           
            @csrf
            <div class="col-span-2">
                <label for="category">Category:</label>
                <br>
                <input type="radio" id="category-pdf" name="category" value="notes">
                <label for="notes">Notes</label>
                <br>
                <input type="radio" id="category-video" name="category" value="video">
                <label for="notes">Videos</label>
                <br>
                <input type="radio" id="category-cat" name="category" value="cat" onclick="toggleCatInputs()">
                <label for="cats">Cat/assignment</label>
                <br><br>
                <div id="cat-inputs" style="display: none;">
                    <label for="cat_name">Name:</label>
                    <input type="text" id="cat_name" name="cat_name" placeholder="Name"><br>
                    <label for="due_date">Due Date:</label>
                    <input type="date" id="due_date" name="due_date"><br>
                </div>
            </div>
              
              <script>
                // Function to toggle visibility of cat inputs
                function toggleCatInputs() {
                  const catRadio = document.getElementById('category-cat');
                  const catInputs = document.getElementById('cat-inputs');
                  if (catRadio.checked) {
                    catInputs.style.display = 'block';
                  } else {
                    catInputs.style.display = 'none';
                  }
                }
              
                // Add event listener to the radio buttons
                const radioButtons = document.querySelectorAll('input[name="category"]');
                radioButtons.forEach(radioButton => {
                  radioButton.addEventListener('click', toggleCatInputs);
                });
              </script>
            

            <div class="col-span-2">
                <label for="unit_code">Unit Code : (eg. inf320) in small letters & no spaces</label>
                <input type="text" name="unit_code" placeholder="Unit Code"  required style="border: 1px solid #ccc; padding: 8px;"><br><br>                      
            </div>

            <div class="col-span-2">
                <label for="unit_title">Unit Name : (eg. data structures) in smallletters</label>
                <input type="text" name="unit_name" placeholder="Unit name"  required style="border: 1px solid #ccc; padding: 8px;"><br><br>                      
            </div>

            

            <div class="col-span-2">
                <div uk-form-custom class="w-full py-3">
                    <div class="bg-gray-100 border-2 border-dashed flex flex-col h-32 items-center justify-center relative w-full rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-12">
                            <path d="M5.5 13a3.5 3.5 0 01-.369-6.98 4 4 0 117.753-1.977A4.5 4.5 0 1113.5 13H11V9.413l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13H5.5z" />
                            <path d="M9 13h2v5a1 1 0 11-2 0v-5z" />
                        </svg>
                        <span id="uploadMessage" class="hidden text-lg text-gray-600 mt-2"> File succesfully uploaded</span>
                    </div>
                    <input id="fileInput" type="file" name="file[]" required multiple >
                    <a class="bg-gray-200 flex font-medium h-9 items-center justify-center px-5 rounded-b-xl text-blue-600 text-white uk-position-bottom uk-transition-bottom-small">
                        Choose file
                    </a><br><br>
                </div>     
            </div>
            
            <script>
                document.getElementById("fileInput").addEventListener("change", function() {
                    var uploadMessage = document.getElementById("uploadMessage");
                    if (this.files.length > 0) {
                        uploadMessage.classList.remove("hidden");
                    } else {
                        uploadMessage.classList.add("hidden");
                    }
                });
                
    function checkFileSize(input) {
        var files = input.files;
        var maxSize = 10 * 1024 * 1024; // 10 MB in bytes

        for (var i = 0; i < files.length; i++) {
            if (files[i].size > maxSize) {
                alert('The file size must not exceed 10 MB.');
                input.value = ''; // Clear the input field
                return false; // Prevent form submission
            }
        }
        return true; // Proceed with form submission
    }

            </script>
             
             
            <div class="p-5">
                <button type="submit" class="button bg-red-700">Upload PDFs</button>
            </div>
        

     </div>
     <script>
        // Check for the success message and display a SweetAlert if present
        document.addEventListener('DOMContentLoaded', function () {
            @if(session('success'))
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: '{{ session('success') }}',
                });
            @endif
        });
    </script>
    @endif