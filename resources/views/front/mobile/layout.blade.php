<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="" type="image/gif">

    @include('front.mobile.styles')
    @yield('styles')
    {{--{!! $scripts->before_head_close_field !!}--}}
    @yield('meta')
</head>
<body>
{{--    {!! $scripts->after_open_field !!}--}}

    <div class="main-wrapper">
        @include('front.mobile.header')
        {{--@yield('header')--}}

        @yield('content')

        @include('front.mobile.footer')
        {{--@yield('footer')--}}
    </div>

    {{--<div class="hide">
        @include('front.popups.sponsor_form')
        @include('front.popups.thank')
        <a href="#thanks" class="thank"></a>
    </div>--}}

    {{--@include('front.metriks')
    @yield('metriks')--}}

{{--    {!! $scripts->before_close_field !!}--}}
@include('front.mobile.scripts')
@yield('scripts')

</body>
</html>