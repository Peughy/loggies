<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= CSS ?>gestion.css">
    <title>Gestion</title> 
</head>
<body>

    <!-- content the link's bar -->
    <div class="sidebar">
        <div class="brand">
            <div class="brands">
                <p class="brand-text">h</p>
                <p class="sub-brand">hobbies</p>
            </div>
            <hr>
        </div>

        <!-- links -->
        <div class="links">
            <ul>
                <li>
                    <button href="" id="link" class="link">
                        <svg class="" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M12 6a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7Zm-1.5 8a4 4 0 0 0-4 4 2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-3Zm6.82-3.096a5.51 5.51 0 0 0-2.797-6.293 3.5 3.5 0 1 1 2.796 6.292ZM19.5 18h.5a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-1.1a5.503 5.503 0 0 1-.471.762A5.998 5.998 0 0 1 19.5 18ZM4 7.5a3.5 3.5 0 0 1 5.477-2.889 5.5 5.5 0 0 0-2.796 6.293A3.501 3.501 0 0 1 4 7.5ZM7.1 12H6a4 4 0 0 0-4 4 2 2 0 0 0 2 2h.5a5.998 5.998 0 0 1 3.071-5.238A5.505 5.505 0 0 1 7.1 12Z" clip-rule="evenodd"/>
                        </svg> 
                        Utilisateur
                    </button>
                </li>
                <li>
                    <button href="" id="link" class="link">
                        <svg class="" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M20 10H4v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8ZM9 13v-1h6v1a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1Z" clip-rule="evenodd"/>
                            <path d="M2 6a2 2 0 0 1 2-2h16a2 2 0 1 1 0 4H4a2 2 0 0 1-2-2Z"/>
                        </svg> 
                        Reservations
                    </button>
                </li>
                <li>
                    <button href="" id="link" class="link">
                        <svg class="" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path d="m13.001 19.927 2.896 1.773c1.52.93 3.405-.442 2.992-2.179l-1.06-4.452 3.468-2.978c1.353-1.162.633-3.382-1.142-3.525L15.603 8.2l-1.754-4.226A1.973 1.973 0 0 0 13 3v16.927ZM10.999 3c-.36.205-.663.53-.848.974L8.397 8.2l-4.552.366c-1.775.143-2.495 2.363-1.142 3.525l3.468 2.978-1.06 4.452c-.413 1.737 1.472 3.11 2.992 2.178l2.896-1.773V3Z"/>
                        </svg>
                        Activites
                    </button>
                </li>
                <li>
                    <button href="" id="link" class="link">
                    <svg class="" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M4 3a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h1v2a1 1 0 0 0 1.707.707L9.414 13H15a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4Z" clip-rule="evenodd"/>
                        <path fill-rule="evenodd" d="M8.023 17.215c.033-.03.066-.062.098-.094L10.243 15H15a3 3 0 0 0 3-3V8h2a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-1v2a1 1 0 0 1-1.707.707L14.586 18H9a1 1 0 0 1-.977-.785Z" clip-rule="evenodd"/>
                    </svg>
                        Messages
                    </button>
                </li>
                <li>
                    <button href="" id="link" class="link active">
                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M13.5 2c-.178 0-.356.013-.492.022l-.074.005a1 1 0 0 0-.934.998V11a1 1 0 0 0 1 1h7.975a1 1 0 0 0 .998-.934l.005-.074A7.04 7.04 0 0 0 22 10.5 8.5 8.5 0 0 0 13.5 2Z"></path>
                        <path d="M11 6.025a1 1 0 0 0-1.065-.998 8.5 8.5 0 1 0 9.038 9.039A1 1 0 0 0 17.975 13H11V6.025Z"></path>
                    </svg>
                        Statistiques
                    </button>
                </li>
            </ul>
        </div>
    </div>

    <!-- displaying all the content of this page -->
    <div class="container">
        <nav class="navigation">
            <div class="menu">
                <svg class="" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h10"/>
                </svg>
                <div class="search">
                    <input type="search" name="" id="" placeholder="Rechercher...">
                </div>
            </div>
            <div>
                <button class="notification">
                    <svg class="" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.133 12.632v-1.8a5.406 5.406 0 0 0-4.154-5.262.955.955 0 0 0 .021-.106V3.1a1 1 0 0 0-2 0v2.364a.955.955 0 0 0 .021.106 5.406 5.406 0 0 0-4.154 5.262v1.8C6.867 15.018 5 15.614 5 16.807 5 17.4 5 18 5.538 18h12.924C19 18 19 17.4 19 16.807c0-1.193-1.867-1.789-1.867-4.175ZM8.823 19a3.453 3.453 0 0 0 6.354 0H8.823Z"/>
                      </svg>                      
                </button>
                <button class="img-profil" id="link">
                    <!-- <img src="../profil/img.jpg" alt=""> -->
                </button>
            </div>
        </nav>

        <!-- header content section -->
        <header></header>


        <!-- content section -->
        <div class="content">

            <!-- title section -->
            <div class="title">
                <p>hobbies</p>
                <button class="add" id="btn-create-project">
                    <svg class="" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"/>
                      </svg>                      
                    Ajouter une activite
                </button>
            </div>

            <!-- card presentation -->
            <div class="card-group">
                <!-- card utilisateur -->
                <div class="card">

                    <!-- header -->
                    <div class="card-header">
                        <p>Utilisateurs</p>
                        <svg class="icon" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M12 6a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7Zm-1.5 8a4 4 0 0 0-4 4 2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-3Zm6.82-3.096a5.51 5.51 0 0 0-2.797-6.293 3.5 3.5 0 1 1 2.796 6.292ZM19.5 18h.5a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-1.1a5.503 5.503 0 0 1-.471.762A5.998 5.998 0 0 1 19.5 18ZM4 7.5a3.5 3.5 0 0 1 5.477-2.889 5.5 5.5 0 0 0-2.796 6.293A3.501 3.501 0 0 1 4 7.5ZM7.1 12H6a4 4 0 0 0-4 4 2 2 0 0 0 2 2h.5a5.998 5.998 0 0 1 3.071-5.238A5.505 5.505 0 0 1 7.1 12Z" clip-rule="evenodd"/>
                        </svg>                           
                    </div>

                    <!-- body -->
                    <div class="card-body">
                        <p class="number"><?= $nbrs_users ?></p>
                    </div>
                </div>

                <!-- card reservation -->
                <div class="card">

                    <!-- header -->
                    <div class="card-header">
                        <p>Reservations</p>
                        <svg class="" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M20 10H4v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8ZM9 13v-1h6v1a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1Z" clip-rule="evenodd"/>
                            <path d="M2 6a2 2 0 0 1 2-2h16a2 2 0 1 1 0 4H4a2 2 0 0 1-2-2Z"/>
                        </svg>                   
                    </div>

                    <!-- body -->
                    <div class="card-body">
                        <p class="number"><?= count($reservation_informations) ?></p>
                    </div>
                </div>

                <!-- card activity -->
                <div class="card">

                    <!-- header -->
                    <div class="card-header">
                        <p>Activites</p>
                        <svg class="icon" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path d="m13.001 19.927 2.896 1.773c1.52.93 3.405-.442 2.992-2.179l-1.06-4.452 3.468-2.978c1.353-1.162.633-3.382-1.142-3.525L15.603 8.2l-1.754-4.226A1.973 1.973 0 0 0 13 3v16.927ZM10.999 3c-.36.205-.663.53-.848.974L8.397 8.2l-4.552.366c-1.775.143-2.495 2.363-1.142 3.525l3.468 2.978-1.06 4.452c-.413 1.737 1.472 3.11 2.992 2.178l2.896-1.773V3Z"/>
                        </svg>                                               
                    </div>

                    <!-- body -->
                    <div class="card-body">
                        <p class="number"><?= count($activity_informations) ?></p>
                    </div>
                </div>
                
                <div class="card">

                    <!-- header -->
                    <div class="card-header">
                        <p>Messages</p>
                        <svg class="icon" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M4 3a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h1v2a1 1 0 0 0 1.707.707L9.414 13H15a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4Z" clip-rule="evenodd"/>
                            <path fill-rule="evenodd" d="M8.023 17.215c.033-.03.066-.062.098-.094L10.243 15H15a3 3 0 0 0 3-3V8h2a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-1v2a1 1 0 0 1-1.707.707L14.586 18H9a1 1 0 0 1-.977-.785Z" clip-rule="evenodd"/>
                        </svg>
                                               
                    </div>

                    <!-- body -->
                    <div class="card-body">
                        <p class="number"><?= count($messages_informations) ?></p>
                    </div>
                </div>

                
            </div>

            <!-- projects description -->
            <div class="header">
                <p id="title">Disponibilite des activites</p>
            </div>
                
            <!-- utilisateurs section -->
            <div class="project-presentation">
                <div class="project-display" id="project-lists">
                    <table class="table">
                        <tr class="head">
                            <td>Nom </td>
                            <td>Date d'inscription</td>
                            <td>Reservations</td>
                        </tr>
                        <?php
                        foreach($users_informations as $users_information){
                            if($users_information["type"] == "client"){ 
                                $nbr_reservation = $gestion->getNumberReservation($users_information["registration"]);
                                ?>

                                <tr class="body">
                                    <td>
                                        <div class="infos">
                                            <p class="name"><?= $users_information["nom_utilisateur"] ?></p>
                                            <p class="email"><?= $users_information["email"] ?></p>
                                            <p id="registrations" style="display: none;"><?= $users_information["registration"] ?></p>
                                        </div>
                                    </td>
                                    <td><?= date('d/m/Y', strtotime($users_information["date_inscription"])) ?></td>
                                    <td><?= ($nbr_reservation["qte"] != null) ? $nbr_reservation["qte"] : 0 ?> <span class="last"><?= ($nbr_reservation["qte"] > 0) ? "(Derniere: ".date("d/m/Y", strtotime($nbr_reservation["date"])).")" : "" ?></span></td>
                                    <td>
                                        <button class="edit" id="edit_users">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                                <path fill-rule="evenodd" d="M5 8a4 4 0 1 1 7.796 1.263l-2.533 2.534A4 4 0 0 1 5 8Zm4.06 5H7a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h2.172a2.999 2.999 0 0 1-.114-1.588l.674-3.372a3 3 0 0 1 .82-1.533L9.06 13Zm9.032-5a2.907 2.907 0 0 0-2.056.852L9.967 14.92a1 1 0 0 0-.273.51l-.675 3.373a1 1 0 0 0 1.177 1.177l3.372-.675a1 1 0 0 0 .511-.273l6.07-6.07a2.91 2.91 0 0 0-.944-4.742A2.907 2.907 0 0 0 18.092 8Z" clip-rule="evenodd"/>
                                            </svg>
                                        </button>
                                    </td>
                                    <td>
                                        <button class="delete" id="delete_users">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                                <path fill-rule="evenodd" d="M8.586 2.586A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4a2 2 0 0 1 .586-1.414ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z" clip-rule="evenodd"/>
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                        <?php } } ?>
                    </table>
                </div>
            </div>

            <!-- reservation -->
            <div class="task-project">
                <!-- chart -->
                 <div class="chart">
                    <div class="project-display" id="project-lists">
                        <table class="table">
                            <tr class="head">
                                <td>Nom activite</td>
                                <td>Reserviste</td>
                                <td>Reserver le</td>
                                <td>Reserver pour</td>
                                <td>Etat</td>
                            </tr>
                                <?php
                                foreach($reservation_informations as $reservation_information){ ?>
                                    <tr class="body" id="tasks">
                                        <td>
                                            <?= $reservation_information["nom"] ?>
                                            <p id="numeros_reservations" style="display: none;"><?= $reservation_information["num_reservation"] ?></p>
                                        </td>
                                        <td>
                                            <div class="infos">
                                                <p class="name"><?= $reservation_information["nom_utilisateur"] ?></p>
                                                <p class="email"><?= $reservation_information["email"] ?></p>
                                            </div>
                                        </td>
                                        <td><?= date("d/m/Y", strtotime($reservation_information["date_reservation"])) ?></td>
                                        <td>le <?= date("d/m/Y", strtotime($reservation_information["date"])) ?></td>
                                        <td>
                                            <p class="<?= $reservation_information["etat"] ?>"><?= $reservation_information["etat"] ?></p>
                                        </td>
                                        <td>
                                            <button class="edit" id="edit_reservations">
                                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                                    <path fill-rule="evenodd" d="M11.32 6.176H5c-1.105 0-2 .949-2 2.118v10.588C3 20.052 3.895 21 5 21h11c1.105 0 2-.948 2-2.118v-7.75l-3.914 4.144A2.46 2.46 0 0 1 12.81 16l-2.681.568c-1.75.37-3.292-1.263-2.942-3.115l.536-2.839c.097-.512.335-.983.684-1.352l2.914-3.086Z" clip-rule="evenodd"/>
                                                    <path fill-rule="evenodd" d="M19.846 4.318a2.148 2.148 0 0 0-.437-.692 2.014 2.014 0 0 0-.654-.463 1.92 1.92 0 0 0-1.544 0 2.014 2.014 0 0 0-.654.463l-.546.578 2.852 3.02.546-.579a2.14 2.14 0 0 0 .437-.692 2.244 2.244 0 0 0 0-1.635ZM17.45 8.721 14.597 5.7 9.82 10.76a.54.54 0 0 0-.137.27l-.536 2.84c-.07.37.239.696.588.622l2.682-.567a.492.492 0 0 0 .255-.145l4.778-5.06Z" clip-rule="evenodd"/>
                                                </svg>
                                            </button>
                                        </td>
                                <?php } ?>
                        </table>
                    </div>
                 </div>
            </div>

            <!-- activites -->
            <div class="team-project">
                <div class="activite-group">
                    
                    <?php
                    foreach($activity_informations as $activity_information) { ?>
                        <div class="activite-card">

                            <!-- activite header -->
                            <div class="activite-header">
                                <img src="activitiesImage/<?= $activity_information["image"] ?>" alt="">
                            </div>

                            <!-- body -->
                            <div class="activite-body">
                                <p class="title"><?= $activity_information["nom"] ?></p>
                                <p class="notes"><?= $activity_information["prix"] ?> FCFA</p>
                            </div>
                            
                            <div class="activite-footer">
                                <p class="numero">#<span id="numero_activites"><?= $activity_information["numero"] ?></span></p>
                                <div class="actions">
                                    <button class="edit" id="edit_activites">
                                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd" d="M11.32 6.176H5c-1.105 0-2 .949-2 2.118v10.588C3 20.052 3.895 21 5 21h11c1.105 0 2-.948 2-2.118v-7.75l-3.914 4.144A2.46 2.46 0 0 1 12.81 16l-2.681.568c-1.75.37-3.292-1.263-2.942-3.115l.536-2.839c.097-.512.335-.983.684-1.352l2.914-3.086Z" clip-rule="evenodd"/>
                                            <path fill-rule="evenodd" d="M19.846 4.318a2.148 2.148 0 0 0-.437-.692 2.014 2.014 0 0 0-.654-.463 1.92 1.92 0 0 0-1.544 0 2.014 2.014 0 0 0-.654.463l-.546.578 2.852 3.02.546-.579a2.14 2.14 0 0 0 .437-.692 2.244 2.244 0 0 0 0-1.635ZM17.45 8.721 14.597 5.7 9.82 10.76a.54.54 0 0 0-.137.27l-.536 2.84c-.07.37.239.696.588.622l2.682-.567a.492.492 0 0 0 .255-.145l4.778-5.06Z" clip-rule="evenodd"/>
                                        </svg>

                                    </button>
                                    <button class="delete" id="delete_activites">
                                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd" d="M8.586 2.586A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4a2 2 0 0 1 .586-1.414ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z" clip-rule="evenodd"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                </div>
            </div>

            <!-- message -->
            <div class="statistics">
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
                foreach($messages_informations as $messages_information){
                    if($messages_information["type_message"] == "individual"){ ?>
                        <div class="messages">
                            <p id="registration_recois" style="display: none;"><?= $messages_information["registration_recois"] ?></p>
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
            
            <!-- disponibilite des tache -->
            <div class="disponibilite">

                <!-- date section -->
                <div class="date-search">
                    <form action="index.php?action=gestion" method="post">
                        <label>Veuillez choisir une date</label>
                        <div> 
                            <input type="date" id="" min="<?= date("Y-m-d") ?>" name="date_searching" value="<?= $date_searching ?>">
                            <input type="submit" value="Rechercher" name="search_date">
                        </div>
                    </form>
                </div>

                <div class="stats">
                    <h1 class="">Disponnibilite des activites pour <?= ($date_searching == date("Y-m-d")) ? "Aujourd'hui" : "le ".$date_searching ?></h1>
                    <?php
                    if(count($reservation_numbers) == 0){
                        foreach($activity_informations as $activity_information){ ?>
                            <div class="stat">
                                <p><?= $activity_information["nom"] ?></p>
                                <div class="purcent">
                                    <div class="total">Aucune reservation</div>
                                    <div class="variant" style="width: 0%"></div>
                                </div>
                            </div>
                    <?php } 
                    }else{
                        foreach($activity_informations as $activity_information){
                            foreach($reservation_numbers as $reservation_number){
                        ?>
                        <div class="stat">
                            <p><?= $activity_information["nom"] ?> <?= ($activity_information["numero"] == $reservation_number["numero"]) ? 
                                "(".($activity_information["reservation_max"] - $reservation_number["qte"])." activite(s) disponibl(e) sur ".$activity_information["reservation_max"].")" : "" ?></p>
                            <div class="purcent">
                                <div class="total"><?= ($activity_information["numero"] == $reservation_number["numero"]) ? "" : "Aucune reservation" ?></div>
                                <div class="variant" style="width: <?= ($activity_information["numero"] == $reservation_number["numero"]) ? ($reservation_number["qte"]*100)/$activity_information["reservation_max"] : 0 ?>%"></div>
                            </div>
                        </div>
                    <?php } } }?>
                </div>

            </div>

            <!-- profil -->
            <div class="profil-sections">
                <p class="title">Modification profile</p>
                <form action="" method="post">
                    <div class="div-input">
                        <label for="">Nom d'utilisateur</label>
                        <input type="text" name="">
                    </div>
                    <div class="div-input">
                        <label for="">Adresse mail</label>
                        <input type="email" name="">
                    </div>
                    <div class="div-input">
                        <label for="">Mot de passe</label>
                        <input type="password" name="">
                    </div>
                    <div class="div-submit">
                        <input type="submit" value="Modifier">
                    </div>
                </form>

                <p class="title">Projects travailles</p>
            </div>
        </div>

    </div>

    <!-- displaying the form to add a project -->
    <div class="add-project" id="add-project" 
    style="transform: <?= (isset($_GET["activity"]) && $_GET["activity"] == true) ? "translateY(0)" : ""  ?>">

        <div class="project">
            <span id="exit">&times;</span>
            <div class="header">
                <?php 
                if(isset($_GET["error"]) && !empty($_GET["error"]) && isset($_GET["activity"])){
                    if($_GET["error"] == "emptyField")
                        $msg = "Veuillez remplir tout les champs!";

                    if($_GET["error"] == "emptyImage")
                        $msg = "Bien vouloir choisir une image!";

                    if($_GET["error"] == "priceLetter")
                        $msg = "Le prix est invalide";

                    if($_GET["error"] == "priceNegative")
                        $msg = "Le prix est invalide!";

                    echo "<p class=\"erreur\">".$msg."</p>";
                }  ?>
                <p class="title">Ajouter une activite</p>
            </div>
            <form action="index.php?action=addActivity" method="post" enctype="multipart/form-data" class="form_activite">
                <div class="div-input">
                    <label for="name" class="name">Nom de l'activite</label>
                    <input type="text" name="name" id="name" placeholder="Activite">
                </div>
                <div class="div-input">
                    <label for="name" class="name">Prix de l'activite</label>
                    <input type="number" min="0" name="prix" id="name" placeholder="Prix">
                </div>
                <div class="div-input">
                    <label for="type" class="name">Type activite</label>
                    <select name="type" id="type">
                        <option value="">--</option>
                        <option value="loisir">Loisirs</option>
                        <option value="hebergement">Hebergements</option>
                        <option value="restauration">Restauration</option>
                        <option value="excursion">Excursions</option>
                        <option value="enfant">Espace bebe(-5 ans)</option>
                    </select>
                </div>
                <div class="div-input">
                    <label for="name" class="name">Tranche horaire</label>
                    <div class="temps">
                        De <input type="time" min="0" name="temps_debut" id="name" placeholder="Prix">
                        a <input type="time" min="0" name="temps_fin" id="name" placeholder="Prix">
                    </div>
                </div>
                <div class="div-input">
                    <label for="name" class="name">Description</label>
                    <textarea type="number" rows="6" cols="30" name="description" placeholder="Description"></textarea>
                </div>
                <div class="div-input">
                    <p class="title">Destination de l'activite</p>
                    <select name="destination" id="">
                        <option value="">--</option>
                        <option value="enfant">Enfant</option>
                        <option value="adulte">Adulte</option>
                        <option value="tout">Tout le monde</option>
                    </select>
                    <br>
                    <p class="title">Cathegorie</p>
                    <select name="cathegorie" id="">
                        <option value="">--</option>
                        <option value="individuelle">Individuelle</option>
                        <option value="groupe">En groupe</option>
                        <option value="mixte">Mixte</option>
                    </select>
                </div>

                <div class="div-input">
                    <label for="name" class="name">Photo d'illustration</label>
                    <input type="file" name="image" id="">
                </div>

                <div class="div-input">
                    <label for="" style="visibility: hidden;">Submit</label>
                    <input type="submit" value="Ajouter" name="ajouter">
                </div>
            </form>
        </div>
    </div>

    <!-- displaying the form to modify  the user's informations  -->
    <div class="add-project" id="modify_users"
    style="transform: <?= (isset($_GET["modifyUser"]) && $_GET["modifyUser"] == true) ? "translateY(0)" : ""  ?>">
        <div class="project">
            <span id="exit_modify">&times;</span>
            <div class="header">
                <?php 
                if(isset($_GET["error"]) && !empty($_GET["error"]) && isset($_GET["modifyUser"])){
                    if($_GET["error"] == "emptyField")
                        $msg = "Veuillez remplir tout les champs!";

                    if($_GET["error"] == "errorEmail")
                        $msg = "L'adresse mail n'est pas valide!";

                    if($_GET["error"] == "nbrIncorrect")
                        $msg = "Le prix est invalide!";

                    echo "<p class=\"erreur\">".$msg."</p>";
                }  ?>
                <p class="title">Modifier un utilisateur</p>
            </div>
            <form action="index.php?action=inscription<?= (isset($_GET["registration"])) ? "&registration=".$_GET["registration"] : "" ?>" method="post">
                <div class="div-input">
                    <label for="name" class="name">Nom de l'utilisateur</label>
                    <input type="text" name="name" id="name" value="<?= (isset($one_users)) ? $one_users["nom_utilisateur"] : "" ?>">
                </div>
                <div class="div-input">
                    <label for="email" class="name">Email de l'utilisateur</label>
                    <input type="email"  name="email" id="email" value="<?= (isset($one_users)) ? $one_users["email"] : "" ?>">
                </div>
                <div class="div-input">
                    <label for="nbr" class="name">Nombre de reservation</label>
                    <input type="number" min="0" name="nbr_reservation" id="nbr" value="<?= (isset($one_users)) ? $one_users["nbr_reservation"] : "" ?>">
                </div>
                <div class="div-input">
                    <label for="date" class="name">Date d'inscription</label>
                    <input type="date" min="0" name="date_inscription" id="date" value="<?= (isset($one_users)) ? $one_users["date_inscription"] : "" ?>">
                </div>
                <div class="div-input">
                        <input type="submit" value="Modifier" name="modifier">
                </div>
            </form>
        </div>
    </div>

    <!-- deleting user -->
    <div class="add-project" id="user_delete"
    style="transform: <?= (isset($_GET["deleteUser"]) && $_GET["deleteUser"] == true) ? "translateY(0)" : ""  ?>">>
        <div class="project">
            <span id="exit_delete_user">&times;</span>
            <p style="margin: 24px 12px;">Voulez vous supprimer l'utilisateur d'ID: <?= $_GET["registration"] ?> ?</p>
            <form action="index.php?action=inscription<?= (isset($_GET["registration"])) ? "&registration=".$_GET["registration"] : "" ?>" method="post">
                <button type="submit" class="btn-sup" name="supprimer">Supprimer</button>
            </form>
        </div>
    </div>

    <!-- edit activity -->
    <div class="add-project" id="edit_activity"
    style="transform: <?= (isset($_GET["modifyActivity"]) && $_GET["modifyActivity"] == true) ? "translateY(0)" : ""  ?>">>
        <div class="activity">
            <span id="exit_edit_activity">&times;</span>
            <div class="image">
                <img src="activitiesImage/<?= $activity["image"] ?>" alt="">
            </div>
            <div class="informations">
            <?php 
                if(isset($_GET["error"]) && !empty($_GET["error"]) && isset($_GET["modifyActivity"])){
                    if($_GET["error"] == "emptyField")
                        $msg = "Veuillez remplir tout les champs!";

                    if($_GET["error"] == "priceLetter")
                        $msg = "Le prix ou le nombre de reservation max est invalide";

                    if($_GET["error"] == "priceNegative")
                        $msg = "Le prix est invalide!";

                    echo "<p class=\"erreur\">".$msg."</p>";
                }  ?>

                <form action="index.php?action=addActivity&numero=<?= $_GET["numero"]?>" method="post">
                    <div class="div-input">
                    <label for="name" class="name">Nom de l'activite</label>
                    <input type="text" name="name" id="name" placeholder="Activite" value="<?= $activity["nom"] ?>">
                </div>
                <div class="div-input">
                    <label for="name" class="name">Prix de l'activite</label>
                    <input type="number" min="0" name="prix" id="name" placeholder="Prix" value="<?= $activity["prix"] ?>">
                </div>
                <div class="div-input">
                    <label for="type" class="name">Type activite</label>
                    <select name="type" id="type">
                        <option value="">--</option>
                        <option value="loisir" <?= ($activity["type"] == "loisir") ? "selected" : "" ?>>Loisirs</option>
                        <option value="hebergement" <?= ($activity["type"] == "hebergement") ? "selected" : "" ?>>Hebergements</option>
                        <option value="restauration" <?= ($activity["type"] == "restauration") ? "selected" : "" ?>>Restauration</option>
                        <option value="excursion" <?= ($activity["type"] == "excursion") ? "selected" : "" ?>>Excursions</option>
                        <option value="enfant" <?= ($activity["type"] == "enfant") ? "selected" : "" ?>>Espace bebe(-5 ans)</option>
                    </select>
                </div>
                <div class="div-input">
                    <label for="name" class="name">Tranche horaire</label>
                    <div class="temps">
                        De <input type="time" min="0" name="temps_debut" id="name"  value="<?= $activity["heure_debut"] ?>">
                        a <input type="time" min="0" name="temps_fin" id="name"  value="<?= $activity["heure_fin"] ?>">
                    </div>
                </div>
                <div class="div-input">
                    <label for="name" class="name">Description</label>
                    <textarea type="number" rows="5" cols="30" name="description" placeholder="Description"><?= $activity["description"] ?></textarea>
                </div>
                <div class="div-input">
                    <p class="title">Destination de l'activite</p>
                    <select name="destination" id="">
                        <option value="">--</option>
                        <option value="enfant" <?= ($activity["destinataire"] == "enfant") ? "selected" : "" ?>>Enfant</option>
                        <option value="adulte" <?= ($activity["destinataire"] == "adulte") ? "selected" : "" ?>>Adulte</option>
                        <option value="tout" <?= ($activity["destinataire"] == "tout") ? "selected" : "" ?>>Tout le monde</option>
                    </select>
                    <br>
                    <p class="title">Cathegorie</p>
                    <select name="cathegorie" id="">
                        <option value="">--</option>
                        <option value="individuelle" <?= ($activity["cathegorie"] == "individuelle") ? "selected" : "" ?>>Individuelle</option>
                        <option value="groupe" <?= ($activity["cathegorie"] == "groupe") ? "selected" : "" ?>>En groupe</option>
                        <option value="mixte" <?= ($activity["cathegorie"] == "mixte") ? "selected" : "" ?>>Mixte</option>
                    </select>
                </div>
                <div class="div-input">
                    <label for="name" class="name">Nombre reservation max</label>
                    <input type="number" min="0" name="nbr_max" id="name" value="<?= $activity["reservation_max"] ?>">
                </div>

                <div class="div-input">
                    <label for="" style="visibility: hidden;">Submit</label>
                    <input type="submit" value="Modifier" name="modifier">
                </div>
                </form>
            </div>
        </div>   
    </div>

    <!-- deleting activity -->
    <div class="add-project" id="user_delete"
    style="transform: <?= (isset($_GET["deleteActivity"]) && $_GET["deleteActivity"] == true) ? "translateY(0)" : ""  ?>">>
        <div class="project">
            <span id="exit_delete_user">&times;</span>
            <?php
             if($activity["reservation"] == 0){ ?>  
                <p style="margin: 24px 12px;">Voulez vous vraiment supprimer l'activite #<?= $_GET["numero"] ?></p>
            <form action="index.php?action=addActivity<?= (isset($_GET["numero"])) ? "&numero=".$_GET["numero"] : "" ?>" method="post">
                <button type="submit" class="btn-sup" name="supprimer">Supprimer</button>
            </form>
            <?php }else{ ?>
                <p style="margin: 24px 12px;">Impossible de supprimer l'activite #<?= $_GET["numero"] ?> car a ete deja reserve!</p>
             <?php } ?>
  
        </div>
    </div>

    <!-- displaying the form to modify  the reservations's informations  -->
    <div class="add-project" id="modify_reservation"
    style="transform: <?= (isset($_GET["modifyReservation"]) && $_GET["modifyReservation"] == true) ? "translateY(0)" : ""  ?>">
        <div class="project">
            <span id="exit_modify_reservation">&times;</span>
            <div class="header">
                <?php 
                if(isset($_GET["error"]) && !empty($_GET["error"]) && isset($_GET["modifyReservation"])){
                    if($_GET["error"] == "emptyField")
                        $msg = "Veuillez remplir tout les champs!";

                    if($_GET["error"] == "nbrIncorrect")
                        $msg = "Le prix est invalide!";

                    echo "<p class=\"erreur\">".$msg."</p>";
                }  ?>
                <p class="title">Traitement de reservation</p>
            </div>
            <form action="index.php?action=reservation_infos<?= (isset($_GET["numero"])) ? "&numero=".$_GET["numero"] : "" ?>" method="post" class="form_activite">
                <div class="div-input">
                    <label for="name" class="name">Nom de l'utilisateur</label>
                    <input type="text" id="name_utilisateur" value="<?= (isset($reservation)) ? $reservation["nom_utilisateur"] : "" ?>" disabled>
                </div>
                <div class="div-input">
                    <label for="email" class="name">Nom de l'activite</label>
                    <input type="email"  name="name_activite" id="name_activite" value="<?= (isset($reservation)) ? $reservation["nom"] : "" ?>" disabled>
                </div>
                <div class="div-input">
                    <label for="nbr" class="name">Nombre de place</label>
                    <input type="number" min="0" name="nbr_reservation" id="nbr" value="<?= (isset($reservation)) ? $reservation["quantite"] : "" ?>" disabled>
                </div>
                <div class="div-input">
                    <label for="date" class="name">Reserver le</label>
                    <input type="date" min="0"  id="date" value="<?= (isset($reservation)) ? $reservation["date_reservation"] : "" ?>" disabled>
                </div>
                <div class="div-input">
                    <label for="date" class="name">Pour le</label>
                    <input type="date" min="0" name="date"  id="date" value="<?= (isset($reservation)) ? $reservation["date"] : "" ?>" disabled>
                </div>
                <div class="div-input">
                    <label for="Submit" style="overflow: hidden;"></label>
                    <label for="Submit" style="overflow: hidden;"></label>
                </div>
                <div class="div-input">
                    <input type="submit" value="Valider" name="valider">
                </div>
                <div class="div-input">
                    <input type="submit" value="Annuler" name="annuler">
                </div>
            </form>
        </div>
    </div>

    <!-- add message  -->
    <div class="add-project" id="modify_reservation"
    style="transform: <?= (isset($_GET["newMessage"]) && $_GET["newMessage"] == true) ? "translateY(0)" : ""  ?>">
        <div class="project">
            <span id="exit_add_message">&times;</span>
            <div class="header">
                <?php 
                if(isset($_GET["error"]) && !empty($_GET["error"]) && isset($_GET["newMessage"])){
                    if($_GET["error"] == "emptyField")
                        $msg = "Veuillez ajouter un message!";
                    if($_GET["error"] == "emptyUser")
                        $msg = "Vous devez choisir un utilisateur!";
                    if($_GET["error"] == "addError")
                        $msg = "Erreur lors de l'envoi du message!";

                    echo "<p class=\"erreur\">".$msg."</p>";
                }  ?>
                <p class="title">Nouveau message</p>
            </div>
            <form action="index.php?action=gestion" method="post">
                <div class="div-input">
                    <label for="name" class="name">Nom de l'utilisateur</label>
                    <select name="utilisateur" id="">
                        <option value="">--</option>
                        <?php
                        foreach($users_informations as $users_information){
                            if($users_information["type"] == "client"){
                            ?>
                            <option value="<?= $users_information["registration"] ?>"><?= $users_information["email"] ?></option>
                        <?php } } ?>
                    </select>
                </div>
                <div class="div-input">
                    <label for="email" class="name">Votre message</label>
                    <textarea name="message" id="" cols="5" rows="3" placeholder="ecrivez..."></textarea>
                </div>
                <div class="div-input">
                    <input type="submit" value="Envoyer" name="envoyer_newMessage">
                </div>
            </form>
        </div>
    </div>

    <!-- show messages discussion  -->
    <div class="add-project" id="modify_reservation"
    style="transform: <?= (isset($_GET["discussion"]) && $_GET["discussion"] == true) ? "translateY(0)" : ""  ?>">
        <div class="project">
            <span id="exit_add_message">&times;</span>
            <div class="header">
                <?php 
                if(isset($_GET["error"]) && !empty($_GET["error"]) && isset($_GET["newMessage"])){
                    if($_GET["error"] == "emptyField")
                        $msg = "Veuillez ajouter un message!";
                    if($_GET["error"] == "emptyUser")
                        $msg = "Vous devez choisir un utilisateur!";
                    if($_GET["error"] == "addError")
                        $msg = "Erreur lors de l'envoi du message!";

                    echo "<p class=\"erreur\">".$msg."</p>";
                }  ?>
                <p class="title">Nouveau message</p>
            </div>
            <form action="index.php?action=gestion" method="post">
                <div class="div-input">
                    <label for="name" class="name">Email d'utilisateur</label>
                    <select name="utilisateur" id="">
                        <option value="<?= $one_users["registration"] ?>"><?= $one_users["email"] ?></option>
                    </select>
                </div>
                <div class="div-input">
                    <label for="email" class="name">Votre message</label>
                    <textarea name="message" id="" cols="5" rows="3" placeholder="ecrivez..."></textarea>
                </div>
                <div class="div-input">
                    <input type="submit" value="Envoyer" name="envoyer_newMessage">
                </div>
            </form>
        </div>
    </div>

    <script src="<?= JS ?>gestion.js"></script>
</body>
</html>