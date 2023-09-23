@extends('Layouts.authBase')
@section('content')
    <form action="#" class="space-y-5" method="POST">
        @csrf
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
                    placeholder="admin123" type="username">
            </div>
            @error('username')
                <small class="mt-1 block" style="color:red;">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3 flex flex-col">
            <div class="flex items-center justify-between">
                <label class="text-start font-semibold dark:text-gray-300">Password</label>
                {{-- <a class="float-end ms-1 border-b-2 border-dotted text-gray-400 dark:border-gray-600"
                    href="pages-recoverpw.html">Forgot
                    your password?</a> --}}
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
                    placeholder="Enter your password" type="password">
            </div>
            @error('password')
                <small class="mt-1 block" style="color:red;">{{ $message }}</small>
            @enderror
        </div>
        <div class="text-center">
            <button class="btn bg-primary w-full text-white" type="submit">Log In</button>
        </div>
    </form>
@endsection
