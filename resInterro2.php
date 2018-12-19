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
                if(isset($_GET['reponse'])) {
                    $reponse = $_GET['reponse'];
                    $resultat = $_SESSION["result"];
                    $count = 0;
                    echo '<h3> Voici ton score : </h3>';
                    
                    // vérification des réponses avec les résultats attendues
                     for ($i=0; $i<10; $i++){
                         $a=$i+1;
                        
                         if($reponse[$i] == $resultat[$a]){
                            $count++;
                         }                
                     }
                      echo '<p>'.$count .' / 10</p>';

                      if($count==10){
                          echo "<p class='score'> Félicitation, les tables de multiplication n'ont plus de secret pour toi !";
                      } elseif (($count <10) AND ($count > 7)) {
                          echo "<p class='score'> Bravo !</p>";
                      } elseif (($count <8) AND ($count> 5)){
                          echo "<p class='score' > Bien !</p>";
                      } elseif ($count ==5) {
                          echo "<p class='score'> Tout juste la moyenne ! </p>";
                      } elseif (($count <5) AND ($count >2)){
                          echo "<p class='score'> Il faut encore réviser ! </p>";
                      } elseif (($count<3) AND ($count >0)){
                          echo "<p class='score'> On ne sait plus ses tables ? </p>";
                      } elseif ($count == 0){
                          echo "<p class='score'> Il va falloir s'y mettre sérieusement !  </p>";
                      }
                    }
                            
         

                    

                
                   ?>

        </div>
    </div>

</body>
</html>