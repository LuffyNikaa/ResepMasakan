<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="img/png" href="Image/icon.png">
    <title>ATWON WEBSITE</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #D33E1F;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background-color: #D5A491;
            padding: 30px;
            border-radius: 20px;
            text-align: center;
            width: 100%;
            max-width: 400px;
        }
        .login-container img {
            width: 100px;
            height: auto;
            border-radius: 50%;
            margin-bottom: 20px;
        }
        .login-container input {
            border-radius: 20px;
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ccc;
            width: 100%;
        }
        .login-container button {
            border-radius: 20px;
            background-color: #4D6EC5;
            color: white;
            padding: 10px;
            width: 100%;
            border: none;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <img src="Image/Logo.png" alt="Logo">
        <form>
            <input type="text" placeholder="Name" required>
            <input type="text" placeholder="Username" required>
            <input type="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
