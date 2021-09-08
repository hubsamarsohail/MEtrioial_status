
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
	<title>Create Profile</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('/')}}public/frontend/assets/css/main.min.css">
	<link rel="stylesheet" href="{{asset('/')}}public/frontend/assets/css/weather-icon.css">
	<link rel="stylesheet" href="{{asset('/')}}public/frontend/assets/css/weather-icons.min.css">
    <link rel="stylesheet" href="{{asset('/')}}public/frontend/assets/css/style.css">
    <link rel="stylesheet" href="{{asset('/')}}public/frontend/assets/css/color.css">
    <link rel="stylesheet" href="{{asset('/')}}public/frontend/assets/css/responsive.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Global Puls</title>
	<meta name="csrf-token" content="{{ csrf_token() }}" />

</head>

<style>
    #opacity {
        display: inline-block;
        position: relative;
        width: 100%;
        position: relative;
        background: #f6e8aa;
        overflow: hidden;
        /*background-color: #fecd00;*/
    }

    .featured-baner > img {
        display: inline-block;
        width: 100%;
        opacity: 0.7;
    }

    .mate-black::before {
        background: #f6e8aa;
    }
    .mate-black::before{
        background: #f6e8aa;
        content: "";
        height: 100%;
        left: 0;
        position: absolute;
        top: 0;
        width: 100%;
        z-index: 1;
    }
    .featured-baner > img {
        display: inline-block;
        width: 100%;
        opacity: 0.7;
    }

    .pinkish:before {
        background: #f6e8aa;
    }

    .central-meta {
        /*background: #012070a8 none repeat scroll 0 0;*/
        border: 1px solid #ede9e9;
        border-radius: 5px;
        display: inline-block;
        width: 100%;
        margin-bottom: 20px;
        padding: 20px;
        position: relative;
        color: white;
    }


    .menu-list > li > a i{
        color: #f0394d;
    }


</style>


<body>
