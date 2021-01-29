<?php

if(isset($_GET['dateDebut'], $_GET['dateFin'])) {
    echo "Début : ".$_GET['dateDebut']." - Fin : ".$_GET['dateFin'];
}
