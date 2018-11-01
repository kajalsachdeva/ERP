<?php

include_once("model/Model.php");
include 'controller/Controller.php';

class Client extends Controller
{

    public function __construct() 
     {
        $this->model = new Model();
     }
     public function addClient()
     {
        
         if (isset($_POST['submit'])) {
             $clientDetail = array($_POST['client-name'], $_POST['client-email'], $_POST['company-detail'],
                 $_POST['contact-number'] );
             
             $this->model->addClientDetail($clientDetail);
         }
         else
         {
           $this->render('view/AddClient.php', 'false'); 
         }
     }
}