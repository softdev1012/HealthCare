@extends('layouts.auth')
@section('title', "Let's you in")
@section('content')
<div>
    <div class="ml-3 sm:hidden">
        <a href="{{ route('home') }}" class="font-mono text-3xl">
            {{--            <img src="/vendor/@fortawesome/fontawesome-free/svgs/solid/arrow-left.svg" class="w-[18px]"/>--}}
            {{--            <img src="/vendor/remixicon/icons/System/arrow-left-line.svg" class="w-[25px]"/>--}}
            &leftarrow;
            {{--            <i class="fa fa-arrow-left"></i>--}}
        </a>
    </div>
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-md">
        <a href="{{ route('home') }}">
            <div class="w-auto mx-auto">
                <img src="/images/lets.png" class="mx-auto" />
            </div>
        </a>

        <h2 class="mt-6 text-3xl font-bold text-center text-gray-900 leading-9">
            Let's you in
        </h2>

    </div>

    <div class="mt-4 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="p-4 bg-white shadow sm:rounded-lg sm:px-10">

            <div class="mt-6 text-center border rounded-xl">
                <a href="{{ route('register') }}" class="block py-4 mx-auto w-auto focus:outline-none focus:underline transition ease-in-out duration-150">
                    <img src="/images/facebook_icon.png" class="inline mr-3" width="30px" />
                    <span>
                        Continue with Facebook
                    </span>
                </a>
            </div>
            <div class="mt-3 text-center border rounded-xl">
                <a href="{{ route('register') }}" class="block py-4 mx-auto w-auto focus:outline-none focus:underline transition ease-in-out duration-150">
                    <img src="/images/google_icon.png" class="inline mr-3" width="30px" />
                    <span>
                        Continue with Google
                    </span>
                </a>
            </div>
            <div class="mt-3 text-center border rounded-xl">
                <a href="{{ route('register') }}" class="block py-4 mx-auto w-auto focus:outline-none focus:underline transition ease-in-out duration-150">
                    <img src="/images/apple_icon.png" class="inline mr-3" width="30px" />
                    <span>
                        Continue with Apple
                    </span>
                </a>
            </div>

            <div class="mt-10 mb-10 text-center">
                <div class="text-sm leading-5 mx-auto text-gray-700 flex divider">
                    &nbsp;&nbsp;&nbsp;&nbsp;or&nbsp;&nbsp;&nbsp;&nbsp;
                </div>
            </div>
            <div class="mt-4">
                    <span class="block w-full rounded-md shadow-sm">
                        <a href="{{ route('login') }}" class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-full hover:bg-blue-500 focus:outline-none focus:border-blue-700 focus:ring-blue active:bg-blue-700 transition duration-150 ease-in-out">
                            Sign in with password
                        </a>
                    </span>
            </div>

            @if (Route::has('register'))
                <p class="mt-10 text-sm text-center text-gray-600 leading-5 max-w">
                    Don't have an account?
                    <a href="{{ route('register') }}" class="font-medium text-blue-600 hover:text-blue-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                        Sign up
                    </a>
                </p>
            @endif
        </div>
    </div>
</div>
@endsection
