<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Laravel</title>

    <style>
body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('https://scontent.xx.fbcdn.net/v/t1.15752-9/403421843_323311470654039_7786248566664106911_n.png?_nc_cat=104&ccb=1-7&_nc_sid=510075&_nc_eui2=AeGFbUn89QYbkgi80spxWLlEoEbB9KrKoS6gRsH0qsqhLpDXEXI7tbFJvy2Te5a_Q7I2sXc5mPtr5KxpTHECh-G2&_nc_ohc=goZBVT2iwx0AX-nPJVH&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AdSEynHvzSKHr6yeu3Mmu9KEnyz8ypcteLi66GqFNKKxIQ&oe=65A79AC7');
            background-position: center center;
            background-size: cover;
            background-repeat: no-repeat;
            height: 100vh;
            margin: 0;


        }

        h1 {
         margin: 0;
         font-size: 36px;
         font-weight: bold;
         color: #1b1b1b;
        }

        header {
            background-color: #333;
            color: #070707;
            padding: 10px;
            text-align: center;
        }

        nav {
            background-color: #bcd6f1;
            overflow: hidden;
            width: 100%;
            height: 15%;
        }

        nav a {
            float: left;
            display: block;
            color: #0b0b0b;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .content {
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #151414;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #050505;
            color: rgb(7, 7, 7);
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            outline: none;
            background-color: #0a0a0a;
            color: #fff;
            border: none;
            border-radius: 5px;
        }

        .btn-primary {
            background-color: #070707;
        }

        .nav li{
            color: white;
        }

    </style>
</head>
<body>
    <nav class="navbar navbar-light">
        <h1>CAST ATTENDANCE</h1>
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link {{Request::is('home') ? 'active' : ''}}" href="{{ url( '/') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{Request::is('event') ? 'active' : ''}}" href="{{ url( '/event') }}">Events</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{Request::is('student') ? 'active' : ''}}" href="{{ url( '/student') }}">Students</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{Request::is('attendance') ? 'active' : ''}}" href="{{ url( '/attendance') }}">Attendance</a>
            </li>
        </ul>
    </nav>

    <div class="container mt-5">
        @yield('content')
    </div>
</body>
</html>
