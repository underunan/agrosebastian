<?php
/* @var $this GanadoController */
/* @var $model Ganado */

$this->breadcrumbs=array(
	'Ganados'=>array('index'),
	'Agregar',
);

$this->menu=array(
	array('label'=>'Ver todo el ganado', 'url'=>array('index')),
	array('label'=>'Manejar ganado', 'url'=>array('admin')),
);
?>

<h1>Agregar ganado</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>