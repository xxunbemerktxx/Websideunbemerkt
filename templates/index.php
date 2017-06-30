<?php
if(isset($_POST['a'])) {
	if($_POST['a'] == "loggedin") {
		echo('<div class="alert alert-success" role="alert">Du bist erfolgreich angemeldet!</div>');
	}
}
if($loggedin_tester == "1") {
?>

<div class="card">
  <div class="card-header">
    Willkommen Beta Tester!
  </div>
  <div class="card-block forums-list">
    <ul class="list-group list-group-flush">
      <li class="list-group-item">
        <img class="forum_img" src="" />
        Du hast einen Betazugang bekommen! Falls du Fehler findest dann schreib mir eine <a href="mailto:xxunbemerktxx@yahoo.de">E-Mail</a>!	
      </li>
	  <li class="list-group-item">
	  <a href="?p=neu">
        <img class="forum_img" hight="100px" weight="100px" src="/assets/img/forum_no_picture.png" />
        Alle erneuerrungen die es schon gibt oder kommen!	
      </li>
	  </a>
      <li class="list-group-item">
        <img class="forum_img" src="" />
        Du m&ouml;chtest den Betamodus verlassen? <a href="?p=members"> Profil</a>	
      </li>
    </ul>
  </div>
</div>
<?php } else { ?>

<div class="card">
  <div class="card-header">
    Willkommen!
  </div>
  <div class="card-block forums-list">
    <ul class="list-group list-group-flush">
      <li class="list-group-item">
        <img class="forum_img" src="" />
        Die Webside ist am Updaten! Es kann sein Das einige dinge Fehlen!	
      </li>
	  <li class="list-group-item">
	  <a href="?p=neu">
        <img class="forum_img" hight="100px" weight="100px" src="/assets/img/forum_no_picture.png" />
        Alle erneuerrungen die es schon gibt oder kommen!	
      </li>
	  </a>
	  <a href="?p=wl">
	  <li class="list-group-item">
        <img class="forum_img" src=""/>
        Was bringt es dir dich zu registrieren?	
      </li>
	  </a>
    </ul>
  </div>
</div>
<?php } ?>