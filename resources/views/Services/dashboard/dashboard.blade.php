@extends('Layouts.base')
@section('content')

        <!-- Page Title End -->

        <div class="space-y-5">
            <div class="grid gap-5 md:grid-cols-2 xl:grid-cols-4">
                <div class="card">
                    <div class="p-5">
                        <div class="flex">
                            <div class="flex-grow">
                                <span class="text-xs font-bold uppercase text-gray-500 dark:text-gray-400">Today
                                    Revenue</span>
                                <h3 class="text-2xl dark:text-gray-300">$2100</h3>
                            </div>
                            <div class="flex-shrink-0 text-center">
                                <div class="apex-charts" id="today-revenue-chart"></div>
                                <span class="text-success fw-bold fs-13"><i class='uil uil-arrow-up'></i>
                                    10.21%</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="p-5">
                        <div class="flex">
                            <div class="flex-grow">
                                <span class="text-xs font-bold uppercase text-gray-500 dark:text-gray-400">Product
                                    Sold</span>
                                <h3 class="text-2xl dark:text-gray-300">558</h3>
                            </div>
                            <div class="align-self-center flex-shrink-0">
                                <div class="apex-charts" id="today-product-sold-chart">
                                </div>
                                <span class="text-danger fw-bold fs-13"><i class='uil uil-arrow-down'></i>
                                    5.05%</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="p-5">
                        <div class="flex">
                            <div class="flex-grow">
                                <span class="text-xs font-bold uppercase text-gray-500 dark:text-gray-400">New
                                    Customers</span>
                                <h3 class="text-2xl dark:text-gray-300">65</h3>
                            </div>
                            <div class="align-self-center flex-shrink-0">
                                <div class="apex-charts" id="today-new-customer-chart">
                                </div>
                                <span class="text-success fw-bold fs-13"><i class='uil uil-arrow-up'></i>
                                    25.16%</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="p-5">
                        <div class="flex">
                            <div class="flex-grow">
                                <span class="text-xs font-bold uppercase text-gray-500 dark:text-gray-400">New
                                    Visitors</span>
                                <h3 class="text-2xl dark:text-gray-300">958</h3>
                            </div>
                            <div class="align-self-center flex-shrink-0">
                                <div class="apex-charts" id="today-new-visitors-chart">
                                </div>
                                <span class="text-danger fw-bold fs-13"><i class='uil uil-arrow-down'></i>
                                    5.05%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- stats + charts -->
            <div class="grid gap-5 xl:grid-cols-4">
                <!-- overview -->
                <div class="card">
                    <div>
                        <div class="mb-4 flex items-center justify-between p-5">
                            <h5 class="mb-0 uppercase dark:text-gray-300">Overview</h5>

                            <div class="h-4">
                                <div
                                    class="hs-dropdown relative inline-flex [--placement:left-top] rtl:[--placement:right-top]">
                                    <button class="hs-dropdown-toggle rounded" type="button">
                                        <i class="uil uil-ellipsis-v text-base"></i>
                                    </button>

                                    <div
                                        class="hs-dropdown-menu duration hs-dropdown-open:opacity-100 z-10 hidden w-40 rounded bg-white py-2 opacity-0 shadow transition-[opacity,margin] dark:divide-gray-600 dark:border dark:border-gray-700 dark:bg-gray-800">
                                        <a class="flex items-center gap-x-3.5 px-3 py-2 text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                            href="javascript:;">
                                            <i class="uil uil-edit-alt me-1.5"></i>
                                            <span>Edit</span>
                                        </a>
                                        <a class="flex items-center gap-x-3.5 px-3 py-2 text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                            href="javascript:;">
                                            <i class="uil uil-refresh me-1.5"></i>
                                            <span>Refresh</span>
                                        </a>
                                        <hr class="my-2 dark:border-gray-600">
                                        <a class="text-danger flex items-center gap-x-3.5 px-3 py-2 text-sm hover:bg-gray-100 dark:hover:bg-gray-700"
                                            href="javascript:;">
                                            <i class="uil uil-trash-alt me-1.5"></i>
                                            <span>Delete</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- stat 1 -->
                        <div class="flex border-b p-5 dark:border-gray-600">
                            <div class="flex-grow">
                                <h4 class="mb-1 mt-0 text-2xl dark:text-gray-300">121,000</h4>
                                <span class="text-gray-500 dark:text-gray-400">Total Visitors</span>
                            </div>
                            <i class="fill-secondary/20 stroke-secondary h-10 w-10" data-lucide="users"></i>
                        </div>

                        <!-- stat 2 -->
                        <div class="flex border-b p-5 dark:border-gray-600">
                            <div class="flex-grow">
                                <h4 class="mb-1 mt-0 text-2xl dark:text-gray-300">21,000</h4>
                                <span class="text-gray-500 dark:text-gray-400">Total Product Views</span>
                            </div>
                            <i class="fill-secondary/20 stroke-secondary h-10 w-10" data-lucide="image"></i>
                        </div>

                        <!-- stat 3 -->
                        <div class="flex border-b p-5 dark:border-gray-600">
                            <div class="flex-grow">
                                <h4 class="mb-1 mt-0 text-2xl dark:text-gray-300">$21.5</h4>
                                <span class="text-gray-500 dark:text-gray-400">Revenue Per Visitor</span>
                            </div>
                            <i class="fill-secondary/20 stroke-secondary h-10 w-10" data-lucide="shopping-bag"></i>
                        </div>

                        <!-- stat 4 -->
                        <div class="flex justify-end">
                            <a class="text-primary p-4" href="#">View All <i class="uil-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="xl:col-span-2">
                    <div class="card">
                        <div class="p-6">
                            <div class="flex items-center justify-between pb-3">
                                <h5 class="uppercase">Revenue</h5>

                                <div class="h-4">
                                    <div
                                        class="hs-dropdown relative inline-flex [--placement:left-top] rtl:[--placement:right-top]">
                                        <button class="hs-dropdown-toggle rounded" type="button">
                                            <i class="uil uil-ellipsis-v text-base"></i>
                                        </button>

                                        <div
                                            class="hs-dropdown-menu duration hs-dropdown-open:opacity-100 z-10 hidden w-40 rounded bg-white opacity-0 shadow transition-[opacity,margin] dark:divide-gray-600 dark:border dark:border-gray-700 dark:bg-gray-800">
                                            <a class="flex items-center gap-x-3.5 px-3 py-2 text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                                href="javascript:;">
                                                Today
                                            </a>
                                            <a class="flex items-center gap-x-3.5 px-3 py-2 text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                                href="javascript:;">
                                                7 Days
                                            </a>
                                            <a class="flex items-center gap-x-3.5 px-3 py-2 text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                                href="javascript:;">
                                                15 Days
                                            </a>
                                            <hr class="my-2 dark:border-gray-600">
                                            <a class="flex items-center gap-x-3.5 px-3 py-2 text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                                href="javascript:;">
                                                1 Months
                                            </a>
                                            <a class="flex items-center gap-x-3.5 px-3 py-2 text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                                href="javascript:;">
                                                6 Months
                                            </a>
                                            <hr class="my-2 dark:border-gray-600">
                                            <a class="flex items-center gap-x-3.5 px-3 py-2 text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                                href="javascript:;">
                                                1 Year
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="apex-charts mt-3" dir="ltr" id="revenue-chart"></div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="card">
                        <div class="p-5">
                            <div class="flex items-center justify-between">
                                <h5 class="uppercase">Targets</h5>

                                <div class="h-4">
                                    <div class="hs-dropdown relative inline-flex [--placement:left-top]">
                                        <button class="hs-dropdown-toggle rounded" type="button">
                                            <i class="uil uil-ellipsis-v text-base"></i>
                                        </button>

                                        <div
                                            class="hs-dropdown-menu duration hs-dropdown-open:opacity-100 z-10 hidden w-40 rounded bg-white py-2 opacity-0 shadow transition-[opacity,margin] dark:divide-gray-600 dark:border dark:border-gray-700 dark:bg-gray-800">
                                            <a class="flex items-center gap-x-3.5 px-3 py-2 text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                                href="javascript:;">
                                                <i class="uil uil-edit-alt me-1.5"></i>
                                                <span>Edit</span>
                                            </a>
                                            <a class="flex items-center gap-x-3.5 px-3 py-2 text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                                href="javascript:;">
                                                <i class="uil uil-refresh me-1.5"></i>
                                                <span>Refresh</span>
                                            </a>
                                            <hr class="my-2 dark:border-gray-600">
                                            <a class="text-danger flex items-center gap-x-3.5 px-3 py-2 text-sm hover:bg-gray-100 dark:hover:bg-gray-700"
                                                href="javascript:;">
                                                <i class="uil uil-trash-alt me-1.5"></i>
                                                <span>Delete</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="apex-charts mt-3" dir="ltr" id="targets-chart"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row -->

            <!-- products -->
            <div class="grid gap-5 xl:grid-cols-12">
                <div class="xl:col-span-5">
                    <div class="card">
                        <div class="p-5">
                            <div class="flex items-start justify-between">
                                <h5 class="uppercase">Sales By Category</h5>

                                <div class="h-4">
                                    <div
                                        class="hs-dropdown relative inline-flex [--placement:left-top] rtl:[--placement:bottom-left]">
                                        <button class="hs-dropdown-toggle rounded" type="button">
                                            <i class="uil uil-ellipsis-v text-base"></i>
                                        </button>

                                        <div
                                            class="hs-dropdown-menu duration hs-dropdown-open:opacity-100 z-10 hidden w-40 rounded bg-white py-2 opacity-0 shadow transition-[opacity,margin] dark:divide-gray-600 dark:border dark:border-gray-700 dark:bg-gray-800">
                                            <a class="flex items-center gap-x-3.5 px-3 py-2 text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                                href="javascript:;">
                                                <i class="uil uil-edit-alt me-1.5"></i>
                                                <span>Edit</span>
                                            </a>
                                            <a class="flex items-center gap-x-3.5 px-3 py-2 text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                                href="javascript:;">
                                                <i class="uil uil-refresh me-1.5"></i>
                                                <span>Refresh</span>
                                            </a>
                                            <hr class="my-2 dark:border-gray-600">
                                            <a class="text-danger flex items-center gap-x-3.5 px-3 py-2 text-sm hover:bg-gray-100 dark:hover:bg-gray-700"
                                                href="javascript:;">
                                                <i class="uil uil-trash-alt me-1.5"></i>
                                                <span>Delete</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="apex-charts my-4" dir="ltr" id="sales-by-category-chart"></div>
                        </div>
                    </div> <!-- end card-->
                </div> <!-- end col-->

                <div class="xl:col-span-7">
                    <div class="card">
                        <div class="p-5">
                            <div class="flex items-center justify-between">
                                <h5 class="uppercase">Recent Orders</h5>
                                <a class="btn bg-primary/90 btn-sm hover:bg-primary text-white" href="#">
                                    <i class='uil uil-export me-1'></i> Export
                                </a>
                            </div>
                            <div class="overflow-auto">
                                <div class="inline-block min-w-full align-middle">
                                    <div class="overflow-hidden">
                                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-600">
                                            <thead>
                                                <tr>
                                                    <th class="px-4 py-4 text-start text-sm font-semibold text-gray-500 dark:text-gray-400"
                                                        scope="col">
                                                        #</th>
                                                    <th class="px-4 py-4 text-start text-sm font-semibold text-gray-500 dark:text-gray-400"
                                                        scope="col">
                                                        Product</th>
                                                    <th class="px-4 py-4 text-start text-sm font-semibold text-gray-500 dark:text-gray-400"
                                                        scope="col">
                                                        Customer</th>
                                                    <th class="px-4 py-4 text-start text-sm font-semibold text-gray-500 dark:text-gray-400"
                                                        scope="col">
                                                        Price</th>
                                                    <th class="px-4 py-4 text-start text-sm font-semibold text-gray-500 dark:text-gray-400"
                                                        scope="col">
                                                        Status</th>
                                                </tr>
                                            </thead>
                                            <tbody class="divide-y divide-gray-200 dark:divide-gray-600">
                                                <tr class="hover:bg-gray-100 dark:hover:bg-transparent">
                                                    <td
                                                        class="whitespace-nowrap px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-400">
                                                        #98754</td>
                                                    <td
                                                        class="whitespace-nowrap px-4 py-4 text-sm text-gray-500 dark:text-gray-400">
                                                        ASOS Ridley High</td>
                                                    <td
                                                        class="whitespace-nowrap px-4 py-4 text-sm text-gray-500 dark:text-gray-400">
                                                        Otto B</td>
                                                    <td
                                                        class="whitespace-nowrap px-4 py-4 text-start text-gray-500 dark:text-gray-400">
                                                        $79.49</td>
                                                    <td
                                                        class="whitespace-nowrap px-4 py-4 text-start text-gray-500 dark:text-gray-400">
                                                        <span
                                                            class="bg-warning/10 text-warning inline-flex items-center gap-1.5 rounded px-1.5 py-0.5 text-xs font-medium">Pending</span>
                                                    </td>
                                                </tr>

                                                <tr class="hover:bg-gray-100 dark:hover:bg-transparent">
                                                    <td
                                                        class="whitespace-nowrap px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-400">
                                                        #98753</td>
                                                    <td
                                                        class="whitespace-nowrap px-4 py-4 text-sm text-gray-500 dark:text-gray-400">
                                                        Marco Lightweight Shirt</td>
                                                    <td
                                                        class="whitespace-nowrap px-4 py-4 text-sm text-gray-500 dark:text-gray-400">
                                                        Mark P</td>
                                                    <td
                                                        class="whitespace-nowrap px-4 py-4 text-start text-gray-500 dark:text-gray-400">
                                                        $125.49</td>
                                                    <td
                                                        class="whitespace-nowrap px-4 py-4 text-start text-gray-500 dark:text-gray-400">
                                                        <span
                                                            class="bg-success/10 text-success inline-flex items-center gap-1.5 rounded px-1.5 py-0.5 text-xs font-medium">Delivered</span>
                                                    </td>
                                                </tr>

                                                <tr class="hover:bg-gray-100 dark:hover:bg-transparent">
                                                    <td
                                                        class="whitespace-nowrap px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-400">
                                                        #98752</td>
                                                    <td
                                                        class="whitespace-nowrap px-4 py-4 text-sm text-gray-500 dark:text-gray-400">
                                                        Half Sleeve Shirt</td>
                                                    <td
                                                        class="whitespace-nowrap px-4 py-4 text-sm text-gray-500 dark:text-gray-400">
                                                        Dave B</td>
                                                    <td
                                                        class="whitespace-nowrap px-4 py-4 text-start text-gray-500 dark:text-gray-400">
                                                        $35.49</td>
                                                    <td
                                                        class="whitespace-nowrap px-4 py-4 text-start text-gray-500 dark:text-gray-400">
                                                        <span
                                                            class="bg-danger/10 text-danger inline-flex items-center gap-1.5 rounded px-1.5 py-0.5 text-xs font-medium">Declined</span>
                                                    </td>
                                                </tr>

                                                <tr class="hover:bg-gray-100 dark:hover:bg-transparent">
                                                    <td
                                                        class="whitespace-nowrap px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-400">
                                                        #98751</td>
                                                    <td
                                                        class="whitespace-nowrap px-4 py-4 text-sm text-gray-500 dark:text-gray-400">
                                                        Lightweight Jacket</td>
                                                    <td
                                                        class="whitespace-nowrap px-4 py-4 text-sm text-gray-500 dark:text-gray-400">
                                                        Shreyu N</td>
                                                    <td
                                                        class="whitespace-nowrap px-4 py-4 text-start text-gray-500 dark:text-gray-400">
                                                        $49.49</td>
                                                    <td
                                                        class="whitespace-nowrap px-4 py-4 text-start text-gray-500 dark:text-gray-400">
                                                        <span
                                                            class="bg-success/10 text-success inline-flex items-center gap-1.5 rounded px-1.5 py-0.5 text-xs font-medium">Declined</span>
                                                    </td>
                                                </tr>

                                                <tr class="hover:bg-gray-100 dark:hover:bg-transparent">
                                                    <td
                                                        class="whitespace-nowrap px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-400">
                                                        #98750</td>
                                                    <td
                                                        class="whitespace-nowrap px-4 py-4 text-sm text-gray-500 dark:text-gray-400">
                                                        Marco Shoes</td>
                                                    <td
                                                        class="whitespace-nowrap px-4 py-4 text-sm text-gray-500 dark:text-gray-400">
                                                        Rik N</td>
                                                    <td
                                                        class="whitespace-nowrap px-4 py-4 text-start text-gray-500 dark:text-gray-400">
                                                        $69.49</td>
                                                    <td
                                                        class="whitespace-nowrap px-4 py-4 text-start text-gray-500 dark:text-gray-400">
                                                        <span
                                                            class="bg-danger/10 text-danger inline-flex items-center gap-1.5 rounded px-1.5 py-0.5 text-xs font-medium">Declined</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div><!-- end table-responsive-->
                        </div>
                    </div> <!-- end card-->
                </div> <!-- end col-->
            </div>
            <!-- end row -->

            <!-- widgets -->
            <div class="grid gap-5 xl:grid-cols-3">
                <div class="card">
                    <div class="p-6">
                        <div class="divide-y dark:divide-gray-600">
                            <h6 class="mb-4 uppercase dark:text-gray-300">Top Performers</h6>

                            <div class="flex py-2.5">
                                <img alt="shreyu" class="me-3 h-12 rounded" src="assets/images/users/avatar-7.jpg">
                                <div class="flex-grow">
                                    <h5 class="mt-1 dark:text-gray-300">Shreyu N</h5>
                                    <h6 class="mt-1 font-normal text-gray-500 dark:text-gray-400">Senior Sales
                                        Guy</h6>
                                </div>
                                <div class="h-4">
                                    <div
                                        class="hs-dropdown relative inline-flex [--placement:left-top] rtl:[--placement:bottom-left]">
                                        <button class="hs-dropdown-toggle rounded" type="button">
                                            <i class="uil uil-ellipsis-v text-base"></i>
                                        </button>

                                        <div
                                            class="hs-dropdown-menu duration hs-dropdown-open:opacity-100 z-10 hidden w-52 rounded bg-white py-2 opacity-0 shadow transition-[opacity,margin] dark:divide-gray-600 dark:border dark:border-gray-700 dark:bg-gray-800">
                                            <a class="flex items-center gap-x-3.5 px-3 py-2 text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                                href="javascript:;">
                                                <i class="uil uil-edit-alt me-1.5"></i>
                                                <span>Edit</span>
                                            </a>
                                            <a class="flex items-center gap-x-3.5 px-3 py-2 text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                                href="javascript:;">
                                                <i class="uil uil-signout me-1.5"></i>
                                                <span>Remove from Team</span>
                                            </a>
                                            <hr class="my-2 dark:border-gray-600">
                                            <a class="text-danger flex items-center gap-x-3.5 px-3 py-2 text-sm hover:bg-gray-100 dark:hover:bg-gray-700"
                                                href="javascript:;">
                                                <i class="uil uil-trash-alt me-1.5"></i>
                                                <span>Delete</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex py-2.5">
                                <img alt="shreyu" class="me-3 h-12 rounded" src="assets/images/users/avatar-9.jpg">
                                <div class="flex-grow">
                                    <h5 class="mt-1 dark:text-gray-300">Greeva Y</h5>
                                    <h6 class="mt-1 font-normal text-gray-500 dark:text-gray-400">Social d-flex
                                        Campaign</h6>
                                </div>
                                <div class="h-4">
                                    <div
                                        class="hs-dropdown relative inline-flex [--placement:left-top] rtl:[--placement:bottom-left]">
                                        <button class="hs-dropdown-toggle rounded" type="button">
                                            <i class="uil uil-ellipsis-v text-base"></i>
                                        </button>

                                        <div
                                            class="hs-dropdown-menu duration hs-dropdown-open:opacity-100 z-10 hidden w-52 rounded bg-white opacity-0 shadow transition-[opacity,margin] dark:divide-gray-600 dark:border dark:border-gray-700 dark:bg-gray-800">
                                            <a class="flex items-center gap-x-3.5 px-3 py-2 text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                                href="javascript:;">
                                                <i class="uil uil-edit-alt me-1.5"></i>
                                                <span>Edit</span>
                                            </a>
                                            <a class="flex items-center gap-x-3.5 px-3 py-2 text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                                href="javascript:;">
                                                <i class="uil uil-signout me-1.5"></i>
                                                <span>Remove from Team</span>
                                            </a>
                                            <hr class="my-2 dark:border-gray-600">
                                            <a class="text-danger flex items-center gap-x-3.5 px-3 py-2 text-sm hover:bg-gray-100 dark:hover:bg-gray-700"
                                                href="javascript:;">
                                                <i class="uil uil-trash-alt me-1.5"></i>
                                                <span>Delete</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex py-2.5">
                                <img alt="shreyu" class="me-3 h-12 rounded" src="assets/images/users/avatar-4.jpg">
                                <div class="flex-grow">
                                    <h5 class="mt-1 dark:text-gray-300">Nik G</h5>
                                    <h6 class="mt-1 font-normal text-gray-500 dark:text-gray-400">Inventory
                                        Manager</h6>
                                </div>
                                <div class="h-4">
                                    <div
                                        class="hs-dropdown relative inline-flex [--placement:left-top] rtl:[--placement:bottom-left]">
                                        <button class="hs-dropdown-toggle rounded" type="button">
                                            <i class="uil uil-ellipsis-v text-base"></i>
                                        </button>

                                        <div
                                            class="hs-dropdown-menu duration hs-dropdown-open:opacity-100 z-10 hidden w-52 rounded bg-white opacity-0 shadow transition-[opacity,margin] dark:divide-gray-600 dark:border dark:border-gray-700 dark:bg-gray-800">
                                            <a class="flex items-center gap-x-3.5 px-3 py-2 text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                                href="javascript:;">
                                                <i class="uil uil-edit-alt me-1.5"></i>
                                                <span>Edit</span>
                                            </a>
                                            <a class="flex items-center gap-x-3.5 px-3 py-2 text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                                href="javascript:;">
                                                <i class="uil uil-signout me-1.5"></i>
                                                <span>Remove from Team</span>
                                            </a>
                                            <hr class="my-2 dark:border-gray-600">
                                            <a class="text-danger flex items-center gap-x-3.5 px-3 py-2 text-sm hover:bg-gray-100 dark:hover:bg-gray-700"
                                                href="javascript:;">
                                                <i class="uil uil-trash-alt me-1.5"></i>
                                                <span>Delete</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex py-2.5">
                                <img alt="shreyu" class="me-3 h-12 rounded" src="assets/images/users/avatar-1.jpg">
                                <div class="flex-grow">
                                    <h5 class="mt-1 dark:text-gray-300">Hardik G</h5>
                                    <h6 class="mt-1 font-normal text-gray-500 dark:text-gray-400">Sales Person
                                    </h6>
                                </div>
                                <div class="h-4">
                                    <div
                                        class="hs-dropdown relative inline-flex [--placement:left-top] rtl:[--placement:bottom-left]">
                                        <button class="hs-dropdown-toggle rounded" type="button">
                                            <i class="uil uil-ellipsis-v text-base"></i>
                                        </button>

                                        <div
                                            class="hs-dropdown-menu duration hs-dropdown-open:opacity-100 z-10 hidden w-52 rounded bg-white opacity-0 shadow transition-[opacity,margin] dark:divide-gray-600 dark:border dark:border-gray-700 dark:bg-gray-800">
                                            <a class="flex items-center gap-x-3.5 px-3 py-2 text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                                href="javascript:;">
                                                <i class="uil uil-edit-alt me-1.5"></i>
                                                <span>Edit</span>
                                            </a>
                                            <a class="flex items-center gap-x-3.5 px-3 py-2 text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                                href="javascript:;">
                                                <i class="uil uil-signout me-1.5"></i>
                                                <span>Remove from Team</span>
                                            </a>
                                            <hr class="my-2 dark:border-gray-600">
                                            <a class="text-danger flex items-center gap-x-3.5 px-3 py-2 text-sm hover:bg-gray-100 dark:hover:bg-gray-700"
                                                href="javascript:;">
                                                <i class="uil uil-trash-alt me-1.5"></i>
                                                <span>Delete</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex py-2.5">
                                <img alt="shreyu" class="me-3 h-12 rounded" src="assets/images/users/avatar-8.jpg">
                                <div class="flex-grow">
                                    <h5 class="mt-1 dark:text-gray-300">GB Patel G</h5>
                                    <h6 class="mt-1 font-normal text-gray-500 dark:text-gray-400">Sales Person
                                    </h6>
                                </div>
                                <div class="h-4">
                                    <div
                                        class="hs-dropdown relative inline-flex [--placement:left-top] rtl:[--placement:bottom-left]">
                                        <button class="hs-dropdown-toggle rounded" type="button">
                                            <i class="uil uil-ellipsis-v text-base"></i>
                                        </button>

                                        <div
                                            class="hs-dropdown-menu duration hs-dropdown-open:opacity-100 z-10 hidden w-52 rounded bg-white opacity-0 shadow transition-[opacity,margin] dark:divide-gray-600 dark:border dark:border-gray-700 dark:bg-gray-800">
                                            <a class="flex items-center gap-x-3.5 px-3 py-2 text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                                href="javascript:;">
                                                <i class="uil uil-edit-alt me-1.5"></i>
                                                <span>Edit</span>
                                            </a>
                                            <a class="flex items-center gap-x-3.5 px-3 py-2 text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                                href="javascript:;">
                                                <i class="uil uil-signout me-1.5"></i>
                                                <span>Remove from Team</span>
                                            </a>
                                            <hr class="my-2 dark:border-gray-600">
                                            <a class="text-danger flex items-center gap-x-3.5 px-3 py-2 text-sm hover:bg-gray-100 dark:hover:bg-gray-700"
                                                href="javascript:;">
                                                <i class="uil uil-trash-alt me-1.5"></i>
                                                <span>Delete</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- tasks -->
                <div class="card">
                    <div class="p-6">
                        <div class="mb-6 flex items-start justify-between">
                            <h6 class="uppercase dark:text-gray-300">Tasks</h6>
                            <a class="btn bg-primary btn-sm text-white" href="task-list.html">View All</a>
                        </div>

                        <div class="h-[335px]" data-simplebar>
                            <div class="space-y-6">
                                <div>
                                    <div class="mb-1 flex items-center gap-3">
                                        <input class="form-checkbox text-primary rounded" id="task1" type="checkbox">
                                        <label for="task1">
                                            Draft the new contract document for sales team
                                        </label>
                                    </div>
                                    <p class="ms-7 text-gray-500 dark:text-gray-400">Due on 24 Aug, 2022</p>
                                </div>

                                <div>
                                    <div class="mb-1 flex items-center gap-3">
                                        <input class="form-checkbox text-primary rounded" id="task2" type="checkbox">
                                        <label for="task2">
                                            iOS App home page
                                        </label>
                                    </div>
                                    <p class="ms-7 text-gray-500 dark:text-gray-400">Due on 23 Aug, 2022</p>
                                </div>

                                <div>
                                    <div class="mb-1 flex items-center gap-3">
                                        <input class="form-checkbox text-primary rounded" id="task3" type="checkbox">
                                        <label for="task3">
                                            Write a release note for Shreyu
                                        </label>
                                    </div>
                                    <p class="ms-7 text-gray-500 dark:text-gray-400">Due on 05 Aug, 2022</p>
                                </div>

                                <div>
                                    <div class="mb-1 flex items-center gap-3">
                                        <input class="form-checkbox text-primary rounded" id="task4" type="checkbox">
                                        <label for="task4">
                                            Invite Greeva to a project shreyu admin
                                        </label>
                                    </div>
                                    <p class="ms-7 text-gray-500 dark:text-gray-400">Due on 05 Aug, 2022</p>
                                </div>

                                <div>
                                    <div class="mb-1 flex items-center gap-3">
                                        <input class="form-checkbox text-primary rounded" id="task5" type="checkbox">
                                        <label for="task5">
                                            Enable analytics tracking for main website
                                        </label>
                                    </div>
                                    <p class="ms-7 text-gray-500 dark:text-gray-400">Due on 18 Aug, 2022</p>
                                </div>

                                <div>
                                    <div class="mb-1 flex items-center gap-3">
                                        <input class="form-checkbox text-primary rounded" id="task6" type="checkbox">
                                        <label for="task6">
                                            Invite user to a project
                                        </label>
                                    </div>
                                    <p class="ms-7 text-gray-500 dark:text-gray-400">Due on 24 Aug, 2022</p>
                                </div>
                                <div>
                                    <div class="mb-1 flex items-center gap-3">
                                        <input class="form-checkbox text-primary rounded" id="task7" type="checkbox">
                                        <label for="task7">
                                            Write a release note
                                        </label>
                                    </div>
                                    <p class="ms-7 text-gray-500 dark:text-gray-400">Due on 24 Aug, 2022</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="p-6">
                        <div class="flex items-center justify-between">
                            <h4 class="uppercase dark:text-gray-300">Recent Conversation</h4>
                            <div class="h-4">
                                <div class="hs-dropdown relative inline-flex">
                                    <button class="hs-dropdown-toggle rounded" type="button">
                                        <i class="uil uil-ellipsis-v text-base"></i>
                                    </button>

                                    <div
                                        class="hs-dropdown-menu duration hs-dropdown-open:opacity-100 z-10 hidden w-40 rounded bg-white opacity-0 shadow transition-[opacity,margin] dark:divide-gray-600 dark:border dark:border-gray-700 dark:bg-gray-800">
                                        <a class="flex items-center gap-x-3.5 px-3 py-2 text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                            href="javascript:;">
                                            <i class="uil uil-edit-alt me-1.5"></i>
                                            <span>Edit</span>
                                        </a>
                                        <a class="flex items-center gap-x-3.5 px-3 py-2 text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                            href="javascript:;">
                                            <i class="uil uil-refresh me-1.5"></i>
                                            <span>Refresh</span>
                                        </a>
                                        <hr class="my-2 dark:border-gray-600">
                                        <a class="text-danger flex items-center gap-x-3.5 px-3 py-2 text-sm hover:bg-gray-100 dark:hover:bg-gray-700"
                                            href="javascript:;">
                                            <i class="uil uil-trash-alt me-1.5"></i>
                                            <span>Delete</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="chat-conversation">
                            <div class="h-[314px]" data-simplebar>
                                <div class="space-y-6">
                                    <!-- Chat Left -->
                                    <div class="group flex items-start gap-3 pt-8 text-start">
                                        <div class="text-center">
                                            <img class="h-10 rounded-full" src="assets/images/users/avatar-5.jpg" />
                                            <p class="pt-0.5 text-xs">10:00</p>
                                        </div>

                                        <div
                                            class="max-w-3/4 bg-light dark:bg-secondary/30 relative rounded p-2 dark:text-gray-200">
                                            <p class="relative text-xs font-bold">Geneva</p>
                                            <p class="pt-1">Hello!</p>
                                        </div>
                                    </div>

                                    <!-- Chat Right -->
                                    <div class="group flex flex-row-reverse items-start gap-3 text-end">
                                        <div class="text-center">
                                            <img class="h-10 rounded-full" src="assets/images/users/avatar-1.jpg" />
                                            <p class="pt-0.5 text-xs">10:01</p>
                                        </div>

                                        <div
                                            class="max-w-3/4 bg-warning/20 dark:bg-secondary/30 relative rounded p-2 dark:text-gray-200">
                                            <p class="relative block text-xs font-bold">Dominic</p>
                                            <p class="pt-1">
                                                Hi, How are you? What about our next meeting?
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Chat Left -->
                                    <div class="group flex items-start gap-3 text-start">
                                        <div class="text-center">
                                            <img class="h-10 rounded-full" src="assets/images/users/avatar-5.jpg" />
                                            <p class="pt-0.5 text-xs">10:01</p>
                                        </div>

                                        <div
                                            class="max-w-3/4 bg-light dark:bg-secondary/30 relative rounded p-2 dark:text-gray-200">
                                            <p class="relative text-xs font-bold">Geneva</p>
                                            <p class="pt-1">Yeah everything is fine</p>
                                        </div>
                                    </div>

                                    <!-- Chat Right -->
                                    <div class="group flex flex-row-reverse items-start gap-3 pb-8 text-end">
                                        <div class="text-center">
                                            <img class="h-10 rounded-full" src="assets/images/users/avatar-1.jpg" />
                                            <p class="pt-0.5 text-xs">10:02</p>
                                        </div>

                                        <div
                                            class="max-w-3/4 bg-warning/20 dark:bg-secondary/30 relative rounded p-2 dark:text-gray-200">
                                            <p class="relative block text-xs font-bold">Dominic</p>
                                            <p class="pt-1">
                                                Wow that's great
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <form class="mt-4" id="chat-form" name="chat-form" novalidate="">
                                <div class="flex items-center gap-5">
                                    <div class="flex-grow">
                                        <input class="form-input w-full placeholder:text-gray-400 dark:bg-gray-600/20"
                                            placeholder="Enter your text" required="" type="text">
                                    </div>
                                    <div>
                                        <button class="btn bg-danger/90 hover:bg-danger text-white"
                                            type="submit">Send</button>
                                    </div>
                                </div>
                            </form>

                        </div> <!-- end .chat-conversation-->
                    </div>
                </div> <!-- end card-->
            </div>
            <!-- end row -->
        </div>

@endsection
