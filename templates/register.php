<?php
$username="";
$email="";
if(isset($_POST['username'], $_POST['email'], $_POST['password'], $_POST['password_repeat'], $_POST['mcname'])){
	if($_POST['password'] == $_POST['password_repeat']) {
		$register_statement = $pdo->prepare("INSERT INTO user_users (username, password, email, usergroup, beta, mcname) VALUES (:username, :password, :email, 'guest', '0', :mcname);");
		
		$username = htmlspecialchars($_POST['username']);
		$email = htmlspecialchars($_POST['email']);
		$mcname = htmlspecialchars($_POST['mcname']);
		$password = password_hash(htmlspecialchars($_POST['password']), PASSWORD_DEFAULT);
		
		
		$login_statement = $pdo->prepare("SELECT * FROM user_users WHERE username = :username OR email = :email");
		$login_statement->bindParam("username", $username);
		$login_statement->bindParam("email", $email);
		$login_statement->execute();
		$user = $login_statement->fetch();
	
	if($user == null){
		$register_statement->bindParam("username", $username);
		$register_statement->bindParam("password", $password);
		$register_statement->bindParam("email", $email);
		$register_statement->bindParam("mcname", $mcname);
		
		$register_statement->execute();
		echo('<div class="alert alert-success" role="alert">Dein Account wurde Erstellt!</div>');
	}else {
		echo('<div class="Benutzername, Email oder dein Mc Name wird bereits verwendet!</div>');
	}
		
		

		
	} else {
		$username = $_POST['username'];
		$email = $_POST['email'];
		echo('<div class="alert alert-danger" role="alert">Die Passwörter stimmen nicht überein!</div>');
	}
}
if($loggedin == "false") {
?>
<form class="col-md-6 offset-md-3" method="post" action="/?p=register">
  <div class="form-group">
    <label>Benutzername</label>
    <input type="text" class="form-control" name="username" required value="<?php echo($username); ?>">
  </div>
  <div class="form-group">
    <label>E-Mail Adresse</label>
    <input type="email" class="form-control" name="email" required value="<?php echo($email); ?>">
  </div>
  <div class="form-group">
    <label>Mc Name</label>
    <input type="text" class="form-control" name="mcname" required value="<?php echo($mcname); ?>">
  </div>
  <div class="form-group">
    <label>Passwort</label>
    <input type="password" class="form-control" name="password" required>
  </div>
  <div class="form-group">
    <label>Passwort wiederholen</label>
    <input type="password" class="form-control" name="password_repeat" required>
  </div>
  <div class="form-group">
    <input type="submit" class="btn btn-outline-primary" value="Registrieren" />
  </div>
</form>
<?php } else { ?>
<div class="card">
  <div class="card-header">
    Du hast schon einen Account!
  </div>
  <div class="card-block forums-list">
    <ul class="list-group list-group-flush">
      <li class="list-group-item">
        <img class="forum_img" hight="100px" weight="100px" src="/assets/img/forum_no_picture.png" />
        Du hast doch schon einen Account warumm brauchst du denn einen 2. Account?
      </li>
	  </a>
    </ul>
  </div>
</div>
<?php } ?>
