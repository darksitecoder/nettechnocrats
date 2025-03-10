<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
  <meta name="author" content="AdminKit">
  <meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="shortcut icon" href="img/icons/icon-48x48.webp" />

  <link rel="canonical" href="https://demo-basic.adminkit.io/" />

  <!-- Fonts -->
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css" />
  <script src="https://kit.fontawesome.com/e1528f4468.js" crossorigin="anonymous"></script>
  <!-- Fonts -->
  <title>Edit Blog</title>

  <link href="{{ asset('/dashboard_theme/css/app.css') }}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

  <style>
    .edit {
      transition: 0.5s ease-in-out;
      border: 1px solid #1CBB8C !important;
    }

    .edit:hover {
      background-color: transparent !important;
      color: #1CBB8C;
    }

    .delete {
      transition: 0.5s ease-in-out;
      border: 1px solid #DC3545;
    }

    .delete:hover {
      background-color: transparent !important;
      color: #DC3545;
    }

    .btn {
      padding: 8px 20px;
      border-radius: 5px;
      color: #fff;
      text-decoration: none;
      transition: 0.5s ease-in-out;
      font-weight: 600;
    }

    :root {
      --white: #fff;
    }

    .save {
      background-color: #FCB92C;
      border: 1px solid #FCB92C;
    }

    .save:hover {
      background-color: transparent;
      color: #FCB92C;
    }

    .published {
      background-color: #1CBB8C;
      border: 1px solid #1CBB8C;
    }

    .published:hover {
      background-color: transparent;
      color: #1CBB8C;
    }


    .image-uploader,
    .video-uploader {
      height: 300px !important;
    }

    .image-uploader,
    .video-uploader,
    .pdf-uploader {
      position: relative;
      width: 100%;
      height: 100px;
      border: 2px dashed #ccc;
      border-radius: 10px;
      overflow: hidden;
      cursor: pointer;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    label {
      font-size: 16px;
      color: #777;
      transition: background-color 0.3s;
    }

    img,
    video {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    label:hover {
      background-color: rgba(0, 0, 0, 0.1);
    }

    textarea {
      width: 100%;
      height: 500px;
      background-color: var(--white) !important;
      color: var(--black) !important;
    }

    .blog__heading {
      background-color: var(--white);
      width: 100%;
      height: 50px;
      border-radius: 10px;
      padding: 5px 10px;
      border: 1px dotted #000;
      font-size: 22px;
      font-weight: 600;
    }

    .ck.ck-editor__main>.ck-editor__editable:not(.ck-focused) {
      background-color: var(--white);
      max-width: 600px;
      height: 500px;
    }

    .ck.ck-editor {
      width: 100%;
      position: static;
      /* color: #000 !important; */
    }

    .ck.ck-editor__main>.ck-editor__editable {
      background-color: var(--white) !important;
    }

    .ck-content p {
      max-width: 950px;
      min-width: 900px;
      height: 600px;
    }

    .select2-selection {
      background: #121315;
      border: none;
      outline: none;
      border-radius: 5px;
      color: var(--g-text-color);
      /* padding: 9px !important; */
    }

    .select2-selection .selection {
      height: 50px;
      display: block;
      /* padding: 9px !important; */
    }

    .select2-container--default .select2-selection--single {
      /* background-color: #fff; */
      border: none;
      outline: none;
      font-weight: 600;
      font-size: 14px;
      border-radius: 4px;
      padding: 0rem 0rem;
      height: 40px;
      align-items: center;
      display: flex;
    }

    .select2-dropdown {
      width: 950px !important;
    }

    #topic {
      width: 100%;
    }

    .alert-success {
      background-color: #67f0c8;
      color: #fff;
      font-weight: 600;
      padding: 5px 15px;
      border-radius: 5px;
      width: fit-content;
    }

    .alert-danger {
      background-color: #ff9191;
      color: #fff;
      font-weight: 600;
      padding: 5px 15px;
      border-radius: 5px;
      width: fit-content;
    }

    .close-btn {
      cursor: pointer;
      margin-left: 5px;
      font-size: 18px;
      color: red !important;
      background-color: transparent;
      border: none;
    }

    .input__feilds {
      border: 1px solid black;
      font-size: 20px;
      width: 100%;
      padding: 5px 10px;
      border-radius: 5px;
    }
  </style>
</head>

<body>
  <div class="wrapper">

    @include('admin/partials/left_sidebar')

    <div class="main">

      @include('admin/partials/header')

      <main class="content">
        <div class="container-fluid p-0">
          <form action="{{ url('/updateBlogsForAdminApi') }}" method="POST" enctype="multipart/form-data">
            @csrf


            <!-- Flash Messages (Success or Error) -->
            @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('success') }}
              <button type="button" class="close-btn" data-bs-dismiss="alert" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
            </div>
            @endif

            @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              {{ session('error') }}
              <button type="button" class="close-btn" data-bs-dismiss="alert" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
            </div>
            @endif

            <!-- Form Content -->
            <div class="d-flex justify-content-between mb-4 mt-4">
              <h1 class="h3 mb-3"><strong>Add Blog</strong></h1>

              <div class="buttons">
                <button class="mx-3 btn save" name="action" value="save" type="Submit">Save<i class="fa-solid fa-bookmark"></i></button>
                <button class="btn published" name="action" value="publish" type="Submit">Published <i class="fa-solid fa-inbox"></i></button>
              </div>
            </div>

            <!-- Image Upload Section -->
            <div class="row pt-3 d-flex justify-content-center">
              <div class="col-md-6 stretch-card grid-margin d-flex flex-column">
                <div class="image-uploader">
                  <input type="file" id="image" name="image" accept="image/*" style="display: none;">
                  <div class="upload-container">
                    <label for="image" id="imageLabel">Upload Image</label>
                    <img id="uploadedImage"
                      src="{{ asset('public/'.$Blogs[0]->image) }}"
                      alt="Uploaded Image"
                      style="display: block;">

                  </div>
                </div>
                <!-- Display Image Validation Error -->
              </div>

              {{--<!-- Video Upload Section -->
              <div class="col-md-6 stretch-card grid-margin d-flex flex-column">
                <div class="video-uploader">
                  <input type="file" id="video" name="video" accept="video/mp4,video/quicktime" style="display: none;">
                  <div class="upload-container">
                    <label for="video" id="videoLabel">Upload Video</label>
                    <video id="uploadedVideo" controls style="display: block;">
                      <source src="{{ asset('storage/' . $Blogs[0]->video) }}" type="video/mp4">
              Your browser does not support the video tag.
              </video>

            </div>
        </div>
    </div>
  </div>

  <!-- PDF Upload Section -->
  <div class="row pt-1 d-flex justify-content-center">
    <div class="col-md-12 stretch-card grid-margin">
      <div class="pdf-uploader">
        <!-- Hidden file input to upload PDF -->
        <input type="file" id="pdf" name="pdf" accept="application/pdf" style="display: none;" onchange="showSelectedFile()">

        <div class="upload-container">
          <!-- Label to trigger file input -->
          <label for="pdf" id="pdfLabel">Upload PDF</label>

          <!-- Display current file name or new file name after selection -->
          @if(isset($Blogs[0]->pdf) && $Blogs[0]->pdf != '')
          <p id="pdfName" style="display: block;">Current file: {{ basename($Blogs[0]->pdf) }}</p>
          @else
          <p id="pdfName" style="display: none;"></p>
          @endif
        </div>
      </div>
    </div>
  </div>--}}

  <!-- Topic Select Section -->
  <div class="row pt-1 my-3 d-flex justify-content-center">
    <div class="col-md-12 stretch-card grid-margin">
      <select name="topic" id="topic">
        @foreach($topics as $topic)
        <option value="{{ $topic->topic }}"
          {{ old('topic', $Blogs[0]->topic) == $topic->topic ? 'selected' : '' }}>
          {{ $topic->topic }}
        </option>
        @endforeach
      </select>
    </div>
  </div>

  <div class="" style="display:none">
    <input name="blogId" value="{{$Blogs[0]->id}}"></input>
  </div>


  <!-- Heading Input Section -->
  <div class="row pt-1 my-3 d-flex justify-content-center">
    <!-- Display Heading Validation Error -->
    <div class="col-md-12 stretch-card grid-margin">
      <input type="text" id="heading" name="heading" class="blog__heading" value="{{ $Blogs[0]->heading }}" placeholder="Enter Heading Here...">
    </div>
  </div>

  <!-- Content Textarea Section -->
  <div class="row pt-1 d-flex justify-content-center">
    <!-- Display Content Validation Error -->
    <div class="col-md-12 stretch-card grid-margin blog__content">
      <textarea name="content" id="editor" value="">{{ $Blogs[0]->content }}</textarea>
    </div>
  </div>


  <div class="row pt-1 my-3 d-flex justify-content-center">
    <!-- Display company_name Validation Error -->
    <div class="col-md-12 stretch-card grid-margin mb-3">
      <input type="text" id="seo_title" name="seo_title" class="blog__company_name input__feilds" value="{{$Blogs[0]->seo_title}}" placeholder="Enter SEO title">
      @error('seo_title')
        <span class="text-danger" style="font-size:13px;">{{ $message }}</span>
      @enderror
    </div>
    <div class="col-md-12 stretch-card grid-margin">
      <input type="text" id="seo_decription" name="seo_decription" class="blog__company_name input__feilds" value="{{$Blogs[0]->seo_decription}}" placeholder="Enter SEO meta decription">
      @error('seo_decription')
        <span class="text-danger" style="font-size:13px;">{{ $message }}</span>
      @enderror
    </div>
  </div>

  </form>


  </div>
  </main>

  @include('admin/partials/footer')

  </div>
  </div>

  <script src="{{ asset('dashboard_theme/js/app.js') }}"></script>
  <script>
    const childElement = document.querySelector('.blog');
    childElement.classList.add('active');
  </script>

  <script>
    function showSelectedFile() {
      var fileInput = document.getElementById('pdf');
      var fileName = fileInput.files[0] ? fileInput.files[0].name : ''; // Get the file name

      var fileNameDisplay = document.getElementById('pdfName');

      if (fileName) {
        // Display the new file name when a file is selected
        fileNameDisplay.textContent = 'Selected file: ' + fileName;
        fileNameDisplay.style.display = 'block'; // Show the file name
      } else {
        // Hide file name if no file is selected
        fileNameDisplay.style.display = 'none';
      }
    }
  </script>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Image Uploader
      const image = document.getElementById('image');
      const uploadedImage = document.getElementById('uploadedImage');
      const imageLabel = document.getElementById('imageLabel');
      const imageUploader = document.querySelector('.image-uploader');

      imageUploader.addEventListener('click', function() {
        image.click();
      });

      image.addEventListener('change', function(event) {
        const file = event.target.files[0];
        if (file) {
          const reader = new FileReader();
          reader.onload = function(e) {
            uploadedImage.src = e.target.result;
            uploadedImage.style.display = 'block';
            imageLabel.style.display = 'none';
          };
          reader.readAsDataURL(file);
        }
      });

      uploadedImage.addEventListener('click', function() {
        image.value = ''; // Clear the input to allow re-upload
        imageLabel.style.display = 'block'; // Show the label again
        uploadedImage.style.display = 'none'; // Hide the image
        imageUploader.click(); // Trigger file input click
      });

      // Video Uploader
      const video = document.getElementById('video');
      const uploadedVideo = document.getElementById('uploadedVideo');
      const videoLabel = document.getElementById('videoLabel');
      const videoUploader = document.querySelector('.video-uploader');

      videoUploader.addEventListener('click', function() {
        video.click();
      });

      video.addEventListener('change', function(event) {
        const file = event.target.files[0];
        if (file) {
          const fileType = file.type;
          const validVideoTypes = ['video/mp4', 'video/quicktime'];

          if (validVideoTypes.includes(fileType)) {
            const reader = new FileReader();
            reader.onload = function(e) {
              uploadedVideo.src = e.target.result;
              uploadedVideo.style.display = 'block';
              videoLabel.style.display = 'none';
            };
            reader.readAsDataURL(file);
          } else {
            alert('Please upload a valid video file (MP4 or MOV).');
            video.value = ''; // Clear the input
          }
        }
      });

      uploadedVideo.addEventListener('click', function() {
        video.value = ''; // Clear the input to allow re-upload
        videoLabel.style.display = 'block'; // Show the label again
        uploadedVideo.style.display = 'none'; // Hide the video
        videoUploader.click(); // Trigger file input click
      });

      // PDF Uploader
      const pdf = document.getElementById('pdf');
      const pdfName = document.getElementById('pdfName');
      const pdfLabel = document.getElementById('pdfLabel');
      const pdfUploader = document.querySelector('.pdf-uploader');

      pdfUploader.addEventListener('click', function() {
        pdf.click();
      });

      pdf.addEventListener('change', function(event) {
        const file = event.target.files[0];
        if (file) {
          const fileType = file.type;
          const validFileType = 'application/pdf';

          if (fileType === validFileType) {
            pdfName.textContent = file.name;
            pdfName.style.display = 'block';
            pdfLabel.style.display = 'none';
          } else {
            alert('Please upload a valid PDF file.');
            pdf.value = ''; // Clear the input
          }
        }
      });

      pdfName.addEventListener('click', function() {
        pdf.value = ''; // Clear the input to allow re-upload
        pdfLabel.style.display = 'block'; // Show the label again
        pdfName.style.display = 'none'; // Hide the PDF name
        pdfUploader.click(); // Trigger file input click
      });
    });
  </script>



  <!-- CKEditor 5 CDN -->
  <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>

  <!-- Initialize CKEditor -->
  <script>
    let editorInstance;

    ClassicEditor
      .create(document.querySelector('#editor'), {
        toolbar: ['bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote']
      })
      .then(editor => {
        editorInstance = editor;
      })
      .catch(error => {
        console.error('Error initializing CKEditor:', error);
      });
  </script>

</body>

</html>