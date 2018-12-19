<?php session_start(); ?>
<!DOCTYPE html>
                
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Multiplications</title>
</head>
<body>
    <div id="bloc_page">
        <header>
            <h1>les tables de multiplication</h1>
        </header>

        <nav>
            <ul>
                <li id="onglet1"><a href="index.php" >Select</a></li>
                <li id="onglet2"><a href="check.php">Checkboxes</a></li>
                <li id="onglet3" class="encours"><a href="interro1.php">interro simple</a></li>
                <li id="onglet4"><a href="interro2.php" >interro multiple</a></li>
            </ul>
        </nav>
        <div id="bloc2">

            <form  action="repInterro1.php" method="GET">

                <?php include ('select.php');?>

                <p>Choisi une table</p>

                <input type="submit" value="Envoyer le choix" >
            </form>

            
                
        </div>
    </div>


</body>
</html>
       