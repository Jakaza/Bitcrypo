<?php
    class Router{

        private $controller = "home";
        private $method = "index";
        private $params = [];

        public function __construct()
        {
            $url = $this->splitUrl();
         
            if(file_exists("../app/controllers/". strtolower($url[0]).".php"))
            {
                $controller = strtolower($url[0]);
                unset($url[0]);
            }

            // check if method exist and unset
            // populate params array and reset indexes
            // call the class and method then pass params

        }

        private function splitUrl(){
            $url = $_GET("url")? $_GET("url"): "home";
            return explode("/", trim(filter_var($url, FILTER_SANITIZE_URL), "/"));
        }
    }

?>