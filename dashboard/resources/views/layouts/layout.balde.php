<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ url('/public/css/maincity.css?ver=').time() }}" type="text/css">
</head>
<body style="background-color: #e5e5e5">
<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="{{ url("portal/settlement/select-city/") }}">Change City</a>
</div>
<div style="width:100%;background-color:#f15d24">
    <span style="font-size:40px;cursor:pointer;color: #FFFFFF" onclick="openNav()">&#9776; Protto Dashboard</span>
</div>
<!--@yield('content')-->


<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }
    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
</script>
</body>
</html>
