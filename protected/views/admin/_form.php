<?php
/* @var $this AdminController */
/* @var $model Admin */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'admin-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'admin_user'); ?>
		<?php echo $form->textField($model,'admin_user',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'admin_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'admin_pass'); ?>
		<?php echo $form->textField($model,'admin_pass',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'admin_pass'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->