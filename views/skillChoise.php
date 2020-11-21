<?php
	echo "Vous proposez votre aide pour l'organisation de l'événement :" .$nameEvent; ?><br><br><?php
	echo "Choisissez vos compétences ";

	foreach ($skills as $skill) 
	{?>

		<form method="post" action="/index.php/benevoles/c_schedule_select/<?=$nameEvent?>"><br>
			<input type="checkbox" name ="skill[]" id = "cased" value = "<?=$skill['nameSkill']?>"/><label for ="cased" ><?=$skill['nameSkill']?></label><br/>
			<?php } ?>
			<br>
			<input type="submit" value="Suivant"/>
			<br>
		</form>



