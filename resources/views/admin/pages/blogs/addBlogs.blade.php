<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Add Blog</title>
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css" />
  <script src="https://kit.fontawesome.com/e1528f4468.js" crossorigin="anonymous"></script>
  <!-- Fonts -->
  <link rel="icon" href="{{ asset('assets/frontEnd/web/images/favicon.ico') }}" type="image/x-icon" />
  <link rel="shortcut icon" href="{{ asset('assets/frontEnd/web/images/favicon.ico') }}" type="image/x-icon" />
  <link rel="stylesheet" href="{{ asset('/assets/select2/select2.min.css') }}">
  <link rel="stylesheet" href="{{ asset('theme/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('theme/assets/vendors/css/vendor.bundle.base.css') }}">
  <link rel="stylesheet" href="{{ asset('theme/assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('theme/assets/images/favicon.ico') }}">
  <link rel="stylesheet" href="{{ asset('style/admin-style/add-edit-style.css') }}">



  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

  <style>
    * {
      margin: 0;
      padding: 0;
    }


    .blogdetails a {
      color: #44e1d5 !important;
      background-color: #121315 !important;
      border: none;
      border-radius: 5px;
      margin-top: 1px;
      text-align: center;
      border-right: 5px solid #44e1d5;
      /* Initial border */
      text-wrap: wrap !important;
    }

    .contact-show p {
      line-height: 10px;
      font-size: 14px;
    }

    .transform-hover {
      height: 150px;
      object-fit: cover;
      transition: transform 0.3s ease;
      /* You can adjust the scale value for the desired zoom effect */

    }

    .transform-hover:hover {
      transform: scale(1.1);
      cursor: pointer;
    }


    .btn {
      /* background-color: #54606c; */
      border: 1px solid #404040;
      color: #404040;
      padding: 10px 14px;
      text-decoration: none;
      border-radius: 5px;


    }

    .btn:hover {
      background-color: #404040;
      color: #fff;
    }

    .close {
      color: #404040;
    }

    .stretch-card {
      font-size: 13px;
    }

    .table thead tr th {
      width: 200px;
      background-color: #404040;
      color: #fff;
      border: none;
      padding: 2px;
    }

    table tr td {
      padding: 10px 2px;
      width: 200px;
      font-size: 14px;
    }

    table tr td input {
      width: 100%;
      border: none;
      background-color: transparent;
    }

    table tr td a {
      color: #404040;
    }

    .dynamic-field {
      width: 100%;
      background: transparent;
      border: 1px solid #8F8C8C;
      border-radius: 5px;
    }

    .showButton {
      width: 250px;
      background: transparent;
      border: 1px solid #8F8C8C;
      border-radius: 5px;
    }

    a {
      color: #54606c;
    }

    .table th,
    .table td {
      font-size: 0.85rem;
      padding: -0.0625rem;
    }

    .details {
      display: flex;
      width: 100%;
      justify-content: space-between;
    }

    .details input {
      width: 250px;
    }

    .details input select {
      width: 250px !important;
    }

    @media (min-width: 481px) and (max-width: 767px) {
      .details input {
        width: 170px;
      }
    }

    .slide-in-blurred-top {
      -webkit-animation: slide-in-blurred-top 0.6s cubic-bezier(0.230, 1.000, 0.320, 1.000) 0.5s both;
      animation: slide-in-blurred-top 0.6s cubic-bezier(0.230, 1.000, 0.320, 1.000) 0.5s both;
    }

    #guessCompanyName {
      max-height: 110px;
      overflow: auto;
      transition: 0.6s ease-in-out;
      position: absolute;
      width: 250px;
      /* overflow-x: hidden;
    overflow-y: scroll; */
    }

    #guessCompanyName ul {
      display: contents;
      transition: 0.6s ease-in-out;
    }

    #guessCompanyName ul li {
      background-color: #fff;
      list-style-type: none;
      border-radius: 3px;
      margin: 3px 0px;
      padding: 0px 10px;
      cursor: pointer;
      font-weight: 600;
      transition: 0.6s ease-in-out;
    }

    @-webkit-keyframes slide-in-blurred-top {
      0% {
        -webkit-transform: translateY(-1000px) scaleY(2.5) scaleX(0.2);
        transform: translateY(-1000px) scaleY(2.5) scaleX(0.2);
        -webkit-transform-origin: 50% 0%;
        transform-origin: 50% 0%;
        -webkit-filter: blur(40px);
        filter: blur(40px);
        opacity: 0;
      }

      100% {
        -webkit-transform: translateY(0) scaleY(1) scaleX(1);
        transform: translateY(0) scaleY(1) scaleX(1);
        -webkit-transform-origin: 50% 50%;
        transform-origin: 50% 50%;
        -webkit-filter: blur(0);
        filter: blur(0);
        opacity: 1;
      }
    }

    @keyframes slide-in-blurred-top {
      0% {
        -webkit-transform: translateY(-1000px) scaleY(2.5) scaleX(0.2);
        transform: translateY(-1000px) scaleY(2.5) scaleX(0.2);
        -webkit-transform-origin: 50% 0%;
        transform-origin: 50% 0%;
        -webkit-filter: blur(40px);
        filter: blur(40px);
        opacity: 0;
      }

      100% {
        -webkit-transform: translateY(0) scaleY(1) scaleX(1);
        transform: translateY(0) scaleY(1) scaleX(1);
        -webkit-transform-origin: 50% 50%;
        transform-origin: 50% 50%;
        -webkit-filter: blur(0);
        filter: blur(0);
        opacity: 1;
      }
    }

    .icons-img {
      width: 40px;
      height: 60px;
      transition: 0.5s ease-in-out;
    }

    .icons-img:hover {
      filter: drop-shadow(3px 2px 1px #54606c);
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
      border: 1px solid var(--white);
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
  </style>
</head>

<body>
  <div class="container-scroller">
    <div class="row p-0 m-0 proBanner" id="proBanner">
      <div class="col-md-12 p-0 m-0">
        {{-- <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/purple-bootstrap-admin-template/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/purple-bootstrap-admin-template/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div> --}}
      </div>
    </div>
  </div>



  @include('admin_theme/Partial/navbar')
  <!-- partial -->
  <div class="container-fluid page-body-wrapper" style="padding:0; margin:0;">


    @include('admin_theme/Partial/sidebar')



    <!-- partial -->
    <div class="main-panel">
      <div class="content-wrapper">

        <div class="" style="padding-bottom:10px;   margin-top:-1.5rem;">
          @include('admin_theme/Partial/admin_header')
          <button class="navbar-toggler" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>

        </div>

        <div class="row pt-3">
          <button class="add_new_btn mx-3" type="button" id="saveBtn" style="width:auto;">Save &nbsp; <i class="far fa-bookmark"></i></button>
          <button type="button" class="send__btn" id="publishBtn" style="width:auto;">Published &nbsp;<i class="far fa-paper-plane"></i></button>
          <!-- <a class="" href="" style="text-decoration:none; width:auto;"><button class="add_new_btn" type="button">Archive</button></a> -->
        </div>

        <div class="row pt-3">
        </div>

        <form id="AddBlogForm">

          <div class="row pt-3 d-flex justify-content-center">
            <div class="col-md-6 stretch-card grid-margin d-flex flex-column">
              <div class="image-uploader">
                <input type="file" id="image" accept="image/*" style="display: none;">
                <div class="upload-container">
                  <label for="image" id="imageLabel">Upload Image</label>
                  <img id="uploadedImage" src="" alt="Uploaded Image" style="display: none;">
                </div>
              </div>
              <span class="msg_err" id="image_err" style="color:red;  font-size:13px;"></span>
            </div>

            <div class="col-md-6 stretch-card grid-margin d-flex flex-column">
              <div class="video-uploader">
                <input type="file" id="video" accept="video/mp4,video/quicktime" style="display: none;">
                <div class="upload-container">
                  <label for="video" id="videoLabel">Upload Video</label>
                  <video id="uploadedVideo" controls style="display: none;"></video>
                </div>
              </div>
              <span class="msg_err" id="video_err" style="color:red;  font-size:13px;"></span>
            </div>
          </div>

          <div class="row pt-1 d-flex justify-content-center">
            <div class="col-md-12 stretch-card grid-margin">
              <div class="pdf-uploader">
                <span class="msg_err" id="pdf_err" style="color:red;  font-size:13px;"></span>
                <input type="file" id="pdf" accept="application/pdf" style="display: none;">
                <div class="upload-container">
                  <label for="pdf" id="pdfLabel">Upload PDF</label>
                  <p id="pdfName" style="display: none;"></p>
                </div>
              </div>
            </div>
          </div>

          <div class="row pt-1 d-flex justify-content-center">
            <span class="msg_err" id="topic_err" style="color:red;  font-size:13px;"></span>
            <div class="col-md-12 stretch-card grid-margin">
              <select name="topic" id="topic"></select>
            </div>
          </div>


          <div class="row pt-1 d-flex justify-content-center">
            <span class="msg_err" id="heading_err" style="color:red;  font-size:13px;"></span>
            <div class="col-md-12 stretch-card grid-margin">
              <input type="text" id="heading" class="blog__heading" placeholder="Enter Heading Here...">
            </div>
          </div>


          <div class="row pt-1 d-flex justify-content-center">
            <span class="msg_err" id="content_err" style="color:red;  font-size:13px;"></span>
            <div class="col-md-12 stretch-card grid-margin blog__content">
              <textarea name="content" id="editor"></textarea>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  </div>
  <!-- main-panel ends -->
  </div>
  <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->


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


  <script type="text/javascript" src="{{ asset('js/admin/common.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/select2/select2.min.js') }}"></script>
  <!-- <script type="text/javascript" src="{{ asset('theme/assets/vendors/js/vendor.bundle.base.js') }}"></script> -->
  <script type="text/javascript" src="{{ asset('theme/assets/vendors/chart.js/Chart.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('theme/assets/js/jquery.cookie.js') }}"></script>
  <script type="text/javascript" src="{{ asset('theme/assets/js/off-canvas.js') }}"></script>
  <script type="text/javascript" src="{{ asset('theme/assets/js/hoverable-collapse.js') }}"></script>
  <!-- <script type="text/javascript" src="{{ asset('theme/assets/js/misc.js') }}"></script> -->

  <script type="text/javascript" src="{{ asset('theme/assets/js/dashboard.js') }}"></script>
  <script type="text/javascript" src="{{ asset('theme/assets/js/todolist.js') }}"></script>
  </script>





</body>
<!-- Handle File Uploaders -->


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



<script>
  $(document).ready(function() {
    var topic = jQuery('#topic');
    topic.select2();
    var baseUrl = window.location.origin;
    var token = localStorage.getItem('authToken');

    if (!token) {
      console.error('Token not found in localStorage');
      window.location.href = '/';
    }

    // Fetch Blog Topics
    $.ajax({
      url: baseUrl + '/fetchBlogTopicApi',
      method: 'GET',
      dataType: 'json',
      headers: {
        'Authorization': 'Bearer ' + token,
      },
      success: function(response) {

        console.log('Blog Topics:', response.data);
        topic.append('<option value="">-- Select Blog Topics --</option>');
        $.each(response.data, function(index, item) {
          if (item.topic) {
            var options = '<option value="' + item.topic + '">' + item.topic + '</option>';
          }
          topic.append(options);
        });
      },
    });
  });
</script>


<!-- AJAX Form Submission -->
<script>
  $(document).ready(function() {
    // Function to handle form submission via AJAX
    function submitForm(status) {


      var $statusBtn = $('#' + status + 'Btn');
      var sendBtnHtml = $statusBtn.html();

      var token = localStorage.getItem('authToken');
      console.log(token);

      // Check if the token exists
      if (!token) {
        console.error('Token not found in localStorage');
        window.location.href = '/';
        return; // exit the function if token is not present
      }


      $('.msg_err').text('');
      // Check if CKEditor instance is ready
      if (!editorInstance) {
        alert('Editor is not ready yet. Please try again.');
        return;
      }

      // Get the CKEditor content
      const content = editorInstance.getData();

      // Create FormData object
      const formData = new FormData();
      formData.append('topic', $('#topic').val());
      formData.append('heading', $('#heading').val());
      formData.append('content', content);

      // Get files
      const imageFile = $('#image')[0].files[0];
      const videoFile = $('#video')[0].files[0];
      const pdfFile = $('#pdf')[0].files[0];

      if (imageFile) {
        formData.append('image', imageFile);
      }
      if (videoFile) {
        formData.append('video', videoFile);
      }
      if (pdfFile) {
        formData.append('pdf', pdfFile);
      }

      // Append status (save or publish)
      formData.append('status', status); // Optional: if you want to differentiate between save and publish


      console.log(formData);

      // AJAX request
      $.ajax({
        url: '/saveBlogsForAdminApi',
        type: 'POST',
        data: formData,
        processData: false, // Important for file uploads
        contentType: false, // Important for file uploads
        headers: {
          'Authorization': 'Bearer ' + token, // include the token in the headers
        },
        beforeSend: function() {
          // Optional: Show a loader or disable buttons
          if (status === 'save') {
            message = 'Saving';
          } else if (status === 'publish') {
            message = 'Publishing';
          }
          $statusBtn.prop('disabled', true);
          $statusBtn.html(`${message} &nbsp;<i class="fas fa-spinner fa-spin"></i>`);
        },
        success: function(response) {
          // Handle success
          // Optionally, reset the form
          if (response.status == '1') {
            $('#AddBlogForm')[0].reset();
            editorInstance.setData('');
            $('#uploadedImage, #uploadedVideo').hide();
            $('#imageLabel, #videoLabel, #pdfLabel').show();
            $('#pdfName').hide();

            iziToast.show({
              title: '',
              message: response.message,
              position: 'topRight',
              backgroundColor: '#44e1d5',
              borderColor: '#44e1d5',
              borderWidth: '2px', // Example border width
              borderRadius: '10px', // Example border radius
              titleSize: '18px', // Example font size for title
              messageSize: '16px', // Example font size for message
              messageFontWeight: 'bold',
              timeout: 5000 // Example timeout to close the toast automatically after 5 seconds
            });
          }


          if (response.status == '0') {
            iziToast.show({
              title: '',
              message: response.message,
              position: 'topRight',
              backgroundColor: 'red',
              borderColor: '#44e1d5',
              borderWidth: '2px', // Example border width
              borderRadius: '10px', // Example border radius
              titleSize: '18px', // Example font size for title
              messageSize: '16px', // Example font size for message
              messageFontWeight: 'bold',
              timeout: 5000 // Example timeout to close the toast automatically after 5 seconds
            });
          }
        },
        error: function(xhr, status, error) {
          // Handle errors
          if (xhr.status === 422) {

            let errors = xhr.responseJSON.errors;
            console.log(errors);
            $.each(errors, function(field, messages) {
              $('#' + field + '_err').text(messages[0]);
            });
          } else {
            // Other errors
            iziToast.show({
              title: '',
              message: `Internal server error.`,
              position: 'topRight',
              backgroundColor: 'red',
              borderColor: '#44e1d5',
              borderWidth: '2px', // Example border width
              borderRadius: '10px', // Example border radius
              titleSize: '18px', // Example font size for title
              messageSize: '16px', // Example font size for message
              messageFontWeight: 'bold',
              timeout: 5000 // Example timeout to close the toast automatically after 5 seconds
            });
          }
        },
        complete: function() {
          // Re-enable buttons
          $('#saveBtn, #publishBtn').prop('disabled', false);
          $statusBtn.html(sendBtnHtml);
        }
      });
    }

    // Handle Save button click
    $('#saveBtn').on('click', function(e) {
      e.preventDefault();
      submitForm('save');
    });

    // Handle Publish button click
    $('#publishBtn').on('click', function(e) {
      e.preventDefault();
      submitForm('publish');
    });
  });
</script>

</html>