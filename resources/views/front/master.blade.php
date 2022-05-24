<!DOCTYPE html>
<html lang="en" class="<?= session('theme')  ?? 'dark' ?> relative">

<head>
    @include('front.partials.head')
    <title>@yield('title')</title>
</head>

<body  dir="rtl"  class="container font-Vazir bg-width  dark:bg-slate-900 dark:text-red-500  text-slate-600 ">
    <header>
        <nav class="w-full">
            @include('front.partials.nav')
        </nav>
        <div id="breadcrumb">
            <ul>
                @yield('breadcrumb')
            </ul>
        </div>
    </header>
    <main>
        <div class="w-full">
            @yield('content')
        </div>
    </main>
    <footer>
        @include('front.partials.footer')
        @include('front.partials.script')
    </footer>

</body>

</html>