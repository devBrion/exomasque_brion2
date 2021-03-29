<!DOCTYPE html>
<html lang="en">

<head>
    <?php require "head.html.php" ?>
    <title>Document</title>
</head>

<body>

    <?php require "navbar.html" ?>

    <div class="container">



        <h1>Liste des utilisateurs</h1>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user) : ?>
                    <tr>
                        <td><?= $user->nom_users ?></td>
                        <td><?= $user->prenom_users ?></td>
                        <td><?= $user->email_users ?></td>
                        <td><a href="?page=commandes&id_users=<?= $user->id_users ?>" class="btn btn-info">Voir les commandes</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>

        </table>
    </div>
</body>

<?php require "script.html.php" ?>

</html>