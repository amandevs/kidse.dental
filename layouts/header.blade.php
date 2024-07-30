<!doctype html>
<html lang="en">
  <head>
    <!-- PAGE TITLE HERE -->
	<title>Kids e Dental | Home</title>
	
	<!-- All Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">


	<meta name="format-detection" content="telephone=no">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- FAVICONS ICON -->
  	<link rel="icon" href="{{ asset('images/angel-favicon.png')}}" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <script type="text/javascript" src="{{ asset('js/sweetalert.min.js')}}"></script>
  <script src="{{ asset('js/ckeditor.js')}}"></script>
<style>

 .dots-container {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100%;
  width: 100%;
	position: fixed;
	z-index: 999;
   background-color: rgba(0, 0, 0, 0.2);
}


.dot {
  height: 20px;
  width: 20px;
  margin-right: 10px;
  border-radius: 10px;
  background-color: #b3e1fc;
  animation: pulse 1.5s infinite ease-in-out;
}

.dot:last-child {
  margin-right: 0;
}

.dot:nth-child(1) {
  animation-delay: -0.3s;
}

.dot:nth-child(2) {
  animation-delay: -0.1s;
}

.dot:nth-child(3) {
  animation-delay: 0.1s;
}

@keyframes pulse {
  0% {
    transform: scale(0.8);
    background-color: #b3dbfc;
    box-shadow: 0 0 0 0 rgba(178, 212, 252, 0.7);
  }

  50% {
    transform: scale(1.2);
    background-color: #67c5fb;
    box-shadow: 0 0 0 10px rgba(178, 212, 252, 0);
  }

  100% {
    transform: scale(0.8);
    background-color: #b3dffc;
    box-shadow: 0 0 0 0 rgba(178, 212, 252, 0.7);
  }
}

.site-button{
	border-radius: 5px;
}
</style>
    
  </head>
  <body>
<section class="bglaoder">
<div class="dots-container" id="loader" style="display: none;">
  <div class="dot"></div>
  <div class="dot"></div>
  <div class="dot"></div>
  <div class="dot"></div>
  <div class="dot"></div>
</section>
    @include('layouts.navbar')

