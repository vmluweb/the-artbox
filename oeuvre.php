<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>

<body>
    <header>

        <!-- Inclusion de l'entête du site -->
        <?php include_once('header.php'); ?>

    </header>

    <main>

        <!-- Inclusion des variables-->
        <?php include_once('oeuvres.php');
        ?>

        <!-- Recherche dans le tableau -->
        <?php
        foreach ($oeuvres as $oeuvre) :
        ?>

            <!-- Récupération des paramètres -->
            <?php if ($oeuvre['id'] == $_GET['id']) :
            ?>

                <article id="detail-oeuvre">
                    <div id="img-oeuvre">
                        <img src=<?php echo $oeuvre['image']; ?>>
                    </div>
                    <div id="contenu-oeuvre">
                        <h1>
                            <?php echo $oeuvre['title']; ?>
                        </h1>
                        <p class="description">
                            <?php echo $oeuvre['artist']; ?>
                        </p>
                        <p class="description-complete">
                            <?php echo $oeuvre['description']; ?>
                        </p>
                    </div>
                </article>

            <?php endif; ?>
        <?php endforeach; ?>
    </main>

    <footer>

        <!-- Inclusion du pied de page du site -->
        <?php include_once('footer.php'); ?>

    </footer>
</body>

</html>