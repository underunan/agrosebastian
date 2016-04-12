<?php
/* @var $this CubiertaController */
/* @var $model Cubierta */

$this->breadcrumbs=array(
	'Cubiertas'=>array('index'),
	$model->idcubiertas=>array('view','id'=>$model->idcubiertas),
	'Update',
);

$this->menu=array(
	array('label'=>'List Cubierta', 'url'=>array('index')),
	array('label'=>'Create Cubierta', 'url'=>array('create')),
	array('label'=>'View Cubierta', 'url'=>array('view', 'id'=>$model->idcubiertas)),
	array('label'=>'Manage Cubierta', 'url'=>array('admin')),
);
?>

<h1>Update Cubierta <?php echo $model->idcubiertas; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>