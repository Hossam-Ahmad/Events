<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/vendor/OwlCarousel2-2.3.4/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="assets/vendor/OwlCarousel2-2.3.4/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="assets/vendor/animate.min.css">
<!-- custom icons  -->
<link rel="stylesheet" type="text/css" href="assets/css/fonts.css">
<link rel="stylesheet" type="text/css" href="assets/css/events.css">
<?
extract($_GET);
extract($_POST);

$db_name="hubb_events";	
$db_server_name="localhost";
$db_username="root"; 
$db_password=""; 
$main_site_name="HUBB Events";

$conn=mysqli_connect($db_server_name,$db_username,$db_password)or die("<br><center>Sorry, System is under Maintenance now<br>Please come again in few minutes</center>");
mysqli_select_db($conn, $db_name);

if(!isset($_SESSION)){
    session_start();
}

$login_status = false;

?>