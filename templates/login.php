<?php
if(isset($_POST['username'], $_POST['password'])){
	$username = htmlspecialchars($_POST['username']);
	$password = password_hash(htmlspecialchars($_POST['password']), PASSWORD_DEFAULT);
	
	$login_statement = $pdo->prepare("SELECT * FROM user_users WHERE username = :username OR email = :username AND beta='$beta' AND id='$id' AND usergroup='$usergroup' AND email='$email'");
	$login_statement->bindParam("username", $username);
	$login_statement->execute();
	$user = $login_statement->fetch();
	
	if($user != null){
		if(isset($_SESSION)) {
			session_start();
		}
		$_SESSION['username'] = $user['username'];
		$_SESSION['beta'] = $user['beta'];
		$_SESSION['id'] = $user['id'];
		$_SESSION['usergroup'] = $user['usergroup'];
		$_SESSION['email'] = $user['email'];

		echo('<meta http-equiv="refresh" content="1; URL=/"><div class="alert alert-success" role="alert">Du bist nun Eingeloggt!</div>');
	} else {
		echo('<div class="alert alert-danger" role="alert">Benutzername oder Passwort ist falsch!</div>');
	}
	
}
if($loggedin == "false") {
?>
<form class="col-md-6 offset-md-3" method="post" action="/?p=login">
  <div class="form-group">
    <label>Benutzername oder Mail-Adresse</label>
    <input type="text" class="form-control" name="username">
  </div>
  <div class="form-group">
    <label>Passwort</label>
    <input type="password" class="form-control" name="password">
  </div>
  <div class="form-group">
    <input type="submit" class="btn btn-outline-primary" value="Anmelden" />
  </div>
</form>
<?php } else { ?>
<div class="card">
  <div class="card-header">
    Du bist schon Eingeloggt!
  </div>
  <div class="card-block forums-list">
    <ul class="list-group list-group-flush">
      <li class="list-group-item">
        <img class="forum_img" hight="100px" weight="100px" src="/assets/img/forum_no_picture.png" />
        Btte logge dich zuerst aus um dich wieder einzuloggen!
      </li>
	  </a>
    </ul>
  </div>
</div>
<?php } ?>
