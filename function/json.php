<?php 
error_reporting(E_ALL);

function loadData(string $dataname)
{
    return json_decode(file_get_contents(__DIR__ . '/../data/' . $dataname . '.json'), true);
}

function getProjects()
{
    return loadData('projects');
}

function addProject(string $titre, string $description, $url_photo, string $url_site)
{
    $projects = loadData('projects');
    
    $last_id = 1;
    foreach($projects as $k => $u) {
        if($last_id <= $u["id"]) $last_id = $u["id"] + 1;
    }

    $nouveau = array(
        "id" => $last_id,
        "titre" => $titre,
        "description" => $description,
        "url_photo" => $url_photo,
        "url_site" => $url_site
    );

    $projects[] = $nouveau;
    if(!file_put_contents(__DIR__ . '/../data/projects.json', json_encode($projects)))
    {
        throw new Exception("Error adding project", 1);
        exit();
    }

    return array("success", "Le projet ".$last_id." a bien été ajouté");
}