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
    <title>Add Topic</title>

    <link href="{{ asset('/dashboard_theme/css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        .edit {
            transition: 0.5s ease-in-out;
            background-color: #3B7DDD;
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

        .add_new_btn {
            padding: 8px 20px;
            border: 1px solid #3B7DDD;
            border-radius: 5px;
            background-color: #3B7DDD;
            color: #fff;
            text-decoration: none;
            transition: 0.5s ease-in-out;
            font-weight: 600;
            height: 40px;
        }

        .add_new_btn:hover {
            background-color: transparent;
            color: #3B7DDD;
        }



        /*  */


        .topic {
            padding: 5px 10px;
            margin: 5px;
            background-color: #fff;
            border: 1px solid #fff;
            border-radius: 5px;
            width: fit-content;
        }

        .close-btn {
            cursor: pointer;
            margin-left: 5px;
            font-size: 18px;
            color: red;
        }

        #input-container input {
            background-color: #fff;
            color: #000;
            border-radius: 5px;
            padding: 5px 15px;
            width: 300px;
            height: 40px;
            border: 1px solid #000;
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
    <div class="wrapper">

        @include('admin/partials/left_sidebar')

        <div class="main">

            @include('admin/partials/header')

            <main class="content">
                <div class="container-fluid p-0">
                    <div class="d-flex justify-content-between mb-4">
                        <h1 class="h3 mb-3"><strong>Add Blog Topic</strong></h1>
                        <!-- <div class="buttons">
                            <a href="{{url('/blogTopics')}}" class="mx-3 btn">Add Topic <i class="fa-solid fa-circle-plus"></i></a>
                            <a href="{{url('/AddBlogsForAdmin')}}" class=" btn">Create Blog <i class="fa-solid fa-circle-plus"></i></a>
                        </div> -->
                    </div>

                    <div class="row pt-3">
                        <div class="col-lg-12">
                            <div id="input-container" class="d-flex justify-content-start">
                                <input type="text" id="input-text" placeholder="Enter text...">
                                <button id="add-button" class="add_new_btn mx-5">Add Topic</button>
                            </div>
                            <br>
                            <span class="msg_err" id="allReadyExist" style="color:red; font-size:15px;"></span>
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-lg-12">
                            <div id="element-container" class="d-flex flex-wrap"></div>
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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        document.getElementById('add-button').addEventListener('click', function() {
            const input = document.getElementById('input-text');
            const topic = input.value.trim();

            // Check if input is empty
            if (topic === '') {
                document.getElementById('allReadyExist').textContent = 'Please enter a topic.';
                return;
            }

            // Clear any previous error messages
            document.getElementById('allReadyExist').textContent = '';

            // Check if topic already exists
            const existingTopics = document.querySelectorAll('#element-container .topic');
            for (let i = 0; i < existingTopics.length; i++) {
                if (existingTopics[i].textContent.slice(0, -1) === topic) {
                    document.getElementById('allReadyExist').textContent = 'This topic already exists.';
                    return;
                }
            }

            // Create topic element
            const topicElement = document.createElement('div');
            topicElement.className = 'topic';
            topicElement.textContent = topic;

            // Create close button
            const closeButton = document.createElement('span');
            closeButton.className = 'close-btn';
            closeButton.textContent = '×';

            // Append close button to topic element
            topicElement.appendChild(closeButton);

            // Append topic element to container
            document.getElementById('element-container').appendChild(topicElement);

            // Clear input
            input.value = '';

            // Add event listener to close button
            closeButton.addEventListener('click', function() {
                document.getElementById('element-container').removeChild(topicElement);
            });
        });
    </script>

</body>

</html>