<?php


    class Router 
    {
        private $pages = array();

        function addRoute($url , $path)
        {
            $this->pages[$url] = $path;
        }


        function route($url)
        {
            $path = $this->pages[$url];
            $file__dir = "page/" . $path;

            if ($path == "")
            {
                require_once "page/404.html";
                die();
            }
            else if ($path != "")
            {
                if (file_exists($file__dir))
                {
                    require_once $file__dir;
                }
                else 
                {
                    require_once "page/404.html";
                    die();
                }
            }
        }
    }
?>