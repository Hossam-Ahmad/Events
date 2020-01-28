<?
    ob_start();
    $root_path = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';
    $root_path .= 'events/'; //comment this line before commit
    $page = $_SERVER['REQUEST_URI'];
    $page = substr($page, strpos($page, '/', 1)+1);
    
    require_once("router.php");
    $router = new router($page);
    $page = $router->route();

    if(isset($_COOKIE["lang"])){
        include ("lang/".$_COOKIE["lang"].".php");
    }else{
        include ('lang/en.php');
    }

    if(isset($_COOKIE["login_status"])){
        $_SESSION["login_status"] = true;
        $_SESSION["user_name"] = $_COOKIE["user_name"];
        $_SESSION["user_email"] = $_COOKIE["user_email"];
        $_SESSION["user_id"] = $_COOKIE["user_id"];
    }

    function redirect($link){
        $root_path = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';
        $root_path .= 'events/'; //comment this line before commit
    
        echo "
            <script>
                window.location.href = '".$root_path.$link."';
            </script>
        ";
    }
    
    function convert_route_regx($route){
        $route = str_replace("/","\/",$route);
        $route = "/".preg_replace('/{(.*?)}/', '[a-z0-9\-]+', $route);
        if(substr($route,-1) != '/'){
            $route .= '/';
        }
        return $route;
    }
    
?>
<!DOCTYPE html>
<html>

<head>
    <? include("includes/header.php"); ?>
    <title> <? echo $main_site_name ?> </title>
</head>

<body>
    <!-- NavBar -->
    <? include('includes/nav.php'); ?>

    <!-- App -->
    <main id="app">
        <? include("$page.php"); ?>
    </main>
    
    <!-- Footer -->
    <? include('includes/footer.php'); ?>
    <? include('includes/modals.php'); ?>
    <!-- Scripts -->
    <script src="<? echo $root_path?>assets/js/jquery-3.3.1.min.js"></script>
    <script src="<? echo $root_path?>assets/js/popper.min.js"></script>
    <script src="<? echo $root_path?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- custom page scripts -->
    <script src="<? echo $root_path?>assets/vendor/OwlCarousel2-2.3.4/owl.carousel.min.js"></script>
    <script src="<? echo $root_path?>assets/js/parallax.min.js"></script>
    <script src="<? echo $root_path?>assets/js/home.js"></script>
    <!-- Core -->
    <script src="<? echo $root_path?>assets/js/hubbEvents.js"></script>
</body>

</html>
<? ob_end_flush() ?>