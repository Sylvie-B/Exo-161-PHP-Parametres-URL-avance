<?php
if(isset($_GET['batiment'], $_GET['salle']) === true) {
    echo "bat : ".$_GET['batiment']." - salle : ".$_GET['salle'];
}
