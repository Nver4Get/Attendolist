<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('img/atl.jpg') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <script src="https://kit.fontawesome.com/f5cbc51cc6.js" crossorigin="anonymous"></script>
    <title>Entertaintment - AttenDoList</title>
    <style>
        body {
            background-color: #005BC7;
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .game-options {
            text-align: center;
            color: white;
            font-weight: bold;
            padding: 40px;
            font-size: 22px;
        }

        .back-button {
            position: fixed;
            top: 10px;
            left: 10px;
            font-size: 30px;
            color: white;
            text-decoration: none;
            cursor: pointer;
            transition: color 0.2s;
        }

        .back-button:hover {
            color: black;
        }

        .games {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            justify-content: center;
        }

        .games1,
        .games2,
        .games3,
        .games4 {
            border: 2px solid white;
            widows: 600px;
            height: 600px
        }

        /* .games2 {
            max-height: 200px;
        } */

        .games a {
            flex: 1 1 calc(50% - 40px);
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.2s, box-shadow 0.2s;
            cursor: pointer;
        }

        .games img {
            padding: 10px;
            /* Menambahkan jarak di sekitar setiap gambar */
            width: 300px;
            height: 300px;
            box-sizing: border-box;
            /* Agar padding tidak menambah ukuran gambar */
        }

        .game a:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
        }
    </style>
</head>

<body>
    <div class="container">
        @yield('mainContent')
    </div>
</body>

</html>
