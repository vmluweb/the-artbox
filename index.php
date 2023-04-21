<!-- index.php -->
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
        <div id="liste-oeuvres">

            <!-- Inclusion des variables-->
            <?php include_once('oeuvres.php'); ?>

            <?php foreach ($oeuvres as $oeuvre) : ?>

                <article class="oeuvre">
                    <?php echo '<a href="oeuvre.php?id=' . $oeuvre['id'] . '">'; ?>
                    <img src=<?php echo $oeuvre['image']; ?>>
                    <h2><?php echo $oeuvre['title']; ?></h2>
                    <p class="description"><?php echo $oeuvre['artist']; ?></p>
                    </a>
                </article>
            <?php endforeach ?>
        </div>
    </main>
    <footer>

        <!-- Inclusion du pied de page du site -->
        <?php include_once('footer.php'); ?>

    </footer>
</body>

</html>