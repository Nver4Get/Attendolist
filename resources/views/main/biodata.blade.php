<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <script src="https://kit.fontawesome.com/f5cbc51cc6.js" crossorigin="anonymous"></script>
    <link rel="icon" href="{{ asset('img/atl.jpg') }}">
    <title>User Profile - AttenDoList</title>
    <style>
        body {
            color: white;
            font-family: 'Roboto', sans-serif;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .arrow-back {
            position: relative;
            right: 90px;
            text-decoration: none;
            font-size: 30px;
            color: white;
        }

        .arrow-back:hover {
            color: crimson;
        }

        .profile-controller {
            text-align: center;
            background-color: #1c1c1c;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
        }

        .profile-icon {
            font-size: 100px;
            margin-bottom: 20px;
        }

        .user-name {
            font-size: 24px;
            font-weight: bold;
            margin: 10px 0;
        }

        .user-email {
            font-size: 18px;
            margin: 10px 0 20px;
        }

        .settings, .organization {
            display: inline-block;
            margin: 10px;
            cursor: pointer;
            font-size: 24px;
            color: white;
            transition: color 0.2s;
        }

        .settings:hover {
            color: #f39c12;
        }

        .organization:hover {
            color: #27ae60;
        }
    </style>
</head>
<body>
    <div class="profile-controller">
        @yield('mainContent')
    </div>
</body>
</html>