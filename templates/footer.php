<footer style="margin-top: 20px;" class="footer">
  <div class="container">
    <span class="text-muted" style="font-size: 11px">Ihr Vermisst was? Dann Schreibt mir doch einfach eine <a href="mailto:xxunbemerktxx.
	@yahoo.com">Mail</a> Mit der Beschreibung was Fehlt <?php if($loggedin != "true") { ?> &nbsp;&nbsp;Werbung:&nbsp;&nbsp; <a href="https://bitminer.io/2298428" target="_blank"><img src="https://bitminer.io/s/bitminer_4.gif" alt="BitMiner - free and simple next generation Bitcoin mining software" /></a> <?php } else {    } ?></span>
	
  </div>
  <script>
  $(document).ready(function() {
		var audioElement = document.createElement('audio');
		audioElement.setAttribute('src', 'http://stream01.iloveradio.de/iloveradio1.mp3'); // Hier Musik Link z.b.  http://mp3.planetradio.de/planetradio/hqlivestream.mp3 http://stream01.iloveradio.de/iloveradio1.mp3 http://stream01.iloveradio.de/iloveradio8.mp3
		audioElement.load();
		audioElement.volume = 0.2;
		var volume = 0.2;
		$('#pause').hide();
		$('#volume_up').hide();
		$('#volume_down').hide();
		$('#note2').hide();
		$('#note').show();
	
		$.get();
	
		if(document.cookie.includes("autoplay=true")) {
			$('#note').hide();
			$('#pause').show();
			$('#volume_up').fadeIn(1000);
			$('#volume_down').fadeIn(1000);
			audioElement.play();
		}
	
		$('#note').click(function() {
			document.cookie = "autoplay=true";
			$('#note').hide();
			$('#pause').show();
			$('#volume_up').fadeIn(1000);
			$('#volume_down').fadeIn(1000);
			audioElement.play();
		});
		$('#pause').click(function() {
			document.cookie = "autoplay=false";
			$('#note').show();
			$('#pause').hide();
			$('#volume_up').fadeOut(1000);
			$('#volume_down').fadeOut(1000);
			audioElement.pause();
		});
		
		$('#volume_up').click(function() {
			if(volume < 0.9) {
				volume = volume + 0.1;
				audioElement.volume = volume;
			}
		});
		$('#volume_down').click(function() {
			if(volume > 0.1) {
				volume = volume - 0.1;
				audioElement.volume = volume;
			}
		});



	});
</script>
</footer>