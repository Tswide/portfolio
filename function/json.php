<?php

function filePath()
{
    $filename = __DIR__ . '/../data/projects.json';
    return $filename;
}

function getProjects()
{
    $filename = filePath();
    $contents = file_get_contents($filename);
    $liste = json_decode($contents,true);

    return $liste;
}

function addProject(string $titre, string $description, $url_photo, string $url_site)
{
    $filename = filePath();
    $liste = getProjects();
    print_r($liste); exit;
    $last_id = 1;
    foreach($liste as $k => $u) {
        if($last_id <= $u["id"]) $last_id = $u["id"]+1;
    }

    $nouveau = array(
        "id" => $last_id,
        "titre" => $titre,
        "description" => $description,
        "url_photo" => $url_photo,
        "url_site" => $url_site
    );

    $liste[] = $nouveau;
    print_r($liste);
    file_put_contents($filename, json_encode($liste));

    return array("success", "Le projet ".$last_id." a bien été ajouté");
}
?>
