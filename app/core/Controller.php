<?php

    class Controller{

        // getting the model class and setting it
        public function model($model)
        {
            if(file_exists(APPROOT.'/models/'.$model.'.php')){
                require_once APPROOT.'/models/'.$model.'.php';
                return $model;
            }
        }

        // getting the view and setting it 
        public function view($view,$data = [])
        {
            if(file_exists(APPROOT.'/views/'.$view.'.php')){
                require_once APPROOT.'/views/'.$view.'.php';
            }
            else{
                die('View Not Found');
            }
        }
    }