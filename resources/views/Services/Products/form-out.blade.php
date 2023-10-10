@extends('Layouts.base')
@section('content')
    <a href="#" onclick="history.back()">
        <div class="card mb-3 px-4 py-3">
            <h1><i class="uil uil-angle-left"></i>Kembali</h1>
        </div>
    </a>
    <div class="card mb-5 w-full">
        <div class="p-6">
            <div class="mb-6 flex items-start justify-between">
                <h6 class="uppercase dark:text-gray-300">Keranjang</h6>
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
                                Nama Barang</th>
                            <th class="px-4 py-4 text-start text-sm font-semibold text-gray-500 dark:text-gray-400"
                                scope="col">
                                Qty</th>
                            <th class="px-4 py-4 text-start text-sm font-semibold text-gray-500 dark:text-gray-400"
                                scope="col">
                                Stok</th>
                            <th class="px-4 py-4 text-start text-sm font-semibold text-gray-500 dark:text-gray-400"
                                scope="col">
                                Satuan</th>
                            <th class="px-4 py-4 text-start text-sm font-semibold text-gray-500 dark:text-gray-400"
                                scope="col">
                                Harga</th>
                            <th class="px-4 py-4 text-start text-sm font-semibold text-gray-500 dark:text-gray-400"
                                scope="col">
                                Total</th>
                            <th class="px-4 py-4 text-start text-sm font-semibold text-gray-500 dark:text-gray-400"
                                scope="col">
                                Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-gray-200 dark:divide-gray-600">
                        <form action="{{ route('Form Barang Keluar') }}"method="POST">
                            @csrf
                            @foreach ($orders as $item)
                                <tr class="hover:bg-gray-100 dark:hover:bg-transparent" x-data="{ data: { qty: {{ $item->products->quantity }}, unit: {{ $item->products->unit }}, inputQty: '', price: {{ $item->products->cust_price }} } }">
                                    <td
                                        class="whitespace-nowrap px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-400">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td
                                        class="whitespace-nowrap px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-400">
                                        <input class="form-input w-1/4 border-none" disabled
                                            value="{{ $item->products->products_name }}">
                                        <input name="items[{{ $loop->index }}][product_id]" type="hidden"
                                            value="{{ $item->product_id }}">
                                    </td>
                                    <td
                                        class="whitespace-nowrap px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-400">
                                        <input class="form-input" max="{{ $item->products->quantity }}" min="1"
                                            name="items[{{ $loop->index }}][amount_out]" type="number"
                                            x-model.number="data.inputQty" x-on:input="validateInput">
                                    </td>
                                    <td
                                        class="whitespace-nowrap px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-400">
                                        <div class="bloc my-3 text-gray-500 dark:text-gray-400"
                                            x-text="data.inputQty > data.qty ? 0 : (data.qty-data.inputQty)">
                                        </div>
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-400"
                                        x-text="data.unit.unit">
                                    </td>
                                    <td
                                        x-text="new Intl.NumberFormat('idP-ID', { style: 'currency', currency: 'idr' }).format(data.price)">
                                    </td>
                                    <td>
                                        <input class="form-input border-none" name="items[{{ $loop->index }}][total]"
                                            readonly
                                            x-model="new Intl.NumberFormat('idP-ID', { style: 'currency', currency: 'idr' }).format(data.price * Math.min({{ $item->products->quantity }}, data.inputQty))">
                                    </td>
                                    <td>
                                        <a class="rounded bg-red-500 px-3 py-1"
                                            href="{{ route('deleteCart', ['id' => $item->id]) }}"><i
                                                class="uil uil-trash-alt text-lg text-white"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            <td class="" colspan="6">
                                <input class="form-input float-right w-24 border-none" value="">
                            </td>
                            <tr>
                                <td>
                                    <label class="mb-2 block font-semibold" for="picker">Picker</label>
                                    <input class="form-input w-full" name="picker" placeholder="Cth: Ali" type="text">
                                    <button class="btn bg-primary/90 btn-sm mt-2 text-white hover:bg-blue-800"
                                        type="submit">kirim</button>
                                </td>
                            </tr>
                        </form>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="card w-full">
        <div class="p-6">
            <div class="mb-6 flex items-start justify-between">
                <h6 class="uppercase dark:text-gray-300">Data Barang</h6>
            </div>
            <div class="h-72 overflow-auto"
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
                <div class="hs-dropdown-toggle relative w-1/2">
                    <input class="form-input relative border bg-black/5 ps-8" placeholder="Search..." type="search"
                        x-model="search">
                    <span class="uil uil-search absolute start-2 top-1/2 z-10 -translate-y-1/2 text-base"></span>
                </div>
                <table class="w-full divide-y divide-gray-200 dark:divide-gray-600">
                    <thead>
                        <tr>
                            <th class="px-4 py-4 text-start text-sm font-semibold text-gray-500 dark:text-gray-400"
                                scope="col">
                                #</th>
                            <th class="px-4 py-4 text-start text-sm font-semibold text-gray-500 dark:text-gray-400"
                                scope="col">
                                Nama Barang</th>
                            <th class="px-4 py-4 text-start text-sm font-semibold text-gray-500 dark:text-gray-400"
                                scope="col">
                                Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 dark:divide-gray-600">
                        <template x-for="product in searchResults">
                            <tr class="hover:bg-gray-100 dark:hover:bg-transparent">
                                <td class="whitespace-nowrap px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-400"
                                    x-text='"BRG-"+product.id.slice(24,36)'>
                                </td>
                                <td class="whitespace-nowrap px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-400"
                                    x-text="product.products_name">
                                </td>
                                <td>
                                    <form action="{{ route('addToCart') }}" method="POST">
                                        @csrf
                                        <input :value="product.id" name="id" type="hidden">
                                        <button class="rounded bg-green-500 px-3 py-1"><i
                                                class="uil uil-shopping-cart text-lg text-white"></i></button>
                                    </form>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-100 dark:hover:bg-transparent">
                                <td class="whitespace-nowrap px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-400"
                                    x-text='"BRG-"+product.id.slice(24,36)'>
                                </td>
                                <td class="whitespace-nowrap px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-400"
                                    x-text="product.products_name">
                                </td>
                            </tr>
                        </template>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        function validateInput(event) {
            const inputElement = event.target;
            const inputValue = parseInt(inputElement.value, 10);
            const qty = inputElement.getAttribute('max');
            if (isNaN(inputValue) || inputValue < 0) {
                inputElement.value = '';
            } else if (inputValue > qty) {
                inputElement.value = qty;
            }
        }
    </script>
@endsection
