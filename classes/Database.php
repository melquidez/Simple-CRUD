<?php

class Database{


    function __construct(){
        

        $this->mysqli = new mysqli("localhost","root", "1234567890","mel_crud");
    }

    function lastInsert(){
        return $this->mysqli->insert_id;
    }

    function escapeString($esc){
        return $this->mysqli->escape_string($esc);
    }

    function displayData($tbl, $esc = NULL){


        $sql = (is_null($esc)) ? "SELECT * FROM $tbl" : "SELECT * FROM $tbl WHERE c_id='$esc'";
        //$sql = str_ireplace("WHERE id=", "", $sql);

        $q = $this->mysqli->query($sql);
        
        $ar = array();
        if($q->num_rows > 0){
            while($row = $q->fetch_assoc()){
                $ar[] = $row;
            }
        }
        return $ar;
    }


    /**
     * @param $tbl string table name
     * @param $dataList array data to be inserted on database
     *
     */
     
    function addData($tbl, $dataList){
        $key = implode(', ', array_keys($dataList));
        $val = "'" . implode("', '", array_values($dataList)) . "'";
        $this->mysqli->query("INSERT INTO $tbl ($key) VALUES($val)");
    }

    
    function updateData($tbl, $esc, $field){

        $key = implode(',', array_keys($field));
        $val = implode(',', array_values($field));
        

        $key = explode(',', $key);
        $val = explode(',', $val);
        $ar = array();
        for($i = 0; $i < count($key); $i++){
            $ar[] = $key[$i] . "='" . $val[$i] . "'"; // concat 'key=value'
        }

        $field = implode(', ',array_values($ar));

        //$this->mysqli->query("UPDATE FROM $tbl SET firstname=value one, lastname=Something WHERE id=1");

        $exec = $this->mysqli->query("UPDATE $tbl SET $field, c_last_updated=NOW() WHERE c_id=$esc");
        if($exec){
            return true;
        } else{ 
            return false;
        }
    }


   function deleteData($tbl, $esc){
       $q = $this->mysqli->query("DELETE FROM $tbl WHERE c_id='$esc'");
       return true;
   }



   function searchData($tbl, $field, $search){
        $q = $this->mysqli->query("SELECT * FROM $tbl WHERE $field LIKE '$search%'");


        $ar = array();
        if($q->num_rows > 0){
            while($row = $q->fetch_assoc()){
                $ar[] = $row;
            }
        }
        return $ar;
   }
}
