<?php
if(isset ($event))
echo " Vous êtes en train de construire l'événement :" .$event[0]['nameEvent'];
?>
<br>
<br>
<br>

<?php echo"Pour ajouter des créneaux utilisez le formulaire ci dessous";?><br>
	<form method="post" action="/index.php/organisateurs/c_schedule_add/<?=$event[0]['nameEvent']?>">
		<input type="text" name="hDeb" placeholder="heure de début" />
		<input type="text" name="hFin" placeholder="heure de fin" />
		<input type="submit" value="ajouter le créneau"/>
	</form>

<br>
<?php echo"Pour ajouter des compétences attendues utilisez le formulaire ci dessous";?><br>
	<form method="post" action="/index.php/organisateurs/c_skill_add/<?=$event[0]['nameEvent']?>">
		<input type="text" name="skill" placeholder="compétences" />
		<input type="submit" value="ajouter la compétence"/>
	</form>

<br>

<?php foreach ($listTasks as $task) {

		echo 'Tâche ' ?><b><?=$task[1]?></b><?php echo ' : indiquer pour chaque créneau le nombres de benevoles nécessaires';?>
		<table border=1>
		<tr><td align="center" bgcolor="#E6E6E6"><b>Créneau</b></td>
		<?php foreach ($skills as $skill) {?>
		  <td align="center" bgcolor="#E6E6E6"><?=$skill['nameSkill']?></b></td>
		<?php }?>
		</tr>
		<?php foreach ($schedules as $schedule) {?>
			<tr>
 			<form method="post" action="/index.php/organisateurs/c_missions_add/<?=$event[0]['nameEvent']?>"><br>
 				<td width="140">
				<b>de <?=$schedule['hDeb']?> h à <?=$schedule['hFin']?>h</b>
                </td>
				<?php 
				if(isset($skills)){
					foreach ($skills as $skill) {?>
					<td>
					<input type="text" name="Missions[<?=$task[0]?>][<?=$skill['nameSkill']?>][<?=$schedule['idSchedule']?>][]" placeholder="0"/>
					</td>
					<?php }
				}?>
			</tr>
		<?php }?></table><br><br>
<?php }?>
				<input type="submit" value="Suivant"/><br><br>
			</form><br>
