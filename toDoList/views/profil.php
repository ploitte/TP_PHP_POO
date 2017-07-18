<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profil</title>
    <link rel="stylesheet" href="./css/profil.css">
</head>
<body>

<h1>Profil</h1>

<!-- PHP POST ICI-->
<table id="note" border = 1>
    <tr>
        <td class="title">Pseudo</td>
        <td class="title">Titre</td>
        <td class="title">Texte</td>
    </tr>
    <?php foreach($posts as $p){ ?>
    <tr>   
        <td><?= $p -> user_id; ?></td>
        <td><?= $p -> titre; ?></td>
        <td><?= $p -> texte; ?></td>
        <td>
            <a href="index.php?page=modif&noteid=<?= $p -> id ?>"> Editer </a>
        </td>
         <td>
            <a href="services/delet.php?delet=<?= $p -> id ?>"> Supprimer </a>
         </td>
    </tr>
    <?php } ?>
</table> 
<br><br>
<div class="contForm">
    <form method="POST" action="./services/post.php">
        <table>
            <tr>
                <td>
                    <input type="text" name="titre" placeholder="titre">
                </td>
            </tr>
            <tr>
                <td>
                    <textarea name="texte" placeholder = "Description ici..."></textarea>
                </td>
            </tr>
            <tr>
                <td id="button">
                    <input id ='sub' type="submit">
                </td>
            </tr>
        </table>
    </form>
</div>

<a href="./services/deconnexion.php">Deconnexion</a>

</body>
</html>