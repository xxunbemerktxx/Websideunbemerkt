<?php if($loggedin == "true") {  ?>
<div id="fader" class="card">
  <div class="card-header">
    Minecraft Texturepack "Unbemerkt"
  </div>
  <div class="card-block forums-list">
    <ul class="list-group list-group-flush">
      <li class="list-group-item">
        <img class="forum_img" src="/assets/img/mcgrass.png" />
        Unbemerkt Pack:
      	</li>
	<li class="list-group-item">
        <img class="forum_img" src="" />
        	Bilder:
      	</li>
	<li class="list-group-item">
        <img class="forum_img" src="" />
        	Leider noch keine Bilder vorhanden!
      	</li>
	  <li class="list-group-item">
	  <img class="forum_img" src="" />
        Video:
	 </li>
	 <li class="list-group-item">
		<p><iframe width="360" height="215" src="http://www.xxunbemerktxx.bplaced.net/Neuste_viedeos/nv" scrolling="no" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></p><br>
      </li>
		<li class="list-group-item">
       <img class="forum_img" src="" />
        Download:
      </li>
	        <?php
                                    $ordner = "downloads/unbpack";
                                    $alledateien = scandir($ordner);

                                    foreach ($alledateien as $datei) {
                                        $dateiinfo = pathinfo($ordner."/".$datei);
                                        $size = ceil(filesize($ordner."/".$datei)/1024);
                                        $dwp = "<img src=\"http://www.xxunbemerktxx.bplaced.net/assets/img/dl.png\" width=\"30px\" height=\"30px\">";
                                        if ($datei != "." && $datei != ".."  && $datei != "_notes" && $bildinfo['basename'] != "Thumbs.db") {

                                            //Bildtypen sammeln
                                            $bildtypen= array("jpg", "jpeg", "gif", "png");
                                            //Dateien nach Typ prüfen, in dem Fall nach Endungen für Bilder filtern
                                            if(in_array($dateiinfo['extension'],$bildtypen))
                                            {
                                                ?>
                                                <div class="galerie">
                                                    <a href="<?php echo $dateiinfo['dirname']."/".$dateiinfo['basename'];?>">
                                                        <img src="<?php echo $dateiinfo['dirname']."/".$dateiinfo['basename'];?>" width="140" alt="Vorschau" /></a>
                                                    <span><?php echo $dateiinfo['filename']; ?> (<?php echo $size ; ?>kb)</span>
                                                </div>
                                                <?php
                                                // wenn keine Bildeindung dann normale Liste für Dateien ausgeben
                                            } else { ?>
                                                <div class="file">
                                                    <a style="margin-right: 10px; margin-left: 20px;" href="<?php echo $dateiinfo['dirname']."/".$dateiinfo['basename'];?>">&raquo <?php echo $dateiinfo['filename']; ?></a> (<?php echo $dateiinfo['extension']; ?> | <?php echo $size ; ?>kb) <?php echo $dwp ?>
                                                </div>
                                            <?php } ?>
                                            <?php
                                        };
                                    };
             ?>
    </ul>
	<a href="?p=mcplugins">
	<li class="list-group-item">
      <img class="forum_img" src="" />
      Zur&uuml;ck
     </li>
	 </a>
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
