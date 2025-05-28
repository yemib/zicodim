<script>
    const dropAreas = document.querySelectorAll('.drop-area');
    const fileInputs = document.querySelectorAll('input[type="file"]');

    dropAreas.forEach((dropArea, index) => {
        ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
            dropArea.addEventListener(eventName, preventDefaults, false);
            document.body.addEventListener(eventName, preventDefaults, false);
        });

        ['dragenter', 'dragover'].forEach(eventName => {
            dropArea.addEventListener(eventName, () => highlight(dropArea), false);
        });

        ['dragleave', 'drop'].forEach(eventName => {
            dropArea.addEventListener(eventName, () => unhighlight(dropArea), false);
        });

        dropArea.addEventListener('drop', e => handleDrop(e, index), false);

        fileInputs[index].addEventListener('change', e => handleFiles(e.target.files, index), false);
        dropArea.addEventListener('click', () => fileInputs[index].click(), false);
    });

    function preventDefaults(e) {
        e.preventDefault();
        e.stopPropagation();
    }

    function highlight(dropArea) {
        dropArea.classList.add('highlight');
    }

    function unhighlight(dropArea) {
        dropArea.classList.remove('highlight');
    }

    function handleDrop(e, index) {
        const files = e.dataTransfer.files;
        handleFiles(files, index);
    }

    function handleFiles(files, index) {
        const fileList = document.getElementById(`file-list${index + 1}`);
        fileList.innerHTML = '';
        const fileInput = fileInputs[index];
        const dataTransfer = new DataTransfer();

        for (const file of files) {
            if (validateFile(file)) {
                displayFile(file, fileList, dataTransfer);
            }
        }

        for (const file of fileInput.files) {
            dataTransfer.items.add(file);
        }

        fileInput.files = dataTransfer.files;
    }

    function displayFile(file, fileList, dataTransfer) {
        const listItem = document.createElement('li');
        listItem.classList.add('file-item', 'col-sm-6', 'col-md-4', 'col-lg-3');
        listItem.textContent = `${file.name} (${formatSize(file.size)})`;

        const removeBtn = document.createElement('span');
        removeBtn.classList.add('remove-btn');
        removeBtn.textContent = 'Remove';
        removeBtn.addEventListener('click', () => {
            listItem.remove();
            dataTransfer.items.remove(file);
            updateInputFiles(fileList, dataTransfer);
        });

        listItem.appendChild(removeBtn);
        fileList.appendChild(listItem);

        // Check if the file is an image and display a preview
        if (file.type.startsWith('image/')) {
            const link = document.createElement('a');
            //link.target = '_new'; // Open in new tab
            listItem.appendChild(link);

            const img = document.createElement('img');
            img.classList.add('preview-image');
            img.file = file;
            link.appendChild(img);

            const reader = new FileReader();
            reader.onload = (e) => {
                img.src = e.target.result;
                link.href = e.target.result; // Set href to image data URL
            };
            reader.readAsDataURL(file);
        }

        setTimeout(() => {
            listItem.style.opacity = '1';
        }, 50);
    }

    function validateFile(file) {
        const allowedTypes = [
           
            'image/jpeg', 'image/png', 'image/gif', 'image/bmp', 'image/webp',
            'image/tiff', 'image/svg+xml', 'image/jpg',
           
        ];

        if (allowedTypes.includes(file.type)) {
            return true;
        } else {
            const message = `File type not allowed: ${file.name}`;
            sweetmessage("error", message);
            return false;
        }
    }

    function formatSize(bytes) {
        const sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
        if (bytes === 0) return '0 Byte';
        const i = parseInt(Math.floor(Math.log(bytes) / Math.log(1024)));
        return Math.round(bytes / Math.pow(1024, i), 2) + ' ' + sizes[i];
    }

    function updateInputFiles(fileList, dataTransfer) {
        const fileInput = fileList.parentElement.querySelector('input[type="file"]');
        fileInput.files = dataTransfer.files;
    }
</script>
<style>
    .preview-image {
        max-width: 200px;
        max-height: 200px;
        object-fit: contain;
        /* Ensures the image fits within the specified area without distorting */
        margin-top: 10px;
        display: block ;
    }

    .file-item {
        list-style: none;
        opacity: 0;
        transition: opacity 0.3s;
    }

    .file-item .remove-btn {
        margin-left: 10px;
        color: red;
        cursor: pointer;
    }

    .drop-area {
        border: 2px dashed #ccc;
        padding: 20px;
        border-radius: 10px;
        text-align: center;
    }

    .drop-area.highlight {
        border-color: #333;
        background-color: #f0f0f0;
    }
</style>
 <!-- Wizard Form Demo js -->
 <script>


        

        // Handle form submission for form1
        $("#Form1").on("submit", function(event) {
            event.preventDefault();
            event.stopPropagation();

            let isValid = true;
            let emptyFieldName = '';


            // Check if any required input is empty
            $(this).find(".required-input").each(function() {
                if (!$(this).val()) {
                    isValid = false;
                    $(this).addClass("is-invalid");
                    emptyFieldName =   emptyFieldName  +  $(this).attr("placeholder") + ",";
                } else {
                    $(this).removeClass("is-invalid");
                }
            });

            if (!isValid) {
                // Show alert for empty input

                 Swal.fire({
                //position: "top-end",
                icon: "error",
                title: `Please fill all these fields`,
                text : emptyFieldName ,
                showConfirmButton: false,
                timer: 4000
                });
                
                return;
            }

            // Your form validation logic for form1
            isValid = $(this)[0].checkValidity();
            $(this).addClass("was-validated");

            if (isValid) {
                var currentForm = $(this);

                // Serialize form data including files
                var formData = new FormData($(this)[0]);

                // Submit the form using AJAX with files and track progress
                $.ajax({
                    url: currentForm.attr("action"), // Specify the form action URL
                    type: currentForm.attr("method"), // Specify the form method (POST/GET)
                    data: formData, // Use FormData for file uploads
                    contentType: false, // Prevent jQuery from setting contentType
                    processData: false, // Prevent jQuery from processing data
                    xhr: function() {
                        var xhr = new window.XMLHttpRequest();

                        // Track upload progress
                        xhr.upload.addEventListener("progress", function(evt) {
                            if (evt.lengthComputable) {
                                var percentComplete = (evt.loaded / evt.total) * 100;
                                // Update your progress bar or display progress percentage here
                                $('#uploadingform1').html("Upload progress: " + percentComplete + "%");
                            }
                        }, false);

                        return xhr;
                    },
                    success: function(response) {
                        // Handle successful form submission
                        console.log("Form submitted successfully!");
                        $('#uploadingform1').html("Form submitted successfully!");

                        setTimeout(() => {
                            window.location = path+"?message=Successful";
                        }, 2000);
                    },
                    error: function(xhr, status, error) {
                        // Handle AJAX errors
                        $('#uploadingform1').html(`<span style='color:red'>The form submission failed.</span> <br/> 
                        <button class="btn btn-info">Submit</button> `);
                        console.error("Error:", error);
                    }
                });
            }
        });
   
</script>

<script>
    function submit_cart_form(id) {
        // Handle form submission for form1
        $("#" + id).on("submit", function(event) {
            event.preventDefault();
            event.stopPropagation();

            let isValid = true;
            let emptyFieldName = '';
            // Check if any required input is empty
            $(this).find(".required-input").each(function() {
                if (!$(this).val()) {
                    isValid = false;
                    $(this).addClass("is-invalid");
                    emptyFieldName = emptyFieldName + $(this).attr("placeholder") + ",";
                } else {
                    $(this).removeClass("is-invalid");
                }
            });

            if (!isValid) {
                // Show alert for empty input

                Swal.fire({
                    //position: "top-end",
                    icon: "error"
                    , title: `Please fill all these fields`
                    , text: emptyFieldName
                    , showConfirmButton: false
                    , timer: 4000
                });

                return;
            }

            // Your form validation logic for form1
            isValid = $(this)[0].checkValidity();
            $(this).addClass("was-validated");

            if (isValid) {
                var currentForm = $(this);

                // Serialize form data including files
                var formData = new FormData($(this)[0]);

                // Submit the form using AJAX with files and track progress
                $.ajax({
                    url: currentForm.attr("action"), // Specify the form action URL
                    type: currentForm.attr("method"), // Specify the form method (POST/GET)
                    data: formData, // Use FormData for file uploads
                    contentType: false, // Prevent jQuery from setting contentType
                    processData: false, // Prevent jQuery from processing data
                    xhr: function() {
                        var xhr = new window.XMLHttpRequest();

                        // Track upload progress
                        xhr.upload.addEventListener("progress", function(evt) {
                            if (evt.lengthComputable) {
                                var percentComplete = (evt.loaded / evt.total) * 100;
                                // Update your progress bar or display progress percentage here
                                $('#upload' + id).html("Upload progress: " + percentComplete + "%");
                            }
                        }, false);

                        return xhr;
                    }
                    , success: function(response) {
                        // Handle successful form submission
                        console.log("Form submitted successfully!");
                        $('#upload' + id).html("Details submitted successfully!");

                        setTimeout(() => {
                            $('#upload' + id).html(`<button class="btn btn-sm btn-info">Save Details</button> `);
                        }, 2000);


                    }
                    , error: function(xhr, status, error) {
                        // Handle AJAX errors
                        $('#upload' + id).html(`<span style='color:red'>The  submission failed.</span> <br/> 
                        <button class="btn btn-sm btn-info">Save Details</button> `);
                        console.error("Error:", error);
                    }
                });
            }
        });



    }

</script>

<?php /**PATH /home/itwtvmvh/public_html/zicodium/resources/views/admin_folder/upload_script.blade.php ENDPATH**/ ?>