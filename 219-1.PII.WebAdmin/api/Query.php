<?php
require_once('Config/Connection.php'); 
class Query{
    private $connection;
    function __construct(){
        $this->connection = new Connection();
    }

    public function select($tableName,$selectColumnsNames, $whereColumnName, $whereValues){
        $columnsNames = '*';
        if(count($selectColumnsNames) != 0){
            $columnsNames = $this->getColumnsNamesFormArray($selectColumnsNames);
        }
        // $whereNames =  "(".$this->getColumnsNamesFormArray($whereColumnName).")";
        // $whereValues =  "(".$this->getColumnsNamesFormArray($whereValue).")";
        $where = $this->getWhereString($whereColumnName, $whereValues);
        $sql = "SELECT ".$columnsNames." FROM $tableName ".$where;
        return $this->excecuteQuery($sql);
    }
    public function update($tableName,$updateColumnsNames, $valueColumns,$whereColumnName, $whereValues){
        $values = "";
        for($i = 0; count($updateColumnsNames) > 0; $i++){
            $values = $values. $updateColumnsNames[$i]." = ". $valueColumns[$i]. ",";
        }
        $values = substr($values, 0, -1);
        $where = $this->getWhereString($whereColumnName, $whereValues);
        $sql = "UPDATE $tableName SET ".$where;
        return $this->excecuteQuery($sql);
    }

    public function getWhereString($whereColumnName, $whereValues)
    {
        if(count($whereColumnName) == 0){
            return "";
        }
        $value = '';
        for($i = 0; $i < count($whereColumnName); $i++){
            $value = $value."$whereColumnName[$i] = '$whereValues[$i]' AND ";
        }
        return "WHERE ".substr($value, 0, -4);
    }

    function getColumnsNamesFormArray($selectColumnsNames){
        
        $columnsNames = '';
        foreach($selectColumnsNames as $columnName){
            $columnsNames = $columnsNames."'$columnName',";
        }
        return substr($columnsNames, 0, -1);
    }

    public function excecuteQuery($sql)
    {
        $result = $this->connection->conn->query($sql);
        if ($result == true) {
            // $data = array();
            // while($row = $result->fetch_all(MYSQLI_BOTH)) {
            //     array_push($data,$row);
            //   }
            // return $data ;
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return null;
        }
    }
}


?>