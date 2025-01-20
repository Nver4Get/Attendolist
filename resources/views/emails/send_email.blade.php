<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email - AttenDoList</title>
</head>
<body>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">
    <div style="max-width: 600px; margin: auto; padding: 20px; background: #f9f9f9; border: 1px solid #ddd; border-radius: 8px;">
        <h2 style="text-align: center; color: #2c3e50;">Thank You From AttenDoList</h2>
        <img src="{{ $data['image_url'] }}" alt="AttenDoList" style="max-width: 100%; border-radius: 8px;">
        <p>Dear <strong>{{ $data['name'] }}</strong>,</p>
        <p>{{ $data['message'] }}</p>
        <p>We appreciate your feedback and promise to continue improving.</p>
        <p>Regards,</p>
        <p><strong>The AttenDoList Team</strong></p>
    </div>
</body>
</body>
</html>