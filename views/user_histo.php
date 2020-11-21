<div>
	<?php 
	if (!isset($logged_user)) {
		echo "il n y a pas d'utilisateur connecté actuellement\n";
	}
	else {
		if($histo_bene == null)
			echo"Vous n'avez pas d'historique en tant que bénévole";
		else{
			echo"Votre historique en tant que bénévole :";
			foreach ($histo_bene as $key => $value) {
				echo "".$value;?><br><br><?php
			}
		}
		//var_dump($histo_bene); ?><br><br><?php
		if($histo_org== null)
			echo"Vous n'avez pas d'historique en tant qu'organisateur";
		else{
			echo"Votre historique en tant qu'organisateur :";
			foreach ($histo_org as $event) {?>
				<p><b><?=$event["nameEvent"]?></b></p> <?php
				
			}
		}
		//var_dump($histo_org);?><br><br><?php
		//var_dump($_SESSION);?><br><br><?php
		//var_dump($logged_user);

		}?>
</div>

<!-- <?php
	var_dump($histo_bene); ?><br><br><?php
	var_dump($histo_org);?><br><br><?php
	var_dump($_SESSION);?><br><br><?php
	var_dump($logged_user);
?> -->
