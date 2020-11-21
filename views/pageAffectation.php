<?php

if ($event[0]['deadline'] > 'CURRENT_DATE')
	echo 'La période de candidature que vous avez définie pour les bénévoles n est pas terminée. Après le' .$event[0]['deadline'] .'cette page affichera le tableau des affectations des bénévoles volontaires pour votre événement aux différentes missions de celui-ci.';

else {?>
	<tab>

	</tab>
<?php
	echo "en cliquant sur valider vous approuvez cette répartition et les benevoles seront informés par mail de leur(s) mission(s)";
 } ?>

 <a href="/index.php/organisateurs/c_validate"  class="btn btn-primary" role="button">Valider</a>
