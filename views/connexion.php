<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="<?= CSS ?>connexion.css">
</head>
<body>

    <?php require_once(CONTROLLER."Header.php") ?>

    <div class="connexion-content">
        <div class="connexion" id="connexion" 
        style="
        <?php if($_GET["action"] == "signUp"){
                echo 'display: none'; }
            else if($_GET["action"] == "signIn"){
                echo 'display: block';
            } ?>
        ">
            <h1>Connexion</h1>
            <form action="index.php?action=connexion" method="post">
                <div class="div-input">
                    <label for="email">Adressem mail</label>
                    <input type="email" id="email" name="email">
                </div>
                <div class="div-input">
                    <label for="mdp">Mot de passe</label>
                    <input type="password" id="mdp" name="mdp">
                </div>
                <p>J'ai pas de compte! Je&nbsp;<span id="btn_connexion"> m'inscris!</span></p>
                <div class="div-input">
                    <input type="submit" value="Connexion">
                </div>
            </form>
        </div>

        <div class="connexion" id="inscription" 
        style="
        <?php if($_GET["action"] == "signIn"){
                echo 'display: none'; }
            else if($_GET["action"] == "signUp"){
                echo 'display: block';
            } ?>">
            <h1>Inscription</h1>
            <form action="index.php?action=inscription" method="post">
                <div class="div-input">
                    <label for="username">Nom d'utilisateur</label>
                    <input type="text" id="username" name="username">
                </div>
                <div class="div-input">
                    <label for="email">Adressem mail</label>
                    <input type="email" id="email" name="email">
                </div>
                <div class="div-input">
                    <label for="mdp">Mot de passe</label>
                    <input type="password" id="mdp" name="mdp">
                </div>
                <p>Deja un compte! Je me&nbsp;<span id="btn_inscription"> connecte!</span></p>
                <div class="div-input">
                    <input type="submit" value="Inscription" name="inscription">
                </div>
            </form>
        </div>

        <!-- div erreur -->
        <?php
            if(isset($_GET["error"])) { 
                $msg = "";
                if($_GET["error"] == "accountExist")
                    $msg = "Le compte n'existe pas !";

                if($_GET["error"] == "emptyfield")
                    $msg = "Veuilluiez remplir tout les champs !";

                if($_GET["error"] == "sizeError")
                    $msg = "Le nom d'utilisateur et l'adresse mail ne doivent pas exceder 100 caracteres !";

                if($_GET["error"] == "mailError")
                    $msg = "L'adresse mail est invalide !";
            ?>
                <div class="erreur">
                    <p><?= $msg ?></p>
                </div>
            <?php } ?>
    </div>
    <script src="<?= JS ?>connexion.js"></script>
</body>
</html>