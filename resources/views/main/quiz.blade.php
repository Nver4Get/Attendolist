<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/f5cbc51cc6.js" crossorigin="anonymous"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Quiz</title>
</head>

<body>
    <style>
        body, html {
            color: rgb(0, 0, 0);
            font-weight: bold;
            font-family: Verdana, Geneva, Tahoma, sans-serif
        }

        body {
            background: linear-gradient(270deg, #ff758c, #ff7eb3, #84fab0, #8fd3f4);
            background-size: 600% 600%;
            animation: gradientBG 10s ease infinite;
        }

        button {
            background-color: yellow;
            margin: 20px;
        }

        .desc {
            justify-content: center;
            text-align: center;
            display: flex;
        }

        p {
            width: 600px
        }

        .wrapper {
            justify-content: center;
            text-align: center;
        }

        .profile-icon {
            font-size: 100px;
        }

        .arrow-back {
            position: absolute;
            top: 20px;
            left: 20px;
            font-size: 30px;
            color: #ffffff;
            cursor: pointer;
            text-decoration: none;
        }

        .goodluck {
            background: -webkit-linear-gradient(#000000, #525151);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        }

        .arrow-back:hover {
            color: rgb(219, 214, 214);
        }
        @keyframes gradientBG {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
    </style>

    <div class="content-overlay">
        @yield('quiz')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/particles.js"></script>
    <script>
        particlesJS.load('particles-js', '/path/to/particles.json', function() {
          console.log('particles.js loaded - callback');
        });
      </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
