<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));

        }

        div {
            background-color: rgba(0, 0, 0, 0.7);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-200%, -60%);
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

        .register-link {
            color: white;
            /* Define a cor branca */
            text-decoration: none;
            /* Remove o sublinhado */
            font-weight: bold;
            /* Deixa o texto em negrito (opcional) */
        }

        .register-link:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <div>
        <h1>Login</h1>
        <form action="login.php" method="post">
            <label for="email"></label>
            <input type="text" name="email" id="email" placeholder="email" required>
            <br><br>

            <label for="password"></label>
            <input type="password" name="password" id="password" placeholder="Senha" required>
            <br><br>

            <label for="remember">
                <input type="checkbox" name="remember" id="remember"> Lembrar-me
            </label>
            <button href="sistema.php" type="submit">Enviar</button>
            <p>Não tem uma conta? <a href="register.php" class="register-link">Registre-se aqui</a></p>

    </div>

</body>

</html>