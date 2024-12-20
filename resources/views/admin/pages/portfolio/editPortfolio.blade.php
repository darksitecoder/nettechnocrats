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
  <link rel="shortcut icon" href="img/icons/icon-48x48.png" />

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
  </style>
</head>

<body>
  <div class="wrapper">

    @include('admin/partials/left_sidebar')

    <div class="main">

      @include('admin/partials/header')

      <main class="content">
        <div class="container-fluid p-0">
          <form id="portfolioForm" action="{{ url('/savePortfolioForAdminApi') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <span class="text" id="success_msg" style="font-size:13px;"></span>

            <!-- Form Content -->
            <div class="d-flex justify-content-between mb-4 mt-4">
              <h1 class="h3 mb-3"><strong>Add Portfolio</strong></h1>

              <div class="buttons">
                <input type="button" class="mx-3 btn save" name="status" value="save" />
                <input type="button" class="btn published" name="status" value="publish" />
              </div>
            </div>

            <input type="text" name="portfolio_no" id="portfolio_no" value="{{$newPortfolioNo}}" />
            <input type="hidden" name="page_type" value="update">
            <span class="text-danger" id="portfolio_no_err" style="font-size:13px;"></span>


            <!-- category_1 Input Section -->
            <div class="row pt-1 my-3 d-flex justify-content-center">
              <div class="col-md-12 stretch-card grid-margin">
                <select id="category_1" name="category_1">
                  <option value="">-Select Category 1-</option>
                  <option value="Digital_Marketing">Digital Marketing</option>
                  <option value="Software_Development">Software Development</option>
                </select>
              </div>
              <span class="text-danger" id="category_1_err" style="font-size:13px;"></span>
            </div>

            <!-- category_2 Input Section -->
            <div class="row pt-1 my-3 d-flex justify-content-center">
              <div class="col-md-12 stretch-card grid-margin">
                <select id="category_2" name="category_2">
                  <option value="">-Select Category 2-</option>
                  <!-- Options for Digital Marketing -->
                  <option data-parent="Digital_Marketing" value="SEO">SEO</option>
                  <option data-parent="Digital_Marketing" value="SMO">SMO</option>
                  <option data-parent="Digital_Marketing" value="PPC">PPC</option>
                  <option data-parent="Digital_Marketing" value="ORM">ORM</option>
                  <option data-parent="Digital_Marketing" value="AEO">AEO</option>
                  <option data-parent="Digital_Marketing" value="Local SEO">Local SEO</option>
                  <option data-parent="Digital_Marketing" value="SEO Reseller">SEO Reseller</option>

                  <!-- Options for Software Development -->
                  <option data-parent="Software_Development" value="Customer Software Development">Customer Software Development</option>
                  <option data-parent="Software_Development" value="ERP Software Development">ERP Software Development</option>
                  <option data-parent="Software_Development" value="CRM Development">CRM Development</option>
                  <option data-parent="Software_Development" value="Salesforce Development">Salesforce Development</option>
                  <option data-parent="Software_Development" value="Iot">Iot</option>
                </select>
              </div>
              <span class="text-danger" id="category_2_err" style="font-size:13px;"></span>
            </div>
            <!-- Image Upload Section -->
            <div class="row pt-3 d-flex justify-content-center">
              <div class="col-md-12 stretch-card grid-margin d-flex flex-column">
                <div class="image-uploader">
                  <input type="file" id="image" name="image" accept="image/*" style="display: none;">
                  <div class="upload-container">
                    <label for="image" id="imageLabel">Upload Image</label>
                    <img id="uploadedImage" src="{{ asset( 'public/' . $Blogs[0]->image) }}" alt="Uploaded Image" style="display: block;">
                  </div>
                </div>
              </div>

              <span class="text-danger" id="image_err" style="font-size:13px;"></span>
            </div>


            <!-- Heading Input Section -->
            <div class="row pt-1 my-3 d-flex justify-content-center">
              <!-- Display Heading Validation Error -->
              <div class="col-md-12 stretch-card grid-margin">
                <input type="text" id="heading" name="heading" class="blog__heading" value="{{$Blogs[0]->heading}}" placeholder="Enter Heading Here...">
              </div>
              <span class="text-danger" id="heading_err" style="font-size:13px;"></span>
            </div>

            <div class="row pt-1 my-3 d-flex justify-content-center">
              <!-- Display company_name Validation Error -->
              <div class="col-md-12 stretch-card grid-margin">
                <input type="text" id="company_name" name="company_name" class="blog__company_name" value="{{$Blogs[0]->company_name}}" placeholder="Enter Company Name">
              </div>
              <span class="text-danger" id="company_name_err" style="font-size:13px;"></span>
            </div>

            <!-- Content Textarea Section -->
            <div class="row pt-1 d-flex justify-content-center">
              <!-- Display Content Validation Error -->
              <div class="col-md-12 stretch-card grid-margin blog__content">
                <textarea name="content" id="editor">{{$Blogs[0]->content}}</textarea>
              </div>
              <span class="text-danger" id="content_err" style="font-size:13px;"></span>
            </div>


            <div id="showTableTR" style="display: none;">
              <div class="table-responsive">
                <table class="table" id="table" style="border: none;">
                  <thead>
                    <tr>
                      <th>Sr. No.</th>
                      <th>Keywords</th>
                      <th>Rating Before</th>
                      <th>Rating After</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- Hidden Template Row -->
                    @foreach($Blogs as $index => $data)
                      <tr class="hidden" id="template-row">
                        <td>
                          <input type="number" min="1" class="lastPOS" name="inputs[{{ $index }}][POS]" value="{{$data->POS}}" placeholder="#" /><br>
                          <span class="msg_err" id="POS_0_err" style="color: red; font-size: 13px;"></span>
                        </td>
                        <td>
                          <input type="text" name="inputs[{{ $index }}][Keywords]" value="{{$data->Keywords}}" placeholder="Enter Keyword" />
                          <br><span class="msg_err" id="Keywords_0_err" style="color: red; font-size: 13px;"></span>
                        </td>
                        <td>
                          <input type="number" min="0" name="inputs[{{ $index }}][RatingBefore]" value="{{$data->RatingBefore}}" placeholder="Enter Rating Before" />
                          <br><span class="msg_err" id="RatingBefore_0_err" style="color: red; font-size: 13px;"></span>
                        </td>
                        <td>
                          <input type="number" min="0" name="inputs[{{ $index }}][RatingAfter]" value="{{$data->RatingAfter}}" placeholder="Enter Rating After" />
                          <br><span class="msg_err" id="RatingAfter_0_err" style="color: red; font-size: 13px;"></span>
                        </td>
                        <td>
                          <button type="button" class="remove-table-row">Delete &nbsp;<i class="fa-solid fa-trash-can"></i></button>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <br>
              <!-- Add Row Button -->
              <button id="add" type="button" name="add" class="head__foot__btn" style="width: 50%;">
                Add New&nbsp;<img src="{{ asset('assets/frontEnd/web/images/icons/add-circled-outline.svg') }}" alt="Add Icon" class="logo-img">
              </button>
            </div>

          </form>
        </div>
      </main>

      @include('admin/partials/footer')

    </div>
  </div>

  <script src="{{ asset('dashboard_theme/js/app.js') }}"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- jQuery Script -->
  <script>
    // $(document).ready(function() {
    //   // On change of category_1
    //   $('#category_1').change(function() {
    //     let selectedCategory = $(this).val();

    //     // Reset category_2 dropdown
    //     jQuery('.text-danger').empty();
    //     $('#category_2').val('');
    //     $('#category_2 option').hide(); // Hide all options first
    //     $('#showTableTR').hide();

    //     if (selectedCategory) {
    //       // Show only the options that match the selected category_1
    //       $('#category_2 option[data-parent="' + selectedCategory + '"]').show();
    //     } else {
    //       // Show default placeholder option if nothing is selected
    //       $('#category_2 option[value=""]').show();
    //     }

    //     if (selectedCategory == 'Digital_Marketing') {
    //       $('#showTableTR').show();
    //     }
    //   });

    //   // Trigger change event on page load to hide irrelevant options
    //   $('#category_1').trigger('change');
    // });

    $(document).ready(function() {
        // Pre-selected values
        const selectedCategory1 = '{{ $Blogs[0]->category_1 ?? "" }}';
        const selectedCategory2 = '{{ $Blogs[0]->category_2 ?? "" }}';

        if (selectedCategory1 == 'Digital_Marketing') {
          $('#showTableTR').show();
        }

        // Initialize dropdowns on page load
        function initializeDropdowns() {
          if (selectedCategory1) {
            $('#category_1').val(selectedCategory1).trigger('change');
          }
          if (selectedCategory2) {
            $(`#category_2 option[value="${selectedCategory2}"]`).prop('selected', true);
          }
        }

        // On change of category_1
        $('#category_1').on('change', function() {
          const selectedCategory = $(this).val();
          $('#showTableTR').hide();

          if (selectedCategory == 'Digital_Marketing') {
            $('#showTableTR').show();
          }

          // Reset category_2
          $('#category_2').val('');
          $('#category_2 option').hide();
          $('#category_2 option[value=""]').show(); // Show placeholder option

          if (selectedCategory) {
            // Show options that match the selected category_1
            $(`#category_2 option[data-parent="${selectedCategory}"]`).show();
          }
        });

        // Trigger initialization
        initializeDropdowns();
      });
  </script>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      let rowCount = 0; // To track row index

      // Add New Row
      document.getElementById("add").addEventListener("click", function() {
        rowCount++;
        const tableBody = document.querySelector("#table tbody");
        const templateRow = document.getElementById("template-row");

        // Clone the hidden template row and make it visible
        const newRow = templateRow.cloneNode(true);
        newRow.classList.remove("hidden");

        // Clear input values and update names, IDs, and values dynamically
        clearAndUpdateRowAttributes(newRow, rowCount);

        // Append the new row to the table
        tableBody.appendChild(newRow);
        resetNumbering(); // Reset numbering after adding
      });

      // Remove Row
      document.addEventListener("click", function(event) {
        if (event.target.classList.contains("remove-table-row")) {
          // Confirm before deleting
          if (confirm("Are you sure you want to delete this row?")) {
            event.target.closest("tr").remove();
            resetNumbering(); // Reset numbering after removal
          }
        }
      });

      // Function to clear and update row attributes dynamically
      function clearAndUpdateRowAttributes(row, index) {
        row.querySelectorAll("input, span, select").forEach((element) => {
          if (element.tagName === "INPUT") {
            element.value = ""; // Clear input fields
          } else if (element.tagName === "SELECT") {
            element.selectedIndex = 0; // Reset select to default value
          } else if (element.tagName === "SPAN") {
            element.textContent = ""; // Clear span content
          }

          if (element.hasAttribute("name")) {
            let newName = element.getAttribute("name").replace(/\[\d+\]/, `[${index}]`);
            element.setAttribute("name", newName);
          }

          if (element.hasAttribute("id")) {
            let newId = element.getAttribute("id").replace(/_\d+/, `_${index}`);
            element.setAttribute("id", newId);
          }

          if (element.hasAttribute("onkeyup")) {
            let newOnkeyup = element
              .getAttribute("onkeyup")
              .replace(/\('\d+'\)/, `('${index}')`);
            element.setAttribute("onkeyup", newOnkeyup);
          }

          if (element.classList.contains("lastPOS")) {
            element.value = index + 1; // Update Sr. No.
          }
        });
      }

      // Reset numbering function
      function resetNumbering() {
        document.querySelectorAll("#table tbody tr").forEach((row, index) => {
          row.querySelector(".lastPOS").value = index + 1; // Update Sr. No.

          row.querySelectorAll("input, span").forEach((element) => {
            if (element.hasAttribute("name")) {
              let updatedName = element
                .getAttribute("name")
                .replace(/\[\d+\]/, `[${index}]`);
              element.setAttribute("name", updatedName);
            }

            if (element.hasAttribute("id")) {
              let updatedId = element.getAttribute("id").replace(/_\d+/, `_${index}`);
              element.setAttribute("id", updatedId);
            }
          });
        });
      }
    });
  </script>

  <script>
    const childElement = document.querySelector('.portfolio');
    childElement.classList.add('active');
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


  <script>
    $(document).ready(function() {
      // Handle form submission for "Save"
      $(".save, .published").on("click", function(e) {
        // alert('hi');
        jQuery('.text-danger').empty();
        e.preventDefault(); // Prevent default form submission


        // Detect the clicked button's status
        let status = $(this).val();

        // Serialize form data
        let formData = new FormData($("#portfolioForm")[0]);
        const content = editorInstance.getData();
        // Add status manually for "Save"
        formData.append("status", status); // Append status dynamically
        formData.append('content', content);
        console.log(formData);
        // AJAX request
        $.ajax({
          url: "{{ url('/savePortfolioForAdminApi') }}", // Laravel route
          type: "POST",
          data: formData,
          contentType: false,
          processData: false,
          headers: {
            "X-CSRF-TOKEN": "{{ csrf_token() }}" // CSRF Token for Laravel
          },
          beforeSend: function() {
            // Optional: Show a loader or disable buttons
            if (status === 'save') {
              message = 'Saving';
            } else if (status === 'publish') {
              message = 'Publishing';
            }

          },
          success: function(response) {
            // Show success alert
            $("#success_msg").html(response.success).show();
            $(".alert-danger").hide();
          },
          error: function(response) {
            // Show error alert
            let errors = response.responseJSON.errors || {};

            $.each(errors, function(field, messages) {
              // Append error messages to your HTML
              $('#' + field + '_err').text(messages[0]);

              // Extract the index and field name from the error key
              var parts = field.split('.');
              var index = parts[1];
              var fieldName = parts[2];
              // Construct the error span ID dynamically
              var errorSpanId = '#' + fieldName + '_' + index + '_err';
              // Set the error message
              $(errorSpanId).text(fieldName + ' is required');
              // $(errorSpanId).text(messages[0]);
            });
          },
          complete: function() {
            $(".save").attr("disabled", false); // Re-enable save button
          }
        });
      });
    });
  </script>
</body>

</html>