<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <style>
         body {
            background-color: #4b0082; /* Dark purple background */
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }
        .quiz-container {
            background-color: #4b0082;
            border-radius: 10px;
            padding: 30px;
            text-align: center;
            width: 100%;
            max-width: 500px;
        }
        .question {
            font-size: 18px;
            margin-bottom: 20px;
        }
        .btn-next {
            background-color: yellow;
            color: black;
            font-weight: bold;
        }
    </style>
        @yield('questions')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
