<?php
/* @var $this VacunaController */
/* @var $model Vacuna */

$this->breadcrumbs=array(
	'Vacunas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Vacuna', 'url'=>array('index')),
	array('label'=>'Manage Vacuna', 'url'=>array('admin')),
);
?>

<h1>Create Vacuna</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>