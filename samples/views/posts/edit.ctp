<div class="posts form">
<?php echo $form->create('Post' , array( 'type' => 'post' ));?>
	<fieldset>
 		<legend><?php __('Edit Post');?></legend>
	<?php
		echo $form->hidden('_id');
		echo $form->input('title');
		echo $form->input('body');
		echo $form->input('hoge');
		echo $form->submit('Submit');
	?>
	</fieldset>
<?php echo $form->end(); ?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Posts', true), array('action'=>'index'));?></li>
	</ul>
</div>
