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
            <h1 class="h3 mb-3"><strong>Blog List</strong></h1>
            <div class="buttons">
              <a href="{{url('/blogTopics')}}" class="mx-3 btn">Add Topic <i class="fa-solid fa-circle-plus"></i></a>
              <a href="{{url('/AddBlogsForAdmin')}}" class=" btn">Create Blog <i class="fa-solid fa-circle-plus"></i></a>
            </div>
          </div>

            <!-- Display success or error message from session -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @elseif (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

          <div class="row">
            <div class="col-12 col-lg-12 col-xxl-12 d-flex">
              <div class="card flex-fill">
                <table class="table table-hover my-0">
                  <thead>
                    <tr>
                      <th>Blog Id</th>
                      <th>Date</th>
                      <th class="d-none d-xl-table-cell">Topic</th>
                      <th class="d-none d-xl-table-cell">Heading</th>
                      <th>Status</th>
                      <th class="d-none d-md-table-cell"></th>
                      <th class="d-none d-md-table-cell"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      @foreach($blogs as $blog)

                      <td>{{$blog->id}}</td>
                      <td>{{ $blog->created_at->format('Y-m-d') }}</td>
                      <td class="d-none d-xl-table-cell">{{$blog->topic}}</td>
                      <td class="d-none d-xl-table-cell">{{$blog->heading}}</td>
                      <td>
                        <span class="badge fs-6 
        @if($blog->status === 'publish') 
            bg-success 
        @else 
            bg-warning 
        @endif">
                          {{ $blog->status }}
                        </span>
                      </td>
                      <td class="d-none d-md-table-cell"><a href="{{ url('/editBlogsForAdmin/' . $blog->id) }}">
                          <button class="badge px-2 py-1 fs-6 edit">
                            Edit <i class="fa-solid fa-pen-to-square"></i>
                          </button>
                        </a>
                      </td>
                      <td class="d-none d-md-table-cell"><a href="{{ url('/deleteBlogsForAdminApi/' . $blog->id) }}"><button class="badge bg-danger px-2 py-1 fs-6 delete">Delete <i class="fa-solid fa-trash"></i></button></a></td>
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

  <script src="{{ asset('dashboard_theme/js/app.js') }}"></script>
  <script>
    const childElement = document.querySelector('.blog');
    childElement.classList.add('active');
  </script>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      var ctx = document.getElementById("chartjs-dashboard-line").getContext("2d");
      var gradient = ctx.createLinearGradient(0, 0, 0, 225);
      gradient.addColorStop(0, "rgba(215, 227, 244, 1)");
      gradient.addColorStop(1, "rgba(215, 227, 244, 0)");
      // Line chart
      new Chart(document.getElementById("chartjs-dashboard-line"), {
        type: "line",
        data: {
          labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
          datasets: [{
            label: "Sales ($)",
            fill: true,
            backgroundColor: gradient,
            borderColor: window.theme.primary,
            data: [
              2115,
              1562,
              1584,
              1892,
              1587,
              1923,
              2566,
              2448,
              2805,
              3438,
              2917,
              3327
            ]
          }]
        },
        options: {
          maintainAspectRatio: false,
          legend: {
            display: false
          },
          tooltips: {
            intersect: false
          },
          hover: {
            intersect: true
          },
          plugins: {
            filler: {
              propagate: false
            }
          },
          scales: {
            xAxes: [{
              reverse: true,
              gridLines: {
                color: "rgba(0,0,0,0.0)"
              }
            }],
            yAxes: [{
              ticks: {
                stepSize: 1000
              },
              display: true,
              borderDash: [3, 3],
              gridLines: {
                color: "rgba(0,0,0,0.0)"
              }
            }]
          }
        }
      });
    });
  </script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      // Pie chart
      new Chart(document.getElementById("chartjs-dashboard-pie"), {
        type: "pie",
        data: {
          labels: ["Chrome", "Firefox", "IE"],
          datasets: [{
            data: [4306, 3801, 1689],
            backgroundColor: [
              window.theme.primary,
              window.theme.warning,
              window.theme.danger
            ],
            borderWidth: 5
          }]
        },
        options: {
          responsive: !window.MSInputMethodContext,
          maintainAspectRatio: false,
          legend: {
            display: false
          },
          cutoutPercentage: 75
        }
      });
    });
  </script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      // Bar chart
      new Chart(document.getElementById("chartjs-dashboard-bar"), {
        type: "bar",
        data: {
          labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
          datasets: [{
            label: "This year",
            backgroundColor: window.theme.primary,
            borderColor: window.theme.primary,
            hoverBackgroundColor: window.theme.primary,
            hoverBorderColor: window.theme.primary,
            data: [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79],
            barPercentage: .75,
            categoryPercentage: .5
          }]
        },
        options: {
          maintainAspectRatio: false,
          legend: {
            display: false
          },
          scales: {
            yAxes: [{
              gridLines: {
                display: false
              },
              stacked: false,
              ticks: {
                stepSize: 20
              }
            }],
            xAxes: [{
              stacked: false,
              gridLines: {
                color: "transparent"
              }
            }]
          }
        }
      });
    });
  </script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      var markers = [{
          coords: [31.230391, 121.473701],
          name: "Shanghai"
        },
        {
          coords: [28.704060, 77.102493],
          name: "Delhi"
        },
        {
          coords: [6.524379, 3.379206],
          name: "Lagos"
        },
        {
          coords: [35.689487, 139.691711],
          name: "Tokyo"
        },
        {
          coords: [23.129110, 113.264381],
          name: "Guangzhou"
        },
        {
          coords: [40.7127837, -74.0059413],
          name: "New York"
        },
        {
          coords: [34.052235, -118.243683],
          name: "Los Angeles"
        },
        {
          coords: [41.878113, -87.629799],
          name: "Chicago"
        },
        {
          coords: [51.507351, -0.127758],
          name: "London"
        },
        {
          coords: [40.416775, -3.703790],
          name: "Madrid "
        }
      ];
      var map = new jsVectorMap({
        map: "world",
        selector: "#world_map",
        zoomButtons: true,
        markers: markers,
        markerStyle: {
          initial: {
            r: 9,
            strokeWidth: 7,
            stokeOpacity: .4,
            fill: window.theme.primary
          },
          hover: {
            fill: window.theme.primary,
            stroke: window.theme.primary
          }
        },
        zoomOnScroll: false
      });
      window.addEventListener("resize", () => {
        map.updateSize();
      });
    });
  </script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      var date = new Date(Date.now() - 5 * 24 * 60 * 60 * 1000);
      var defaultDate = date.getUTCFullYear() + "-" + (date.getUTCMonth() + 1) + "-" + date.getUTCDate();
      document.getElementById("datetimepicker-dashboard").flatpickr({
        inline: true,
        prevArrow: "<span title=\"Previous month\">&laquo;</span>",
        nextArrow: "<span title=\"Next month\">&raquo;</span>",
        defaultDate: defaultDate
      });
    });
  </script>

</body>

</html>