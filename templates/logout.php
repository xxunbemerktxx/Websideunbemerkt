<?php
if(isset($_SESSION)){
	session_destroy();
	
}
?>
<meta http-equiv="refresh" content="1; URL=/">
<div class="card">
  <div class="card-header">
    Logged out
  </div>
  <div class="card-block forums-list">
    <ul class="list-group list-group-flush">
      <li class="list-group-item">
        <img class="forum_img" src="" />
        Du bist nun Ausgeloggt!	
      </li>
    </ul>
  </div>
</div>

