<?php
/* @var $this PartoController */
/* @var $model Parto */

$this->breadcrumbs=array(
	'Partos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Partos', 'url'=>array('index')),
	array('label'=>'Control de parto', 'url'=>array('admin')),
);
?>

<h1>Create Parto</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>