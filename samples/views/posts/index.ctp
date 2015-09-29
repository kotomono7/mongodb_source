<?php echo $session->flash(); ?>
<br>
<span class="actions"><?php echo $html->link('Add New Post', 'add'); ?></span>
<br><br>
<table>
	<tr>
		<th>ID</th>
		<th>Title</th>
		<th>Content</th>
		<th>Hoge</th>
		<th>Actions</th>
	</tr>
<?php foreach($results as $result): ?>
	<tr>
		<td><?php echo $result['Post']['_id']; ?></td>
		<td><?php echo $result['Post']['title']; ?></td>
		<td><?php echo $result['Post']['body']; ?></td>
		<td><?php echo $result['Post']['hoge']; ?></td>
		<td class="actions"><?php echo $html->link('Edit','edit/'.$result['Post']['_id']); ?> <?php echo $html->link('Delete','delete/'.$result['Post']['_id']); ?></td>
	</tr>
<?php endforeach; ?>
</table>
