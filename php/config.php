<?php
    $conn = mysqli_connect("localhost:3306", "root", "root", "chat");
    if($conn) {
        echo "Base de donnée connectée";
    } else {
        echo "Erreur lors de la connexion à la base de donnée";
    }
?>