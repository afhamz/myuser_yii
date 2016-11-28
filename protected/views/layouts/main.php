<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?= Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?= Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?= Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?= Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?= Yii::app()->request->baseUrl; ?>/css/form.css" />
	<link rel="stylesheet" type="text/css" href="<?= Yii::app()->request->baseUrl; ?>/css/buttons.css" />
    <link rel="stylesheet" type="text/css" href="<?= Yii::app()->request->baseUrl; ?>/css/icons.css" />
	<link rel="stylesheet" type="text/css" href="<?= Yii::app()->request->baseUrl; ?>/css/tables.css" />
    
    <link rel="stylesheet" type="text/css" href="<?= Yii::app()->request->baseUrl; ?>/css/mbmenu.css" />
    <link rel="stylesheet" type="text/css" href="<?= Yii::app()->request->baseUrl; ?>/css/mbmenu_iestyles.css" />
	

	<title><?= CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">
	<!--
	<div id="topnav">
		<div class="topnav_text">
			<a href='<?= Yii::app()->request->baseUrl; ?>/index'>Home</a> | 
			<?php 
				if (!Yii::app()->user->isGuest){ ?>
					<a href='<?= Yii::app()->createAbsoluteUrl('site/logout') ?>'>Logout</a>
				<?php }
				else{ ?>
					<a href='<?= Yii::app()->createAbsoluteUrl('site/login') ?>'>Login</a>

			<?php };?>
		</div>
	</div>
	-->
	<div id="header">
		<div id="logo"><img src="<?= Yii::app()->request->baseUrl; ?>/images/logo.png" width="150px"></img></div>
	</div><!-- header -->

	<div id="mainmenu">

        <?php 
          if (!Yii::app()->user->isGuest){ 
			$this->widget('zii.widgets.CMenu',array(
				'items'=>array(
					array('label'=>'Dashboard', 'url'=>array('site/index')),
					array('label'=>'Admin', 'url'=>array('/admin')),
					array('label'=>'Member', 'url'=>array('/member')),
					array('label'=>'Logout', 'url'=>array('/site/logout')),
				),
			)); 
          }

          else{
			$this->widget('zii.widgets.CMenu',array(
				'items'=>array(
					array('label'=>'Login', 'url'=>array('site/login')),
				),
			)); 

          }
        ?>

	</div> <!--mainmenu -->

	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?= $content; ?>


</div><!-- page -->

</body>
</html>