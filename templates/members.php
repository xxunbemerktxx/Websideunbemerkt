<?php 
	
	$login_statement = $pdo->prepare("SELECT * FROM user_users WHERE email = :email OR usergroup = :usergroup");
	$login_statement->bindParam("email", $email);
	$login_statement->bindParam("usergroup", $usergroup);
	$login_statement->execute();
	$user = $login_statement->fetch(); 
	$info = "Das wird in den Zuk&uuml;nftigen versionen hinzugefüght!";
	

	

		
	


if($loggedin == "true") { 
	if($loggedin_tester == "1") {?>
	<!-- BETA -->
<div class="card">
  <div class="card-header">
    Dein Profil:
  </div>
  <div class="card-block forums-list">
    <ul class="list-group list-group-flush">
      <li class="list-group-item">
        <img class="forum_img" src="" />
        Name / Nickname: <?php echo($loggedin_username); ?> 
      </li>
	  <li class="list-group-item">
        <img class="forum_img" src="" />
        Deine ID: <?php echo($id); ?> 
      </li>
      <li class="list-group-item">
        <img class="forum_img" src="" />
        E-Mail: <?php echo($email); ?> 
      </li>
	  <li class="list-group-item">
        <img class="forum_img" src="" />
        Deine Gruppe: <?php echo($usergroup); ?> 
      </li>
	  <li class="list-group-item">
        <img class="forum_img" src="" />
        Beta Zugang: AKTIV 
      </li>
	  <li class="list-group-item">

        <form class="col-md-6 offset-md-3" method="post" action="/?p=betaoff">
<!--			<div class="form-group">
				<label>Deine ID:</label>
				<input type="text" class="form-control" name="id" required value="<?php echo($id); ?>">
			</div>
			<div class="form-group">
				<label>Bitte Schreibe ja rein:</label>
				<input type="text" class="form-control" name="ja" required value="nein">
			</div> -->
			<div class="form-group">

				<label>Beta mudus Deaktivieren (Logout erforderlich!):</label>
				<input type="submit" class="btn btn-outline-primary" value="BETA MODUS DEAKTIVIEREN" />
			</div>
		</form>
      </li>
    </ul>
  </div>
</div>	
	
	<?php
	}else{?>	
	<!-- NORMAL -->
<div class="card">
  <div class="card-header">
    Dein Profil:
  </div>
  <div class="card-block forums-list">
    <ul class="list-group list-group-flush">
      <li class="list-group-item">
        <img class="forum_img" src="" />
        Name / Nickname: <?php echo($loggedin_username); ?> 
      </li>
	  <li class="list-group-item">
        <img class="forum_img" src="" />
        Deine ID: <?php echo($id); ?> 
      </li>
      <li class="list-group-item">
        <img class="forum_img" src="" />
        E-Mail: <?php echo($email); ?> 
      </li>
	  <li class="list-group-item">
        <img class="forum_img" src="" />
        Deine Gruppe: <?php echo($usergroup); ?> 
      </li>
	  <li class="list-group-item">
        <img class="forum_img" src="" />
        Beta Zugang: INAKTIV 

    </ul>
  </div>
</div>	
	
	
	
	
	
	
	
	
	<?php
} } else {
?>

<div class="card">
  <div class="card-header">
    Bitte Einloggen!
  </div>
  <div class="card-block forums-list">
    <ul class="list-group list-group-flush">
      <li class="list-group-item">
        <img class="forum_img" hight="100px" weight="100px" src="/assets/img/forum_no_picture.png" />
        Bitte logge dich ein um diese Seite zu Sehen!
      </li>
	  </a>
    </ul>
  </div>
</div>
<?php } ?>
