<?php 
class Json{
    private function loadData(string $dataname)
    {
        return json_decode(file_get_contents(__DIR__ . '/../data/' . $dataname . '.json'), true);
    }

    public function getProjects()
    {
        return $this->loadData('projects');
    }

    public function addProject(string $titre, string $description, $url_photo, string $url_site)
    {
        $projects = $this->loadData('projects');
        
        $last_id = 1;
        foreach($projects as $k => $u) {
            if($last_id <= $u["id"]) $last_id = $u["id"] + 1;
        }

        $nouveau = [
            "id" => $last_id,
            "titre" => $titre,
            "description" => $description,
            "url_photo" => $url_photo,
            "url_site" => $url_site
        ];

        $projects[] = $nouveau;
        if(!file_put_contents(__DIR__ . '/../data/projects.json', json_encode($projects)))
        {
            throw new Exception("Error adding project", 1);
        }

        return(["success", "Le projet ".$last_id." a bien été ajouté"]);
    }
}