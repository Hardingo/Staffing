<?php

class Employees extends Controller{

    public function __construct(){

        $this->employeeModel = $this->model('Employee');

    }


    public function add(){

        if($_SERVER["REQUEST_METHOD"] == "POST"){

            $data = [
                "service_line" => $_POST["service_line"],
                "cost_center" => $_POST["cost_center"],
                "location" => $_POST["location"],
                "staffing_status" => $_POST["staffing_status"],
                "last_name" => $_POST["last_name"],
                "first_name" => $_POST["first_name"],
                "job_title" => $_POST["job_title"],
                "first_language" => $_POST["first_language"],
                "second_language" => $_POST["second_language"],
                "fte" => $_POST["fte"],
                "confirmed_sizing" => $_POST["confirmed_sizing"],
                "hire_date" => $_POST["hire_date"],
                "comments" => $_POST["comments"],
                "user_id" => 1
            ];
            
            $this->view("employee/add", $data);

            if($this->employeeModel->addEmployee($data)){
                echo "succes";
            }else{
                echo "canili";
            }
            

            
        }else{


            $data = [
                "service_line" => "",
                "cost_center" => "",
                "location" => "",
                "staffing_status" => "",
                "last_name" => "",
                "first_name" => "",
                "job_title" => "",
                "first_language" => "",
                "second_language" => "",
                "fte" => "",
                "confirmed_sizing" => "",
                "hire_date" => "",
                "comments" => "",
                "user_id" => 1
            ];

            $this->view("employee/add", $data);

        }


        
    }

    public function edit(){
        $this->view("employee/edit");
    }

}