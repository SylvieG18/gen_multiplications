// déclaration des variables

var afficheTable = document.getElementById("affichageTableChoisie");

// AJAX : afficher la table choisie avec la liste déroulante sans utiliser de bouton submit

var choix = document.getElementById("tables");
choix.addEventListener("change", function(){
    var Request = new XMLHttpRequest();

    Request.onreadystatechange = function(){
        if (Request.readyState === 4){
            afficheTable.innerHTML = Request.responseText;
        }
    }

    Request.open('GET', './table.php?tables='+ choix.value + '', true);

    Request.send();

});

