<!DOCTYPE html>
<html lang="en">

<head>
    @include('Website.include.head')
</head>

<body>
    @include('Website.include.loader')
    <section id="content">
        <header class="relative" id="sc1">
            @yield('Header-background')
            @include('Website.include.nav')
            @yield('main-sec')
        </header>
        <section>
            @yield('content')
        </section>
        @include('Website.include.footer')
        @include('Website.include.js_scripte')
    </section>
</body>

</html>
