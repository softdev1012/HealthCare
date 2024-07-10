@extends('layouts.app')

@section('content')
    <div class="h-screen bg-gray-50 dark:bg-gray-900">
        <header class="flex text-center items-center z-10 pt-3 px-6 bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-200">
            <a href="{{route('dashboard')}}">
                <i class="fas fa-arrow-left text-[20px] mr-4"></i>
            </a>
            <h2 class="text-xl font-semibold">
                Top Doctor
            </h2>
            <div>
                <i class="fas fa-search"></i>
                <i class="fas fa-mobile-retro"></i>
            </div>
        </header>
        <main class="h-full pb-16 overflow-y-auto">
            <div class="container flex px-2 mx-auto">
                <div class="mt-6 flex flex-row text-center min-w-screen overflow-x-auto pb-2">
                    <div class="px-1">
                        <button class="px-3 py-1 text-sm font-bold text-white transition-colors duration-150 bg-blue-600 border border-transparent rounded-full active:bg-blue-600 hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue">
                            All
                        </button>
                    </div>

                    <div class="px-1">
                        <button class="px-3 py-1 text-sm font-bold text-blue-600 transition-colors duration-150 border border-blue-600 rounded-full active:bg-blue-600 hover:bg-blue-600 hover:text-white focus:outline-none focus:shadow-outline-blue">
                            General
                        </button>
                    </div>
                    <div class="px-1">
                        <button class="px-3 py-1 text-sm font-bold text-blue-600 transition-colors duration-150 border border-blue-600 rounded-full active:bg-blue-600 hover:bg-blue-600 hover:text-white focus:outline-none focus:shadow-outline-blue">
                            Dentist
                        </button>
                    </div>
                    <div class="px-1">
                        <button class="px-3 py-1 text-sm font-bold text-blue-600 transition-colors duration-150 border border-blue-600 rounded-full active:bg-blue-600 hover:bg-blue-600 hover:text-white focus:outline-none focus:shadow-outline-blue">
                            Nutritionist
                        </button>
                    </div>
                </div>
            </div>
            <div class="container mt-5 px-3 mx-auto">
                <div class="flex p-2 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                    <div class="text-orange-500 bg-orange-100 rounded-lg dark:text-orange-100 dark:bg-orange-500">
                        <img
                            class=""
                            src="/images/avatar_sample.png"
                            alt=""
                            aria-hidden="true"
                        />
                    </div>
                    <div class="p-2 block grow">
                        <div class="flex">
                            <div class="flex text-left">
                                <p class="mb-2 text-sm font-bold text-gray-900 dark:text-gray-400">
                                    Dr.Randy Wigham
                                </p>
                            </div>

                            <p class="block grow">
                                <svg
                                    class="w-6 h-6 ml-2 float-right"
                                    fill="#1c64f2"
                                    aria-hidden="true"
                                    viewBox="0 0 20 20"
                                >
                                    <path
                                        d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                        clip-rule="evenodd"
                                        fill-rule="evenodd"
                                    ></path>
                                </svg>
                            </p>
                        </div>
                        <p class="text-[10px] font-semibold text-gray-700 dark:text-gray-200">
                            Cardiologists | The Valley Hospital
                        </p>
                        <div class="flex items-center mt-2">
                            <p>
                                <svg
                                    class="w-5"
                                    fill="#1c64f2"
                                    aria-hidden="true"
                                    viewBox="0 0 20 20"
                                >
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                    ></path>
                                </svg>
                            </p>
                            <div class="px-3 flex text-left">
                                <p class="text-xs font-semibold text-gray-500 dark:text-gray-400">
                                    4.8 (4,279 reviews)
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container mt-5 px-3 mx-auto">
                <div class="flex p-2 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                    <div class="text-orange-500 bg-orange-100 rounded-lg dark:text-orange-100 dark:bg-orange-500">
                        <img
                            class=""
                            src="/images/avatar_sample.png"
                            alt=""
                            aria-hidden="true"
                        />
                    </div>
                    <div class="p-2 block grow">
                        <div class="flex">
                            <div class="flex text-left">
                                <p class="mb-2 text-sm font-bold text-gray-900 dark:text-gray-400">
                                    Dr.Randy Wigham
                                </p>
                            </div>

                            <p class="block grow">
                                <svg
                                    class="w-6 h-6 ml-2 float-right"
                                    fill="#1c64f2"
                                    aria-hidden="true"
                                    viewBox="0 0 20 20"
                                >
                                    <path
                                        d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                        clip-rule="evenodd"
                                        fill-rule="evenodd"
                                    ></path>
                                </svg>
                            </p>
                        </div>
                        <p class="text-[10px] font-semibold text-gray-700 dark:text-gray-200">
                            Cardiologists | The Valley Hospital
                        </p>
                        <div class="flex items-center mt-2">
                            <p>
                                <svg
                                    class="w-5"
                                    fill="#1c64f2"
                                    aria-hidden="true"
                                    viewBox="0 0 20 20"
                                >
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                    ></path>
                                </svg>
                            </p>
                            <div class="px-3 flex text-left">
                                <p class="text-xs font-semibold text-gray-500 dark:text-gray-400">
                                    4.8 (4,279 reviews)
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-5 px-3 mx-auto">
                <div class="flex p-2 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                    <div class="text-orange-500 bg-orange-100 rounded-lg dark:text-orange-100 dark:bg-orange-500">
                        <img
                            class=""
                            src="/images/avatar_sample.png"
                            alt=""
                            aria-hidden="true"
                        />
                    </div>
                    <div class="p-2 block grow">
                        <div class="flex">
                            <div class="flex text-left">
                                <p class="mb-2 text-sm font-bold text-gray-900 dark:text-gray-400">
                                    Dr.Randy Wigham
                                </p>
                            </div>

                            <p class="block grow">
                                <svg
                                    class="w-6 h-6 ml-2 float-right"
                                    fill="#1c64f2"
                                    aria-hidden="true"
                                    viewBox="0 0 20 20"
                                >
                                    <path
                                        d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                        clip-rule="evenodd"
                                        fill-rule="evenodd"
                                    ></path>
                                </svg>
                            </p>
                        </div>
                        <p class="text-[10px] font-semibold text-gray-700 dark:text-gray-200">
                            Cardiologists | The Valley Hospital
                        </p>
                        <div class="flex items-center mt-2">
                            <p>
                                <svg
                                    class="w-5"
                                    fill="#1c64f2"
                                    aria-hidden="true"
                                    viewBox="0 0 20 20"
                                >
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                    ></path>
                                </svg>
                            </p>
                            <div class="px-3 flex text-left">
                                <p class="text-xs font-semibold text-gray-500 dark:text-gray-400">
                                    4.8 (4,279 reviews)
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-5 px-3 mx-auto">
                <div class="flex p-2 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                    <div class="text-orange-500 bg-orange-100 rounded-lg dark:text-orange-100 dark:bg-orange-500">
                        <img
                            class=""
                            src="/images/avatar_sample.png"
                            alt=""
                            aria-hidden="true"
                        />
                    </div>
                    <div class="p-2 block grow">
                        <div class="flex">
                            <div class="flex text-left">
                                <p class="mb-2 text-sm font-bold text-gray-900 dark:text-gray-400">
                                    Dr.Randy Wigham
                                </p>
                            </div>

                            <p class="block grow">
                                <svg
                                    class="w-6 h-6 ml-2 float-right"
                                    fill="#1c64f2"
                                    aria-hidden="true"
                                    viewBox="0 0 20 20"
                                >
                                    <path
                                        d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                        clip-rule="evenodd"
                                        fill-rule="evenodd"
                                    ></path>
                                </svg>
                            </p>
                        </div>
                        <p class="text-[10px] font-semibold text-gray-700 dark:text-gray-200">
                            Cardiologists | The Valley Hospital
                        </p>
                        <div class="flex items-center mt-2">
                            <p>
                                <svg
                                    class="w-5"
                                    fill="#1c64f2"
                                    aria-hidden="true"
                                    viewBox="0 0 20 20"
                                >
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                    ></path>
                                </svg>
                            </p>
                            <div class="px-3 flex text-left">
                                <p class="text-xs font-semibold text-gray-500 dark:text-gray-400">
                                    4.8 (4,279 reviews)
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-5 px-3 mx-auto">
                <div class="flex p-2 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                    <div class="text-orange-500 bg-orange-100 rounded-lg dark:text-orange-100 dark:bg-orange-500">
                        <img
                            class=""
                            src="/images/avatar_sample.png"
                            alt=""
                            aria-hidden="true"
                        />
                    </div>
                    <div class="p-2 block grow">
                        <div class="flex">
                            <div class="flex text-left">
                                <p class="mb-2 text-sm font-bold text-gray-900 dark:text-gray-400">
                                    Dr.Randy Wigham
                                </p>
                            </div>

                            <p class="block grow">
                                <svg
                                    class="w-6 h-6 ml-2 float-right"
                                    fill="#1c64f2"
                                    aria-hidden="true"
                                    viewBox="0 0 20 20"
                                >
                                    <path
                                        d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                        clip-rule="evenodd"
                                        fill-rule="evenodd"
                                    ></path>
                                </svg>
                            </p>
                        </div>
                        <p class="text-[10px] font-semibold text-gray-700 dark:text-gray-200">
                            Cardiologists | The Valley Hospital
                        </p>
                        <div class="flex items-center mt-2">
                            <p>
                                <svg
                                    class="w-5"
                                    fill="#1c64f2"
                                    aria-hidden="true"
                                    viewBox="0 0 20 20"
                                >
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                    ></path>
                                </svg>
                            </p>
                            <div class="px-3 flex text-left">
                                <p class="text-xs font-semibold text-gray-500 dark:text-gray-400">
                                    4.8 (4,279 reviews)
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
