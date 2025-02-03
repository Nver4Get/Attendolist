<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email - AttenDoList</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            line-height: 1.6;
            color: #333;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .email-container {
            max-width: 600px;
            margin: 30px auto;
            padding: 20px;
            background: #ffffff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .email-header {
            text-align: center;
            color: #2c3e50;
        }
        .email-header h2 {
            margin-bottom: 10px;
        }
        .email-body {
            margin-top: 20px;
        }
        .email-footer {
            margin-top: 30px;
            text-align: center;
            color: #888;
            font-size: 0.9em;
        }
        .btn {
            display: inline-block;
            margin-top: 15px;
            padding: 10px 20px;
            background-color: #2c3e50;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }
        .btn:hover {
            background-color: #34495e;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="email-header">
            <h2>Thank You From AttenDoList</h2>
            <img src="img/atl.jpg" alt="AttenDoList" style="max-width: 100%; border-radius: 8px;">
        </div>
        <div class="email-body">
            <p>Dear <strong>{{ $name ?? 'Valued User' }}</strong>,</p>
            <p>We appreciate your feedback and promise to continue improving. We apologize for any inconvenience caused by our services.</p>
            <p>If you have further comments or suggestions, please feel free to reach out to us anytime!</p>
            <a href="mailto:support@attendolist.com" class="btn">Contact Us</a>
        </div>
        <div class="email-footer">
            <p>&copy; 2025 AttenDoList. All rights reserved.</p>
        </div>
    </div>
</body>
</html>