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
  <title>Contact Enquires</title>

  <link href="{{ asset('/dashboard_theme/css/app.css') }}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

  <style>
    .edit {
      transition: 0.5s ease-in-out;
      background-color: #3B7DDD;
      border: 1px solid #3B7DDD !important;
    }

    .edit:hover {
      background-color: transparent !important;
      color: #3B7DDD;
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
      border: 1px solid #3B7DDD;
      border-radius: 5px;
      background-color: #3B7DDD;
      color: #fff;
      text-decoration: none;
      transition: 0.5s ease-in-out;
      font-weight: 600;
    }

    .btn:hover {
      background-color: transparent;
      color: #3B7DDD;
    }

    /* Modal */

    .modal {
      position: fixed;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      opacity: 0;
      visibility: hidden;
      transform: scale(1.1);
      transition: visibility 0s linear 0.25s, opacity 0.25s 0s, transform 0.25s;
    }

    .modal-content {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: white;
      padding: 1rem 1.5rem;
      width: 50%;
      border-radius: 0.5rem;
      height: 500px;
      overflow-y: scroll;
    }

    .modal-content table tr td {
      font-size: 16px;
      line-height: 50px;
    }

    .modal-content table tr th {
      font-size: 16px;
      line-height: 50px;
    }

    .close-button {
      float: right;
      width: 1.5rem;
      line-height: 1.5rem;
      text-align: center;
      cursor: pointer;
      border-radius: 0.25rem;
      background-color: lightgray;
    }

    .close-button:hover {
      background-color: darkgray;
    }

    .show-modal {
      opacity: 1;
      visibility: visible;
      transform: scale(1.0);
      transition: visibility 0s linear 0s, opacity 0.25s 0s, transform 0.25s;
    }
    
    .close-button {
      float: right;
      width: 1.5rem;
      line-height: 1.5rem;
      text-align: center;
      cursor: pointer;
      border-radius: 0.25rem;
      background-color: lightgray;
    }

    .close-button:hover {
      background-color: darkgray;
    }

    .show-modal {
      opacity: 1;
      visibility: visible;
      transform: scale(1.0);
      transition: visibility 0s linear 0s, opacity 0.25s 0s, transform 0.25s;
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
          <div class="d-flex justify-content-between mb-4">
            <h1 class="h3 mb-3"><strong>Contact Quote List</strong></h1>
          </div>


          <!-- Flash Messages (Success or Error) -->
          @if(session('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close-btn" data-bs-dismiss="alert" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
          </div>
          <br>
          @endif

          @if(session('error'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="close-btn" data-bs-dismiss="alert" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
          </div>
          <br>
          @endif

          <!-- Display success or error message from session -->

          <div class="row">
            <div class="col-12 col-lg-12 col-xxl-12 d-flex">
              <div class="card flex-fill">
                <table class="table table-hover my-0">
                  <thead>
                    <tr>
                      <th>Quote Id</th>
                      <th>Date</th>
                      <th class="d-none d-xl-table-cell">Name</th>
                      <th class="d-none d-md-table-cell">Email</th>
                      <th class="d-none d-md-table-cell">Phone</th>
                      <th class="d-none d-md-table-cell">Website</th>
                      <th class="d-none d-md-table-cell"></th>
                    </tr>
                  </thead>


                  <tbody>
                    @foreach($enquiry as $data)
                    <tr>
                      <td>{{ $data->id }}</td>
                      <td>{{ $data->created_at->format('d-m-Y') }}</td>
                      <td>{{ $data->name }}</td>
                      <td>{{ $data->email }}</td>
                      <td>{{ $data->phone }}</td>
                      <td><a href="{{ $data->website }}" target="_blank">{{ $data->website }}</a></td>
                      <td class="d-none d-md-table-cell">
                        <a href="{{ url('deleteQuoteEnquiriesForAdmin/'.$data->id) }}">
                          <button class="badge bg-danger px-2 py-1 fs-6 delete">Delete <i class="fa-solid fa-trash"></i></button>
                        </a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>

          </div>

        </div>
      </main>

      @include('admin/partials/footer')

    </div>
  </div>
</body>

</html>