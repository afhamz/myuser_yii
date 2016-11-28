<?php
/* @var $this MemberController */
/* @var $data Member */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('member_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->member_id), array('view', 'id'=>$data->member_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('member_user')); ?>:</b>
	<?php echo CHtml::encode($data->member_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('member_pass')); ?>:</b>
	<?php echo CHtml::encode($data->member_pass); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('member_nama')); ?>:</b>
	<?php echo CHtml::encode($data->member_nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('member_alamat')); ?>:</b>
	<?php echo CHtml::encode($data->member_alamat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('member_ttl')); ?>:</b>
	<?php echo CHtml::encode($data->member_ttl); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('member_email')); ?>:</b>
	<?php echo CHtml::encode($data->member_email); ?>
	<br />


</div>