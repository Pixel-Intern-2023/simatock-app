<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ Route::currentRouteName() }} | Simatock-app</title>
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
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/mask@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/persist@3.x.x/dist/cdn.min.js"></script>
    <!-- Alpine Core -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    {{-- sweet alert --}}
    <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    @yield('scriptTop')
</head>

<body>
    <div class="wrapper flex">

        <!-- Sidenav Menu -->
        <div class="app-menu">

            <!-- App Logo -->
            <a class="logo-box" href="{{ route('dashboard') }}">
                <!-- Light Logo -->
                <div class="logo-light">
                    @foreach ($data as $item)
                    <h1 class="logo-lg text-xl">{{ $item->warehouse_name }}</h1>
                        <h1 class="logo-sm text-xl">
                            {{ substr($item->warehouse_name, 0, 1) . substr(strstr($item->warehouse_name, ' '), 1, 1) }}
                        </h1>
                    @endforeach
                </div>
                <!-- Dark Logo -->
                <div class="logo-dark">
                    @foreach ($data as $item)
                    <h1 class="logo-lg text-xl">{{ $item->warehouse_name }}</h1>
                        <h1 class="logo-sm text-xl">
                            {{ substr($item->warehouse_name, 0, 1) . substr(strstr($item->warehouse_name, ' '), 1, 1) }}
                        </h1>
                    @endforeach
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
                                <a class="menu-link" href="{{ route('List Barang') }}">
                                    <span class="menu-text">Data Barang</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link" href="{{ route('List Suplier') }}">
                                    <span class="menu-text">Data Suplier</span>
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
                            <span class="menu-text"> Pelayanan </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="sub-menu hidden" id="menuPages">
                            <li class="menu-item">
                                <a class="menu-link" href="{{ route('Baru Ditambahkan') }}">
                                    <span class="menu-text">Barang Masuk</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link" href="{{ route('Barang Keluar') }}">
                                    <span class="menu-text">Barang Keluar</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link" data-hs-collapse="#menuTables" href="javascript:void(0)">
                            <span class="menu-icon">
                                <i data-lucide="alert-circle"></i>
                            </span>
                            <span class="menu-text"> Info </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="sub-menu hidden" id="menuTables">
                            <li class="menu-item">
                                <a class="menu-link" href="{{ route('List Stok Habis') }}">
                                    <span class="menu-text">Stok Habis</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link" href="{{ route('List Admin') }}">
                                    <span class="menu-text">List Admin</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link" href="{{ route('Aktifitas') }}">
                                    <span class="menu-text">Aktifitas</span>
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
            <header class="app-header flex items-center gap-4 px-9">

                <!-- App Logo -->
                <a class="logo-box" href="{{ route('dashboard') }}">
                    <!-- Light Logo -->
                    <div class="logo-light">
                        @foreach ($data as $item)
                        <h1 class="logo-lg text-xl">{{ $item->warehouse_name }}</h1>
                            <h1 class="logo-sm text-xl">
                                {{ substr($item->warehouse_name, 0, 1) . substr(strstr($item->warehouse_name, ' '), 1, 1) }}
                            </h1>
                            @endforeach
                        </div>

                        <!-- Dark Logo -->
                        <div class="logo-dark">
                            @foreach ($data as $item)
                            <h1 class="logo-lg text-xl">{{ $item->warehouse_name }}</h1>
                            <h1 class="logo-sm text-xl">
                                {{ substr($item->warehouse_name, 0, 1) . substr(strstr($item->warehouse_name, ' '), 1, 1) }}
                            </h1>
                            @endforeach
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
                            Tambah Data <i class="uil uil-angle-down"></i>
                        </button>
                        <div
                            class="hs-dropdown-menu duration hs-dropdown-open:opacity-100 !mt-1 hidden rounded bg-white py-2 opacity-0 shadow transition-[opacity,margin] dark:border dark:border-gray-700 dark:bg-gray-800">
                            <a class="flex items-center px-4 py-1.5 text-sm text-gray-500 hover:bg-slate-100 hover:text-slate-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                            href="{{ route('Tambah Barang') }}">
                                <i class="uil uil-box me-1 text-base"></i>
                                <span>Tambah Data Barang</span>
                            </a>
                            <a class="flex items-center px-4 py-1.5 text-sm text-gray-500 hover:bg-slate-100 hover:text-slate-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                href="{{ route('register') }}">
                                <i class="uil uil-user-plus me-1 text-base"></i>
                                <span>Daftar Admin</span>
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
                <!-- Light/Dark Toggle Button -->
                <div class="lg:flex">
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
                                src="{{ asset('assets/images/profile/' . (Auth::user()->gender == 'p' ? 'female.jpg' : 'male.jpg')) }}">
                            <span class="hidden gap-0.5 text-start md:flex">
                                <h5 class="text-sm">{{ Auth::user()->name }}</h5>
                                <i class="uil uil-angle-down"></i>
                            </span>
                        </button>

                        <div
                        class="hs-dropdown-menu duration hs-dropdown-open:opacity-100 !mt-4 hidden rounded bg-white py-2 opacity-0 shadow transition-[opacity,margin] dark:border dark:border-gray-700 dark:bg-gray-800">
                            <!-- item-->
                            <h6 class="flex items-center px-3 py-2 text-gray-800 dark:text-gray-400">Welcome
                                {{ Auth::user()->name }}!</h6>

                                <!-- item-->
                            <a class="flex items-center gap-2 px-4 py-1.5 text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                href="{{ route('Profile') }}">
                                <i class="fill-secondary/20 h-4 w-4" data-lucide="user-2"></i>
                                <span>Profile</span>
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
            </header>
            <!-- Topbar End -->
            {{-- content start --}}
            <main class="p-6">
                <!-- Page Title Start -->
                <div class="mb-5 flex items-center justify-between">
                    <h4 class="text-lg font-semibold text-gray-900 first-letter:uppercase dark:text-gray-200">
                        {{ Route::currentRouteName() }}
                    </h4>
                    <div class="hidden items-center gap-2.5 font-semibold md:flex">
                        <div class="flex items-center gap-2">
                            <a class="text-sm font-medium text-gray-700 first-letter:uppercase dark:text-gray-400"
                                href="#">{{ Route::currentRouteName() }}</a>
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
                        </script> © Simatock-App
                    </div>
                </div>
            </footer>
            <!-- Footer End -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    @yield('script')
    <!-- Flatpickr Plugin Js -->
    <script src="{{ asset('assets/libs/flatpickr/flatpickr.min.js') }}"></script>
    <!-- Flatpickr Demo js -->
    <script src="{{ asset('assets/js/pages/form-flatpickr.js') }}"></script>
    <!-- Plugin Js -->
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/libs/lucide/umd/lucide.min.js') }}"></script>
    <script src="{{ asset('assets/libs/preline/preline.js') }}"></script>
    <!-- App Js -->
    <script src="{{ asset('assets/js/app.js') }}"></script>

</body>

</html>
