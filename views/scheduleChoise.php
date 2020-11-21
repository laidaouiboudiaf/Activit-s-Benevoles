<?php
	echo "Vous proposez votre aide pour l'organisation de l'événement :" .$nameEvent; ?><br><br><?php
	echo "Choisissez vos disponibilités ";

	foreach ($schedules as $schedule) {?>
		<form method="post" action="/index.php/benevoles/c_dispo_add"><br>
			<input type="checkbox" name ="schedule[]" id = "cased" value = "<?=$schedule['idSchedule']?>"/><label for ="cased" ><?=$schedule['hDeb']?> h à <?=$schedule['hFin']?> h</label><br/>
			<?php } ?>
			<br>
			<input type="submit" value="Suivant"/>
			<br>
		</form>



