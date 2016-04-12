<?php
/* @var $this CubiertaController */
/* @var $model Cubierta */

$this->breadcrumbs=array(
	'Cubiertas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Cubierta', 'url'=>array('index')),
	array('label'=>'Manage Cubierta', 'url'=>array('admin')),
);
?>

<h1>Create Cubierta</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>