<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('assets/img/logos/brookside-favicon.jpeg')}}" type="image/x-icon" />
    @yield('title')
    <!-- Include all required JS/CSS global files -->
    @include('includes/globalLinks')
    <!-- Include any page-specific links -->
    @yield('pageLinks')
</head>
<body>
    <!-- Include the full header with navigation -->
    @include('header/header')
    <div class="container">
        @yield('content')
    </div>
    <!-- Include the base footer -->
    @include('footer/footer')
</body>
</html>