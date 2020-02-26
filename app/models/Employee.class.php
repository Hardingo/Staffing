<?php 

class Employee {

    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function addEmployee($data){
        
        $this->db->query("INSERT INTO staff (`user_id`, `service_line`, `cost_center`, `location`, `staffing_status`, `last_name`, `first_name`, `job_title`, `first_language`, `second_language`, `fte`, `confirmed_sizing`, `hire_date`, `comments`) 
        VALUES (:user_id, :service_line, :cost_center, :location, :staffing_status, :last_name, :first_name, :job_title, :first_language, :second_language, :fte, :confirmed_sizing, :hire_date, :comments)");
 
        $this->db->bind(':user_id', $data["user_id"], "integer");
        $this->db->bind(':service_line', $data["service_line"], "str");
        $this->db->bind(':cost_center', $data["cost_center"], "str");
        $this->db->bind(':location', $data["location"], "str");
        $this->db->bind(':staffing_status', $data["staffing_status"], "str");
        $this->db->bind(':last_name', $data["last_name"], "str");
        $this->db->bind(':first_name', $data["first_name"], "str");
        $this->db->bind(':job_title', $data["job_title"], "str");
        $this->db->bind(':first_language', $data["first_language"], "str");
        $this->db->bind(':second_language', $data["second_language"], "str");
        $this->db->bind(':fte', $data["fte"], "integer");
        $this->db->bind(':confirmed_sizing', $data["confirmed_sizing"], "str");
        $this->db->bind(':hire_date', $data["hire_date"], "str");
        $this->db->bind(':comments', $data["comments"], "str");

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }

    }




}