<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="
        https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css
        " rel="stylesheet">
</head>

<body class="dashboard-body">
       <main class="container-fluid px-0">
        <div class="d-flex">
            <div class="sidebar">
                @include('admin.sidebar')
            </div>
            <div class="py-3 px-3 w-100 dashboard-main-content bg-light-subtle" style="">

                <!-- Page Heading -->
                @if (isset($header))
                    <header>
                       
                        <div class="">
                            {{ $header }}
                        </div>
                    </header>
                @endif
                <hr>
                {{$slot}}
            </div>
        </div>
    </main>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

</body>

</html>
