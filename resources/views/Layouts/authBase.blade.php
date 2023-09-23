<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Login | Shreyu - Responsive Tailwind CSS 3 Admin Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta
        content="A fully featured admin theme which can be used to build CRM, CMS, etc., Tailwind, TailwindCSS, Tailwind CSS 3"
        name="description">
    <meta content="coderthemes" name="author">
    <!-- App favicon -->
    <link href="{{ asset('assets/images/favicon.ico') }}" rel="shortcut icon">
    <!-- App css -->
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css">
    <!-- Icons css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/libs/%40iconscout/unicons/css/line.css') }}" rel="stylesheet" type="text/css">
    <!-- Theme Config Js -->
    <script src="{{ asset('assets/js/config.js') }}"></script>
</head>

<body class="relative flex flex-col">
    <div class="container">
        <div class="flex items-center justify-center px-5 sm:px-0" style="{{ Route::currentRouteName() == 'register' ? 'padding-top:9px' :'padding-top:80px' }}">
            <div class="xl:max-w-6xl">
                <div class="card">
                    <div class="grid gap-5 lg:grid-cols-2">
                        <div class="p-5 py-8 text-start sm:px-20 lg:px-8">
                            <div class="mx-auto mb-3">
                                <a href="index.html">
                                    <img alt="" class="block h-6 dark:hidden" src="assets/images/logo-dark.png">
                                    <img alt="" class="hidden h-6 dark:block"
                                        src="assets/images/logo-light.png">
                                </a>
                                <h4 class="mt-5 text-base dark:text-gray-300">Welcome Admin!</h4>
                                <p class="mb-5 mt-1 text-gray-500 dark:text-gray-400">Masukkan Username dan Password untuk mendapatkan akses admin panel</p>
                            </div>
                            @yield('content')
                        </div>
                        <div class="hidden lg:block">
                            <div class="relative h-full bg-cover bg-no-repeat bg-center flex items-center flex-col" style="background-image: url('{{ asset('assets/images/auth-bg.jpg') }}')">
                                <div class="bg-dark/50 absolute inset-0"></div>
                                <div class="absolute bottom-0 pb-4 text-center">
                                    <p class="mb-1 text-xl font-semibold text-white">I simply love it!</p>
                                    <p class="text-base text-white">"It's an elegant template. I love it very much!"</p>
                                    <p class="mt-3 text-base text-white">- Admin User</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
