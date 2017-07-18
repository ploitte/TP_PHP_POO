<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modif</title>
</head>
<body>
    <form action="./services/update.php?noteid=<?= $note -> id; ?>" method = "POST">
        <table>
            <tr>
                <td>
                    <input type="text" name="titre" value="<?= $note -> title; ?>">
                    
                </td>
            </tr>
            <tr>
                <td>
                    <textarea name="texte"><?= $note -> texte; ?></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value = "Modifier">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>