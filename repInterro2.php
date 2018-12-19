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
                <li id="onglet3"><a href="interro1.php">interro simple</a></li>
                <li id="onglet4"class="encours"><a href="interro2.php" >interro multiple</a></li>
            </ul>
        </nav>
        <div id="bloc2">

            <!-- récupération valeurs des checkboxes cochées -->
            <?php  
                if(isset($_GET['table'])) {

                    echo '<h3> Voici 10 opérations à résoudre : </h3>';
                    echo '<form action="resInterro2.php" method="GET">';
         
                    for($i=1; $i<=10; $i++){
                        // choisir une table au hasard parmi celles choisies
                        $rand_keys = array_rand($_GET['table'],1);
                        $table = $_GET['table']; 
                        $nbre = $table[$rand_keys];
                        // génération d'une opération au hasard
                        $nbAleatoire = (rand(1,30));
                        $resultat = $nbre * $nbAleatoire;

                        // affichage de l'opération à effectuer
                        echo '<div id="op"><label>'.$nbre . ' x ' . $nbAleatoire . ' = </label>';              
                        // affichage pour saisie de la réponse
                        echo '<input class="rep" type="number" name="reponse[]" > </div>';

                            
                        $result[$i] = $resultat;    

                    } 
                    $_SESSION["result"] = $result;
                    echo '<input type="submit" value="Envoyer les réponses">';
                    echo '</form>';
                
                };     ?>

        </div>
    </div>

</body>
</html>