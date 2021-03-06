
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">

    <!-- Libs CSS -->
    <link rel="stylesheet" href="{{asset('/fonts/feather/feather.min.css')}}">
    <link rel="stylesheet" href="{{asset('/libs/flatpickr/dist/flatpickr.min.css')}}">
    <link rel="stylesheet" href="{{asset('/libs/quill/dist/quill.core.css')}}">
    <link rel="stylesheet" href="{{asset('/libs/select2/dist/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('/libs/highlight.js/styles/vs2015.css')}}">

    <!-- Map -->
    <link href='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css' rel='stylesheet' />

    <!-- Theme CSS -->

    <link rel="stylesheet" href="{{asset('/css/theme.min.css')}}" id="stylesheetLight">

    <link rel="stylesheet" href="{{asset('/css/theme-dark.min.css')}}" id="stylesheetDark">

    <style>body { display: none; }</style>
    <title>Gaz loc</title>

    @yield('title')
</head>
<body class="d-flex align-items-center bg-auth border-top border-top-2 border-primary">

<!-- CONTENT
================================================== -->
<div class="container">
    <div class="row justify-content-center">
        @yield('content')
    </div> <!-- / .row -->
</div> <!-- / .container -->

<!-- JAVASCRIPT
================================================== -->
<!-- Libs JS -->
<script src="{{asset('/libs/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('/libs/%40shopify/draggable/lib/es5/draggable.bundle.legacy.js')}}"></script>
<script src="{{asset('/libs/autosize/dist/autosize.min.js')}}"></script>
<script src="{{asset('/libs/chart.js/dist/Chart.min.js')}}"></script>
<script src="{{asset('/libs/dropzone/dist/min/dropzone.min.js')}}"></script>
<script src="{{asset('/libs/flatpickr/dist/flatpickr.min.js')}}"></script>
<script src="{{asset('/libs/highlightjs/highlight.pack.min.js')}}"></script>
<script src="{{asset('/libs/jquery-mask-plugin/dist/jquery.mask.min.js')}}"></script>
<script src="{{asset('/libs/list.js/dist/list.min.js')}}"></script>
<script src="{{asset('/libs/quill/dist/quill.min.js')}}"></script>
<script src="{{asset('/libs/select2/dist/js/select2.min.js')}}"></script>
<script src="{{asset('/libs/chart.js/Chart.extension.min.js')}}"></script>

<!-- Map -->
<script src='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js'></script>

<!-- Theme JS -->
<script src="{{asset('/js/theme.min.js')}}"></script>

</body>
</html>
