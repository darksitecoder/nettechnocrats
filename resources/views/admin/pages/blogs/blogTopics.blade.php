<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Add Blog Topics</title>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css" />
    <script src="https://kit.fontawesome.com/e1528f4468.js" crossorigin="anonymous"></script>

    <!-- Fonts and Icons -->
    <link rel="icon" href="{{ asset('assets/frontEnd/web/images/favicon.ico') }}" type="image/x-icon" />
    <link rel="shortcut icon" href="{{ asset('assets/frontEnd/web/images/favicon.ico') }}" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('/assets/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('style/admin-style/add-edit-style.css') }}">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Load jQuery first -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- Then load Bootstrap and other scripts -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>


    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .feature-item {
            padding: 5px 10px;
            margin: 5px;
            background-color: var(--white);
            border: 1px solid var(--white);
            border-radius: 5px;
            width: fit-content;
        }

        .element-remove {
            cursor: pointer;
            margin-left: 5px;
            font-size: 18px;
            color: red;
        }

        #input-container input {
            background-color: var(--white);
            color: var(--black);
            border-radius: 5px;
            padding: 5px 15px;
            width: 300px;
            height: 50px;
            border: 1px solid var(--white);
            outline: none;
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
    </style>
</head>

<body>
    <div class="container-scroller">
        <div class="row p-0 m-0 proBanner" id="proBanner">
            <div class="col-md-12 p-0 m-0"></div>
        </div>
    </div>

    @include('admin_theme/Partial/navbar')
    <div class="container-fluid page-body-wrapper" style="padding:0; margin:0;">
        @include('admin_theme/Partial/sidebar')

        <div class="main-panel">
            <div class="content-wrapper">
                <div class="" style="padding-bottom:10px; margin-top:-1.5rem;">
                    @include('admin_theme/Partial/admin_header')
                    <button class="navbar-toggler" type="button" data-toggle="offcanvas">
                        <span class="mdi mdi-menu"></span>
                    </button>
                </div>

                <div class="row pt-3">
                    <div class="col-lg-12">
                        <div id="input-container" class="d-flex justify-content-start">
                            <input type="text" id="input-text" placeholder="Enter text...">
                            <a id="add-button" class="add_new_btn mx-5">Add Topic</a>
                        </div>
                        <br>
                        <span class="msg_err" id="allReadyExist" style="color:red; font-size:15px;"></span>
                    </div>
                </div>
                <div class="row pt-3">
                    <div class="col-lg-12">
                        <div id="element-container"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
        $(document).ready(function() {
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
                    $.each(response.data, function(index, item) {
                        var element = document.createElement("div");
                        element.className = "element";
                        element.textContent = item.topic;

                        // Create remove button
                        var removeButton = document.createElement("span");
                        removeButton.className = "element-remove";
                        removeButton.innerHTML = '<i class="fa-solid fa-xmark" id="' + item.id + '"></i>';

                        element.appendChild(removeButton);
                        $('#element-container').append(element);
                    });
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });

        // Add Blog Topic
        document.addEventListener("DOMContentLoaded", function() {
            var inputText = document.getElementById("input-text");
            var addButton = document.getElementById("add-button");
            var elementContainer = document.getElementById("element-container");

            addButton.addEventListener("click", function() {
                $('.msg_err').text('');
                var text = inputText.value.trim();

                if (text !== "") {
                    var token = localStorage.getItem('authToken');
                    if (!token) {
                        console.error('Token not found in localStorage');
                        window.location.href = '/';
                    }

                    var baseUrl = window.location.origin;

                    $.ajax({
                        type: 'POST',
                        url: baseUrl + '/addBlogTopicApi',
                        data: {
                            'text': text
                        },
                        headers: {
                            'Authorization': 'Bearer ' + token
                        },
                        dataType: 'json',
                        success: function(response) {
                            if (response.alreadyExist) {
                                $('#allReadyExist').text(response.alreadyExist);
                            }

                            if (response.success) {
                                var element = document.createElement("div");
                                element.className = "element";
                                element.textContent = text;

                                // Create remove button
                                var removeButton = document.createElement("span");
                                removeButton.className = "element-remove";
                                removeButton.innerHTML = '<i class="fa-solid fa-xmark" id="' + response.id + '"></i>';

                                element.appendChild(removeButton);
                                elementContainer.prepend(element);
                                inputText.value = "";
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error(xhr.responseText);
                        }
                    });
                }
            });

            // Add using Enter key
            inputText.addEventListener("keypress", function(event) {
                if (event.key === "Enter") {
                    addButton.click();
                }
            });
        });

        // Remove Blog Topic
        $(document).on('click', '.fa-xmark', function() {
            var token = localStorage.getItem('authToken');
            if (!token) {
                console.error('Token not found in localStorage');
                window.location.href = '/';
            }

            $('.msg_err').text('');
            var $this = $(this);
            var id = $this.attr('id');
            var baseUrl = window.location.origin;

            $.ajax({
                url: baseUrl + '/deleteBlogTopicApi',
                method: 'GET',
                data: {
                    'id': id
                },
                headers: {
                    'Authorization': 'Bearer ' + token
                },
                dataType: 'json',
                success: function(response) {
                    $('#success_msg').html('<img src="' + baseUrl + '/assets/frontEnd/web/images/checkmark.gif" alt="Success Image" width="50px" height="50px">' + response.success);
                    $this.closest('.element').remove();
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });
    </script>

    <!-- Bootstrap Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html>