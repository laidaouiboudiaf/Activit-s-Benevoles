
<div>
	<strong>Nouvel événement</strong>
	<br><br>
	<!-- <p>Duplication d'un événement existant</p>
		<p><b>oui :</b></p>

		<form method="post" action="/index.php/organisateurs/c_event_duplicate/<?=$nameE["idEvent"]?>">
			<select name= pastsEvents>
				<?php foreach ($pastsevents as $nameE) {?>
				<option value = "nomE"><?=$nameE["nameEvent"]?></option>
				<?php }?>
			</select>
			<input type="submit" value="valider"/>
		</form>
		<br>
		<p><b>non :</b></p>-->
		<form method="post" action="/index.php/organisateurs/c_event_createNewName/<?=$logged_user->loginUser?>">
			<input type="text" name="nameEvent" placeholder="Nom" />
			<input type="submit" value="valider"/>
		</form>

</div>
<br><br>
<div>
	<strong>Modification d'un événement en cours de création</strong>
	<br><br>
	<form method="post" action="/index.php/organisateurs/c_event_change/<?=$nameE["idEvent"]?>">
			<select name= futursevents>
				<?php foreach ($futursevents as $nameE) {?>
				<option value = "nomE"><?=$nameE["nameEvent"]?></option>
				<?php }?>
			</select>
			<input type="submit" value="valider"/>
		</form>
	
</div>