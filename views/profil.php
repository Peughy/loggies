<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= CSS ?>profil.css">
    <title>Mon espace</title>
</head>
<body>

    <!-- header -->
    <header class="header" style="<?= ($display_payment) ? "z-index: 0" : "" ?>">

        <!-- users informations -->
        <div>
            <h1 class="sub-name"><?= ucfirst($user_datas["nom_utilisateur"]) ?></h1>
            <p class="sub-email"><?= ucfirst($user_datas["email"]) ?></p>
            <!-- <p class="sub-price">Sous-total: 35 000 FCFA</p> -->
        </div>

        <!-- logo sections -->
        <div class="brands">
            <p class="brand">h</p>
            <p class="sub-brand">hobbies</p>
        </div>

        <section class="section">
            <button class="deplacement" id="pregPrecedent">
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m15 19-7-7 7-7"/>
                </svg>
            </button>
            <button class="deplacement" id="pregSuivant">
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7"/>
                </svg>
            </button>
            <button class="link active">Mes Reservations</button>
            <button class="link">En attente</button>
            <button class="link">Mon Panier</button>
            <button class="link">Mes messages</button>
            <button class="link">Mes favoris</button>
            <button class="link">Mon profil</button>
            <a class="link" href="index.php?action=reservation">Reserver</a>
            <form action="index.php?action=logout" method="post">
                <input class="deconnect" type="submit" value="Deconnexion" style="cursor: pointer;">
            </form>
        </section>
    </header>

    <!-- content section -->
    <div class="container">

        <div class="content">
            <!-- choix section -->
            <div class="choice">
                <div class="head">
                    <h1 class="title" id="title">Mes Reservations</h1>
                    <p class="description" id="description">Explorez toutes les activites que vous avez a faire!</p>
                    <hr>
                </div>

                <!-- reservations sections -->
                <div id="reservation">
                    <div class="infos">
                        <p class="price"><?= count($payements) ?> Reservation(s)</p>
                    </div>

                    <!-- card article -->
                    <div class="card-group">
                        <?php
                        if(isset($payements) && $payements){
                            foreach($payements as $payement){ ?>
                                <div class="card">
                                    <div class="card-header">
                                        <img src="activitiesImage/<?= $payement["image"] ?>" alt="">
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <p class="description"><?= $payement["nom"] ?></p>
                                            <p class="price"><?= $payement["prix"] ?> FCFA</p>
                                            <p class="description">Reservez le: <?= date("d/m/Y", strtotime($payement["date_reservation"])). " - ". $payement["heure_reservation"] ?></p>
                                            <p class="description">Payer le: <?= date("d/m/Y", strtotime($payement["date_payement"])). " - ". $payement["heure_payement"] ?></p>
                                            <p class="description">Pour le: <?= date("d/m/Y", strtotime($payement["date"])) ?></p>
                                            <p class="description">Expire le: <?= date("d/m/Y", strtotime($payement["date_expiration"])) ?></p>
                                        </div>
                                        <div class="card-footer">
                                            <div class="btn-group">
                                                Quantite: &nbsp;
                                                <p id="quantite"><?= $payement["quantite"] ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <?php } }
                        else{ ?>
                            <p>Aucune reservation payee</p>
                        <?php } ?>
                    </div>
                </div>


                <!-- attente -->
                <div id="attente">
                    <?php
                    if(isset($reservations) && $reservations){ ?>
                        <div class="infos">
                            <p class="price">Prix Total: <span id=""><?= $prix_total ?></span> FCFA</p>
                            <button class="reserver" id="pay_all" style="<?= ($nbr_validee > 1) ? "display: block" : "display: none" ?>">Tout payer (<span id=""><?= $nbr_validee ?></span> activites)</button>
                        </div>
                    <?php }
                    else { ?> 
                        <p>Aucune reservation</p>
                    <?php }
                     ?>
                        
                    <!-- affiche si le nombre de reservation validee est superieur a 0 -->
                    <?php
                    if($nbr_validee > 0){ ?>
                        <h2>Reservation(s) validee(s)</h2>
                        <!-- card article -->
                        <div class="card-group">
                            <?php
                            if(isset($reservations) && $reservations){
                                foreach($reservations as $data){ ?>
                                    <?php if($data["etat"] == "validee" && $data["payer"] == "non") { ?>
                                        <div class="card">
                                            <div class="card-header">
                                                <img src="activitiesImage/<?= $data["image"] ?>" alt="">
                                            </div>
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <p class="description"><?= $data["nom"] ?></p>
                                                    <p class="price"><?= $data["prix"] ?> FCFA</p>
                                                    <p class="description">Reservez le: <?= date("d/m/Y", strtotime($data["date_reservation"])). " a ". $data["heure_reservation"] ?></p>
                                                    <p class="description">Pour le: <?= date("d/m/Y", strtotime($data["date"])) ?></p>
                                                    <p class="description">Etat: &nbsp;&nbsp;<span class="<?= $data["etat"] ?>"><?= $data["etat"] ?></span></p>
                                                    <p id="num_reservation_validee" style="display: none;"><?= $data["num_reservation"] ?></p>
                                                </div>
                                                <div class="card-footer">
                                                    <div class="btn-group">
                                                        Quantite: &nbsp;
                                                        <p id="quantite"><?= $data["quantite"] ?></p>
                                                    </div>
                                                    <button class="valid" id="pay_individuals">Effectuer payement</button>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                            <?php } }
                            else{ ?>
                                <p>Aucune reservation!</p>
                            <?php } ?>
                        </div>
                    <?php } ?>
                    
                    <!-- affiche si le nombre de reservation en attente est superieur a 0 -->
                    <?php
                    if($nbr_attente > 0){ ?>
                        <h2>Reservation(s) en attente(s)</h2>
                        <div class="card-group">
                            <?php
                            if(isset($reservations) && $reservations){
                                foreach($reservations as $data){ ?>
                                    <?php if($data["etat"] == "attente") { ?>
                                        <div class="card">
                                            <div class="card-header">
                                                <img src="activitiesImage/<?= $data["image"] ?>" alt="">
                                            </div>
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <p class="description"><?= $data["nom"] ?></p>
                                                    <p class="price"><?= $data["prix"] ?> FCFA</p>
                                                    <p class="description">Reservez le: <?= date("d/m/Y", strtotime($data["date_reservation"])). " a ". $data["heure_reservation"] ?></p>
                                                    <p class="description">Pour le: <?= date("d/m/Y", strtotime($data["date"])) ?></p>
                                                    <p class="description">Etat: &nbsp;&nbsp;<span class="<?= $data["etat"] ?>"><?= $data["etat"] ?></span></p>
                                                </div>
                                                <div class="card-footer">
                                                    <div class="btn-group">
                                                        Quantite: &nbsp;
                                                        <p id="quantite"><?= $data["quantite"] ?></p>
                                                    </div>
                                                    <button class="delete">Supprimer</button>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                            <?php } }
                            else{ ?>
                                <p>Aucune reservation!</p>
                            <?php } ?>
                        </div>
                    <?php } ?>

                    <!-- affiche si le nombre de reservation rejetee est superieur a 0 -->
                    <?php
                    if($nbr_rejetee > 0){ ?>
                        <h2>Reservation(s) rejetee(s)</h2>
                        <div class="card-group">
                            <?php
                            if(isset($reservations) && $reservations){
                                foreach($reservations as $data){ ?>
                                    <?php if($data["etat"] == "rejetee") { ?>
                                        <div class="card">
                                            <div class="card-header">
                                                <img src="activitiesImage/<?= $data["image"] ?>" alt="">
                                            </div>
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <p class="description"><?= $data["nom"] ?></p>
                                                    <p class="price"><?= $data["prix"] ?> FCFA</p>
                                                    <p class="description">Reservez le: <?= date("d/m/Y", strtotime($data["date_reservation"])). " a ". $data["heure_reservation"] ?></p>
                                                    <p class="description">Pour le: <?= date("d/m/Y", strtotime($data["date"])) ?></p>
                                                    <p class="description">Etat: &nbsp;&nbsp;<span class="<?= $data["etat"] ?>"><?= $data["etat"] ?></span></p>
                                                </div>
                                                <div class="card-footer">
                                                    <div class="btn-group">
                                                        Quantite: &nbsp;
                                                        <p id="quantite"><?= $data["quantite"] ?></p>
                                                    </div>
                                                    <button class="delete">Supprimer</button>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                            <?php } }
                            else{ ?>
                                <p>Aucune reservation!</p>
                            <?php } ?>
                        </div>
                    <?php } ?>

                </div>

                <!-- cart section -->
                <div id="cart">
                    <div class="infos">
                        <p class="price">Prix Total: <span id="pt">2000</span> FCFA</p>
                        <p><span id="qteT">0</span> Activites</button></p>
                    </div>

                    <!-- card article -->
                    <div class="card-group">
                        <?php
                        if(isset($reservations)){
                            foreach($reservations as $data){ ?>
                            <div class="card">
                                <div class="card-header">
                                    <img src="activitiesImage/<?= $data["image"] ?>" alt="">
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p class="description"><?= $data["nom"] ?></p>
                                        <p class="price"><?= $data["prix"] ?> FCFA</p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="btn-group">
                                            <button id="moins">
                                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14"/>
                                                </svg>
                                            </button>
                                            <p id="qte">1</p>
                                            <button id="plus">
                                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"/>
                                                </svg>
                                            </button>
                                        </div>
                                        <button class="delete">Supprimer</button>
                                    </div>
                                </div>
                            </div>
                        <?php } }
                        else{ ?>
                            <p>Aucune reservation!</p>
                        <?php } ?>
                    </div>
                </div>

                <!-- history section -->
                <div id="messages" class="messages_section">
                    <div class="add-message">
                        <button class="add" id="btnAddMessage">
                            <svg class="" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"/>
                                </svg>                      
                            Ajouter un message
                        </button>
                    </div>
                    <h1 class="titre">Vos discussions</h1>
                    
                    <?php
                    foreach($message_informations as $messages_information){
                        if($messages_information["type_message"] == "individual"){ ?>
                            <div class="messages">
                                <p id="registration_envoi " style="display: none;"><?= $messages_information["registration_recois"] ?></p>
                                <div class="infos">
                                    <p><?= $messages_information["nom_utilisateur"]." - ".$messages_information["email"] ?></p>
                                </div>
                                <div class="infos">
                                    <p><?= date("d/m/Y", strtotime($messages_information["date_envoi"]))." - ".date("H:i", strtotime($messages_information["heure_envoi"])) ?></p>
                                </div>
                                <p class="msg"><span class="font-weight: bold"><?= ($messages_information["registration_envoi"] == $registration) ? "Vous" : ucfirst($messages_information["nom_utilisateur"]) ?>:</span> <?= ucfirst($messages_information["content"]) ?></p>
                            </div>
                    <?php } } ?>
                </div>

                <!-- favoris sections -->
                <div id="favoris">
                    <!-- card article -->
                    <div class="card-group">
                        <?php
                        if(isset($favoris) && $favoris){
                            foreach($favoris as $data){ ?>
                            <div class="card">
                                <div class="card-header">
                                    <img src="activitiesImage/<?= $data["image"] ?>" alt="">
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p class="description"><?= $data["nom"] ?></p>
                                        <p class="price"><?= $data["prix"] ?> FCFA</p>
                                        <!-- <p class="disponibilite">Disponible</p> -->
                                    </div>
                                    <div class="card-footer">
                                        <button class="delete delePosition">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z"/>
                                            </svg>
                                            Retirer des favoris
                                        </button>
                                    </div>
                                </div>
                            </div>
                        <?php } }
                        else{ ?>
                            <p>Aucun Favoris</p>
                    <?php } ?>
                    </div>
                </div>

                <!-- profil -->
                <div id="profil">

                </div>

        </div>
    </div>

    <!-- payement -->
    <div class="general" id="payement" style="transform: <?= ($display_payment) ? "translateY(0)" : "" ?>">
        <div class="payement">
            <div class="pay-header">
                <span id="exit_payement">&times;</span>
                <p class="title">Finalisation de payement</p>
                <p class="description">Vous etes sur le point de finaliser le payement pour l'(s) activite(s) suivante(s)</p>
                <p class="price">Prix total: <?= $prix_total ?> FCFA</p>
            </div>
            <div class="pay-body">
                <?php
                $count = 0;
                foreach($payement_reservation as $payement){ 
                    $count++;
                ?>
                    <div class="act">
                        <span><?= $count ?></span>
                        <div>
                            <p><?= $payement["nom"] ?></p>
                            <p><?= $payement["quantite"] ?> place(s) reservee(s) pour le <?= date("d/m/Y", strtotime($payement["date"])) ?></p>
                            <p>Prix: <?= $payement["quantite"]*$payement["prix"] ?> FCFA</p>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="pay-footer">
                <form action="index.php?action=payement&type=<?= $_GET["type"] ?><?= (isset($_GET["num_reservation"])) ? "&num_reservation=".$_GET["num_reservation"] : ""  ?>" method="post">
                    <input type="submit" value="Effectuer payement" class="valid">
                </form>
            </div>
        </div>
    </div>
    
    <script src="<?= JS ?>profil.js"></script>
</body>
</html>