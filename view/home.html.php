<!DOCTYPE html>
<html lang="fr">

<head>
    <?php require "head.html.php" ?>
    <title>Document</title>
</head>

<body class="bg-secondary">
    <div class="container mt-3 bg-light p-4 rounded">
        <form method="post" action="?page=login" autocomplete="off">
            <h5>déja inscrit : </h5>
            <div class="form-group">
                <label for="email">Email : </label>
                <input type="email" class="form-control" name="email" id="email">
                <label for="password">Mot de passe : </label>
                <input type="password" class="form-control" name="password" id="password">
            </div>
            <button class="btn btn-primary">Connexion</button>
        </form>
    </div>


    <div class="container mt-3 bg-light p-4 rounded d-flex justify-content-center">
        <form action="?page=addUser" method="post" autocomplete="off">
            <h5 class="text-center m-3">Pas encore inscrit ?</h5>
            <div class="form-group">
                <p class="text-center"><label for="email" class="text-center">Email : </label><br />
                    <input type="email" class="form-control" name="email" id="email" class="text-center">
                </p>
                <p class="text-center"><label for="password" class="text-center">Mot de passe : </label><br />
                    <input type="password" class="form-control" name="password" id="password" class="text-center">
                </p>
                <p class="text-center"><label for="prenom" class="text-center"> Votre prénom :</label><br />
                    <input type="text" class="form-control" name="prenom" id="prenom" class="text-center">
                </p>
                <p class="text-center"><label for="nom" class="text-center">Votre nom : </label><br />
                    <input type="text" class="form-control" name="nom" id="nom" class="text-center">
                </p>
                <p class="text-center"><label for="adresse" class="text-center">Votre adresse : </label><br />
                    <textarea  class="form-control" name="adresse" id="adresse" class="text-center"  rows="3"> </textarea>
                </p>
                <p class="text-center"><label for="nbFoyer" class="text-center">Nombre de personnes dans le foyer: </label><br />
                    <input type="number" class="form-control" name="nbFoyer" id="nbFoyer" class="text-center" min="0" max="20">
                </p>

            </div>
            <p class="text-center"><button class="btn btn-primary mt-4 ">Inscription</button></p>
        </form>
    </div>


</body>
<?php require "script.html.php" ?>

</html>