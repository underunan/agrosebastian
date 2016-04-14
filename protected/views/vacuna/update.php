<?php
/* @var $this VacunaController */
/* @var $model Vacuna */

$this->breadcrumbs=array(
	'Vacunas'=>array('index'),
	$model->idvacuna=>array('view','id'=>$model->idvacuna),
	'Update',
);

$this->menu=array(
	array('label'=>'List Vacuna', 'url'=>array('index')),
	array('label'=>'Create Vacuna', 'url'=>array('create')),
	array('label'=>'View Vacuna', 'url'=>array('view', 'id'=>$model->idvacuna)),
	array('label'=>'Manage Vacuna', 'url'=>array('admin')),
);
?>

<h1>Update Vacuna <?php echo $model->idvacuna; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>