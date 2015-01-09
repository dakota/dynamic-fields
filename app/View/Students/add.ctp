<div class="students form">
<?php echo $this->Form->create('Student', array('novalidate'=> true)); ?>
	<fieldset>
		<legend><?php echo __('Add Student'); ?></legend>
	<?php
		echo $this->Form->input('name');
	?>
	</fieldset>
	<fieldset>
		<legend><?php echo __('Grades');?></legend>
		<table id="grade-table">
			<thead>
				<tr>
					<th>Subject</th>
					<th>Grade acheived</th>
					<th>&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				<?php if (!empty($this->request->data['Grade'])) :?>
					<?php for ($key = 0; $key < count($this->request->data['Grade']); $key++) :?>
						<?php echo $this->element('grades', array('key' => $key));?>
					<?php endfor;?>
				<?php endif;?>
			</tbody>
			<tfoot>
				<tr>
					<td colspan="2"></td>
					<td class="actions">
						<a href="#" class="add">Add grade</a>
					</td>
				</tr>
			</tfoot>
		</table>
	</fieldset>
	<script id="grade-template" type="text/x-underscore-template">
		<?php echo $this->element('grades');?>
	</script>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Students'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Grades'), array('controller' => 'grades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grade'), array('controller' => 'grades', 'action' => 'add')); ?> </li>
	</ul>
</div>
<script>
$(document).ready(function() {
	var
		gradeTable = $('#grade-table'),
		gradeBody = gradeTable.find('tbody'),
		numberRows = gradeTable.find('tbody > tr').length,
		gradeTemplate = _.template($('#grade-template').remove().text());

	gradeTable
		.on('click', 'a.add', function(e) {
			e.preventDefault();

			$(gradeTemplate({key: numberRows++}))
				.hide()
				.appendTo(gradeBody)
				.fadeIn('fast');
		})
		.on('click', 'a.remove', function(e) {
				e.preventDefault();

			$(this)
				.closest('tr')
				.fadeOut('fast', function() {
					$(this).remove();
				});
		});

		if (numberRows === 0) {
			gradeTable.find('a.add').click();
		}
});
</script>