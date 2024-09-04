<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRASI</title>
    <link rel="stylesheet" href="text/css" href="style.css">
    <link rel="stylesheet" href="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <script src="https://kit.fontawesome.com/f5cbc51cc6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/login.css">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

* {
    box-sizing: border-box;
} body {
    align-items: center;
    display: flex;
    justify-content: center;
    flex-direction: column;
    background: #f6f5f7;
    font-family: 'Montserrat', sans-serif;
    min-height: 100vh;
    margin: 0;
} .container {
    position: relative;
    width: 768px;
    max-width: 100%;
    min-height: 480px;
    background: #fff;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25),
                0 10px 10px rgba(0, 0, 0, 0.22);
    display: flex;
} .form-container {
    position: absolute;
    top: 0;
    height: 100%;
    transition: all 0.6s ease-in-out;
} .sign-up-container {
    left: 0;
    width: 50%;
    opacity: 0;
    z-index: 1;
} .sign-in-container {
    left: 0;
    width: 50%;
    z-index: 2;
} .overlay-container {
    position: absolute;
    top: 0;
    left: 50%;
    width: 50%;
    height: 100%;
    overflow: hidden;
    display: flex;
    justify-content: center;
    align-items: center;
} .overlay {
    background: #ff416c; /* Warna latar belakang */
    color: #fff;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100%;
    width: 200%;
    transform: translateX(0);
    transition: transform 0.6s ease-in-out;
} .overlay-panel {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    padding: 0 40px;
    height: 100%;
    width: 50%;
    position: absolute;
} .overlay-left {
    left: 0;
} .overlay-right {
    right: 0;
    text-align: center;
} .overlay-panel h1 {
    font-size: 2.5rem;
    margin-bottom: 20px;
} .overlay-panel p {
    font-size: 1.2rem;
    margin-bottom: 30px;
} .overlay-panel button {
    padding: 12px 45px;
    font-size: 14px;
    background-color: transparent;
    color: white;
    border: 2px solid white;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease-in-out;
} .overlay-panel button:hover {
    background-color: rgba(255, 255, 255, 0.2);
} .overlay-right {
    right: 0;
    transform: translateX(-50%);
} .overlay-left {
    transform: translateX(-100%);
} form {
    background: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    padding: 0 50px;
    height: 100%;
    text-align: center;
} h1 {
    font-weight: bold;
    margin: 0;
} p {
    font-size: 14px;
    font-weight: 100;
    line-height: 20px;
    letter-spacing: 0.5px;
    margin: 15px 0 20px;
} input {
    background: #eee;
    padding: 12px 15px;
    margin: 8px 0;
    width: 100%;
    border-radius: 5px;
    border: none;
    outline: none;
} button {
    border-radius: 20px;
    border: 1px solid #ff4b2b;
    background-color: #ff4b2b;
    color: #ffffff;
    font-size: 12px;
    font-weight: bold;
    padding: 12px 45px;
    letter-spacing: 1px;
    text-transform: uppercase;
    transition: transform 80ms ease-in;
} button:active {
    transform: scale(0.95);
} .social-container {
    margin: 20px 0;
} .social-container a {
    border: 1px solid #dddddd;
    text-decoration: none;
    border-radius: 50%;
    display: inline-flex;
    justify-content: center;
    align-items: center;
    margin: 0 5px;
    height: 40px;
    width: 40px;
} #signUp {
    background-color: transparent;
    border-color: #ffffff;
} .container.right-panel-active .sign-in-container {
    transform: translateX(100%);
} .container.right-panel-active .sign-up-container {
    transform: translateX(100%);
    opacity: 1;
    z-index: 5;
} .container.right-panel-active .overlay {
    transform: translateX(50%);
} .container.right-panel-active .overlay-left {
    transform: translateX(0%);
} .container.right-panel-active .overlay-right {
    transform: translateX(20%);
}
    </style>
</head>
<body>
    @yield('login')
</body>
</html>
