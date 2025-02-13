<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        }

        div {
            background-color: rgba(0, 0, 0, 0.9);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-200%, -50%);
            padding: 80px;
            border-radius: 15px;
            color: white;
        }

        h1 {
            text-align: center;
        }

        input {
            border: none;
            padding: 15px;
            font-size: 15px;
            outline: none;
        }

        button {
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            font-size: 20px;
        }
    </style>
</head>

<body>

    <div>
        <h1>Login</h1>
        <form action="login.php" method="post">
            <label for="username"></label>
            <input type="text" name="username" id="username" placeholder="Nome" required>
            <br><br>
            <label for="password"></label>
            <input type="password" name="password" id="password" placeholder="Senha" required>
            <br><br>
            <button type="submit">Enviar</button>
    </div>

</body>

</html>