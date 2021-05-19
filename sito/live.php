<?php
require_once('utils.php');
head();

$session_id = $_GET['room'] ?? 0;
$unified = false;
$hour = date('H');

if ($unified) {
	$chat_url = 'general';
	$player_url = 'https://garr.tv/s/609fe2ee8780485dbd721f46';

	if ($hour < 14) {
		$title = 'Presentazioni';
	}
	else {
		$title = 'Saluti';
	}
}
else {
	switch($session_id) {
		case 1:
			$chat_url = 'merge-it-1a';
			$player_url = 'https://garr.tv/s/609fe2ee8780485dbd721f46';

			if ($hour >= 16) {
                $chat_url = 'merge-it-1b';
				$title = "Open Source nella Pubblica Amministrazione";
			}
			else {
				$title = "La didattica in DAD dalla formazione docenti ai problemi tecnici";
			}

			break;

		case 2:
			$chat_url = 'merge-it-2a';
			$player_url = 'https://garr.tv/s/609fe3378780481708721f47';

			if ($hour >= 16) {
                $chat_url = 'merge-it-2b';
				$title = "Coinvolgimento sociale nel mondo Open Source";
			}
			else {
				$title = "Sviluppo con l'open source all'interno dell'azienda e nel mondo accademico";
			}

			break;

		case 3:
			$chat_url = 'merge-it-3a';
			$player_url = 'https://garr.tv/s/609fe34f878048396d721f48';

			if ($hour >= 16) {
                $chat_url = 'merge-it-3b';
				$title = "Community management, struttura a livello nazionale/locale";
			}
			else {
				$title = "Open Data, licenze e formati, dataset";
			}

			break;
	}
}

?>
<script>
    window.opening_hour = new Date().getHours();
    window.opening_minute = new Date().getMinutes();
    window.opening = parseInt(window.opening_hour + '' + window.opening_minute);
    // Ricarica se la pagina in base all'apertura della stessa e dell'orario attuale
    setInterval(function(){
            var nowDate = new Date();
            var now = parseInt(nowDate.getHours() + '' + nowDate.getMinutes());
            if (
                window.opening <= 1430 && now >= 1430 && now <= 1600 || window.opening <= 1600 && now >= 1600 && now <= 1800 || window.opening <= 1815 && now >= 1830 && now <= 1831
                ) {
                window.location.reload(false);
            }
    }, 60000);
</script>

<div class="live_box">
	<div class="row mb-5">
	    <div class="col-10">
		<h3>MERGE-it 2021</h3>
		<h2><?php echo $title ?></h2>
	    </div>
	    <div class="col-2">
            <a href="index.php" class="btn btn-mit btn-info" id="back-to-schedule">Torna al programma completo</a>
            <a href="live.php?room=<?php echo $_GET['room'] ?>" class="btn btn-mit btn-info">Passa alla prossima sessione</a>
	    </div>
	</div>


	<div class="row">
		<div class="col-4">
			<iframe id="embedded-chat" src="https://chat.linux.it/channel/<?php echo $chat_url ?>?layout=embedded" width="100%" height="100%" style="min-height:400px"></iframe>
		</div>
		<div class="col-8">
			<div style="position:relative; padding-top:56.25%;">
				<iframe src="<?php echo $player_url ?>" style="position:absolute; top:0; left:0; width:99%; height:99%;" frameborder="0" allow="autoplay; fullscreen;" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
			</div>
		</div>
	</div>
</div>

<?php footer() ?>

