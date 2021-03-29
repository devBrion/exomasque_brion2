<!DOCTYPE html>
<html lang="en">

<head>
    <?php require "head.html.php" ?>
    <title>Profil</title>
</head>

<body>

    <?php require "navbar.html" ?>

    <div class="container">
        <h1>Profil</h1>

            <div> Adresse mail : <?= $user->email ?></div>
            <div> Prénom <?= $user->prenom ?></div>
            <div> Nom :  <?= $user->nom ?></div>

    </div>

</body>

<?php require "script.html.php" ?>

</html>