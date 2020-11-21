<?php
//var_dump($logged_user);
echo 'Bonjour '.$logged_user->firstname .' '.$logged_user->lastname .', vous êtes connecté(e) !';
?>
<br>
<!--  <form role="form" action="/index.php/users/c_user_show" method="post">
	<br></br><input type="submit" value="mes informations personnelles"/>
</form> -->
<a href="/index.php/users/c_user_show/<?=$logged_user->loginUser?>"  class="btn btn-primary" role="button">Mes informations personnelles</a>
<br></br>
<!-- <a href="/index.php/users/c_documents_show/<?=$user_is_logged?>"  class="btn btn-primary" role="button">Mes documents</a>
<br></br>-->
<a href="/index.php/users/c_histo_show/<?=$logged_user->loginUser?>"  class="btn btn-primary" role="button">Mon historique</a>
<br></br>
<!--
<a href="/index.php/users/c_user_show/<?=$user_is_logged?>"  class="btn btn-primary" role="button">Participer à un événement</a>
<br></br>-->
<a href="/index.php/organisateurs/c_event_list/<?=$logged_user->loginUser?>"  class="btn btn-primary" role="button">Créer ou modifier un événement</a>

<br></br>
<a href="/index.php/benevoles/c_candidate_create/<?=$logged_user->loginUser?>"  class="btn btn-primary" role="button">Participer à un événement</a>


<!--
<br></br><input type="submit" value="mes documents"/>-->


