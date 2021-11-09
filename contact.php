<?php

if ($_SERVER['REQUEST_METHOD'] == "POST"){
    foreach($_POST as $key => $value){
        
        echo "<br>$key : $value";
        $$key = $value;
    }
} else if ($_SERVER['REQUEST_METHOD'] == "GET"){
    foreach($_GET as $key => $value){
     
        echo "<br>$key : $value";

        $$key = $value;
    }
}

echo "<br>Merci $prenom $nom";
if (strtolower($nom) == "teapot"){
    echo "<h2>I'm a teapot</h2>";
    http_response_code(418);
}