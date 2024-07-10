@extends('layouts.app')

@section('content')
    <div
        class="flex h-screen bg-gray-50 dark:bg-gray-900"
        :class="{ 'overflow-hidden': isSideMenuOpen}"
    >
        <div class="flex flex-col flex-1">
            <main class="h-full pb-16 overflow-y-auto">
                <div class="container flex flex-col  px-6 mx-auto">
                    <h2 class="my-8 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                    </h2>
                    <h2 class="my-8 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                    </h2>
                    <h2 class="my-1 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                        Good Afternoon,
                    </h2>
                    <h2 class="my-1 text-2xl font-bold text-gray-700 dark:text-gray-200">
                        Sarina!
                    </h2>
                    <h1 class="my-2 text-xl text-gray-700 dark:text-gray-200">
                        How are you feeling today?
                    </h1>
                    <h2 class="my-4 text-2xl font-bold text-gray-700 dark:text-gray-200">
                    </h2>
                </div>
                <div class="container flex flex-col items-center px-6 mx-auto">
                    <div class="flex flex-row text-center">
                        <div>
                            <button class="flex items-center px-1">
                                <img
                                    class="object-fill w-12 h-15"
                                    src="/images/happy.png"
                                    alt=""
                                    aria-hidden="true"
                                />
                            </button>
                        </div>

                        <div>
                            <button class="flex items-center px-1">
                                <img
                                    class="object-fill w-12 h-15"
                                    src="/images/calm.png"
                                    alt=""
                                    aria-hidden="true"
                                />
                            </button>
                        </div>

                        <div>
                            <button class="flex items-center px-1">
                                <img
                                    class="object-fill w-12 h-15"
                                    src="/images/manic.png"
                                    alt=""
                                    aria-hidden="true"
                                />
                            </button>
                        </div>

                        <div>
                            <button class="flex items-center px-1">
                                <img
                                    class="object-fill w-12 h-15"
                                    src="/images/angry.png"
                                    alt=""
                                    aria-hidden="true"
                                />
                            </button>
                        </div>

                        <div>
                            <button class="flex items-center px-1">
                                <img
                                    class="object-fill w-12 h-15"
                                    src="/images/sad.png"
                                    alt=""
                                    aria-hidden="true"
                                />
                            </button>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="z-10 py-2 bg-white shadow-md dark:bg-gray-800">
                <div class="container flex flex-col items-center px-6 mx-auto">
                    <div class="flex flex-row text-center">
                        <div>
                            <button class="flex items-center px-2">
                                <div class="container flex flex-col items-center w-8">
                                    <img
                                        class="object-cover w-9 h-8"
                                        src="/images/home-active.png"
                                        alt=""
                                        aria-hidden="true"
                                    />
                                    <p style="color: #1c64f2!important; font-size: xx-small">Home</p>
                                </div>
                            </button>
                        </div>

                        <div>
                            <a href="{{route('doctors')}}" class="flex items-center px-2">
                                <div class="container flex flex-col items-center w-8">
                                    <img
                                        class="object-cover w-8 h-8"
                                        src="/images/appointment.png"
                                        alt=""
                                        aria-hidden="true"
                                    />
                                    <p style="color: dimgray!important; font-size: xx-small">Appointment</p>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="{{route('favorite')}}" class="flex items-center px-2">
                                <div class="container flex flex-col items-center w-8">
                                    <img
                                        class="object-cover w-8 h-8"
                                        src="/images/history.png"
                                        alt=""
                                        aria-hidden="true"
                                    />
                                    <p style="color: dimgray!important; font-size: xx-small">History</p>
                                </div>
                            </a>
                        </div>
                        <div>
                            <button class="flex items-center px-2">
                                <div class="container flex flex-col items-center w-8">
                                    <img
                                        class="object-cover w-8 h-8"
                                        src="/images/articles.png"
                                        alt=""
                                        aria-hidden="true"
                                    />
                                    <p style="color: dimgray!important; font-size: xx-small">Articles</p>
                                </div>
                            </button>
                        </div>
                        <div>
                            <button class="flex items-center px-2">
                                <div class="container flex flex-col items-center w-8">
                                    <img
                                        class="object-cover w-8 h-8"
                                        src="/images/profiles.png"
                                        alt=""
                                        aria-hidden="true"
                                    />
                                    <p style="color: dimgray!important; font-size: xx-small">Profile</p>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
@endsection
