@extends('Layouts.authBase')
@section('content')
    @if (session()->has('registerError'))
        <div class="bg-danger/10 text-danger border-danger/20 flex items-center justify-between rounded border px-5 py-3 text-sm"
            id="dismiss-example-secondary">
            <p>
                <span class="font-bold"> {{ session()->get('registerError') }}
            </p>
            <button class="text-xl/[0]" data-hs-remove-element="#dismiss-example-secondary" type="button">
                <i class="uil uil-multiply text-xl"></i>
            </button> <!-- button end -->
        </div>
    @endif
    <form action="#" class="space-y-5" method="POST">
        @csrf
        <div class="mb-3 flex flex-col">
            <label class="text-start font-semibold dark:text-gray-300">Nama</label>
            <div @error('name')
            style="border:1px solid red;"
            @enderror
                class="mt-2 flex items-center rounded border dark:border-gray-600">
                <div class="bg-gray-100 px-3 py-2 dark:bg-gray-600">
                    <span class="">
                        <i data-lucide="user-2"></i></span>
                    </span>
                </div>
                <input class="form-input border-none dark:bg-transparent" id="name" name="name"
                    placeholder="Masukkan Nama" type="text" value="{{ old('name') }}">
            </div>
            @error('name')
                <small class="mt-1 block" style="color:red;">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3 flex flex-col">
            <label class="text-start font-semibold dark:text-gray-300">Username</label>
            <div @error('username')
            style="border:1px solid red;"
            @enderror
                class="mt-2 flex items-center rounded border dark:border-gray-600">
                <div class="bg-gray-100 px-3 py-2 dark:bg-gray-600">
                    <span class="">
                        <i data-lucide="user-2"></i></span>
                    </span>
                </div>
                <input class="form-input border-none dark:bg-transparent" id="username" name="username"
                    placeholder="Masukkan Username" type="text" value="{{ old('username') }}">
            </div>
            @error('username')
                <small class="mt-1 block" style="color:red;">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3 flex flex-col">
            <label class="text-start font-semibold dark:text-gray-300">email</label>
            <div @error('email')
            style="border:1px solid red;"
            @enderror
                class="mt-2 flex items-center rounded border dark:border-gray-600">
                <div class="bg-gray-100 px-3 py-2 dark:bg-gray-600">
                    <span class="">
                        <i data-lucide="user-2"></i></span>
                    </span>
                </div>
                <input class="form-input border-none dark:bg-transparent" id="email" name="email"
                    placeholder="Masukkan Email" type="email" value="{{ old('email') }}">
            </div>
            @error('email')
                <small class="mt-1 block" style="color:red;">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3 flex flex-col">
            <label class="text-start font-semibold dark:text-gray-300">phone</label>
            <div @error('phone_number')
            style="border:1px solid red;"
            @enderror
                class="mt-2 flex items-center rounded border dark:border-gray-600">
                <div class="bg-gray-100 px-3 py-2 dark:bg-gray-600">
                    <span class="">
                        <i data-lucide="phone"></i></span>
                    </span>
                </div>
                <input class="form-input border-none dark:bg-transparent" id="phone_number" name="phone_number"
                    placeholder="Masukkan Nomor Telepon" type="phone_number" value="{{ old('phone_number') }}">
            </div>
            @error('phone_number')
                <small class="mt-1 block" style="color:red;">{{ $message }}</small>
            @enderror
        </div>
        <div class="flex gap-3">
            <div class="mb-3 flex flex-col">
                <label class="text-start font-semibold dark:text-gray-300">Alamat</label>
                <div @error('address')
                style="border:1px solid red;"
                @enderror
                    class="mt-2 flex items-center rounded border dark:border-gray-600">
                    <textarea class="form-input border-none dark:bg-transparent" id="address" name="address"
                        placeholder="Masukkan alamat">{{ old('address') }}</textarea>
                </div>
                @error('address')
                    <small class="mt-1 block" style="color:red;">{{ $message }}</small>
                @enderror
            </div>
            <div class="mt-7">
                <div class="flex flex-col gap-2 justify-center">
                    <div class="flex items-center">
                        <input type="radio" class="form-radio text-primary" name="gender"
                            id="formRadio01" checked value="l">
                        <label class="ms-1.5" for="formRadio01">Laki Laki</label>
                    </div>
                    <div class="flex items-center">
                        <input type="radio" class="form-radio text-primary" name="gender"
                            id="formRadio02" value="p">
                        <label class="ms-1.5" for="formRadio02">Perempuan</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-3 flex gap-3">
            <div class="mb-3 flex flex-col">
                <div class="flex items-center justify-between">
                    <label class="text-start font-semibold dark:text-gray-300">Password</label>
                </div>
                <div @error('password')
                style="border:1px solid red;"
                @enderror
                    class="mt-2 flex items-center rounded border dark:border-gray-600">
                    <div class="bg-gray-100 px-3 py-2 dark:bg-gray-600">
                        <span class="">
                            <i data-lucide="lock"></i></span>
                        </span>
                    </div>
                    <input class="form-input border-none dark:bg-transparent" id="password" name="password"
                        placeholder="Masukkan password" type="password">
                </div>
                @error('password')
                    <small class="mt-1 block" style="color:red;">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3 flex flex-col">
                <div class="flex items-center justify-between">
                    <label class="text-start font-semibold dark:text-gray-300">Confirm Password</label>
                    {{-- <a class="float-end ms-1 border-b-2 border-dotted text-gray-400 dark:border-gray-600"
                    href="pages-recoverpw.html">Forgot
                    your password?</a> --}}
                </div>
                <div @error('confirmPassword')
                style="border:1px solid red;"
                @enderror
                    class="mt-2 flex items-center rounded border dark:border-gray-600">
                    <div class="bg-gray-100 px-3 py-2 dark:bg-gray-600">
                        <span class="">
                            <i data-lucide="lock"></i></span>
                        </span>
                    </div>
                    <input class="form-input border-none dark:bg-transparent" id="password" name="confirmPassword"
                        placeholder="Masukkan password" type="password">
                </div>
                @error('confirmPassword')
                    <small class="mt-1 block" style="color:red;">{{ $message }}</small>
                @enderror
            </div>
        </div>
        <div class="text-center">
            <button class="btn bg-primary w-full text-white" type="submit">Register</button>
        </div>
    </form>
@endsection
