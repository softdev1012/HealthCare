@section('title', 'Create new account')

<div>
    <div class="ml-3 sm:hidden">
        <a href="{{ route('lets') }}" class="font-mono text-3xl">
            {{--            <img src="/vendor/@fortawesome/fontawesome-free/svgs/solid/arrow-left.svg" class="w-[18px]"/>--}}
            {{--            <img src="/vendor/remixicon/icons/System/arrow-left-line.svg" class="w-[25px]"/>--}}
            &leftarrow;
            {{--            <i class="fa fa-arrow-left"></i>--}}
        </a>
    </div>
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-md">
        <a href="{{ route('home') }}">
            <div class="w-auto mx-auto">
                <img src="/images/logo_white.png" class="mx-auto" />
            </div>
        </a>

        <h2 class="mt-6 text-2xl font-bold text-center text-gray-900 leading-9">
            Create New Account
        </h2>

    </div>

    <div class="mt-4 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="p-4 bg-white shadow sm:rounded-lg sm:px-10">
            <form wire:submit.prevent="register">
                <div>
                    {{--                    <label for="email" class="block text-sm font-medium text-gray-700 leading-5">--}}
                    {{--                        Email address--}}
                    {{--                    </label>--}}

                    <div class="mt-1 rounded-md shadow-sm">
                        <input wire:model.lazy="email" id="email" name="email" type="email" placeholder="Email" required autofocus class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('email') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
                    </div>

                    @error('email')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-6">
                    {{--                    <label for="password" class="block text-sm font-medium text-gray-700 leading-5">--}}
                    {{--                        Password--}}
                    {{--                    </label>--}}

                    <div class="mt-1 rounded-md shadow-sm">
                        <input wire:model.lazy="password" id="password" type="password" placeholder="Password" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('password') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
                    </div>

                    @error('password')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-6">
                    {{--                    <label for="password" class="block text-sm font-medium text-gray-700 leading-5">--}}
                    {{--                        Password--}}
                    {{--                    </label>--}}

                    <div class="mt-1 rounded-md shadow-sm">
                        <input wire:model.lazy="passwordConfirmation" id="password_confirmation" type="password" placeholder="Confirm Password" required class="block w-full px-3 py-2 placeholder-gray-400 border border-gray-300 appearance-none rounded-md focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                    </div>

                    @error('password')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-6 text-center">
                    <div class="inline-flex items-center mx-auto">
                        <input wire:model.lazy="remember" id="remember" type="checkbox" class="form-checkbox w-4 h-4 text-blue-600 transition duration-150 ease-in-out rounded" />
                        <label for="remember" class="block ml-2 text-sm text-gray-900 leading-5">
                            Remember me
                        </label>
                    </div>
                </div>

                <div class="mt-4">
                    <span class="block w-full rounded-md shadow-sm">
                        <a  href="{{route("dashboard")}}" class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-full hover:bg-blue-500 focus:outline-none focus:border-blue-700 focus:ring-blue active:bg-blue-700 transition duration-150 ease-in-out">
                            Sign up
                        </a>
                    </span>
                </div>

                <div class="mt-10 mb-10 text-center">
                    <div class="text-sm leading-5 mx-auto text-gray-700 flex divider">
                        &nbsp;&nbsp;&nbsp;&nbsp;or continue with&nbsp;&nbsp;&nbsp;&nbsp;
                    </div>
                </div>
            </form>

            <div class="flex">
                <div class="flex-1">
                    <a href="{{ route('register') }}" class="w-auto focus:outline-none focus:underline transition ease-in-out duration-150">
                        <img src="/images/facebook_icon.png" class="mx-auto" />
                    </a>
                </div>
                <div class="flex-1">
                    <a href="{{ route('register') }}" class="w-auto focus:outline-none focus:underline transition ease-in-out duration-150">
                        <img src="/images/google_icon.png" class="mx-auto" />
                    </a>
                </div>
                <div class="flex-1">
                    <a href="{{ route('register') }}" class="w-auto focus:outline-none focus:underline transition ease-in-out duration-150">
                        <img src="/images/apple_icon.png" class="mx-auto" />
                    </a>
                </div>
            </div>

            @if (Route::has('register'))
                <p class="mt-10 text-sm text-center text-gray-600 leading-5 max-w">
                    Already have an account?
                    <a href="{{ route('login') }}" class="font-medium text-blue-600 hover:text-blue-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                        Sign in
                    </a>
                </p>
            @endif
        </div>
    </div>
</div>
