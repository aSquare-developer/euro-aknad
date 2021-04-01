<!DOCTYPE html>
<html lang="{{ App::getLocale() }}">

@include('includes.head')

<body>
@include('includes.header')

@yield('content')

@include('includes.contact-section')

@include('includes.footer')

@include('includes.js-section')
</body>

</html>
