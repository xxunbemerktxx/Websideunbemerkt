<?php if($loggedin == "true") {  ?>

<div id="fader" class="card">
  <div class="card-header">
    Minecraft Plugins
  </div>
  <div class="card-block forums-list">
    <ul class="list-group list-group-flush">
      <li class="list-group-item">
        <img class="forum_img" src="/assets/img/mcgrass.png" />
        <a href="?p=unbpack">Unbemerkt Pack</a>
      </li>
    </ul>
  </div>
</div>
<?php } else { ?>
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
