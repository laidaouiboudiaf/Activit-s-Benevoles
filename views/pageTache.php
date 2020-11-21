<?php
if(isset ($event))
echo " vous êtes en train de construire l'événement :" .$event[0]['nameEvent'];
?>
<br>				

<br>
<?php
echo "Pour chacune des taches listées, si vous souhaitez l'ajouter à votre événement, remplissez les noms et coordonnées du responsable de tache";
?>
<br>				
<br>
<form method="post" action="/index.php/organisateurs/c_composition_add">
	<?php foreach ($tasks as $task) {?>
		<input type="text" name="idTask[]" value="<?=$task['idTask']?>"/>
		<input type="text" name="nameTask[]" value="<?=$task['nameTask']?>"/>
		<input type="hidden" name="idEvent[]" value ="<?=$event[0]['idEvent']?>" />
		<input type="text" name="nameEvent[]" value ="<?=$event[0]['nameEvent']?>" />
		<input type="text" name="nameResp[]" placeholder="nom du responsable" />
		<input type="text" name="phoneResp[]" placeholder="numero de telephone du responsable" />
	<br>
<?php }?>
	<br>
		<input type="submit" value="ajouter les tâches renseignées à mon evenement"/>
	</form>
<br>				
<br>
<?php
echo "Si vous souhaitez ajouter une tache qui n 'est pas listée merci de remplir les champs suivants";
?>
<br>
<form method="post" action="/index.php/organisateurs/c_task_add/<?=$event[0]['nameEvent']?>">
	<input type="text" name="nameTask" placeholder="nom de la tache" />
	<input type="submit" value="ajouter tâche"/>
</form>
<br>





	<a href="/index.php/organisateurs/c_composition_delete"  class="btn btn-primary" role="button">Supprimer ces tâches de mon projet</a>