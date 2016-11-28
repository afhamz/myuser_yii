<?php
/* @var $this AdminController */
/* @var $data Admin */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('admin_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->admin_id), array('view', 'id'=>$data->admin_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('admin_user')); ?>:</b>
	<?php echo CHtml::encode($data->admin_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('admin_pass')); ?>:</b>
	<?php echo CHtml::encode($data->admin_pass); ?>
	<br />


</div>