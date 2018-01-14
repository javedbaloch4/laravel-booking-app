<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    {{ Html::style("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css") }}
{{--    {{ Html::style("css/bootstrap.min.css") }}--}}
    {{ Html::style('css/font-awesome.min.css') }}
    {{ Html::style('plugins/bootstrap-select/dist/css/bootstrap-select.css') }}
    {{ Html::style('plugins/Zebra_Datepicker/dist/css/bootstrap/zebra_datepicker.css') }}
    @yield('style')
    <title>@yield('title')</title>
</head>
<body>
@include('layouts.navbar')
<div class="container">
    @yield('content')
</div>

{{ Html::script('https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js') }}
{{ Html::script('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js') }}
{{ Html::script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js') }}
{{ Html::script('plugins/bootstrap-select/dist/js/bootstrap-select.js') }}
{{ Html::script('plugins/Zebra_Datepicker/dist/zebra_datepicker.min.js') }}
@yield('script')
<script>
    $(document).ready(function() {
        $('.selectpicker').selectpicker();
    });
</script>

</body>
</html>