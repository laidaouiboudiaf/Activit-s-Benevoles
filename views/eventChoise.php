<?php
	echo " Choisissez l'événement pour lequel vous souhaitez proposer votre aide";

	foreach ($futursEvents as $event) {?> 
		<form method="post" action="/index.php/benevoles/c_skill_select"><br>
			<input type="checkbox" name ="nameEvent" id = "cased" value= "<?=$event['nameEvent']?>"/><label for ="cased" ><?=$event['nameEvent']?></b> le <b><?=$event['dateEvent']?></label><br/>
			<?php } ?>
			<br>
			<input type="submit" value="Suivant"/>
			<br>
		</form>

	<!--
	<form method="post" action="/index.php/benevoles/c_skill_select">
		<select name= futursEvents>
			<?php foreach ($futursEvents as $event) {?>
			<option value = "nameEvent"><?=$nameE["nameEvent"]?>le<?=$event['dateEvent']?></option>
			<?php }?>
		</select>
		<input type="submit" value="suivant"/>
	</form>
-->
