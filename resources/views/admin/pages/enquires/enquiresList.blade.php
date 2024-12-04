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
 <title>Blog list</title>

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
      <h1 class="h3 mb-3"><strong>Enquiry List</strong></h1>
     </div>

     <!-- Display success or error message from session -->

     <div class="row">
      <div class="col-12 col-lg-12 col-xxl-12 d-flex">
       <div class="card flex-fill">
        <table class="table table-hover my-0">
         <thead>
          <tr>
           <th>Enquiry Id</th>
           <th>Date</th>
           <th class="d-none d-xl-table-cell">Name</th>
           <th class="d-none d-xl-table-cell">Subject</th>
           <th>Status</th>
           <th class="d-none d-md-table-cell"></th>
           <th class="d-none d-md-table-cell"></th>
          </tr>
         </thead>
         <tbody>
          <tr>
           <td></td>
           <td></td>
           <td class="d-none d-xl-table-cell"></td>
           <td class="d-none d-xl-table-cell"></td>
           <td>
           </td>
           <td class="d-none d-md-table-cell"><a href="{{ url('/editBlogsForAdmin/' . $blog->id) }}">
             <button class="badge px-2 py-1 fs-6 edit">
              Edit <i class="fa-solid fa-pen-to-square"></i>
             </button>
            </a>
           </td>
           <td class="d-none d-md-table-cell"><a href="{{ url('/deleteBlogsForAdminApi/' . $blog->id) }}"><button class="badge bg-danger px-2 py-1 fs-6 delete">Delete <i class="fa-solid fa-trash"></i></button></a></td>
          </tr>



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

 <script src="{{ asset('dashboard_theme/js/app.js') }}"></script>
 <script>
  const childElement = document.querySelector('.portfolio');
  childElement.classList.add('active');
 </script>

</body>

</html>