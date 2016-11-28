<?php
/* @var $this AdminController */
/* @var $model Admin */

$this->breadcrumbs=array(
	'Admins'=>array('index'),
	$model->admin_id,
);

$this->menu=array(
	array('label'=>'List Admin', 'url'=>array('index')),
	array('label'=>'Create Admin', 'url'=>array('create')),
	array('label'=>'Update Admin', 'url'=>array('update', 'id'=>$model->admin_id)),
	array('label'=>'Delete Admin', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->admin_id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1>View Admin #<?php echo $model->admin_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'admin_id',
		'admin_user',
		'admin_pass',
	),
)); ?>
