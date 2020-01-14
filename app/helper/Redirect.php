<?php
class Redirect{
    public function to($location = "") {
       if($location){
           if($loction === 404){
               header('HTTP/1.0 404 Not Found');
           }
           else{
               header("Location:".SITE_URL.'/'.$location);
           }
       }
    }
}