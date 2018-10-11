<?php
require_once('Connection.php'); 
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
        var_dump($sql);
        $result = $this->connection->conn->query($sql);
        var_dump($result);
        if ($result == true) {
            return mysql_fetch_array($result, MYSQL_NUM);
        } else {
            return [];
        }
    }
}


?>