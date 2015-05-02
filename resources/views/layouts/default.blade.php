<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pugs!</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <style>
        body {
            padding-bottom: 70px;
        }

        .navbar-default {
            background-color: transparent;
            border-color: transparent;
        }

        .btn {
            position: relative;
            z-index: 1100;
        }

        .pug-col, .pug-col-sm {
            padding-bottom: 25px;
        }
        .pug-col-sm {
            height: 250px;
        }
        .pug-image {
            max-height: 100%;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        @yield('content')
    </div>

    <footer class="navbar navbar-default navbar-fixed-bottom">
        <div class="container">
            <p class="navbar-text navbar-right">
                Made by <a href="http://mtts.se" target="_blank">mtts.se</a>
            </p>
        </div>
    </footer>
</body>
</html>
