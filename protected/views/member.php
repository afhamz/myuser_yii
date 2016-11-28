<?php
/* @var $this MemberController */
/* @var $model Member */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'member-member-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'member_user'); ?>
		<?php echo $form->textField($model,'member_user'); ?>
		<?php echo $form->error($model,'member_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'member_pass'); ?>
		<?php echo $form->textField($model,'member_pass'); ?>
		<?php echo $form->error($model,'member_pass'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'member_nama'); ?>
		<?php echo $form->textField($model,'member_nama'); ?>
		<?php echo $form->error($model,'member_nama'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'member_alamat'); ?>
		<?php echo $form->textField($model,'member_alamat'); ?>
		<?php echo $form->error($model,'member_alamat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'member_ttl'); ?>
		<?php echo $form->textField($model,'member_ttl'); ?>
		<?php echo $form->error($model,'member_ttl'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'member_email'); ?>
		<?php echo $form->textField($model,'member_email'); ?>
		<?php echo $form->error($model,'member_email'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->