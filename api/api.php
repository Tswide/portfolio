<?php
    $filename = "/data/projects.json";
    $contents = file_get_contents($filename);
    $liste = json_decode($contents,true);
        
    switch($_POST["action"]) {
        case "liste":
            echo $contents;
        break;
        
        default:
            echo json_encode(array("error" => "Action impossible"), true);
        break;
    }  
?>