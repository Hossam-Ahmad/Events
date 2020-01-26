<?
    ob_start();
    $page = $_SERVER['REQUEST_URI'];
    $page = substr($page, strpos($page, '/', 1)+1);
    $routes = ["login","register","home","email_confirmation","create_event","event_preview","event","event_dashboard"];

    if(!in_array($page,$routes)){
        $page = "home";
    }

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
        echo "
            <script>
                window.location.href = '$link';
            </script>
        ";
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
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- custom page scripts -->
    <script src="assets/vendor/OwlCarousel2-2.3.4/owl.carousel.min.js"></script>
    <script src="assets/js/parallax.min.js"></script>
    <script src="assets/js/home.js"></script>
    <!-- Core -->
    <script src="assets/js/hubbEvents.js"></script>
</body>

</html>
<? ob_end_flush() ?>