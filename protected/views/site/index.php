<?php  
  $baseUrl = Yii::app()->request->baseUrl; 
  $cs = Yii::app()->getClientScript();
  $cs->registerScriptFile('http://www.google.com/jsapi');
  $cs->registerCoreScript('jquery');
  $cs->registerScriptFile($baseUrl.'/js/jquery.gvChart-1.0.1.min.js');
  $cs->registerScriptFile($baseUrl.'/js/pbs.init.js');
  $cs->registerCssFile($baseUrl.'/css/jquery.css');

?>

<?php $this->pageTitle=Yii::app()->name; ?>

<h1>Welcome</h1>
<div class="span-23 showgrid">
  <div class="dashboardIcons span-16">

        <?php 
          if (!Yii::app()->user->isGuest){ ?>
            <div class="dashIcon span-3">
              <a href="<?= Yii::app()->request->baseUrl; ?>/index.php?r=admin"><img src="<?= Yii::app()->request->baseUrl; ?>/images/big_icons/icon-man-tie.png" alt="Admin" /></a>
              <div class="dashIconText"><a href="<?= Yii::app()->request->baseUrl; ?>/index.php?r=admin">Data Admin</a></div>
            </div>

            <div class="dashIcon span-3">
              <a href="<?= Yii::app()->request->baseUrl; ?>/index.php?r=member"><img src="<?= Yii::app()->request->baseUrl; ?>/images/big_icons/icon-people.png" alt="Member" /></a>
              <div class="dashIconText"><a href="<?= Yii::app()->request->baseUrl; ?>/index.php?r=member">Data Member</a></div>
            </div>

            <div class="dashIcon span-3">
              <a href="<?= Yii::app()->request->baseUrl; ?>/index.php?r=site/logout"><img src="<?= Yii::app()->request->baseUrl; ?>/images/big_icons/icon-walk.png" alt="Logout" /></a>
              <div class="dashIconText"><a href="<?= Yii::app()->request->baseUrl; ?>/index.php?r=site/logout">Logout</a></div>
            </div>
          <?php }

          else{ ?>
            <div class="dashIcon span-3">
              <a href="<?= Yii::app()->request->baseUrl; ?>/index.php?r=site/login"><img src="<?= Yii::app()->request->baseUrl; ?>/images/big_icons/icon-unlock.png" alt="Login" /></a>
              <div class="dashIconText"><a href="<?= Yii::app()->request->baseUrl; ?>/index.php?r=site/login">Login</a></div>
            </div>
        <?php };?>

  </div>
</div><!-- END OF .dashIcons -->





</div>