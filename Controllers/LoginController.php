<?php

switch ($_SESSION['path']) {
    case "connexion" : {
        include 'Vues/LoginView.html';
        break;
    }
}

?>

