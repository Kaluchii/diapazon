<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="" type="image/gif">

    @include('front.desktop.styles')
    @yield('styles')
    {{--{!! $scripts->before_head_close_field !!}--}}
    @yield('meta')
</head>
<body>
{{--    {!! $scripts->after_open_field !!}--}}

    <div class="main-wrapper">
        @include('front.desktop.header')
        @yield('header')

        @yield('content')

        @include('front.desktop.footer')
        @yield('footer')
    </div>

    {{--<div class="hide">
        @include('front.popups.sponsor_form')
        @include('front.popups.thank')
        <a href="#thanks" class="thank"></a>
    </div>--}}

    {{--@include('front.metriks')
    @yield('metriks')--}}

{{--    {!! $scripts->before_close_field !!}--}}
@include('front.desktop.scripts')
@yield('scripts')

</body>
</html>