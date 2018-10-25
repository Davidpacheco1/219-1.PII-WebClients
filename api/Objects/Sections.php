<?php
require_once('Query.php'); 
class Sections
{
    public function Sections(){

    }

    public function getSectionByLocation($location){
        $query = new Query();
        $response = $query->select('sections',[],['location'],[$location]);
        return $response;
    }

    public function updateSectionById($id,$location, $img, $description,$title){
        $query = new Query();
        $response = $query->update('sections',['location','img','description', 'title'],[$location, $img, $description,$title],['id'],[$id]);
        return $response;
    }
}



?>