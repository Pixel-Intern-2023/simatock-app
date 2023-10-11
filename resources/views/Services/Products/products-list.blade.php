@extends('Layouts.base')
@section('content')
    <div class="xl:col-span-7">
        <div class="card">
            <div class="p-5">
                <div class="flex items-center justify-between">
                    <h5 class="uppercase">Data Barang</h5>
                    <div>
                        <a class="btn btn-sm bg-success text-white" href="{{ route('Tambah Barang') }}">
                            <i class='uil uil-plus me-1'></i> Tambah
                        </a>
                        <a class="btn bg-primary/90 btn-sm text-white hover:bg-blue-800"
                            href="{{ route('downloadDataProduct') }}">
                            <i class='uil uil-export me-1'></i> Export
                        </a>
                    </div>
                </div>
                @if (session()->has('success'))
                    <div class="bg-success/10 text-success border-success/20 my-5 flex items-center justify-between rounded border px-5 py-3 text-sm"
                        id="dismiss-alert">
                        <p>
                            <span class="font-bold">{{ session('success') }}
                        </p>

                        <button class="text-xl/[0]" data-hs-remove-element="#dismiss-alert" type="button">
                            <i class="uil uil-multiply text-xl"></i>
                        </button> <!-- button end -->
                    </div> <!-- dismiss-example-primary end -->
                @endif

                <div class="overflow-auto">
                    <div class="inline-block min-w-full align-middle"
                        x-data='{
                        search: "",
                        products: @json($products),
                        get searchResults () {
                            return this.products.filter(
                                product => product
                                .products_name
                                .toLowerCase()
                                .includes(this.search.toLowerCase())
                            )
                        }

                    }'>
                        <div class="hs-dropdown-toggle relative w-1/4">
                            <input class="form-input relative border bg-black/5 ps-8" placeholder="Search..." type="search"
                                x-model="search">
                            <span class="uil uil-search absolute start-2 top-1/2 z-10 -translate-y-1/2 text-base"></span>
                        </div>
                        <div class="overflow-hidden">
                            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-600">
                                <thead>
                                    <tr>
                                        <th class="px-4 py-4 text-start text-sm font-semibold text-gray-500 dark:text-gray-400"
                                            scope="col">
                                            #</th>
                                        <th class="px-4 py-4 text-start text-sm font-semibold text-gray-500 dark:text-gray-400"
                                            scope="col">
                                            Produk</th>
                                        <th class="px-4 py-4 text-start text-sm font-semibold text-gray-500 dark:text-gray-400"
                                            scope="col">
                                            Kategori</th>
                                        <th class="px-4 py-4 text-start text-sm font-semibold text-gray-500 dark:text-gray-400"
                                            scope="col">
                                            Stok</th>
                                        <th class="px-4 py-4 text-start text-sm font-semibold text-gray-500 dark:text-gray-400"
                                            scope="col">
                                            Satuan</th>
                                        <th class="px-4 py-4 text-start text-sm font-semibold text-gray-500 dark:text-gray-400"
                                            scope="col">
                                            Harga Jual</th>
                                        <th class="px-4 py-4 text-start text-sm font-semibold text-gray-500 dark:text-gray-400"
                                            scope="col">
                                            Harga Beli</th>
                                        <th class="px-4 py-4 text-start text-sm font-semibold text-gray-500 dark:text-gray-400"
                                            scope="col">
                                            Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 dark:divide-gray-600">
                                    <template x-for="product in searchResults">
                                        <tr class="hover:bg-gray-100 dark:hover:bg-transparent">
                                            <td class="whitespace-nowrap px-4 py-4 text-sm font-medium uppercase text-gray-500 dark:text-gray-400"
                                                x-text='"#"+product.id.slice(24,36)'>
                                            </td>
                                            <td class="whitespace-nowrap px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-400"
                                                x-text="product.products_name">
                                            </td>
                                            <td class="whitespace-nowrap px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-400"
                                            x-text="product.category.category ? product.category.category : 'Kategory Tidak Tersedia'">
                                            </td>
                                            <td class="whitespace-nowrap px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-400"
                                                x-text="product.quantity">
                                            </td>
                                            <td class="whitespace-nowrap px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-400"
                                            x-text="product.unit.unit ? product.unit.unit : 'Satuan Tidak Tersedia'">
                                            </td>
                                            <td class="whitespace-nowrap px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-400"
                                                x-text="new Intl.NumberFormat('idP-ID', { style: 'currency', currency: 'idr' }).format(product.purch_price)">
                                            </td>
                                            <td class="whitespace-nowrap px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-400"
                                                x-text="new Intl.NumberFormat('idP-ID', { style: 'currency', currency: 'idr' }).format(product.cust_price)">
                                            </td>

                                            <td class="text-starts flex gap-3 whitespace-nowrap px-4 py-4 text-white">
                                                {{-- with replace to show data id in route --}}
                                                <a class="rounded bg-yellow-400 px-3 py-1 font-semibold"
                                                    x-bind:href="'{{ route('Edit Data', ['id' => 'idbrg']) }}'.replace('idbrg',
                                                        product.id)">Detail</a>
                                                <a class="rounded bg-red-500 px-3 py-1 font-semibold btn-delete"
                                                    x-bind:href="'{{ route('delete', ['id' => 'idbrg']) }}'.replace('idbrg', product
                                                        .id)">Hapus</a>
                                            </td>

                                        </tr>
                                    </template>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div><!-- end table-responsive-->
            </div>
        </div> <!-- end card-->
    </div> <!-- end col-->
    @section('script')
    <script>
        $(document).on('click', '.btn-delete', function(e) {
            e.preventDefault();
            // console.log('halo');
            var link = $(this).attr('href');
            Swal.fire({
                title: 'Yakin Ingin hapus data ini?',
                text: 'Seluruh Aktifitas yang berkaitan dengan tabel barang akan terhapus!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Hapus data!',
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = link;
                }
            });
        });
    </script>
@endsection
@endsection
