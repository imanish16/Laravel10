<!DOCTYPE html>
<html>

<head>
    <title>Page Title</title>
    <!-- Add the Bootstrap CSS stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css"
        integrity="sha512-9QZoueTboT0QECO47RpSEupcpd0q3OqAWarjb6lAArd9a9ZImaFZ6E+Q2b+m/b1iKckdARqC+pkc6P/L81mXg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        body {
            background: url('images/bd8db6e6d336033e654188d56812e779.jpg') center center fixed;
            background-size: cover;
            background-color: rgba(0, 0, 0, 0.5);
            color: #fff;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: -1;
        }

        .btn-dumbbell {
            position: absolute;
            right: 50%;
            bottom: 50%;
            transform: translate(50%, 50%);
            width: 200px;
            height: 50px;
            border-radius: 25px;
            border: none;
            background-color: #fff;
            font-size: 18px;
            font-weight: bold;
            color: #333;
            text-align: center;
            line-height: 50px;
            cursor: pointer;
            overflow: hidden;
        }
    </style>
</head>

<body>
    <div class="overlay"></div>
    <a href="{{ url('/login') }}" class="btn-dumbbell">Login</a>

    <!-- Add the Bootstrap JavaScript library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"
        integrity="sha512-ctKM+zPmET34YzKjNF/DJ0H2IgyJdzX9GMjgMkEZpBdwIz+UBD8JDDYjKILU+06JU6b5DpAtPiRJBC5+5z5Z5A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>
