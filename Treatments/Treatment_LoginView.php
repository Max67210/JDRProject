<?php

    if(!empty($_POST)) {
        $str_pseudo = $_POST['pseudo'];
        $str_password = $_POST['password'];
        
        echo "le pseudo est : ".$str_pseudo;
        echo "le password est : ".$str_password;
    }
    
    
    
    function verifPseudo($pPseudo) {
        
    }

?>
