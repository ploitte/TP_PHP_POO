<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Connexion</title>
    <link rel="stylesheet" href="css/connexion.css">
</head>
<body>
    <div class="contForm">
        <form action="./services/connexion.php" method="POST">
            <table>
                <tr>
                    <td><input name="mail" type="text" placeholder="Email..."></td>
                </tr>
                <tr>
                    <td><input name="password" type="password" placeholder="Password..."></td>
                </tr>
                <tr>
                    <td id="button" ><input name="subButton" type="submit"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>