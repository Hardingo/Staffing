<?php

class Dataset  {
    private $db;

    public function __construct()
    {

        $this->db = new Database();
        
    }


    public function addData($name, $value){

        $this->db->query("INSERT INTO :name('title') VALUE :title ");
        $this->db->bind(":name" , $name, "str");
        $this->db->bind(":title" , $value, "str");


        if($this->db->execute()){
            return true;
        }else{
            return false;
        }

    }


}