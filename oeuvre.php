<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>
<body>

    <?php require_once(__DIR__ . '/header.php'); ?>

    <main>

    <?php require_once(__DIR__ . '/oeuvres.php'); ?>
    <?php foreach ($oeuvres as $oeuvre) { ?>
        <?php if($oeuvre['id'] === $_GET["id"]) {?>
            <article id="detail-oeuvre">
                <div id="img-oeuvre">
                    <img src="img/<?php echo $oeuvre['image'] ; ?>" alt="<?php echo $oeuvre['titre'] ; ?>">
                </div>
                <div id="contenu-oeuvre">
                    <h1><?php echo $oeuvre['titre'] ; ?></h1>
                    <p class="description"><?php echo $oeuvre['auteur'] ; ?></p>
                    <p class="description-complete">
                        <?php echo $oeuvre['description'] ; ?>
                    </p>
                </div>
            </article>
        <?php }
        ?>
    <?php } 
    ?>
</main>

    <?php require_once(__DIR__ . '/footer.php'); ?>

</body>
</html>