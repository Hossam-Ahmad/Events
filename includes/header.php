<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<? echo $root_path?>assets/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<? echo $root_path?>assets/vendor/OwlCarousel2-2.3.4/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="<? echo $root_path?>assets/vendor/OwlCarousel2-2.3.4/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="<? echo $root_path?>assets/vendor/animate.min.css">
<!-- custom icons  -->
<link rel="stylesheet" type="text/css" href="<? echo $root_path?>assets/css/fonts.css">
<link rel="stylesheet" type="text/css" href="<? echo $root_path?>assets/css/events.css">
<?
extract($_GET);
extract($_POST);

$db_name="hubb_events";	
$db_server_name="localhost";
$db_username="root"; 
$db_password="";

$conn=mysqli_connect($db_server_name,$db_username,$db_password)or die("<br><center>Sorry, System is under Maintenance now<br>Please come again in few minutes</center>");
mysqli_select_db($conn, $db_name);

$result = mysqli_query($conn,"select name , value from application_settings where name in ('site Title','Search engine Keywords','Search engine Description')");
while ($row = mysqli_fetch_assoc($result)) {
    $application_settings[$row["name"]] = $row["value"];
}
$main_site_name = $application_settings["site Title"];
$seo_keywords = $application_settings["Search engine Keywords"];
$seo_description = $application_settings["Search engine Description"];

if(!isset($_SESSION)){
    session_start();
}

$user_browser=$_SERVER['HTTP_USER_AGENT'];
$user_IP=$_SERVER['REMOTE_ADDR'];
if(isset($_SERVER['HTTP_REFERER'])){
    $user_referrer=$_SERVER['HTTP_REFERER'];
}
require_once('geoplugin.class.php');
$geoplugin = new geoPlugin();
$geoplugin->locate();
$userLongtitude=$geoplugin->longitude;
$userLatitude=$geoplugin->latitude;
$userCountryName=$geoplugin->countryName;
$userCountryCode=$geoplugin->countryCode;

?>

<meta name="keywords" content="<? echo $seo_keywords ?>">
<meta name="description" content="<? echo $seo_description ?>">