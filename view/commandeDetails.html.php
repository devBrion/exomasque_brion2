<!DOCTYPE html>
<html lang="en">

<head>
    <?php require "head.html.php" ?>
    <title>Detail</title>
</head>

<body>

    <?php require "navbar.html" ?>

    <div class="container">
        <h1>Details</h1>
        <?php foreach ($commande as $commandes) : ?>
            <div>
                <div class="font-weight-bold"> Nombre de masques : <span class="font-weight-normal"> <?= $commande->nbMasque_commande ?> </span> </div>
                <div class="font-weight-bold"> Date: <span class="font-weight-normal"><?= $commande->date_commande ?></span></div>
            </div>
        <?php endforeach; ?>

    </div>

</body>

<?php require "script.html.php" ?>

</html>