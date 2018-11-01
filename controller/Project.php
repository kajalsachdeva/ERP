<?php

include_once("model/Model.php");
include 'controller/Controller.php';

class Project extends Controller
{

    public function __construct() 
     {
        $this->model = new Model();
     }
     public function addProject()
     {
          $this->render('view/AddProject.php', 'false'); 
     }
   
    
}
