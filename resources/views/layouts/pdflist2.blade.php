<div class="md:mb-4 mb-3">
    <h2 class="text-2xl font-semibold"> Your PDFs </h2>
    <nav class="responsive-nav border-b md:m-0 -mx-4">
        <ul>
            <li class="active"><a href="#" class="lg:px-2">   All <span>12</span></a></li>
        </ul>
    </nav>
</div>
<div class="divide-y" id="pdfList">
</div>

<script>
    // Make AJAX request to retrieve PDF data
    fetch('/api/pdfs2')
        .then(response => response.json())
        .then(data => {
            const pdfList = document.getElementById('pdfList');
            data.forEach(pdf => {
                const pdfItem = document.createElement('div');
                pdfItem.classList.add('flex', 'md:space-x-6', 'space-x-4', 'md:py-5', 'py-3', 'relative');

                const pdfLink = document.createElement('a');
                pdfLink.href = 'video-watch.html';
                pdfLink.classList.add('md:w-64', 'md:h-40', 'w-36', 'h-24', 'overflow-hidden', 'rounded-lg', 'relative', 'shadow-sm');

                const pdfImage = document.createElement('img');
                pdfImage.src = 'assets/images/video/File free icons designed by Freepik.jpeg';
                pdfImage.alt = '';
                pdfImage.classList.add('w-24', 'h-24', 'absolute', 'inset-0', 'object-cover');

                const pdfDate = document.createElement('span');
                pdfDate.classList.add('absolute', 'bg-black', 'bg-opacity-60', 'bottom-1', 'font-semibold', 'px-1.5', 'py-0.5', 'right-1', 'rounded', 'text-white', 'text-xs');
                pdfDate.textContent = new Date(pdf.created_at).toLocaleDateString();

                pdfLink.appendChild(pdfImage);
                pdfLink.appendChild(pdfDate);
                pdfItem.appendChild(pdfLink);

                const pdfContent = document.createElement('div');
                pdfContent.classList.add('flex-1', 'space-y-2');

                const pdfName = document.createElement('a');
                pdfName.classList.add('md:text-xl', 'font-semibold', 'line-clamp-2');
                pdfName.textContent = pdf.name;

                const pdfUpdate = document.createElement('a');
                pdfUpdate.href = '#';
                pdfUpdate.classList.add('font-semibold', 'block', 'text-sm');
                pdfUpdate.textContent = `Last update: ${new Date(pdf.created_at).toLocaleDateString()}`;

                const pdfUser = document.createElement('a');
                pdfUser.href = '#';
                pdfUser.classList.add('font-semibold', 'block', 'text-sm');
                pdfUser.textContent = pdf.user;

                const pdfButtons = document.createElement('div');
                pdfButtons.classList.add('flex', 'items-center', 'justify-between');

                const downloadButton = document.createElement('button');
                downloadButton.classList.add('bg-blue-100', 'w-full', 'flex', 'font-semibold', 'h-8', 'items-center', 'justify-center', 'mt-3', 'px-3', 'rounded-md', 'text-blue-600', 'text-sm', 'mb-1');
                downloadButton.textContent = 'Download';

                // Event listener for download button
                downloadButton.addEventListener('click', () => {
                    // Replace 'your-pdf-path' with the actual relative path to the PDF within the public directory
                    const pdfRelativePath = '/storage/app/public'; // You need to replace this with the correct path

                    // Create a hidden link element
                    const downloadLink = document.createElement('a');
                    downloadLink.href = window.location.origin + '/storage/' + pdfRelativePath;
                    downloadLink.target = '_blank'; // Open in a new tab/window
                    downloadLink.download = pdf.name; // Set the filename for the downloaded file

                    // Append the link to the body and trigger a click event to start the download
                    document.body.appendChild(downloadLink);
                    downloadLink.click();

                    // Remove the link from the body after the download is initiated
                    document.body.removeChild(downloadLink);
                });

                const deleteButton = document.createElement('button');
                deleteButton.classList.add('bg-red-100', 'w-full', 'font-semibold', 'h-8','w-5', 'items-center', 'justify-center', 'mt-3', 'px-3', 'rounded-md', 'text-blue-600', 'text-sm', 'mb-1');
                deleteButton.textContent = 'Delete';

                pdfButtons.appendChild(downloadButton);
                pdfButtons.appendChild(deleteButton);

                pdfContent.appendChild(pdfName);
                pdfContent.appendChild(pdfUpdate);
                pdfContent.appendChild(pdfUser);
                pdfContent.appendChild(pdfButtons);

                pdfItem.appendChild(pdfContent);

                pdfList.appendChild(pdfItem);
            });
        })
        .catch(error => {
            console.error(error);
        });
</script>
