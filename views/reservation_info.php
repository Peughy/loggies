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
    
    <div class="presentation-img-reservations">
        <img src="activitiesImage/<?= $data["image"] ?>" alt="">
    </div>

    <div class="reservation-section" data-name="<?= $data["nom"] ?>" data-numero="<?= $data["numero"] ?>" data-prix="<?= $data["prix"] ?>" data-image="<?= $data["image"] ?>">
        <p class="title">Activite | <?= ucfirst($data["type"]) ?></p>
        <div class="badge">
            <p class="cathegorie"><?= ucfirst($data["cathegorie"]) ?></p>
            <p class="cathegorie"><?= ($data["destinataire"] == "tout") ? "Tout le monde" : ucfirst($data["destinataire"]) ?></p>
        </div>
        <p class='<?= (($data["reservation_max"] - $nbr_reservation["SUM(quantite)"]) > 0) ? "disponible" : "non-disponible" ?>'><?= (($data["reservation_max"] - $nbr_reservation["SUM(quantite)"]) > 0) ? ($data["reservation_max"] - $nbr_reservation["SUM(quantite)"])." places disponible" : "Aucune place disponible" ?> pour aujourd'hui</p>
        <p class="horaire">
            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z" clip-rule="evenodd"/>
            </svg>
            <?= date("H:i", strtotime($data["heure_debut"])) ?> a <?= date("H:i", strtotime($data["heure_fin"])) ?>
        </p>
        <p class="horaire">
            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M7 6a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2h-2v-4a3 3 0 0 0-3-3H7V6Z" clip-rule="evenodd"/>
                <path fill-rule="evenodd" d="M2 11a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-7Zm7.5 1a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5Z" clip-rule="evenodd"/>
                <path d="M10.5 14.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0Z"/>
            </svg>
            <?= $data["prix"] ?> FCFA</p>
        </p>
        <form action="index.php?action=reservation_infos&numero=<?= $_GET["numero"] ?>" method="post">
            <div class="number">
                <input type="number" name="qte" id="" min="0" placeholder="Quantite" value="<?= (isset($_POST["qte"])) ? "qte" : "" ?>">
                <input type="date" name="date" id="" min="<?= date("Y-m-d") ?>" value="<?= date("Y-m-d") ?>">
            </div>
            <input type="submit" value="Je reserve" name="reserver">
        </form>
        <form action="index.php?action=addFavoris&numero=<?= $_GET["numero"] ?>" method="post">
            <?php
            if(!$favoris){ ?>
                <button class="cart horaire" type="submit" name="addFavoris">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path d="m12.75 20.66 6.184-7.098c2.677-2.884 2.559-6.506.754-8.705-.898-1.095-2.206-1.816-3.72-1.855-1.293-.034-2.652.43-3.963 1.442-1.315-1.012-2.678-1.476-3.973-1.442-1.515.04-2.825.76-3.724 1.855-1.806 2.201-1.915 5.823.772 8.706l6.183 7.097c.19.216.46.34.743.34a.985.985 0 0 0 .743-.34Z"/>
                    </svg>
                    Ajouter aux favoris
                </button>
            <?php } else { ?>
                <button class="cart horaire" type="submit" name="removeFavoris">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z"/>
                    </svg>
                    Retirer des favoris
                </button>
            <?php } ?>
        </form>
        <button class="cart horaire" id="addCart">
            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
            <path fill-rule="evenodd" d="M4 4a1 1 0 0 1 1-1h1.5a1 1 0 0 1 .979.796L7.939 6H19a1 1 0 0 1 .979 1.204l-1.25 6a1 1 0 0 1-.979.796H9.605l.208 1H17a3 3 0 1 1-2.83 2h-2.34a3 3 0 1 1-4.009-1.76L5.686 5H5a1 1 0 0 1-1-1Z" clip-rule="evenodd"/>
            </svg>
            Ajouter au panier
        </button>
        <p class="erreur"><?= $msg ?></p>
    </div>
    <div class="container-infos">
        <div class="content-infos">
            <h1 class="title"><?= $data["nom"] ?></h1>
            <p class="description-infos"><?= $data["description"] ?></p>
        </div>
    </div>

</body>
<script src="<?= JS ?>connexion.js"></script>
<script src="<?= JS ?>reservation_info.js"></script>
<script>
    let navbar = document.querySelector(".navbar");
    navbar.style.position = "relative"
</script>
</html>