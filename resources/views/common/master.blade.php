<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="~bulma-calendar/dist/css/bulma-calendar.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/charts.css/dist/charts.min.css">
    <script src="https://kit.fontawesome.com/89e26daa45.js" crossorigin="anonymous"></script>
    <script src="~bulma-calendar/dist/js/bulma-calendar.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
        <title>KA4 Dashboard</title>
</head>
<body>

</body>
@include('common.navbar')
@yield('content')

<script src="/js/app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/2.0.0/chartjs-plugin-datalabels.min.js" integrity="sha512-R/QOHLpV1Ggq22vfDAWYOaMd5RopHrJNMxi8/lJu8Oihwi4Ho4BRFeiMiCefn9rasajKjnx9/fTQ/xkWnkDACg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://code.jquery.com/jquery-latest.js"></script>
<script>
    $(document).ready(function(){
        $("#div_Chart_refresh").load("graph");
        $("#div_Shifts_refresh").load("shifts");
        setInterval(function() {
            $("#div_Chart_refresh").load("graph");
            $("#div_Shifts_refresh").load("shifts");
        }, 3000);
    });
</script>
</html>
