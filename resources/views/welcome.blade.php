@extends('layouts.app')

@section('content')
    <div class="absolute top-0 right-0 mt-4 mr-4">
        @if (Route::has('login'))
            <div class="space-x-4">
                @auth
                    <a
                        href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                        class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150"
                    >
                        Log out
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @else
                    <a href="{{ route('login') }}" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>
    <div class="flex flex-col justify-center min-h-screen py-12 bg-gray-50 sm:px-6 lg:px-8">
        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="w-auto mx-auto">
                <img src="/images/logo_title.png" class="mx-auto" />
            </div>
        </div>
        <div class="absolute bottom-0 w-full sm:mx-auto sm:w-full sm:max-w-md">
            <div class="w-auto mx-auto mb-20 animate-spin">
                <img src="/images/loading.png" class="mx-auto" />
            </div>
        </div>
    </div>
    <script>
        setTimeout(() => {document.location = "{{ route('lets') }}";}, 1000)
    </script>
@endsection
