<!-- This is the LAYOUT file -->



<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset ('assets/css/table.css') }}">

    <link rel="stylesheet" href="{{ asset ('assets/css/navbar.css') }}">

    <link rel="stylesheet" href="{{ asset ('assets/css/form.css') }}">

    <link rel="stylesheet" href="{{ asset ('assets/css/media.css') }}">

    <link rel="stylesheet" href="{{ asset ('assets/css/contact.css') }}">



    <title>Dashboard</title>

</head>



<body>

    <div class="navigation">

        <div class="container">

            <div class="logo">

                <h1 class="nav-logo-h1">

                    <a href="{{url('list')}}">Matchless Dashboard</a>

                </h1>

            </div>

            <ul class="nav-ul">

                <li class="nav-li"><a href="{{url('/')}}" class="nav-a">Home</a></li>

                <li class="nav-li"><a href="{{url('adddetails')}}" class="nav-a">InsertData</a></li>

                <li class="nav-li"><a href="{{url('list')}}" class="nav-a">Dashboard</a></li>

                <li class="nav-li"><a href="{{url('contact')}}" class="nav-a">Contact</a></li>

                <li class="nav-li"><a href="{{ url('/home') }}" class="nav-a">Logout</a></li>

            </ul>

        </div>

    </div>

    <!-- this is called in fisrt.blade.php file and fetching all data (code) -->

    @yield('html')

    @yield('list')

    @yield('edit')

    @yield('contact')





</body>



</html>