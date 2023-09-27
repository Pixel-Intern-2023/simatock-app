<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Error 404 Page | Shreyu - Responsive Tailwind CSS 3 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc., Tailwind, TailwindCSS, Tailwind CSS 3" name="description">
    <meta content="coderthemes" name="author">

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- App css -->
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Icons css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/libs/%40iconscout/unicons/css/line.css') }}" type="text/css" rel="stylesheet">

    <!-- Theme Config Js -->
    <script src="{{ asset('assets/js/config.js') }}"></script>
</head>

<body class="relative flex flex-col">


    <div class="pt-20">
        <div class="text-center">
            <div>
                <img src="{{ asset('assets/images/not-found.png') }}" alt="" class="sm:h-80 h-52 mx-auto">
            </div>
            <h3 class="my-3 sm:text-2xl text-xl dark:text-gray-300">We couldn't connect the dots</h3>
            <p class="text-gray-500 mb-7 dark:text-gray-400">This page was not found. <br> You may have mistyped the address or the page may have moved.</p>

            <a href="#" onclick="history.back()" class="btn text-base bg-primary text-white">Take me back to Home</a>
        </div>
    </div>

    <!-- Plugin Js -->
    <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/libs/lucide/umd/lucide.min.js') }}"></script>
    <script src="{{ asset('assets/libs/preline/preline.js') }}"></script>

    <!-- App Js -->
    <script src="{{ asset('assets/js/app.js') }}"></script>

</body>
</html>
