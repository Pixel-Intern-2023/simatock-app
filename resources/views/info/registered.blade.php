<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Registered!</title>
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
    <script src="assets/js/config.js"></script>
</head>

<body class="relative flex flex-col">
    <div class="container">
        <div class="flex items-center justify-center h-screen px-10">
            <div class="xl:max-w-5xl">
                <div class="card">
                    <div class="grid lg:grid-cols-2 gap-5">
                        <div class="p-8 text-center">
                            <div class="mx-auto mb-3">
                                <a href="index.html">
                                    <img src="{{ asset('assets/images/logo-dark.png') }}" alt="" class="h-6 block dark:hidden mx-auto">
                                    <img src="{{ asset('assets/images/logo-light.png') }}" alt="" class="h-6 hidden dark:block mx-auto">
                                </a>
                            </div>

                            <i class="fill-dark/20 stroke-dark me-4 h-20 w-20 mx-auto" data-lucide="user-plus-2"></i>

                            <h4 class="h4 mb-2 mt-2 text-base dark:text-gray-300">Admin Berhasil Di daftarkan!</h4>
                            <p class="text-gray-500 mt-1 mb-2 dark:text-gray-400">Akun sudah selesai di daftarkan silahkan login sesuai username dan password yang telah dibuat</p>
                        </div>
                        <div class="hidden lg:block">
                            <div class="relative h-full bg-no-repeat  bg-cover bg-[url('../images/auth-bg.jpg')]">
                                <div class="absolute inset-0 bg-dark/50"></div>
                                <div class="pt-44 text-center relative">
                                    <p class="text-xl font-semibold text-white mb-1">I simply love it!</p>
                                    <p class="text-white text-base">"It's a elegent templete. I love it very much!"</p>
                                    <p class="text-white text-base mt-3">- Admin User</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card -->

                <div class="row mt-3">
                    <div class="col-12 text-center">
                        <p class="text-gray-500 dark:text-gray-400"><a href="#" onclick="history.back()" class="text-primary font-semibold ms-1">Back</a></p>
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

            </div> <!-- end col -->
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
