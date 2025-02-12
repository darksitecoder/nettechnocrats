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

    <link rel="canonical" href="https://demo-basic.adminkit.io/pages-sign-up.html" />

    <title>Sign Up | AdminKit Demo</title>

    <link href="{{ asset('/dashboard_theme/css/app.css') }}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
    <main class="d-flex w-100">
        <div class="container d-flex flex-column">
            <div class="row vh-100">
                <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">

                        <div class="text-center mt-4">
                            <h1 class="h2">Get started</h1>
                            <p class="lead">
                                Start creating the best possible user experience for you customers.
                            </p>
                        </div>

                        <div class="card">
                            <div class="card-body">

                                @if(session('success'))
                                <div class="alert alert-success" style="color:green; font: size 20px;">
                                    {{ session('success') }}
                                </div>
                                @endif



                                <div class="m-sm-4">
                                    <form method="POST" action="{{ url('signup') }}">
                                        @csrf

                                        <!-- Name Field -->
                                        <div class="mb-3">
                                            <label class="form-label">Name</label>
                                            <input class="form-control form-control-lg" type="text" name="name" placeholder="Enter your name" value="{{ old('name') }}" />
                                            @error('name')
                                            <div class="alert alert-danger mt-2" style="color:red">{{ $message }}</div> <!-- Red Error Message -->
                                            @enderror
                                        </div>

                                        <!-- Company Field -->
                                        <div class="mb-3">
                                            <label class="form-label">Company</label>
                                            <input class="form-control form-control-lg" type="text" name="company" placeholder="NetTechnoCrats It Services Pvt Ltd" value="NetTechnoCrats It Services Pvt Ltd" />
                                            @error('company')
                                            <div class="alert alert-danger mt-2" style="color:red">{{ $message }}</div> <!-- Red Error Message -->
                                            @enderror
                                        </div>

                                        <!-- Email Field -->
                                        <div class="mb-3">
                                            <label class="form-label">Email</label>
                                            <input class="form-control form-control-lg" type="email" name="email" placeholder="Enter your email" value="{{ old('email') }}" />
                                            @error('email')
                                            <div class="alert alert-danger mt-2" style="color:red">{{ $message }}</div> <!-- Red Error Message -->
                                            @enderror
                                        </div>

                                        <!-- Password Field -->
                                        <div class="mb-3">
                                            <label class="form-label">Password</label>
                                            <input class="form-control form-control-lg" type="password" name="password" placeholder="Enter password" />
                                            @error('password')
                                            <div class="alert alert-danger mt-2" style="color:red">{{ $message }}</div> <!-- Red Error Message -->
                                            @enderror
                                        </div>

                                        <!-- Success Message -->
                                        @if(session('success'))
                                        <div class="alert alert-success mt-3">
                                            {{ session('success') }} <!-- Green Success Message -->
                                        </div>

                                        <!-- Show Login Button after Success -->
                                        <div class="text-center mt-3">
                                            <a href="{{ url('login_page') }}" class="btn btn-lg btn-success">Go to Login</a>
                                        </div>
                                        @endif

                                        <!-- Signup Button -->
                                        @if(!session('success'))
                                        <div class="text-center mt-3">
                                            <button type="submit" class="btn btn-lg btn-primary">Sign up</button>
                                        </div>
                                        @endif

                                    </form>



                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="js/app.js"></script>

</body>

</html>