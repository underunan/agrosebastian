<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="es">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

	<!-- blueprint CSS framework -->
	<!--
	<link rel="stylesheet" type="text/css" href="<?php #echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
	<link rel="stylesheet" type="text/css" href="<?php #echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
	-->
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
	<![endif]-->

	<!--<link rel="stylesheet" type="text/css" href="<?php #echo Yii::app()->request->baseUrl; ?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php #echo Yii::app()->request->baseUrl; ?>/css/form.css">
	-->

	<style>
		*{
			margin: 0;
			padding: 0;
		}
		body{
			padding-top:100px;
		}
	</style>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container-fluid">

	<div>
		<?php $this->widget('booster.widgets.TbNavbar',array(
			'items'=>array(
				array(
						'class'=>'booster.widgets.TbMenu',
						'type'=>'navbar',
						'htmlOptions'=>array('class'=>'navbar-right'),
						'items'=>array(
							array('label'=>'Inicio', 'url'=>array('/site/index')),
							array('label'=>'Gestion ganado', 'url'=>array('/ganado/index')),
							array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
							array('label'=>'Salir ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
						)
					),
			),
		)); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('booster.widgets.TbBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer" class="col-sm-12">
		
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
