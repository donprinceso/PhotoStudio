<?php

class Router{
    // declearing the constant controller
    protected $controller = 'Pages';
    // assign a method 
    protected $method = 'index';
    // get the parameter 
    protected $param = [];
    
    public function __construct() {
        $url = $this->getUrl();

        // getting and setting the controller class if exist
        if(file_exists(APPROOT.'/controllers/'.ucwords($url[0]).'.php')){
            $this->controller = ucwords($url[0]);
            unset($url[0]);
        }
        require_once APPROOT.'/controllers/' .$this->controller. '.php';
        $this->controller = new $this->controller;

        // setting the method of the controller class
        if(isset($url[1])){
            if(method_exists($this->controller,$url[1])){
                $this->method = ucwords($url[1]);
                unset($url[1]);
            }
        }

        // setting the parameter the method pass in the class
        $this->param = $url ? array_values($url) : [];

        // using the callback function to get the param
        call_user_func_array([$this->controller,$this->method],$this->param);

    }
    
    /**
     * this is a function that get the url
     * filter the url
     * explose the url
     */
    public function getUrl()
    {
        if(isset($_GET['url'])){
           return $url = explode('/',filter_var(rtrim($_GET['url'] , '/') ,FILTER_SANITIZE_URL));
           
        }
    }
    
}