<div>
	<?php 
	if (!isset($logged_user)) {
		echo "il n y a pas d'utilisateur connecté actuellement\n";
	}
	else {
		echo"Vos informations :\n";?><br><?php
		//var_dump($logged_user);?><br><?php
		// echo"\n";?><br><?php
		// var_dump($_SESSION);?><br><?php
		// echo"\n";?><br><?php
		{?>
			<p>
				Pseudo : <b><?=$logged_user->loginUser?></b><br>
				Prénom : <b><?=$logged_user->firstname?></b><br>
				Nom : <b><?=$logged_user->lastname?></b><br>
				Date de naissance : <b><?=$logged_user->birth?></b><br>
				Adresse mail : <b><?=$logged_user->mailUser?></b><br>
				Numéro de téléphone : <b><?=$logged_user->phoneUser?></b><br>
			</p>
			<a href="/index.php/users/c_new_form/<?=$logged_user->loginUser?>" class="btn btn-primary" role="button">Modifier mes informations personnelles</a>
		<?php } 
	}?>
</div>
