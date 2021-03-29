<!DOCTYPE html>
<html lang="en">

<head>
    <?php require "head.html.php" ?>
    <title>Commande</title>
</head>


<body>

    <?php require "navbar.html" ?>

    <div class="container">

        <div class="container mt-3 bg-light p-4 rounded">
            <h4>Calcul du nombre de masques: </h4>
            <label for="nbFoyer"> Nombre de personne dans le foyer:</label>
            <input type="number" class="form-control col-3" name="nbFoyer" id="nbFoyer" value ="<?= $_SESSION['user']->nbFoyer_users ?>" disabled="disabled">
            <label for="nbMasque"> 2 masques maximum par personne : </label>
            <input type="number"  min="1" max="2" class="form-control col-3" name="nbMasque" id="nbMasque">
            <button class="btn btn-primary m-2" onclick="calculer()">Calculer</button>
        </div>

        <div class="container mt-3 bg-light p-4 rounded">

            <form method="post" action="?page=addCommande&id_users=<?= $_SESSION['user']->id_users ?>" autocomplete="off">
                <div class="form-group">
                    <h4>Passer la commande : </h4>
                    <label for="nom">Votre nom : </label>
                    <input type="text" class="form-control" id="nom" value="<?= $_SESSION['user']->nom_users ?>">
                    <label for="email"> Votre email : </label>
                    <input type="email" class="form-control" id="email" value="<?= $_SESSION['user']->email_users ?>">
                    <label for="nbmasqueMax"> Nombre de masques commandés : </label>
                    <input type="number" class="form-control" name="nbmasqueMax" id="nbmasqueMax" value="" onchange="calculer()" ;>
                </div>
                <button class="btn btn-primary" >Valider</button>
            </form>
        </div>
    </div>
</body>

<?php require "script.html.php" ?>

<script>
    function calculer() {

        var nbFoyer = +document.getElementById("nbFoyer").value;
        var nbMasque = +document.getElementById("nbMasque").value;
        var result = nbFoyer * nbMasque

        document.getElementById("nbmasqueMax").value = result;

    }
</script>

</html>