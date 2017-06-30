<?php 
	
	$login_statement = $pdo->prepare("SELECT * FROM user_users WHERE email = :email OR usergroup = :usergroup");
	$login_statement->bindParam("email", $email);
	$login_statement->bindParam("usergroup", $usergroup);
	$login_statement->execute();
	$user = $login_statement->fetch(); 
	$info = "Das wird in den Zuk&uuml;nftigen versionen hinzugefüght!";
	

	
		$register_statement = $pdo->prepare("UPDATE  `xxunbemerktxx`.`user_users` SET  `beta` =  '0' WHERE  `user_users`.`id` = :id;");
		
	
		$register_statement->bindParam("id", $id);

		
		$register_statement->execute();

if($loggedin == "true") { ?>
<meta http-equiv="refresh" content="1; URL=?p=logout">
<div class="card">
  <div class="card-header">
    Betamodus:
  </div>
  <div class="card-block forums-list">
    <ul class="list-group list-group-flush">
      <li class="list-group-item">
        <img class="forum_img" src="" />
        Der Beta modus ist nun Deaktiviert! 
      </li>

      </li>
    </ul>
  </div>
</div>	
	<?php 
} else {
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
