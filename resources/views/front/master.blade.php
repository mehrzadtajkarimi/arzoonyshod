<!DOCTYPE html>
<html lang="en" class="<?= session('theme')  ?? 'dark' ?>">

<head>
    @include('front.partials.head')
    <title>@yield('title')</title>
</head>

<body class="bg-width  dark:bg-slate-900 dark:text-red-500  text-slate-600 relative">

    <header>
        <nav>
            @include('front.partials.nav')
        </nav>
        <div id="breadcrumb">
            <ul>
                @yield('breadcrumb')
            </ul>
        </div>
    </header>
    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>
    <footer>
        @include('front.partials.footer')
        @include('front.partials.script')
    </footer>

</body>

</html>