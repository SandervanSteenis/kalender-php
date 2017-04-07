<div class="container">
	<table border="1">
		<tr>
			<th>#</th>
			<th>person</th>
			<th>day</th>
			<th>month</th>
			<th>year</th>
			<th colspan="2">Actie</th>
		</tr>
		
		<?php foreach ($birthdays as $birthday) { ?>
		<tr>
			<td><?= $birthday['id']; ?></td>
			<td><?= $birthday['person']; ?></td>
			<td><?= $birthday['day']; ?></td>
			<td><?= $birthday['month']; ?></td>
			<td><?= $birthday['year']; ?></td>
			<td><a href="<?= URL ?>birthday/edit/<?= $birthday['id'] ?>">Edit</a></td>
			<td><a href="<?= URL ?>birthday/delete/<?= $birthday['id'] ?>">Delete</a></td>
		</tr>
		<?php } ?>

	</table>
	<a href="<?= URL ?>birthday/create">Toevoegen</a>
</div>