<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Review Listing</title>
  <!-- plugins:css -->

  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="icon" href="{{ asset('assets/frontEnd/web/images/favicon.ico') }}" type="image/x-icon" />
  <link rel="shortcut icon" href="{{ asset('assets/frontEnd/web/images/favicon.ico') }}" type="image/x-icon" />
  <!-- Fonts -->
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css" />
  <script src="https://kit.fontawesome.com/e1528f4468.js" crossorigin="anonymous"></script>
  <!-- Fonts -->

  <link rel="stylesheet" href="{{ asset('theme/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('theme/assets/vendors/css/vendor.bundle.base.css') }}">
  <link rel="stylesheet" href="{{ asset('theme/assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('theme/assets/images/favicon.ico') }}">

  <link rel="stylesheet" href="{{ asset('style/admin-style/common.css') }}">
  <link rel="stylesheet" href="{{ asset('style/admin-style/listing-style.css') }}">
  <style>
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

    .close {
      color: #404040;
    }

    .row .col {
      font-size: 14px;
    }

    table tr th {
      width: 200px;
      font-weight: 400 !important;
    }

    table tr td {
      padding: 10px 2px;
      width: 200px;
      height: 50px;
      font-size: 14px;
    }

    table tr td a {
      color: #54606c;
    }

    .blogcomment a {
      color: #44e1d5 !important;
      background-color: #121315 !important;
      border: none;
      border-radius: 5px;
      margin-top: 1px;
      text-align: center;
      border-right: 5px solid #44e1d5;
      /* Initial border */
      /* text-wrap:wrap !important; */
    }

    #pagination .page-link {
      color: #404040;
      border: 2px solid #fff;
      font-weight: 600;
      padding: 10px 15px;
      margin-left: 10px;
    }

    .deleteButton {
      background-color: red;
      color: #fff;
      padding: 5px 10px;
      border: none;
      border-radius: 5px;
      font-size: 18px;
      transition: 0.5s ease-in-out;
    }

    .deleteButton:hover {
      background-color: transparent;
      color: red;
    }

    .history {
      background-color: #44e1d5;
      color: #fff;
      padding: 5px 10px;
      border: none;
      border-radius: 5px;
      font-size: 18px;
      transition: 0.5s ease-in-out;
    }

    .history:hover {
      background-color: transparent;
      color: #44e1d5;
    }

    .price__history h4 {
      /* font-weight:700; */
      background-color: #191a1c;
      box-shadow: rgb(69 69 69 / 24%) 0px 3px 8px;
      width: 54%;
      padding: 10px 5px;
      border-radius: 5px;
    }

    .price__history p {
      font-weight: 500;
    }

    .price__history p span {
      color: #44e1d5;
      font-size: 18px;
      font-weight: 900 !important;
    }


    /*  */


    #g-modal-add-delivery-address {
      background: #0000008a !important;
      opacity: 1.1 !important;
    }

    .modal-content {
      background: black !important;
      border: 1px #444444 solid !important;
      border-radius: 20px !important;
      width: 500px;
    }

    .g-modal-add-delivery-address-footer,
    .g-modal-import-customer-csv-footer {
      background: #44e1d5 !important;
      color: #282E36 !important;
      border-radius: 10px;
      height: 40px;
      font-size: 16px;
      font-weight: 500 !important;
    }

    .btn-close,
    .btn-close:hover,
    .g-modal-import-customer-csv-close,
    .g-modal-import-customer-csv-close:hover {
      border: 2px #B0C5E2 solid;
      color: #B0C5E2;
      border-radius: 13px;
      height: min-content;
    }

    .g-modal-border-icon {
      border: 1px #282E36 solid !important;
      border-radius: 10px !important;
      background: black;
    }

    .g-cursor-pointer {
      cursor: pointer !important;
    }

    .g-modal-import-customer-drag-drop-file {
      background: #16181e;
    }

    .g-modal-import-customer-drag-drop-file-chield {
      padding: 5% 15% !important;
    }

    .g-modal-import-customer-drag-drop-file-text {
      font-size: 16px !important;
      font-weight: 400 !important;
      line-height: 19.09px !important;
    }

    .modal-header {
      border-bottom: 1px solid #444444 !important;
      color: #fff !important;
    }

    .modal-footer {
      border-top: 1px solid #444444 !important;
    }

    .g-modal-import-customer-drag-drop-file-icone {
      border-radius: 10px;
      border: 1px #586371 solid;
      padding: 2%;
      background: black;
    }

    .g-modal-import-customer-drag-drop-file-span {
      font-size: 14px;
      font-weight: 400;
      line-height: 16.71px;
      color: #b0c5e2;
    }

    .modal-body textarea {
      /* background: #191a1c !important; */
      border: 1px #444444 solid !important;
      border-radius: 10px !important;
      color: #ffff;
    }

    .modal-body input {
      /* background: #191a1c !important; */
      border: 1px #444444 solid !important;
      border-radius: 10px !important;
      color: #ffff;
    }

    .modal-body label {
      color: #ffff;
      font-size: 16px !important;
    }

    .modal-body table tr th,
    td {
      color: #ffff;
      font-size: 16px !important;
      background-color: transparent !important;
    }

    .modal-body table tr {
      border: none !important;
    }

    .modal-body p,
    pre {
      color: #ffff;
      font-size: 16px !important;
      word-wrap: break-word;
    }

    .status {
      color: var(--white);
      background-color: rgba(191, 0, 0, 0.5);
      border: 1px solid red;
      border-radius: 20px;
      padding: 2px 10px;
    }
  </style>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>

<body>
  <div class="container-scroller">
    <div class="row p-0 m-0 proBanner" id="proBanner">
      <div class="col-md-12 p-0 m-0">
        {{-- <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <!-- <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p> -->
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
  <div class="container-fluid page-body-wrapper">


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

          <div class="col-md-8 stretch-card grid-margin" style="font-size:20px; display:flex; align-items:center;">
            All Reviews
          </div>
          <div class="col-md-4  stretch-card grid-margin d-flex justify-content-end" style="text-align:right">
            <input type="text" id="filterNo" placeholder="Search" style="padding:5px 10px; outline:none; border:none; border-radius:5px; ">
          </div>
        </div>

        <div class="container responsive">
          <table id="dataTable">
            <thead>
              <tr style="border:none;">
                <th><i class="fa-solid fa-magnifying-glass"></i><input type="text" class="partial-search" data-search="userId" placeholder="BLOG Id"></th>
                <th><i class="fa-solid fa-magnifying-glass"></i><input type="text" class="partial-search" data-search="created_at" placeholder="CUST. No."></th>
                <th><i class="fa-solid fa-magnifying-glass"></i><input type="text" class="partial-search" data-search="userName" placeholder="CUST. Name"></th>
                <th><i class="fa-solid fa-magnifying-glass"></i><input type="text" class="partial-search" data-search="rating" placeholder="Date"></th>
                <th><i class="fa-solid fa-magnifying-glass"></i><input type="text" class="partial-search" data-search="showStatus" placeholder="Status"></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <!-- <td>BL-485</td>
                <td>1005</td>
                <td>Ramesh</td>
                <td>20/02/2025</td>
                <td><span class="status">Show</span></td>
                <td><a class="add_new_btn " data-bs-toggle="modal" data-bs-target="#viewcommentModal"><i class="fa-regular fa-eye"></i> &nbsp;View Comment</a></td> -->
              </tr>
            </tbody>
          </table>
        </div>
        <div id="pagination" class="pagination" style="padding-top: 3rem; color:#404040;"></div>
      </div>
    </div>
  </div>
  </div>

  <!-- partial -->
  </div>
  <!-- main-panel ends -->
  </div>
  <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- Modal -->
  <div class="modal fade" id="viewcommentModal" tabindex="-1" aria-labelledby="viewcommentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="viewcommentModalLabel">Blog and Comment details</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
        </div>
        <div class="modal-body">
          <table class="order-details">
            <tbody>
              <tr>
                <th>Date</th>
                <td>-</td>
                <td class="blankTD" id="BlogDatum">#</td>
              </tr>
              <tr>
                <th>Customer Number</th>
                <td>-</td>
                <td class="blankTD" id="Kundennummer">#</td>
              </tr>
              <tr>
                <th>Customer Name</th>
                <td>-</td>
                <td class="blankTD" id="Kundenname">#</td>
              </tr>
              <tr>
                <th>Blog Id</th>
                <td>-</td>
                <td class="blankTD" id="BlogId">#</td>
              </tr>
              <tr>
                <th>Blog Title</th>
                <td>-</td>
                <td class="blankTD" id="BlogHeading">#</td>
              </tr>
              <tr>
                <th>Blog link</th>
                <td>-</td>
                <td class="blankTD" id="BlogLink">#</td>
              </tr>
            </tbody>
          </table>
          <hr>
          <table class="" style="width: 100%;">
            <thead>
              <tr>
                <th>Comment</th>
              </tr>
              <tr>
                <td>
                  <div class="form-floating">
                    <p class="blankTD" style="height: 100%" id="Comment">#</p>
                  </div>
                </td>
              </tr>
            </thead>
          </table>

        </div>
        <span class="msg_err" id="success_msg" style="color:#44e1d5; font-size:20px; font-weight: 700;"></span>
        <div class="modal-footer d-flex justify-content-between">
          <button type="button" class="remove-table-row" id="commentDelete" data-review-id="">Delete Comment</button>
          <button type="button" class="g-modal-add-delivery-address-footer" id="commentApprove" data-review-id="">Approve Comment</button>
        </div>
      </div>
    </div>
  </div>
  <!-- View Details in Modal -->

  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script>
    // Execute the code when the document is ready
    $(document).ready(function() {
      // Make a GET request using AJAX

      var token = localStorage.getItem('authToken');
      console.log(token);

      if (!token) {
        console.error('Token not found in localStorage');
        window.location.href = '/';
      }

      var currentPage = 1;
      var itemsPerPage = 10;
      var dataList = []; // Store the original data list
      var filteredList = []; // Store the filtered data list

      var url = '/fetchBlogCommentApi/';

      $.ajax({
        url: url, // Replace with the actual endpoint URL
        method: 'GET',
        headers: {
          'Authorization': 'Bearer ' + token,
        },
        success: function(data) {
          // Handle the successful response
          if (data.status) {
            console.log('Data received:', data.success);

            dataList = data.success; // Assign data to dataList
            filteredList = dataList.slice(); // Initialize filtered list with all data
            populateTable(filteredList);
            applyPagination(filteredList);
          } else {
            console.error('No data received or invalid data format');
          }
        },
        error: function(error) {
          // Handle errors
          console.error('Error:', error);
        }
      });

      function populateTable(dataList) {
        var tableBody = $('#dataTable tbody');

        // Clear existing table rows
        tableBody.empty();

        var startIndex = (currentPage - 1) * itemsPerPage;
        var endIndex = Math.min(startIndex + itemsPerPage, dataList.length);

        // Check if dataList is empty
        if (dataList.length === 0) {
          // Display message when no records are found
          tableBody.append('<tr><td colspan="6" style="text-align: center;">No records found</td></tr>');
          return; // Exit the function early
        }

        // Iterate through the data and add rows to the table
        for (var j = startIndex; j < endIndex; j++) {
          var item = dataList[j];
          var row = $('<tr>');
          row.append('<td>' + item.blogId + '</td>');

          // Assuming item.created_at is a valid timestamp string
          var createdAt = new Date(item.created_at); // Create a Date object from the timestamp
          var date = createdAt.toISOString().split('T')[0]; // Get the ISO string and extract the date part

          // Append the date to the table cell
          row.append('<td>' + item.userId + '</td>');
          row.append('<td>' + item.userName + '</td>');
          row.append('<td>' + date + '</td>');
          row.append('<td>' + item.showStatus + '</td>');
          row.append('<td><a class="add_new_btn getOrdersDetails" data-order-id="' + item.id + '" data-bs-toggle="modal" data-bs-target="#viewcommentModal"><i class="fa-regular fa-eye"></i> &nbsp;View Details</a></td>');
          if (item.seen_status == 1) {
            row.append('<td>' + '<h6><span class="badge text-bg-success" style="background-color:green;">New</span></h6>' + '</td>');
          }

          // Add more columns as needed
          // Append the row to the table body
          tableBody.append(row);
        }
      }

      function applyPagination(dataList) {
        var totalPages = Math.ceil(dataList.length / itemsPerPage);
        var pagination = $('#pagination');
        pagination.empty();

        for (var i = 1; i <= totalPages; i++) {
          pagination.append('<button class="page-link" data-page="' + i + '">' + i + '</button>');
        }
      }

      $(document).on('click', '.page-link', function(e) {
        e.preventDefault();
        currentPage = parseInt($(this).data('page'));
        populateTable(filteredList); // Use filtered list for pagination
      });

      $('#filterNo').on('input', function() {
        var filterValue = $(this).val().trim().toLowerCase(); // Get the filter value
        filteredList = dataList.filter(function(item) {
          // Filter based on user ID or other relevant fields
          return item.userId.toString().toLowerCase().includes(filterValue) || item.userName.toLowerCase().includes(filterValue);
        });
        currentPage = 1; // Reset current page to 1 when filtering
        populateTable(filteredList);
        applyPagination(filteredList);
      });

      // Function to filter data based on input in elements with class '.partial-search'
      $('.partial-search').on('input', function() {
        var filterColumn = $(this).attr('data-search');
        var filterValue = $(this).val().trim().toLowerCase(); // Get the filter value
        $('.partial-search').not(this).val(''); // Clear the value of other elements

        filteredList = dataList.filter(function(item) {
          // Check if the "Offen" column matches the filter value
          if (item.hasOwnProperty(filterColumn) && typeof item[filterColumn] === 'string') {
            if (item[filterColumn].toLowerCase().includes(filterValue)) {
              return true;
            }
          }
          return false;
        });
        currentPage = 1; // Reset current page to 1 when filtering
        populateTable(filteredList);
        applyPagination(filteredList);
      });
    });
  </script>


  <script>
    // function for find get orders details by order id
    jQuery(document).on('click', '.getOrdersDetails', function() {
      var comment_id = $(this).data('order-id');
      var baseUrl = window.location.origin;
      jQuery('.blankTD').html('#');
      var token = localStorage.getItem('authToken');
      console.log(token, comment_id);

      // Make a GET request using AJAX
      $.ajax({
        url: baseUrl+'/getCommentDetailsApi', // Replace with the actual endpoint URL
        method: 'GET',
        data: {
          comment_id: comment_id
        },
        headers: {
          'Authorization': 'Bearer ' + token,
        },
        success: function(data) {
          // Handle the successful response
          if (data.status) {
            console.log('Review Details:', data.success);

            // Call the function to populate the table with the initial data
            populateOrderDtl(data.success);

            function populateOrderDtl(data) {
              var createdAt = new Date(data.created_at); // Create a Date object from the timestamp
              var date = createdAt.toISOString().split('T')[0]; // Get the ISO string and extract the date part
              jQuery('#BlogDatum').text(date);
              jQuery('#Kundennummer').text(data.userId);
              jQuery('#Kundenname').text(data.userName);
              jQuery('#BlogId').text(data.blogId);
              jQuery('#BlogHeading').text(data.heading);
              jQuery('#Comment').text(data.comment);
              jQuery('#BlogLink').html(`<a href="${baseUrl}/blogDetails/${data.blogId}" target="_blank">View Blog</a>`);

              jQuery('#commentDelete').attr('data-review-id', data.id);
              jQuery('#commentApprove').attr('data-review-id', data.id);
            }
          } else {
            console.log('Data received:', data.errors);
          }
        },
        error: function(error) {
          // Handle errors
          console.error('Error:', error);
        }
      });
    });

    // function for delete review by review id
    jQuery(document).on('click', '#commentDelete', function() {
      var baseUrl = window.location.origin;

      var $statusBtn = $('#commentDelete');
      var sendBtnHtml = $statusBtn.html();

      var comment_id = $(this).attr('data-review-id');
      var token = localStorage.getItem('authToken');
      $('#success_msg').html('');

      // Make a GET request using AJAX
      $.ajax({
        url: baseUrl+'/deleteCommentApi', // Replace with the actual endpoint URL
        method: 'GET',
        data: {
          comment_id: comment_id
        },
        headers: {
          'Authorization': 'Bearer ' + token,
        },
        beforeSend: function() {
          $statusBtn.prop('disabled', true).html(`Deleting &nbsp;<i class="fas fa-spinner fa-spin"></i>`);
        },
        success: function(data) {
          // Handle the successful response
          console.log('Response :', data);
          if (data.success) {
            // change final status of 
            $('#success_msg').text(data.success);
            setTimeout(() => {
              window.location.reload();
            }, 1500);
          } else {
            console.log('Data received:', data.errors);
          }
        },
        error: function(error) {
          // Handle errors
          console.error('Error:', error);
        },complete: function() {
          $statusBtn.prop('disabled', false).html(sendBtnHtml);
        },
      });
    });



    // function for approve review by review id
    jQuery(document).on('click', '#commentApprove', function() {
      var $statusBtn = $('#commentApprove');
      var sendBtnHtml = $statusBtn.html();

      var comment_id = $(this).attr('data-review-id');
      var token = localStorage.getItem('authToken');
      $('#success_msg').html('');

      // Make a GET request using AJAX
      $.ajax({
        url: '/approveCommentApi', // Replace with the actual endpoint URL
        method: 'GET',
        data: {
          comment_id: comment_id
        },
        headers: {
          'Authorization': 'Bearer ' + token,
        },
        beforeSend: function() {
          $statusBtn.prop('disabled', true).html(`Aprroving &nbsp;<i class="fas fa-spinner fa-spin"></i>`);
        },
        success: function(data) {
          // Handle the successful response
          console.log('Response :', data);
          if (data.success) {
            // change final status of 
            // $('#success_msg').text(data.success);
            iziToast.show({
              title: '',
              message: data.success,
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
            setTimeout(() => {
              window.location.reload();
            }, 1500);
          } else {
            console.log('Data received:', data.errors);
          }
        },
        error: function(error) {
          // Handle errors
          console.error('Error:', error);
        },complete: function() {
          $statusBtn.prop('disabled', false).html(sendBtnHtml);
        },
      });
    });
  </script>

  <script type="text/javascript" src="{{ asset('theme/assets/vendors/js/vendor.bundle.base.js') }}"></script>
  <script type="text/javascript" src="{{ asset('theme/assets/vendors/chart.js/Chart.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('theme/assets/js/jquery.cookie.js') }}"></script>
  <script type="text/javascript" src="{{ asset('theme/assets/js/off-canvas.js') }}"></script>
  <script type="text/javascript" src="{{ asset('theme/assets/js/hoverable-collapse.js') }}"></script>
  <!-- <script type="text/javascript" src="{{ asset('theme/assets/js/misc.js') }}"></script> -->

  <script type="text/javascript" src="{{ asset('theme/assets/js/dashboard.js') }}"></script>
  <script type="text/javascript" src="{{ asset('theme/assets/js/todolist.js') }}"></script>



</body>

</html>