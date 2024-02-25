<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.includes.head')
</head>

<body class="">
    @include('admin.includes.sidebar')
    <div class="main-content">
        <!-- Navbar -->

        <!-- End Navbar -->
        <!-- Header -->
        @include('admin.includes.header')
        <div class="container-fluid mt--7">
            @yield('main-body')
        </div>
    </div>
    @include('admin.includes.scripts')
</body>

</html>
