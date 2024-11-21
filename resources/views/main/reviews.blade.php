<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review</title>
    <link rel="icon" href="{{ asset('img/atl.jpg') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f5cbc51cc6.js" crossorigin="anonymous"></script>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            color: #343a40;
        }

        .back-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            text-decoration: none;
            color: #ffffff;
            background-color: #6c757d;
            /* Warna abu-abu Bootstrap */
            border-radius: 30px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .back-btn i {
            margin-right: 10px;
            /* Memberikan jarak antara ikon dan teks */
        }

        .back-btn:hover {
            background-color: #495057;
            /* Warna lebih gelap untuk hover */
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
            transform: translateY(-2px);
        }

        .back-btn:active {
            transform: translateY(0);
            /* Memberikan efek klik */
            box-shadow: 0 3px 8px rgba(0, 0, 0, 0.2);
        }

        h1 {
            margin-bottom: 30px;
            font-size: 2.5rem;
            color: #495057;
            text-align: center;
        }

        .table th,
        .table td {
            vertical-align: middle;
            text-align: center;
        }

        .table thead th {
            background-color: #343a40;
            color: #fff;
        }

        .table tbody tr:hover {
            background-color: #e9ecef;
        }

        .container {
            margin-top: 50px;
            padding: 30px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        footer {
            margin-top: 10px;
            text-align: center;
            padding: 20px 0;
            color: black;
        }
    </style>
</head>

<body>
    <div class="container">
        <a href="/dashboard" title="Back to Dashboard" class="back-btn"><i class="fa-solid fa-circle-arrow-left"></i>
            Back to Dashboard</a>
        @yield('mainContent')

        <footer>
            @extends('partials.footer')
        </footer>
    </div>
</body>

</html>
