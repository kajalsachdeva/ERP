
<?php

// index.php file 

class Route {

    public $url;
    public $expload_url;
    public $controller;
    public $action;
    public $currentPath;
    public $pathInfo;
    public $hostName;
    public $protocol;
    public $urlparam;

    function getBaseUrl() {

        // output: /myproject/index.php
        $this->currentPath = $_SERVER['PHP_SELF'];
        //echo $this->currentPath;
        // output: Array ( [dirname] => /myproject [basename] => index.php [extension] => php [filename] => index ) 
        $this->pathInfo = pathinfo($this->currentPath);
        // print_r($this->pathInfo);
//    
        // output: localhost
        $this->hostName = $_SERVER['HTTP_HOST'];
        //echo $this->hostName;
//    
//    // output: http://
        $this->protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"], 0, 5)) == 'https://' ? 'https://' : 'http://';
        //echo $this->protocol;
        //echo ($this->protocol.$this->hostName.$this->pathInfo['dirname']."/");exit;
        $baseUrl = $this->protocol . $this->hostName . $this->pathInfo['dirname'] . "/";
        //echo $baseUrl;
        return $baseUrl;
//     
//    // return: http://localhost/myproject/
        //return $this->protocol.$this->hostName.$this->pathInfo['dirname']."/";
    }

    function getUrl() {

        $this->url = $_SERVER['REQUEST_URI'];
//         echo $this->url;
//         die;
        $this->expload_url = explode('/', $this->url);
        
//        echo '<pre>';
//        print_r($this->expload_url);die;
        $this->expload_url = array_slice($this->expload_url, 2);

//        echo '<pre>';
//        print_r($this->expload_url);exit;
        if (empty($this->expload_url[0])) {
            $this->controller = 'Login';
            $this->action = 'login';
        } else {
            $this->controller = $this->expload_url[0];
//            echo $this->controller;
//            die;
//             echo '<pre>';
//        print_r($this->expload_url);
            $this->urlparam = explode('?', $this->expload_url[1]);
            
                
//                echo '<pre>';
//                print_r($this->urlparam);
//                exit;
                $this->action = $this->urlparam[0];
//            echo $this->action;
//            die;
        }
        include('./controller/' . ucfirst($this->controller) . '.php');
    }

}

$route = new Route();
$route->getUrl();
$route->getBaseUrl();
$object_inststance = new $route->controller();
$action = $route->action; // getLogin
$object_inststance->$action();
?>

