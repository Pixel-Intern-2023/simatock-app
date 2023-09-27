@extends('Layouts.base')
@section('content')
    <div class="flex flex-wrap sm:flex-nowrap gap-4">
        <!-- Suplier -->
        <div class="card w-full">
            <div class="p-6">
                <div class="mb-5 flex items-start justify-between gap-5">
                    <h6 class="uppercase dark:text-gray-300">Data Suplier</h6>
                    <a class="btn btn-sm btn-sm float-end bg-green-600/80 text-white hover:bg-green-800"
                        data-hs-overlay="#hs-basic-modal" href="#"><i class='uil uil-plus me-1'></i> Tambah</a>
                    <div class="hs-overlay fixed left-0 top-10 z-[60] hidden h-full w-full overflow-y-auto overflow-x-hidden"
                        id="hs-basic-modal">
                        <div
                            class="hs-overlay-open:opacity-100 hs-overlay-open:duration-500 m-3 opacity-0 transition-all sm:mx-auto sm:w-full sm:max-w-lg">
                            <div
                                class="flex flex-col rounded border bg-white shadow-sm dark:border-gray-700 dark:bg-gray-800 dark:shadow-slate-700/[.7]">
                                <div class="flex items-center justify-between px-4 py-3">
                                    <h3 class="font-bold text-gray-800 dark:text-white">
                                        Modal Heading
                                    </h3>
                                    <button
                                        class="hs-dropdown-toggle inline-flex h-8 w-8 flex-shrink-0 items-center justify-center rounded text-sm text-gray-500 transition-all hover:text-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 focus:ring-offset-white dark:focus:ring-gray-700 dark:focus:ring-offset-gray-800"
                                        data-hs-overlay="#hs-basic-modal" type="button">
                                        <span class="sr-only">Close</span>
                                        <i class="uil uil-times text-2xl"></i>
                                    </button>
                                </div>
                                <div class="overflow-y-auto p-4">
                                    <h5 class="mb-2.5 text-base dark:text-gray-300">Text in a modal
                                    </h5>
                                    <p class="mb-4 text-sm dark:text-gray-300">Duis mollis, est non
                                        commodo luctus, nisi erat porttitor ligula.</p>
                                    <hr class="my-5 dark:border-gray-600">
                                    <h5 class="mb-2.5 text-base dark:text-gray-400">Overflowing text
                                        to show scroll behavior</h5>
                                    <p class="mb-4 text-sm dark:text-gray-400">Cras mattis
                                        consectetur purus sit amet fermentum. Cras justo odio,
                                        dapibus ac facilisis in, egestas eget quam. Morbi leo risus,
                                        porta ac consectetur ac, vestibulum at eros.</p>
                                    <p class="mb-4 text-sm dark:text-gray-400">Praesent commodo
                                        cursus magna, vel scelerisque nisl consectetur et. Vivamus
                                        sagittis lacus vel augue laoreet rutrum faucibus dolor
                                        auctor.</p>
                                    <p class="text-sm dark:text-gray-400">Aenean lacinia bibendum
                                        nulla sed consectetur. Praesent commodo cursus magna, vel
                                        scelerisque nisl consectetur et. Donec sed odio dui. Donec
                                        ullamcorper nulla non metus auctor fringilla.</p>
                                </div><!-- End Modal Details -->
                                <div class="flex items-center justify-end gap-2 p-4">
                                    <button
                                        class="btn bg-light dark:bg-secondary text-gray-800 transition-all dark:text-white"
                                        data-hs-overlay="#hs-basic-modal" type="button">Close</button>
                                    <a class="btn bg-primary text-white" href="javascript:void(0)">Save Changes</a>
                                </div><!-- End Modal Footer -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="overflow-auto">
                    <table class="w-full divide-y divide-gray-200 dark:divide-gray-600">
                        <thead>
                            <tr>
                                <th class="px-4 py-4 text-start text-sm font-semibold text-gray-500 dark:text-gray-400"
                                    scope="col">
                                    #</th>
                                <th class="px-4 py-4 text-start text-sm font-semibold text-gray-500 dark:text-gray-400"
                                    scope="col">
                                    Suplier</th>

                                <th class="px-4 py-4 text-start text-sm font-semibold text-gray-500 dark:text-gray-400"
                                    scope="col">
                                    Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 dark:divide-gray-600">
                            @foreach ($suplier as $item)
                            <tr class="hover:bg-gray-100 dark:hover:bg-transparent">
                                <td
                                    class="whitespace-nowrap px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-400">
                                    {{ $loop->iteration }}</td>
                                <td
                                    class="whitespace-nowrap px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-400">
                                    {{ $item->suplier }}</td>
                                <td class="text-starts flex gap-3 whitespace-nowrap px-4 py-4 text-white">
                                    <a class="rounded bg-yellow-400 px-3 py-1 font-semibold" href=""><i
                                            class="uil uil-eye"></i></a>
                                    <a class="rounded bg-red-500 px-3 py-1 font-semibold" href=""><i
                                            class="uil uil-trash-alt"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Unit -->
        <div class="card w-full">
            <div class="p-6">
                <div class="mb-6 flex items-start justify-between">
                    <h6 class="uppercase dark:text-gray-300">Data Satuan</h6>
                    <a class="btn btn-sm btn-sm bg-green-600/80 text-white hover:bg-green-800" href="task-list.html"><i
                            class='uil uil-plus me-1'></i> Tambah</a>
                </div>
                <div class="overflow-auto">
                    <table class="w-full divide-y divide-gray-200 dark:divide-gray-600">
                        <thead>
                            <tr>
                                <th class="px-4 py-4 text-start text-sm font-semibold text-gray-500 dark:text-gray-400"
                                    scope="col">
                                    #</th>
                                <th class="px-4 py-4 text-start text-sm font-semibold text-gray-500 dark:text-gray-400"
                                    scope="col">
                                    Satuan</th>

                                <th class="px-4 py-4 text-start text-sm font-semibold text-gray-500 dark:text-gray-400"
                                    scope="col">
                                    Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 dark:divide-gray-600">
                            @foreach ($unit as $item)
                            <tr class="hover:bg-gray-100 dark:hover:bg-transparent">
                                <td
                                    class="whitespace-nowrap px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-400">
                                    {{ $loop->iteration }}</td>
                                <td
                                    class="whitespace-nowrap px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-400">
                                    {{ $item->unit }}</td>
                                <td class="text-starts flex gap-3 whitespace-nowrap px-4 py-4 text-white">
                                    <a class="rounded bg-yellow-400 px-3 py-1 font-semibold" href=""><i
                                            class="uil uil-eye"></i></a>
                                    <a class="rounded bg-red-500 px-3 py-1 font-semibold" href=""><i
                                            class="uil uil-trash-alt"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Category -->
        <div class="card w-full">
            <div class="p-6">
                <div class="mb-6 flex items-start justify-between">
                    <h6 class="uppercase dark:text-gray-300">Data Kategori</h6>
                    <a class="btn btn-sm btn-sm bg-green-600/80 text-white hover:bg-green-800" href="task-list.html"><i
                            class='uil uil-plus me-1'></i> Tambah</a>
                </div>

                <div class="overflow-auto">
                    <table class="w-full divide-y divide-gray-200 dark:divide-gray-600">
                        <thead>
                            <tr>
                                <th class="px-4 py-4 text-start text-sm font-semibold text-gray-500 dark:text-gray-400"
                                    scope="col">
                                    #</th>
                                <th class="px-4 py-4 text-start text-sm font-semibold text-gray-500 dark:text-gray-400"
                                    scope="col">
                                    Kategori</th>

                                <th class="px-4 py-4 text-start text-sm font-semibold text-gray-500 dark:text-gray-400"
                                    scope="col">
                                    Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 dark:divide-gray-600">
                            @foreach ($category as $item)
                            <tr class="hover:bg-gray-100 dark:hover:bg-transparent">
                                <td
                                    class="whitespace-nowrap px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-400">
                                    {{ $loop->iteration }}</td>
                                <td
                                    class="whitespace-nowrap px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-400">
                                    {{ $item->category }}</td>
                                <td class="text-starts flex gap-3 whitespace-nowrap px-4 py-4 text-white">
                                    <a class="rounded bg-yellow-400 px-3 py-1 font-semibold" href=""><i
                                            class="uil uil-eye"></i></a>
                                    <a class="rounded bg-red-500 px-3 py-1 font-semibold" href=""><i
                                            class="uil uil-trash-alt"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
