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

            <!-- récupération valeur choisie -->
             <?php
             if(isset($_GET['tables'])){
                $table = $_GET['tables'];  
                // génération d'une opération au hasard
                $nbAleatoire = (rand(1,30));
                $resultat = $table * $nbAleatoire;
                $_SESSION["table"] = $table;
                $_SESSION["nbAleatoire"] = $nbAleatoire;
                $_SESSION["result"] = $table * $nbAleatoire;
            
                echo '<h3>Tu as choisi la table des '.$table. '</h3>';
                echo '<p>Quel est le résultat de cette opération ? :</p>';

                echo '<form action="resInterro1.php" method="GET">';           
                // affichage de l'opération à effectuer
                echo '<div id="op"><label>'.$table . ' x ' . $nbAleatoire . ' = </label>';              
                // affichage pour saisie de la réponse
				echo '<input class="rep" type="number" name="reponse" > </div>';

                echo '<input type="submit" value="Envoyer la réponse">';
                echo '</form>';
            

                

             } 	?>
				
                
        </div>
    </div>


</body>
</html>
       