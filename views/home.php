  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= CSS ?>home.css">
    <link rel="stylesheet" href="<?= CSS ?>splide.min.css">
    <title>hobbies</title>
</head>
<body>

    <?php require_once(CONTROLLER."Header.php") ?>


    <!-- body -->



    <!-- container -->
    <div class="container">

    <div class="start">
        <img src="<?= RES ?>aire_jeux01.png" alt="">
        <div>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. A ratione vitae voluptas ipsam quidem, iusto consequatur in expedita eveniet rem quod aliquam dicta laudantium explicabo officiis exercitationem sequi ad perspiciatis.</p>
        </div>
    </div>

        <div class="presentation-people">
            <div class="group-presentation">
                <div class="presentation">
                    <img src="<?= RES ?>aire_jeux01.png" alt="">
                    <div class="label">
                        <p class="title">En couple</p>
                        <p class="description">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit ipsum facere deserunt?
                        </p>
                    </div>
                </div>
                <div class="presentation">
                    <img src="<?= RES ?>Cheval.png" alt="">
                    <div class="label">
                        <p class="title">Solitaire</p>
                        <p class="description">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit ipsum facere deserunt?
                        </p>
                    </div>
                </div>
                <div class="presentation">
                    <img src="<?= RES ?>Cheval.png" alt="">
                    <div class="label">
                        <p class="title">En famille</p>
                        <p class="description">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit ipsum facere deserunt?
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    
        
    <script src="<?= JS ?>home.js"></script>
</body>
</html>