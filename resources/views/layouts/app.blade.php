<!doctype html>
<html lang="ar" dir="rtl">
<head>
    <title>{{ config('app.name') }}</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Mobland - Mobile App Landing Page Template">
    <meta name="keywords" content="HTML5, bootstrap, mobile, app, landing, ios, android, responsive">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Font -->
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">

    <link href="/css/vendor.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.10/summernote.css" rel="stylesheet">
    
</head>

<body data-spy="scroll" data-target="#navbar" data-offset="30">
    <div id="app">

    @include('partials.app.nav')

    @yield('content')
    
    @include('partials.app.footer')
    
    </div>
    <!-- End main div -->

    <script src="/js/manifest.js"></script>
    <script src="/js/vendor.js"></script>
    <script src="/js/app.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.10/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 500
            });
        });
    </script>
</body>
</html>