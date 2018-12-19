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
                <li id="onglet2" class="encours" ><a href="check.php">Checkboxes</a></li>
                <li id="onglet3"><a href="interro1.php">interro simple</a></li>
                <li id="onglet4"><a href="interro2.php" >interro multiple</a></li>
            </ul>
        </nav>
        <div id="bloc2">
                                 
            <form  action="check.php" method="GET">

                <?php  include ('checkbox.php'); ?>

                <p>Coche les tables à afficher</p>
                    
                <input type="submit" value="Voir"  >


            </form>
        
            
                <!-- récupération valeurs des checkboxes cochées  -->
                    <?php  
                        if(isset($_GET['table'])) {
                    foreach($_GET['table'] as $key => $valeur) {        

                    echo '<h2> Voici la table de '. $valeur. ' : </h2>';
                    echo '<div class="bloc3">';                                                  
                            for($a=1; $a<=30; $a++){
                                echo $a.' x '.$valeur.' = '.($valeur*$a).'<br/>';
                            };
                            echo '</div>';
                        };
                        
                    }; ?>
            
                    
        </div>
    </div>


</body>
</html>
