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
        body {
            background-color: rgb(5, 10, 66);
            color: white;
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
            background: -webkit-linear-gradient(#ffffff, #9f9c9c);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        }

        .arrow-back:hover {
            color: rgb(219, 214, 214);
        }
    </style>

    <div class="container" id="particles-js"></div>

    <div class="content-overlay">
        @yield('quiz')
    </div>

    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script>
        particlesJS("particles-js", {
            "particles": {
                "number": {
                    "value": 50
                },
                "size": {
                    "value": 3
                },
                "move": {
                    "speed": 1
                }
            },
            "interactivity": {
                "events": {
                    "onhover": {
                        "enable": true,
                        "mode": "repulse"
                    }
                }
            }
        });
    </script>

    <style>
        /* Agar particles-js menutupi seluruh layar */
        #particles-js {
            position: absolute;
            top: 0;
            right: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        /* Overlay content untuk @yield('quiz')

        */ .content-overlay {
            position: relative;
            color: white;
            /* Sesuaikan dengan warna konten */
            text-align: center;
            padding: 20px;
        }
    </style>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
