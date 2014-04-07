<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<meta http-equiv="X-UA-Compatible" content="chrome=1">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />

	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />

    <script language="JavaScript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/ED_Drawing.js" type="text/javascript"></script>
    <script language="JavaScript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/ED_VitreoRetinal.js" type="text/javascript"></script>
    <script language="JavaScript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/buckle.js" type="text/javascript"></script>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body onload="init()">

<div class="container" id="page">

	<div id="header">
		<div id="logo"><img class="leftside" src="<?php echo Yii::app()->request->baseUrl; ?>/graphics/logo.gif" width="908"/></div>
	</div><!-- header -->

    <div id="mainmenu">
    <?php
    	// property 'role' is only available for authenticated users
    	$isAdmin = false;
    	if (!Yii::app()->user->isGuest) {
    		if (Yii::app()->user->role == 'Administrator') {
	    		$isAdmin = true;
    		}
    	}
    
    	$this->widget('zii.widgets.CMenu',array(
            'items'=>array(
            array('label'=>'Home', 'url'=>array('/site/index')),
            array('label'=>'Register', 'url'=>array('/site/signUp'), 'visible'=>Yii::app()->user->isGuest),
            array('label'=>'Manage Datasets', 'url'=>array('/dataset/admin'), 'visible'=>!Yii::app()->user->isGuest),
            array('label'=>'Create Dataset', 'url'=>array('/dataset/create'), 'visible'=>!Yii::app()->user->isGuest),
            array('label'=>'Reports', 'url'=>array('/dataset/report/0'), 'visible'=>!Yii::app()->user->isGuest),
            array('label'=>'Documentation', 'url'=>array('/site/documentation/'.Yii::app()->user->id)),
            array('label'=>'Change Details', 'url'=>array('/user/update/'.Yii::app()->user->id), 'visible'=>!Yii::app()->user->isGuest),
            array('label'=>'Admin', 'url'=>array('/site/admin/0'), 'visible'=>$isAdmin),
            array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
            array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
            ),
        )); ?>
</div><!-- mainmenu -->
	
	<?php echo $content; ?>

	<div id="footer">

		Copyright &copy; <?php echo date('Y'); ?> The OpenEyes Foundation.<br/>
        Supported by a development grant from Euretina.<br />
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>