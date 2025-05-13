<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= CSS ?>reservation.css">
    <title>Reservation</title>
</head>
<body>
    <?php require_once(CONTROLLER."Header.php") ?>
    
    <div class="presentation-img">
        <img src="<?= RES ?>Palade.png" alt="">
    </div>

    <div class="container-reservation">

        <div class="titles">
            <h1>Reserver une activite & un hebergement </h1>
            <p id="text">
                Plongez dans un monde d'aventure et de détente avec notre sélection exclusive d'activités et d'hébergements. Que vous soyez à la recherche d'une journée remplie d'action en plein air ou d'une retraite paisible dans un cadre pittoresque, notre site de réservation vous offre un éventail d'options pour répondre à tous vos besoins. <br>
                Laissez-vous séduire par nos activités variées, allant de l'escalade en montagne à la navigation sur des eaux cristallines, en passant par des visites guidées captivantes et des expériences culinaires uniques. Que vous soyez un passionné de sports extrêmes ou un amateur de nature, notre plateforme vous permet de découvrir et de réserver facilement les activités qui vous inspirent. <br> 
                Après une journée bien remplie, détendez-vous dans l'un de nos hébergements soigneusement sélectionnés, allant des charmants gîtes ruraux aux luxueux complexes hôteliers. Profitez d'un confort exceptionnel, d'un service attentif et d'un cadre enchanteur pour vous ressourcer et recharger vos batteries. <br> 
                Que vous voyagiez en solo, en couple, en famille ou entre amis, notre site de réservation vous offre la flexibilité et la commodité nécessaires pour planifier votre escapade selon vos préférences. Avec des options de réservation simples et sécurisées, vous pouvez réserver en toute confiance, sachant que votre expérience sera entre de bonnes mains. <br> 
                Ne manquez pas l'occasion de vivre des moments inoubliables lors de votre prochaine escapade. Réservez dès maintenant et préparez-vous à vivre une aventure dont vous vous souviendrez longtemps !
            </p>
            <button id="read-plus" class="read">Lire plus</button>
            <button id="read-moins" class="read">Lire Moins</button>
        </div>

        <!-- filtre -->
        <div class="filter">
            <h1>Decouvrez nos <?= count($datas) ?> activites...</h1>
            <form action="index.php?action=reservation" method="post">
                <select name="type" id="">
                    <option value="">Type d'activite</option>
                    <?php
                        foreach($filtreTypes as $filtreType){ ?>
                            <option value="<?= $filtreType["type"] ?>" <?= (isset($_POST["type"]) && $_POST["type"] == $filtreType["type"]) ? "selected" : "" ?>><?= ucfirst($filtreType["type"]) ?></option>
                    <?php } ?>
                </select>
                <select name="heure_debut" id="">
                    <option value="">Heure de debut</option>
                    <?php
                        foreach($filtreHDs as $filtreHD){ ?>
                            <option value="<?= $filtreHD["heure_debut"] ?>" <?= (isset($_POST["heure_debut"]) && $_POST["heure_debut"] == $filtreHD["heure_debut"]) ? "selected" : "" ?>><?= ucfirst($filtreHD["heure_debut"]) ?></option>
                    <?php } ?>
                </select>
                <select name="heure_fin" id="">
                    <option value="">Heure de fin</option>
                    <?php
                        foreach($filtreHFs as $filtreHF){ ?>
                            <option value="<?= $filtreHF["heure_fin"] ?>" <?= (isset($_POST["heure_fin"]) && $_POST["heure_fin"] == $filtreHF["heure_fin"]) ? "selected" : "" ?>><?= ucfirst($filtreHF["heure_fin"]) ?></option>
                    <?php } ?>
                </select>
                <select name="prix" id="">
                    <option value="">Budget</option>
                    <?php
                        foreach($filtresPrix as $filtrePrix){ ?>
                            <option value="<?= $filtrePrix["prix"] ?>" <?= (isset($_POST["prix"]) && $_POST["prix"] == $filtrePrix["prix"]) ? "selected" : "" ?>><?= ucfirst($filtrePrix["prix"]) ?></option>
                    <?php } ?>
                </select>
                <select name="cathegorie" id="">
                    <option value="">Cathegorie</option>
                    <?php
                        foreach($filtreCathegories as $filtreCathegories){ ?>
                            <option value="<?= $filtreCathegories["cathegorie"] ?>"  <?= (isset($_POST["cathegorie"]) && $_POST["cathegorie"] == $filtreCathegories["cathegorie"]) ? "selected" : "" ?>><?= ucfirst($filtreCathegories["cathegorie"]) ?></option>
                    <?php } ?>
                </select>
                <input type="submit" value="Filtrez" name="filtre">
                <input type="submit" value="Annulez" name="annuler">
            </form>
        </div>

        <div class="card-group">
            <?php
            foreach($datas as $data){ 
                $nbr_reservation = $reservation->getNumberReservation($data["numero"], date("Y-m-d")); ?>
                <div class="card-reservation">
                    <div class="card-header-reservation">
                        <img src="activitiesImage/<?= $data["image"] ?>" alt="">
                    </div>
                    <div class="card-body-reservation">
                        <p id="numeros" style="display: none;"><?= $data["numero"] ?></p>
                        <div class="head">
                            <p class="mark">Activite | <?= ucfirst($data["type"]) ?></p>
                            <p class="<?= (($data["reservation_max"] - $nbr_reservation["SUM(quantite)"]) > 0) ? "disponible" : "non-disponible" ?>"><?= (($data["reservation_max"] - $nbr_reservation["SUM(quantite)"]) > 0) ? "Disponible" : "Non disponible" ?></p>
                        </div>
                        <p class="name"><?= $data["nom"] ?></p>
                        <p class="small-description"><?= substr($data["description"], 0, 150) ?></p>
                    </div>
                    <div class="card-footer-reservation">
                        <p class="cathegorie"><?= ucfirst($data["cathegorie"]) ?></p>
                        <p class="price">De <?= date("H:i", strtotime($data["heure_debut"])) ?> a <?= date("H:i", strtotime($data["heure_fin"])) ?></p>
                        <p class="time"><?= $data["prix"] ?> XAF</p>
                    </div>
                </div>
            <?php } ?>
        </div>

        <div class="cathegorie-description">
            <h1>C'est quoi une activite en groupe ?</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit magni explicabo, dolore necessitatibus laudantium ab quos placeat earum odio magnam provident iure expedita labore voluptatibus eaque delectus nostrum perspiciatis dignissimos. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis ducimus, dolore quibusdam repellendus aliquid, itaque corrupti dolorem ipsum mollitia praesentium ad officiis maiores nemo eveniet recusandae est ex! Sapiente, perspiciatis?</p>
        </div>
        <div class="cathegorie-description">
            <h1>C'est quoi une activite individuelle ?</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit magni explicabo, dolore necessitatibus laudantium ab quos placeat earum odio magnam provident iure expedita labore voluptatibus eaque delectus nostrum perspiciatis dignissimos. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis ducimus, dolore quibusdam repellendus aliquid, itaque corrupti dolorem ipsum mollitia praesentium ad officiis maiores nemo eveniet recusandae est ex! Sapiente, perspiciatis?</p>
        </div>

    </div>

</body>
<script src="<?= JS ?>connexion.js"></script>
<script src="<?= JS ?>reservation.js"></script>
</html>