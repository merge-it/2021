<?php
require_once('utils.php');
head();
?>

	<section class="intro">
		<header>
			<h1>MERGE-it</h1>
			<p>22 Maggio 2021 | ONLINE</p>
			<ul class="actions">
				<li><a href="#first" class="arrow scrolly"><span class="label">Next</span></a></li>
			</ul>
		</header>
		<div class="content">
			<span class="image fill" data-position="center"><img src="/images/logo.png" alt="MERGE-it" /></span>
		</div>
	</section>

	<section id="first">
		<header>
			<h2>Perché</h2>
		</header>
		<div class="content">
			<p>
				In Italia esistono tante realtà che si occupano di cultura e libertà digitali, sotto molti aspetti ed in molti modi.<br>
				Scopo di <strong>MERGE-it</strong> è riunirle insieme, per conoscersi e farsi conoscere, discutere e dibattere, confrontarsi e misurarsi.
			</p>
			<p>
				L'evento è aperto a tutti, la partecipazione gratuita, e non è richiesta registrazione.
			</p>
			<p>
				<small>
					La prima edizione si è svolta nel marzo 2018, a Torino, si è articolata in otto diverse aule tematiche e ha accolto partecipanti da tutta Italia.<br>
					La seconda edizione avrebbe dovuto svolgersi ad aprile 2020, ma è stata annullata a causa delle restrizioni imposte dalla pandemia di COVID-19.<br>
					Nel frattempo si è stabilito il <a href="http://online.merge-it.net/">MERGE-it Online</a>, una call a cadenza mensile che coinvolge diversi esponenti della community italiana e da cui è emerso il desiderio di svolgere comunque la manifestazione nel 2021, in modalità online
				</small>
			</p>
		</div>
	</section>

	<section>
		<header>
			<h2>Quando</h2>
		</header>
		<div class="content">
			<p><strong>MERGE-it</strong> 2021 si svolge nella giornata di <strong>sabato 22 maggio 2021</strong>, interamente online.</p>
			<p>Visita questa pagina nel giorno designato per trovare tutti i link ed i riferimenti per accedere allo streaming web ed alle chat contestuali con cui partecipare alla manifestazione, avanzare domande e suggerire considerazioni.</p>
		</div>
	</section>

	<section id="schedule">
		<header>
			<h2>Programma</h2>
		</header>
		<div class="content">
			<section>
				<header>
					<h3>Mattino</h3>
					<p>
						Una panoramica delle principali realtà italiane attive sui temi delle libertà digitali.
					</p>
					<p>
						Dalle ore 10:00 alle ore 13:00.
					</p>
				</header>
				<div class="content">
					<div class="table-wrapper">
						<?php

						$logos = [
							(object) [
								'image' => 'fsfe.png',
								'link' => 'https://fsfe.org/',
							],
							(object) [
								'image' => 'garr.png',
								'link' => 'https://garr.it/it/',
							],
							(object) [
								'image' => 'gfoss.png',
								'link' => 'https://gfoss.it/',
							],
							(object) [
								'image' => 'ils.png',
								'link' => 'https://www.ils.org/',
							],
							(object) [
								'image' => 'isf.png',
								'link' => 'https://www.informaticisenzafrontiere.org/',
							],
							(object) [
								'image' => 'lavagnalibera.png',
								'link' => 'http://www.wiildos.it/',
							],
							(object) [
								'image' => 'libreitalia.png',
								'link' => 'https://www.libreitalia.org/',
							],
							(object) [
								'image' => 'mozillaitalia.png',
								'link' => 'https://www.mozillaitalia.org/',
							],
							(object) [
								'image' => 'ondata.png',
								'link' => 'https://ondata.it/',
							],
							(object) [
								'image' => 'osm.png',
								'link' => 'https://wiki.openstreetmap.org/wiki/Italy',
							],
							(object) [
								'image' => 'pythonitalia.png',
								'link' => 'https://associazione.python.it/',
							],
							(object) [
								'image' => 'scalaitaly.png',
								'link' => 'https://scala-italy.it/',
							],
							(object) [
								'image' => 'rustitalia.png',
								'link' => 'https://community.mozilla.org/es/groups/rust-italia/',
							],
							(object) [
								'image' => 'teamdigitale.png',
								'link' => 'https://developers.italia.it/',
							],
							(object) [
								'image' => 'wikimedia.png',
								'link' => 'https://www.wikimedia.it/',
							],
						];

						shuffle($logos);

						?>
						<div class="row communities">
							<?php foreach($logos as $meta): ?>
								<div class="col-2">
									<a href="<?php echo $meta->link ?>">
										<img class="img-responsive" src="/images/loghi/<?php echo $meta->image ?>">
									</a>
								</div>
							<?php endforeach ?>
						</div>
					</div>
				</div>
			</section>

			<section>
				<header>
					<h3>Pomeriggio</h3>
					<p>
						Tavole rotonde tematiche, per mettere a confronto i diversi punti di vista e fare il punto della situazione in Italia.
					</p>
					<p>
						Dalle ore 14:30 alle ore 18:00.
					</p>
				</header>
				<div class="content">
					<div class="table-wrapper">
                        <h3 style="width:100%;display:block;text-align:center;">Ogni cambio di sessione ha 15 minuti di intervallo.</h3>
						<table class="alt schedule-table">
							<tr class="half-day">
								<td class="pending" width="33%">
									<strong>1A: La didattica in DAD dalla formazione docenti ai problemi tecnici</strong><br>
									LibreItalia, Lavagna Libera, GARR, ISF
								</td>
								<td class="pending" width="33%">
									<strong>2A: Sviluppo con l'open source all'interno dell'azienda e nel mondo accademico</strong><br>
									GFOSS.it, Python Italia, Rust Italia, ILS, Scala Italy: 
								</td>
								<td class="pending" width="33%">
									<strong>3A: Open Data, licenze e formati, dataset</strong><br>
									Wikimedia, OpenStreetMap, onData, Team Digitale, LibreItalia: Open Data, licenze e formati, dataset
								</td>
							</tr>
							<tr class="half-day">
								<td class="pending" width="33%">
									<strong>1B: Open Source nella Pubblica Amministrazione</strong><br>
									Libreitalia, Team Digitale, GARR, FSFE
								</td>
								<td class="pending" width="33%">
									<strong>2B: Coinvolgimento sociale nel mondo Open Source</strong><br>
									Mozilla Italia, ISF, OpenStreetMap, Lavagna Libera
								</td>
								<td class="pending" width="33%">
									<strong>3B: Community management, struttura a livello nazionale/locale</strong><br>
									Wikimedia, Mozilla Italia, Python Italia, ILS, Rust Italia
								</td>
							</tr>
						</table>
					</div>
					<h3 style="width:100%;display:block;text-align:center;">Presentazione di chiusura con i numeri della giornata.</h3>
				</div>
			</section>
		</div>
	</section>

	<?php contacts() ?>

<?php footer() ?>
