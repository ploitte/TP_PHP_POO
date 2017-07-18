<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inscription</title>
    <link rel="stylesheet" href="css/inscription.css">
</head>
<body>
    <h1>Inscription</h1>

  <div class="contForm">
        <form action="./services/inscription.php" method="POST">
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

    <a href="./index.php?page=connexion">Connexion</a>
    
</body>
</html>