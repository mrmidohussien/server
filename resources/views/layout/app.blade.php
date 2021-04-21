<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="https://ureed.com/favicon.ico">
    <link rel="stylesheet" type="text/css" href="http://localhost/htdocs/css1/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/htdocs/css/emojionearea.min.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/htdocs/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/htdocs/css/core.css">
    <title>Document</title>
</head>
<body>
    @include('inc.off-canvas')

    @yield("header")
    
    @yield("content")

    {{-- @include("inc.slidebar") --}}
    @include('inc.footer')

    @include('inc.scripts')
</body>
</html>