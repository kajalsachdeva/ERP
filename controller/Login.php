<?php

include_once("model/Model.php");
include 'controller/Controller.php';

class Login extends Controller {

    public $model;
    public $route;
    public $useremail;
    public $password;
    public $result;

    public function __construct() {
        $this->model = new Model();
        $this->route = new Route();
    }

    public function login() {

        $url = $this->route->getBaseUrl();

        include 'view/login.php';
    }

    public function signUp() {
//        echo 'hii';
//        die;
        $_SESSION['useremail'] = $_POST['email'];

        $_SESSION['userPassword'] = $_POST['password'];
//echo $_SESSION['userPassword'];
//die;
        $_SESSION['result'] = $this->model->getlogin();
//echo '<pre>';
//print_r($_SESSION['result']);
//die;
        if ($_SESSION['result']) {
           
            $this->redirect('Login/dashboard');
        } else {
            $this->redirect('Login/login');
        }
    }

    public function register() {

        if (isset($_POST['submit'])) {

            $value = array($_POST['fullname'], $_POST['email'], $_POST['password']);

            $this->model->getRegiter($value);
            $this->redirect('Login/login', 'false');
        } else {
            $this->render('view/registration.php', 'false');
        }
    }

    public function dashboard() {
        $this->render('view/Dashboard.php', 'false');
    }

    public function logOut() {

        session_destroy();
        $this->redirect('Login/login');
    }

}

?>