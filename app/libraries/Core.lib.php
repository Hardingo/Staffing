<?php 
    //  App core class 
    //  Creates URL & load core controller
    //  URL format - /controller/method/params

    class Core {

        protected $currentController = "Pages";
        protected $currentMethod = "index";
        protected $params = [];

        public function __construct(){
            //print_r($this->getUrl());
            $url = $this->getUrl();
           // print_r($url);

            if(!is_null($url)){
                if(file_exists('../app/controllers/' . ucwords($url[0]) . ".class.php")){
                    // if the file exists 
                    // set as controller

                    $this->currentController = ucwords($url[0]);
                    // remove the 0 index from the array
                    unset($url[0]);

                }
            }
            

            // require controller
            require_once '../app/controllers/' . $this->currentController . ".class.php";

            // Instantiate controller class

            $this->currentController = new $this->currentController;

            if(isset($url[1])){
                //if a method exists inside the controller with the specified parameter

                if(method_exists($this->currentController, $url[1])){
                    $this->currentMethod = $url[1];
                    //remove from url array
                    unset($url[1]);
                }

            }

           
            //Get params
            $this->params = $url ? array_values($url) : [];

            // Call a callback with array of params
            call_user_func_array([$this->currentController, $this->currentMethod], $this->params);

                
          
            // Check for controllers with the first value on index 0

           
            


        }

        public function getUrl(){
            if(isset($_GET["url"])){

                $url = rtrim($_GET["url"], "/");
                $url = filter_var($url, FILTER_SANITIZE_URL);
                $url = explode('/', $url);

                return $url;

            }
        }




    }
