<?php
/* @var $this GanadoController */
/* @var $model Ganado */

$this->breadcrumbs=array(
	'Ganados'=>array('index'),
	$model->idganado=>array('view','id'=>$model->idganado),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Ver todo el ganado', 'url'=>array('index')),
	array('label'=>'Agregar ganado', 'url'=>array('create')),
	array('label'=>'View Ganado', 'url'=>array('view', 'id'=>$model->idganado)),
	array('label'=>'Manejar ganado', 'url'=>array('admin')),
);
?>

<h1>Actualizar información del ganado <?php echo $model->idganado; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>