<!DOCTYPE html>
<html lang="en" class="<?= session('theme')  ?? 'dark' ?>">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- <script src="{{ asset('js/taildwindCss3.0.12.js') }}"></script> -->
    <!-- <script type="text/javascript" src="{{ asset('js/taildwindCss3.0.12.js') }}"></script> -->
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
    <title>Document</title>
</head>

<body class="bg-width  dark:bg-slate-900 dark:text-red-500  text-slate-600 ">
    <header>
        <nav>
            <div class="lg:hidden">
                <div class="hidden" id="nav">
                    <div class="h-screen absolute right-0 left-0 bg-black  opacity-50 z-10"></div>
                    <div class="h-screen absolute right-0 py-14 px-32 z-10 bg-white opacity-100" id="nav">
                        <button class=" absolute left-3 top-3" id="btn-nav-close">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </button>
                        <section>
                            <img src="{{ asset('img/logo/logo1.png') }}" alt="" srcset="">
                        </section>
                    </div>
                </div>
            </div>


            <section>
                <div class="flex justify-center">
                    <div class="rounded-2xl  w-10/12 h-24 mt-7 drop-shadow-lg  dark:bg-slate-800  bg-slate-50">
                        <div class="hidden lg:block ">
                            <div class="flex justify-between items-center h-full mx-10">
                                <div class="flex flex-row content-center items-center  space-x-4 ">
                                    <div class="rounded-full h-10 w-10 dark:bg-slate-600 bg-slate-200 grid place-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                        </svg>
                                    </div>
                                    <div class="rounded-full h-10 w-10 dark:bg-slate-600 bg-slate-200 grid place-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                        </svg>
                                    </div>
                                    <div class="rounded-full h-10 w-10 dark:bg-slate-600 bg-slate-200 grid place-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                        </svg>
                                    </div>
                                    <div class="rounded-full h-10 w-10 space-x-0 dark:bg-slate-600 bg-slate-200 grid place-items-center">
                                        @if (session('theme') == '' || session('theme') == 'dark')
                                        <a href="{{ url('chang_themes/'.'light') }}" class="" id="btn-dark">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                                            </svg>
                                        </a>
                                        @elseif ( session('theme') == 'light')
                                        <a href="{{ url('chang_themes/'.'dark') }}" class="" id="btn-light">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                                            </svg>
                                        </a>
                                        @endif
                                    </div>
                                </div>
                                <div class="w-4/12">
                                    <div class="flex items-center justify-end rounded-lg h-10 dark:bg-slate-700 bg-slate-200">
                                        <div class="mr-2">
                                            <p class="dark:text-red-400 opacity-80 text-slate-600">دنبال چه میگردی ؟</p>
                                        </div>
                                        <div class="mr-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-20">
                                    <img class="mt-2" src="{{ asset('img/logo/logo2.png') }}" alt="arzoonyshod" srcset="">
                                </div>
                            </div>
                        </div>
                        <div class="lg:hidden h-full ">
                            <div class="flex justify-between items-center h-full ">
                                <div class="ml-10 ">
                                    <div class="relative">
                                        <div class="md:hidden">
                                            <button class=" p-2 dark:bg-slate-700 bg-slate-200 rounded-lg ">
                                                <div class="px-1    dark:bg-slate-600 bg-slate-300 rounded-lg relative left-4">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 8l4 4m0 0l-4 4m4-4H3" />
                                                    </svg>
                                                </div>
                                            </button>
                                        </div>
                                        <div class="hidden md:block ">
                                            <button class="flex py-2 pl-2 pr-6 dark:bg-slate-700 bg-slate-200 rounded-lg  ">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 " fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M10 8l4 4m0 0l-4 4m4-4H3" />
                                                </svg>
                                                <span class="text-sm">ورود</span>
                                            </button>
                                            <button class="flex py-2 dark:bg-slate-600  bg-slate-300 rounded-lg absolute left-16 top-0 ">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                                                </svg>
                                                <span class="ml-1 text-sm">عضویت</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="w-44 hidden md:block">
                                        <img class="" src="{{ asset('img/logo/logo1.png') }}" alt="arzoonyshod" srcset="">
                                    </div>
                                    <div class="w-10  md:hidden ">
                                        <img class="" src="{{ asset('img/logo/logo3.png') }}" alt="arzoonyshod" srcset="">
                                    </div>

                                </div>
                                <div class="mr-10">
                                    <button id="btn-nav">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 " fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden lg:block dark:text-red-500 text-slate-600 ">
                    <div class="flex justify-center ">
                        <div class="rounded-2xl rounded-t-none  w-9/12 h-12 drop-shadow-lg   dark:bg-slate-700  bg-slate-100">
                            <ul class="list-none h-full flex flex-row justify-evenly items-center ">
                                <li class="">
                                    <a class="px-20 py-3 " href="">
                                        <span class=" text-red-500">text-red-500</span>
                                    </a>
                                </li>
                                <a class="px-20 py-3 text-red-500" href="">
                                    <span class="text-red-500"">text-red-500</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a class=" px-20 py-3 text-red-500" href="">
                                        <span class="text-red-500">text-red-500"</span>
                                </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </section>
            <section class="lg:hidden">
                dd
            </section>
        </nav>
    </header>
    <main>
        <div class="container">
        </div>
    </main>
    <footer>

        <script>
            $(document).ready(function() {
                $('#btn-nav').click(function() {

                    $('#nav').toggleClass('hidden');
                });
            });
        </script>




    </footer>

</body>

</html>