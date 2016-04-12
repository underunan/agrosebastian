<?php
/* @var $this PartoController */
/* @var $model Parto */

$this->breadcrumbs=array(
	'Partos'=>array('index'),
	$model->idparto=>array('view','id'=>$model->idparto),
	'Update',
);

$this->menu=array(
	array('label'=>'Partos', 'url'=>array('index')),
	array('label'=>'Agregar parto', 'url'=>array('create')),
	array('label'=>'Ver parto', 'url'=>array('view', 'id'=>$model->idparto)),
	array('label'=>'Control de parto', 'url'=>array('admin')),
);
?>

<h1>Update Parto <?php echo $model->idparto; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>