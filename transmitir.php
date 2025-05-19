<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['loginemail']) and isset($_POST['loginemail']) and isset($_POST['senha']) and isset($_POST['senha'])){
            $email = $_POST['loginemail'];
            $senha = $_POST['senha'];
            echo($email." - ".$senha);
        }
    }
?>