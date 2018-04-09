<?php 
include "includes/globals.php"; 
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Sticky CSS</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="/css/styles.css?v=?v=<?=$cacheBusterNumber; ?>" />
    </head>
    <body class="right_side">
        

        <section class="hero_space">
            <h1>Right Side Sticky</h1>
        </section>

        <section class="stick_in_here">

            <div class="sicky_holder">
                <nav> 
                    <a href="#link">one</a>
                    <a href="#link">two</a>
                    <a href="#link">three</a>
                    <a href="#link">four</a>
                </nav>
            </div>

            <?php for ($x = 1; $x <= 5; $x++) { ?>
            <article class="spacer_space">
                <h3>Content Space #<?= $x; ?></h3>
            </article>
            <?php } ?>


        </section>





        <footer>
            <h2>This is just the footer</h2>
        </footer>


    <?php include "includes/foot_include.php"; ?>

    </body>
</html>