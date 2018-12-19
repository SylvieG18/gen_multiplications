
            <?php
             if(isset($_GET["tables"])){
                $table = $_GET["tables"];             
                echo '<h2>Voici la table de '.$table .' :</h2>';
                echo '<div class="bloc3">';
                for($a=1; $a<=30; $a++){
                    echo $a.' x '.$table.' = '.($table*$a).'<br/>';
                }
                echo '</div>';
             }
           ?>
        

