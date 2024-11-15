<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin Blogs</title>
  <link rel="icon" href="{{ asset('assets/frontEnd/web/images/favicon.ico') }}" type="image/x-icon" />
  <link rel="shortcut icon" href="{{ asset('assets/frontEnd/web/images/favicon.ico') }}" type="image/x-icon" />
  <!-- plugins:css -->

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

    /* Modal */

    .g-receive-text {
      color: #1BE3FE;
      font-size: 16px;
      font-weight: 510;
      color: #1BE3FE;
      text-decoration: underline;
    }

    .g-payment-text,
    .g-type {
      color: #B0C5E2;
    }

    .g-payment {
      margin-right: 15px;
    }

    #g-modal-add-delivery-address {
      background: #0000008a !important;
      opacity: 1.1 !important;
    }

    .g-modal-add-delivery-address-content,
    .g-modal-import-customer-csv-content {
      background: black !important;
      border: 1px #444444 solid !important;
      border-radius: 20px !important;
    }

    .g-modal-add-delivery-address-footer,
    .g-modal-import-customer-csv-footer {
      background: #1be3fe !important;
      color: #282E36 !important;
    }

    .g-modal-add-delivery-address-close,
    .g-modal-add-delivery-address-close:hover,
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

    .btn-danger {
      background-color: red;
      border-radius: 10px;
      padding: 15px 20px;
      transition: 0.5s ease-in-out;

    }

    .btn-success {
      background-color: #44e1d5;
      border-radius: 10px;
      padding: 15px 29px;
      transition: 0.5s ease-in-out;
    }

    .btn-danger:hover {
      background-color: transparent;
      border: 1px solid red;
      color: red !important;
    }

    .btn-success:hover {
      background-color: transparent !important;
      border: 1px solid #44e1d5;
      color: var(--blue) !important;
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


  <!-- partial -->
  <div class="container-fluid page-body-wrapper">


  @include('admin/partials/left_sidebar')


    <!-- partial -->
    <div class="main-panel">
      <div class="content-wrapper">

        <div class="" style="padding-bottom:10px;   margin-top:-1.5rem;">
        @include('admin/partials/header')
          <button class="navbar-toggler" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
        <div class="row pt-3">

          <div class="col-md-5 stretch-card grid-margin" style="font-size:20px; display:flex; align-items:center;">
            All Blogs
          </div>
          <div class="col-md-7 stretch-card grid-margin d-flex justify-content-end" style="text-align:right">
            <input type="text" id="filterNo" placeholder="Search" style="padding:5px 10px; outline:none; border:none; border-radius:5px; margin:0px 40px;">
            <a class="add_new_btn" href="{{url('/blogTopics/')}}"><img class="" src="{{ asset('assets/frontEnd/web/images/icons/add-circled-outline.svg') }}" alt="Logo" class="logo-img"> &nbsp; <span>Add Topics</span></a>
            <a class="add_new_btn" href="{{url('/AddBlogsForAdmin/')}}"><img class="" src="{{ asset('assets/frontEnd/web/images/icons/add-circled-outline.svg') }}" alt="Logo" class="logo-img"> &nbsp; <span>Create New</span></a>
          </div>
        </div>
        <span id="success_msg" style="color:green"></span>

        <div class="container responsive">
          <table id="dataTable" style="width:100%;">
            <thead>
              <tr style="border:none;">
                <th><i class="fa-solid fa-magnifying-glass"></i><input type="text" class="partial-search" data-search="id" placeholder="Id"></th>
                <th><i class="fa-solid fa-magnifying-glass"></i><input type="text" class="partial-search" data-search="topic" placeholder="Topic"></th>
                <th><i class="fa-solid fa-magnifying-glass"></i><input type="text" class="partial-search" data-search="heading" placeholder="Heading"></th>
                <th><i class="fa-solid fa-magnifying-glass"></i><input type="text" class="partial-search" data-search="status" placeholder="Status"></th>
                <!-- <th><i class="fa-solid fa-magnifying-glass"></i><input type="text" class="partial-search" data-search="Kunden" placeholder="Customer name"></th> -->
                <th></th>
              </tr>
            </thead>

            <tbody>

            </tbody>
          </table>
        </div>
        <div id="pagination" class="pagination" style="padding-top: 3rem; color:#404040;"></div>
      </div>
    </div>
    <!-- main-panel ends -->
  </div>
  <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->


  <!-- START : Unregistered user -->
  <div class="modal fade" id="unregistered-user">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content g-modal-add-delivery-address-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <!-- <h5 class="modal-title"><span class="p-2 g-modal-border-icon mx-2"><i class="fa-solid fa-add text-warning" aria-hidden="true"></i></span>Add Delivery Address</h5> -->
          <h5 class="modal-title"><span class="p-2 g-modal-border-icon mx-2"><img src="{{asset('assets/backend/images/icone/plus-circle-yellow.png')}}"></span>Unregistered User</h5>
          <button type="button" class="btn-close g-modal-add-delivery-address-close" data-bs-dismiss="modal">X</button>
        </div>
        <!-- Modal body -->
        <form>
          <div class="modal-body" style="overflow-y: scroll; overflow-x: hidden; height:auto; max-height:450px;">
            <div class="row my-2" id="list_temp_details">
              <div class="col-md-8 d-flex align-items-center" id="un_registered_user_id"></div>
              <div class="col-md-4 d-flex align-items-center"><button type="button" id="status_button" class="add_new_btn"></button></div>
            </div>
          </div>


        </form>

      </div>
    </div>
  </div>
  <!-- END : Unregistered Users -->

  <!--  -->


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