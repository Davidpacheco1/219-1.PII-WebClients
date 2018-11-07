<?php
require_once(realpath(dirname(__FILE__) . '/..') .'/Query.php'); 
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
    public function insert($location, $img, $description,$title){
        $query = new Query();
        $response = $query->insert('sections',"(location,img,description, title)","('$location', '$img', '$description', '$title')");
        return $response;
    }
    public function delete($id){
        $query = new Query();
        $response = $query->delete('sections',['id'],[$id]);
        return $response;
    }
}



?>