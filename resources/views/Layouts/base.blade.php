<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dashboard | Shreyu - Responsive Tailwind CSS 3 Admin Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta
        content="A fully featured admin theme which can be used to build CRM, CMS, etc., Tailwind, TailwindCSS, Tailwind CSS 3"
        name="description">
    <meta content="coderthemes" name="author">
    @vite('resources/css/app.css')
    <!-- App favicon -->
    <link href="{{ asset('assets/images/favicon.ico') }}" rel="shortcut icon">
    {{-- flat picker --}}
    <link href="{{ asset('assets/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet">
    <!-- plugin css -->
    <link href="{{ asset('assets/libs/jsvectormap/css/jsvectormap.min.css') }}" rel="stylesheet" type="text/css">
    <!-- App css -->
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css">
    <!-- Icons css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/libs/%40iconscout/unicons/css/line.css') }}" rel="stylesheet" type="text/css">
    <link href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css"
    rel="stylesheet">
    <!-- Theme Config Js -->
    <script src="{{ asset('assets/js/config.js') }}"></script>
    <!-- Alpine Plugins -->
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/persist@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/mask@3.x.x/dist/cdn.min.js"></script>
    <!-- Alpine Core -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body>

    <div class="wrapper flex">

        <!-- Sidenav Menu -->
        <div class="app-menu">

            <!-- App Logo -->
            <a class="logo-box" href="{{ route('dashboard') }}">
                <!-- Light Logo -->
                <div class="logo-light">
                    <h1 class="logo-lg text-xl">WareHouse</h1>
                    <h1 class="logo-sm text-xl">WH</h1>
                </div>
                <!-- Dark Logo -->
                <div class="logo-dark">
                    <h1 class="logo-lg text-xl">WareHouse</h1>
                    <h1 class="logo-sm text-xl">WH</h1>
                </div>
            </a>

            <!--- Menu -->
            <div class="scrollbar" data-simplebar>
                <ul class="menu" data-hs-collapse="accordion">

                    <li class="menu-item">
                        <a class="menu-link" href="{{ route('dashboard') }}">
                            <span class="menu-icon">
                                <i data-lucide="home"></i>
                            </span>
                            <span class="menu-text"> Dashboard </span>
                        </a>
                    </li>

                    <li class="menu-title">Main</li>
                    <li class="menu-item">
                        <a class="menu-link" data-hs-collapse="#menuEmail" href="javascript:void(0)">
                            <span class="menu-icon">
                                <i data-lucide="archive"></i>
                            </span>
                            <span class="menu-text"> Main Data </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="sub-menu hidden" id="menuEmail">
                            <li class="menu-item">
                                <a class="menu-link" href="{{ route('list-barang') }}">
                                    <span class="menu-text">Data Barang</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link" href="{{ route('Data Tambahan') }}">
                                    <span class="menu-text">Data Tambahan</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-title">Activities</li>
                    <li class="menu-item">
                        <a class="menu-link" data-hs-collapse="#menuPages" href="javascript:void(0)">
                            <span class="menu-icon"><i data-lucide="truck"></i></span>
                            <span class="menu-text"> Barang Masuk </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="sub-menu hidden" id="menuPages">
                            <li class="menu-item">
                                <a class="menu-link" href="#">
                                    <span class="menu-text">History</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link" data-hs-collapse="#menuProjects" href="javascript:void(0)">
                            <span class="menu-icon">
                                <i data-lucide="arrow-left-from-line"></i>
                            </span>
                            <span class="menu-text"> Barang Keluar </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="sub-menu hidden" id="menuProjects">
                            <li class="menu-item">
                                <a class="menu-link" href="{{ route('orders') }}">
                                    <span class="menu-text">Orders</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link" href="project-detail.html">
                                    <span class="menu-text">Details</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-title">Components</li>
                    <li class="menu-item">
                        <a class="menu-link" data-hs-collapse="#menuTables" href="javascript:void(0)">
                            <span class="menu-icon">
                                <i data-lucide="grid"></i>
                            </span>
                            <span class="menu-text"> Tables </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="sub-menu hidden" id="menuTables">
                            <li class="menu-item">
                                <a class="menu-link" href="tables-basic.html">
                                    <span class="menu-text">Basic</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link" href="tables-datatables.html">
                                    <span class="menu-text">Data Tables</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
        <!-- Sidenav Menu End  -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="page-content">
            <!-- Topbar Start -->
            <header class="app-header flex items-center gap-4 px-4">

                <!-- App Logo -->
                <a class="logo-box" href="index.html">
                    <!-- Light Logo -->
                    <div class="logo-light">
                        <img alt="Light logo" class="logo-lg h-6" src="{{ asset('assets/images/logo-light.png') }}">
                        <img alt="Small logo" class="logo-sm h-6" src="{{ asset('assets/images/logo-sm.png') }}">
                    </div>

                    <!-- Dark Logo -->
                    <div class="logo-dark">
                        <img alt="Dark logo" class="logo-lg h-6" src="{{ asset('assets/images/logo-dark.png') }}">
                        <img alt="Small logo" class="logo-sm h-6" src="{{ asset('assets/images/logo-sm.png') }}">
                    </div>
                </a>

                <!-- Sidenav Menu Toggle Button -->
                <button class="nav-link p-2" id="button-toggle-menu">
                    <span class="sr-only">Menu Toggle Button</span>
                    <span class="flex items-center justify-center">
                        <i class="h-5 w-5" data-lucide="menu"></i>
                    </span>
                </button>

                <div class="me-auto">
                    <div class="hs-dropdown relative hidden lg:block">
                        <button class="hs-dropdown-toggle nav-link" type="button">
                            Create New <i class="uil uil-angle-down"></i>
                        </button>

                        <div
                            class="hs-dropdown-menu duration hs-dropdown-open:opacity-100 !mt-1 hidden rounded bg-white py-2 opacity-0 shadow transition-[opacity,margin] dark:border dark:border-gray-700 dark:bg-gray-800">
                            <a class="flex items-center px-4 py-1.5 text-sm text-gray-500 hover:bg-slate-100 hover:text-slate-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                href="javascript:void(0)">
                                <i class="uil uil-bag me-1 text-base"></i>
                                <span>New Projects</span>
                            </a>
                            <a class="flex items-center px-4 py-1.5 text-sm text-gray-500 hover:bg-slate-100 hover:text-slate-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                href="javascript:void(0)">
                                <i class="uil uil-user-plus me-1 text-base"></i>
                                <span>Create Users</span>
                            </a>
                            <a class="flex items-center px-4 py-1.5 text-sm text-gray-500 hover:bg-slate-100 hover:text-slate-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                href="javascript:void(0)">
                                <i class="uil uil-chart-pie me-1 text-base"></i>
                                <span>Revenue Report</span>
                            </a>
                            <a class="flex items-center px-4 py-1.5 text-sm text-gray-500 hover:bg-slate-100 hover:text-slate-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                href="javascript:void(0)">
                                <i class="uil uil-cog me-1 text-base"></i>
                                <span>Settings</span>
                            </a>
                            <hr class="my-3 border-gray-200 dark:border-gray-600">
                            <a class="flex items-center px-4 py-1.5 text-sm text-gray-500 hover:bg-slate-100 hover:text-slate-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                href="javascript:void(0)">
                                <i class="uil uil-question-circle me-1 text-base"></i>
                                <span>Help & Support</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Fullscreen Toggle Button -->
                <div class="hidden md:flex">
                    <button class="nav-link p-2" data-toggle="fullscreen" type="button">
                        <span class="sr-only">Fullscreen Mode</span>
                        <span class="flex items-center justify-center">
                            <i class="h-5 w-5" data-lucide="maximize"></i>
                        </span>
                    </button>
                </div>
                <!-- Language Dropdown Button -->
                <div class="relative hidden lg:block">
                    <div class="hs-dropdown relative">
                        <div
                            class="hs-dropdown-menu duration hs-dropdown-open:opacity-100 !mt-4 hidden w-40 rounded bg-white py-2 opacity-0 shadow transition-[opacity,margin] dark:border dark:border-gray-700 dark:bg-gray-800">
                            <!-- item-->
                            <a class="flex items-center gap-2.5 px-3 py-2 text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                href="javascript:void(0);">
                                <img alt="user-image" class="h-4"
                                    src="{{ asset('assets/images/flags/us.jpg') }}">
                                <span class="align-middle">English</span>
                            </a>

                            <!-- item-->
                            <a class="flex items-center gap-2.5 px-3 py-2 text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                href="javascript:void(0);">
                                <img alt="user-image" class="h-4" src="assets/images/flags/germany.jpg">
                                <span class="align-middle">German</span>
                            </a>

                            <!-- item-->
                            <a class="flex items-center gap-2.5 px-3 py-2 text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                href="javascript:void(0);">
                                <img alt="user-image" class="h-4" src="assets/images/flags/italy.jpg">
                                <span class="align-middle">Italian</span>
                            </a>

                            <!-- item-->
                            <a class="flex items-center gap-2.5 px-3 py-2 text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                href="javascript:void(0);">
                                <img alt="user-image" class="h-4" src="assets/images/flags/spain.jpg">
                                <span class="align-middle">Spanish</span>
                            </a>

                            <!-- item-->
                            <a class="flex items-center gap-2.5 px-3 py-2 text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                href="javascript:void(0);">
                                <img alt="user-image" class="h-4" src="assets/images/flags/russia.jpg">
                                <span class="align-middle">Russian</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Notification Bell Button -->
                <div class="relative hidden lg:flex">
                    <div class="hs-dropdown relative">
                        <button class="hs-dropdown-toggle nav-link" type="button">
                            <span class="sr-only">View notifications</span>
                            <span class="flex items-center justify-center">
                                <i class="h-5 w-5" data-lucide="bell"></i>
                            </span>
                        </button>

                        <div
                            class="hs-dropdown-menu duration hs-dropdown-open:opacity-100 !mt-4 hidden w-80 rounded bg-white py-2 opacity-0 shadow transition-[opacity,margin] dark:border dark:border-gray-700 dark:bg-gray-800">
                            <div class="p-3">
                                <div class="flex items-center justify-between">
                                    <h6 class="text-sm text-gray-500 dark:text-gray-200"> Notification</h6>
                                    <a class="text-gray-500 dark:text-gray-200" href="javascript: void(0);">
                                        <small>Clear All</small>
                                    </a>
                                </div>
                            </div>

                            <div class="h-80 py-4" data-simplebar>

                                <a class="block border-b dark:border-gray-600" href="javascript:void(0);">
                                    <div
                                        class="px-3 py-3 text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0">
                                                <div
                                                    class="bg bg-primary flex h-9 w-9 items-center justify-center rounded-full text-white">
                                                    <i class="uil uil-user-plus text-lg"></i>
                                                </div>
                                            </div>
                                            <div class="ms-2 flex-grow truncate">
                                                <h5 class="mb-1 text-sm font-semibold dark:text-white">New user
                                                    registered.</h5>
                                                <small class="noti-item-subtitle text-muted">5 hours ago</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a class="block border-b dark:border-gray-600" href="javascript:void(0);">
                                    <div
                                        class="px-3 py-3 text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0">
                                                <img alt="" class="h-9 w-9 rounded-full"
                                                    src="assets/images/users/avatar-1.jpg">
                                            </div>
                                            <div class="ms-2 flex-grow truncate">
                                                <h5 class="mb-1 text-sm font-semibold dark:text-white">Karen Robinson
                                                </h5>
                                                <small class="noti-item-subtitle text-muted">Wow ! this admin looks
                                                    good
                                                    and awesome design</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a class="block border-b dark:border-gray-600" href="javascript:void(0);">
                                    <div
                                        class="px-3 py-3 text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0">
                                                <img alt="" class="h-9 w-9 rounded-full"
                                                    src="assets/images/users/avatar-2.jpg">
                                            </div>
                                            <div class="ms-2 flex-grow truncate">
                                                <h5 class="mb-1 text-sm font-semibold dark:text-white">Cristina Pride
                                                </h5>
                                                <small class="noti-item-subtitle text-muted">Hi, How are you? What
                                                    about
                                                    our next meeting</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a class="block border-b dark:border-gray-600" href="javascript:void(0);">
                                    <div
                                        class="px-3 py-3 text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0">
                                                <div
                                                    class="bg bg-success flex h-9 w-9 items-center justify-center rounded-full text-white">
                                                    <i class="uil uil-comment-message text-lg"></i>
                                                </div>
                                            </div>
                                            <div class="ms-2 flex-grow truncate">
                                                <h5 class="mb-1 text-sm font-semibold dark:text-white">Jaclyn Brunswick
                                                    commented on Dashboard</h5>
                                                <small class="noti-item-subtitle text-muted">1 min ago</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a class="block border-b dark:border-gray-600" href="javascript:void(0);">
                                    <div
                                        class="px-3 py-3 text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0">
                                                <div
                                                    class="bg bg-danger flex h-9 w-9 items-center justify-center rounded-full text-white">
                                                    <i class="uil uil-comment-message text-lg"></i>
                                                </div>
                                            </div>
                                            <div class="ms-2 flex-grow truncate">
                                                <h5 class="mb-1 text-sm font-semibold dark:text-white">Caleb Flakelar
                                                    commented on Admin</h5>
                                                <small class="noti-item-subtitle text-muted">4 days ago</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a class="block" href="javascript:void(0);">
                                    <div
                                        class="px-3 py-3 text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0">
                                                <div
                                                    class="bg bg-primary flex h-9 w-9 items-center justify-center rounded-full text-white">
                                                    <i class="uil uil-heart text-lg"></i>
                                                </div>
                                            </div>
                                            <div class="ms-2 flex-grow truncate">
                                                <h5 class="mb-1 text-sm font-semibold dark:text-white">Carlos Crouch
                                                    liked <b>Admin</b></h5>
                                                <small class="noti-item-subtitle text-muted">13 days ago</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <a class="text-primary block p-2 text-center font-semibold" href="javascript:void(0);">
                                View All
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Light/Dark Toggle Button -->
                <div class="hidden lg:flex">
                    <button class="nav-link p-2" id="light-dark-mode" type="button">
                        <span class="sr-only">Light/Dark Mode</span>
                        <span class="flex items-center justify-center">
                            <i class="uil uil-moon block text-2xl dark:hidden"></i>
                            <i class="uil uil-sun hidden text-2xl dark:block"></i>
                        </span>
                    </button>
                </div>

                <!-- Profile Dropdown Button -->
                <div class="relative">
                    <div class="hs-dropdown relative">
                        <button class="hs-dropdown-toggle nav-link flex items-center gap-2" type="button">
                            <img alt="user-image" class="h-8 rounded-full"
                                src="{{ asset('assets/images/users/avatar-1.jpg') }}">
                            <span class="hidden gap-0.5 text-start md:flex">
                                <h5 class="text-sm">{{ Auth::user()->name }}</h5>
                                <i class="uil uil-angle-down"></i>
                            </span>
                        </button>

                        <div
                            class="hs-dropdown-menu duration hs-dropdown-open:opacity-100 !mt-4 hidden rounded bg-white py-2 opacity-0 shadow transition-[opacity,margin] dark:border dark:border-gray-700 dark:bg-gray-800">
                            <!-- item-->
                            <h6 class="flex items-center px-3 py-2 text-gray-800 dark:text-gray-400">Welcome !</h6>

                            <!-- item-->
                            <a class="flex items-center gap-2 px-4 py-1.5 text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                href="pages-profile.html">
                                <i class="fill-secondary/20 h-4 w-4" data-lucide="user-2"></i>
                                <span>My Account</span>
                            </a>

                            <!-- item-->
                            <a class="flex items-center gap-2 px-4 py-1.5 text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                href="auth-lock-screen.html">
                                <i class="fill-secondary/20 h-4 w-4" data-lucide="lock"></i>
                                <span>Lock Screen</span>
                            </a>

                            <hr class="my-1 dark:border-gray-600">
                            <!-- item-->
                            <a class="flex items-center gap-2 px-4 py-1.5 text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                href="{{ route('logout') }}">
                                <i class="fill-secondary/20 h-4 w-4" data-lucide="log-out"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Theme Setting Button -->

                <div class="flex">
                    <button class="nav-link p-2" data-hs-overlay="#theme-customization" type="button">
                        <span class="sr-only">Customization</span>
                        <span class="flex items-center justify-center">
                            <i class="h-5 w-5" data-lucide="settings"></i>
                        </span>
                    </button>
                </div>
            </header>
            <!-- Topbar End -->
            {{-- content start --}}
            <main class="p-6">
                <!-- Page Title Start -->
                <div class="mb-5 flex items-center justify-between">
                    <h4 class="text-lg font-medium text-gray-900 first-letter:uppercase dark:text-gray-200">
                        {{ Route::currentRouteName() }}
                    </h4>
                    <div class="hidden items-center gap-2.5 font-semibold md:flex">
                        <div class="flex items-center gap-2">
                            <a class="text-sm font-medium text-gray-700 first-letter:uppercase dark:text-gray-400"
                                href="{{ Route::currentRouteName() }}">{{ Route::currentRouteName() }}</a>
                        </div>
                        <span class="opacity-30">/</span>
                        <div class="flex items-center">
                            <a aria-current="page" class="text-sm font-medium text-gray-500 dark:text-gray-300"
                                href="{{ route('dashboard') }}">Dashboard</a>
                        </div>
                    </div>
                </div>
                @yield('content')
            </main>
            {{-- end content --}}
            <!-- Footer Start -->
            <footer class="footer mt-auto flex h-16 items-center border-t border-gray-200 px-6 dark:border-gray-600">
                <div class="flex w-full justify-center gap-4 md:justify-between">
                    <div>
                        <script>
                            document.write(new Date().getFullYear())
                        </script> © Shreyu theme - <a href="https://coderthemes.com/"
                            target="_blank">Coderthemes</a>
                    </div>
                    <div class="item-center hidden gap-4 md:flex md:justify-end">
                        <a class="text-sm leading-5 text-zinc-600 transition hover:text-zinc-900 dark:text-zinc-400 dark:hover:text-white"
                            href="javascript: void(0);">About</a>
                        <a class="text-sm leading-5 text-zinc-600 transition hover:text-zinc-900 dark:text-zinc-400 dark:hover:text-white"
                            href="javascript: void(0);">Support</a>
                        <a class="text-sm leading-5 text-zinc-600 transition hover:text-zinc-900 dark:text-zinc-400 dark:hover:text-white"
                            href="javascript: void(0);">Contact
                            Us</a>
                    </div>
                </div>
            </footer>
            <!-- Footer End -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>

    <!-- Theme Settings Offcanvas -->
    <div>
        <div class="hs-overlay hs-overlay-open:translate-x-0 card fixed right-0 top-0 z-[60] hidden h-full w-full max-w-xs translate-x-full transform rounded-none border-none transition-all duration-300"
            data-hs-overlay-scroll="true" id="theme-customization" tabindex="-1">
            <div class="bg-primary flex h-16 items-center gap-3 px-6 text-white">
                <h5 class="flex-grow text-base">Theme Settings</h5>
                <button data-fc-dismiss type="button"><i class="uil uil-multiply text-xl"></i></button>
            </div>

            <div class="h-[calc(100vh-128px)]" data-simplebar>
                <div class="p-6">
                    <div class="mb-6">
                        <h5 class="mb-3 text-sm font-semibold">Theme</h5>
                        <div class="flex flex-col gap-2">
                            <div class="flex items-center">
                                <input class="form-switch form-switch-sm" id="layout-color-light" name="data-mode"
                                    type="checkbox" value="light">
                                <label class="ms-1.5" for="layout-color-light"> Light </label>
                            </div>

                            <div class="flex items-center">
                                <input class="form-switch form-switch-sm" id="layout-color-dark" name="data-mode"
                                    type="checkbox" value="dark">
                                <label class="ms-1.5" for="layout-color-dark"> Dark </label>
                            </div>
                        </div>
                    </div>

                    <div class="mb-6">
                        <h5 class="mb-3 text-sm font-semibold">Direction</h5>
                        <div class="flex flex-col gap-2">
                            <div class="flex items-center">
                                <input class="form-switch form-switch-sm" id="direction-ltr" name="dir"
                                    type="checkbox" value="ltr">
                                <label class="ms-1.5" for="direction-ltr"> LTR </label>
                            </div>

                            <div class="flex items-center">
                                <input class="form-switch form-switch-sm" id="direction-rtl" name="dir"
                                    type="checkbox" value="rtl">
                                <label class="ms-1.5" for="direction-rtl"> RTL </label>
                            </div>
                        </div>
                    </div>

                    <div class="mb-6 hidden 2xl:block">
                        <h5 class="mb-3 text-sm font-semibold">Content Width</h5>
                        <div class="flex flex-col gap-2">
                            <div class="flex items-center">
                                <input class="form-switch form-switch-sm" id="layout-mode-default"
                                    name="data-layout-width" type="checkbox" value="default">
                                <label class="ms-1.5" for="layout-mode-default"> Fluid </label>
                            </div>

                            <div class="flex items-center">
                                <input class="form-switch form-switch-sm" id="layout-mode-boxed"
                                    name="data-layout-width" type="checkbox" value="boxed">
                                <label class="ms-1.5" for="layout-mode-boxed"> Boxed </label>
                            </div>
                        </div>
                    </div>

                    <div class="mb-6">
                        <h5 class="mb-3 text-sm font-semibold">Sidenav View</h5>
                        <div class="flex flex-col gap-2">
                            <div class="flex items-center">
                                <input class="form-switch form-switch-sm" id="sidenav-view-default"
                                    name="data-sidenav-view" type="checkbox" value="default">
                                </label>
                                <label class="ms-1.5" for="sidenav-view-default"> Default </label>
                            </div>

                            <div class="flex items-center">
                                <input class="form-switch form-switch-sm" id="sidenav-view-sm"
                                    name="data-sidenav-view" type="checkbox" value="sm">
                                <label class="ms-1.5" for="sidenav-view-sm"> Small </label>
                            </div>

                            <div class="flex items-center">
                                <input class="form-switch form-switch-sm" id="sidenav-view-md"
                                    name="data-sidenav-view" type="checkbox" value="md">
                                <label class="ms-1.5" for="sidenav-view-md"> Compact </label>
                            </div>

                            <div class="flex items-center">
                                <input class="form-switch form-switch-sm" id="sidenav-view-mobile"
                                    name="data-sidenav-view" type="checkbox" value="mobile">
                                <label class="ms-1.5" for="sidenav-view-mobile"> Mobile </label>
                            </div>

                            <div class="flex items-center">
                                <input class="form-switch form-switch-sm" id="sidenav-view-hidden"
                                    name="data-sidenav-view" type="checkbox" value="hidden">
                                <label class="ms-1.5" for="sidenav-view-hidden"> Hidden </label>
                            </div>


                        </div>
                    </div>

                    <div class="mb-6">
                        <h5 class="mb-3 text-sm font-semibold">Menu Color</h5>
                        <div class="flex flex-col gap-2">
                            <div class="flex items-center">
                                <input class="form-switch form-switch-sm" id="menu-color-light"
                                    name="data-menu-color" type="checkbox" value="light">
                                <label class="ms-1.5" for="menu-color-light"> Light </label>
                            </div>

                            <div class="flex items-center">
                                <input class="form-switch form-switch-sm" id="menu-color-dark" name="data-menu-color"
                                    type="checkbox" value="dark">
                                <label class="ms-1.5" for="menu-color-dark"> Dark </label>
                            </div>
                        </div>
                    </div>

                    <div class="mb-6">
                        <h5 class="mb-3 text-sm font-semibold">Topbar Color</h5>
                        <div class="flex flex-col gap-2">
                            <div class="flex items-center">
                                <input class="form-switch form-switch-sm" id="topbar-color-light"
                                    name="data-topbar-color" type="checkbox" value="light">
                                <label class="ms-1.5" for="topbar-color-light"> Light </label>
                            </div>

                            <div class="flex items-center">
                                <input class="form-switch form-switch-sm" id="topbar-color-dark"
                                    name="data-topbar-color" type="checkbox" value="dark">
                                <label class="ms-1.5" for="topbar-color-dark"> Dark </label>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h5 class="mb-3 text-sm font-semibold">Layout Position</h5>

                        <div class="btn-radio flex">
                            <input class="form-radio hidden" id="layout-position-fixed" name="data-layout-position"
                                type="radio" value="fixed">
                            <label class="btn rounded-e-none bg-gray-100 dark:bg-gray-700"
                                for="layout-position-fixed">Fixed</label>
                            <input class="form-radio hidden" id="layout-position-scrollable"
                                name="data-layout-position" type="radio" value="scrollable">
                            <label class="btn rounded-s-none bg-gray-100 dark:bg-gray-700"
                                for="layout-position-scrollable">Scrollable</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex h-16 items-center gap-4 border-t border-gray-300 p-4 px-6 dark:border-gray-600">
                <button class="btn bg-primary w-full text-white" id="reset-layout" type="button">Reset</button>
            </div>
        </div>
    </div>

    @yield('script')
    <!-- Flatpickr Plugin Js -->
    <script src="{{ asset('assets/libs/flatpickr/flatpickr.min.js') }}"></script>
    <!-- Flatpickr Demo js -->
    <script src="{{ asset('assets/js/pages/form-flatpickr.js') }}"></script>
    <!-- Plugin Js -->
    <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/libs/lucide/umd/lucide.min.js') }}"></script>
    <script src="{{ asset('assets/libs/preline/preline.js') }}"></script>
    <!-- App Js -->
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>
    <!-- page js -->
    <script src="{{ asset('assets/js/pages/dashboard.init.js') }}"></script>

</body>

</html>
