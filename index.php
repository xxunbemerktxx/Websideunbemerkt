<?php
if(!isset($_SESSION)) {
	session_start();
}
if(isset($_SESSION['username'])){
	$loggedin = "true";
	$loggedin_username = $_SESSION["username"];
	$loggedin_tester = $_SESSION["beta"];
	$id = $_SESSION["id"];
	$usergroup = $_SESSION["usergroup"];
	$email = $_SESSION["email"];
} else {
	$loggedin = "false";
}
require_once("config/connect.php");
require_once("config/config.php");

if(isset($_GET['p'])) {
	$p = htmlspecialchars($_GET['p']);
	
	} else {
		$p = "index";
	}

?>
<!-- BETA ABTEIL: -->
<!doctype html>

<html>
<head>
<script src="assets/js/cookiechoices.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function(event) {
    cookieChoices.showCookieConsentBar('Diese Webside Benutzt cookies!',
      'close message', 'learn more', '?p=cookie');
  });
</script>
	<script src="jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.3/Chart.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
	<link rel="stylesheet" href="/assets/css/musik.css">
	<link rel="icon" href="<?php echo($icon) ?>">
	<title><?php echo($title) ?></title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.3/Chart.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
	<meta http-equiv="Cache-Control" content="no-store" />

<script>
$(document).ready(function(){
	window.setTimeout('LOLL();',0);
    $("#fader").hide();
});
		function LOLL() {
		$("#fader").fadeIn(1000);
		
		}
</script>
</head>
<body>
	<?php include("templates/header.php"); ?>
	<div class="main-container container">
		<?php include("templates/" . $p . ".php"); ?>
	</div>
	<?php include("templates/footer.php"); ?>
</body>
</html>
