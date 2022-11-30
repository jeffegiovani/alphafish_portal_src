<!doctype html>
<html lang="{{ app()->getLocale() }}" class="gray-50">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=5.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        {!! SEO::generate(true) !!}
        {!! Robots::metaTag() !!}

        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">

        @include('portal::layouts.partials.favicons')

        @stack('styles')

        @stack('head')
    </head>

    <body class="bg-gray-100 text-black">

        @yield('body_content')

        <svg style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <defs>
                @stack('svgs')
            </defs>
        </svg>

        @stack('scripts')
    </body>
</html>
