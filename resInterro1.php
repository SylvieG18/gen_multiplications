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

            <!-- résultat -->
             <?php
             
                if(isset($_GET['reponse'])){
                    $rep = $_GET['reponse'];
                    echo '<h3> Voici le résultat :</h3>';
                    echo "<p>L'opération à résoudre était :</p>";
                    echo $_SESSION["table"].' x '.$_SESSION["nbAleatoire"].'<br/>';
                    echo '<p>Ta réponse : <strong>'.$rep.'</strong></p>';
                    if($rep == $_SESSION["result"]){
                        // echo '<div id="res">';
                        echo "<p class='bon'> Bravo, c'est la bonne réponse.</p>";
                        // echo '</div>';
                    } else {
                        // echo '<div id="resF">';
                        echo "<p class='faux'> n'est pas la bonne réponse. </p>";
                        echo "<p>La solution est ".$_SESSION["result"]."</p>";
                        // echo '</div>';
                    }

                    
                }

              	?>
				
                
        </div>
    </div>


</body>
</html>
       