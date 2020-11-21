
<div>
	<?php 
	if (count($events) == 0) {
		echo "il n y a pas d'événement actuellement\n";
	}
	else {
		echo"Pour découvrir nos événements, cliquez sur un lien\n";

		foreach ($events as $event) {?>
			<p><b><?=$event['nameEvent']?></b><br>le :<b><?=$event['dateEvent']?></b><br>organisé par:<b><?=$event['loginUser']?></b><br>descriptif de l evenement : <b><?=$event['descriptionEvent']?></b><br>
				<b><a href='<?=$event['website']?>'><?=$event['website']?></a></b></p>
		<?php } 
	}?>
</div>
<div>
	<?php
		if (!isset($_SESSION['logged_user'])) {
		echo "Pour proposer votre aider ou créer un événement, veuillez vous connecter ou créer un compte.\n";
		}?>
</div>





