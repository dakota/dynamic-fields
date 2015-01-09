<?php
$key = isset($key) ? $key : '<%= key %>';
?>
<tr>
	<td>
		<?php echo $this->Form->input("Grade.{$key}.id") ?>
		<?php echo $this->Form->input("Grade.{$key}.subject", array('label' => false)); ?>
	</td>	
	<td>
		<?php echo $this->Form->input("Grade.{$key}.grade", array(
			'label' => false,
			'options' => array(
				'A+',
				'A',
				'B+',
				'B',
				'C+',
				'C',
				'D',
				'E',
				'F'
			),
			'empty' => '-- Select grade --'
		)); ?>
	</td>
	<td class="actions">
		<a href="#" class="remove">Remove grade</a>
	</td>
</tr>