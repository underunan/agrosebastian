<?php
/* @var $this VacunaController */
/* @var $model Vacuna */

$this->breadcrumbs=array(
	'Vacunas'=>array('index'),
	$model->idvacuna,
);

$this->menu=array(
	array('label'=>'List Vacuna', 'url'=>array('index')),
	array('label'=>'Create Vacuna', 'url'=>array('create')),
	array('label'=>'Update Vacuna', 'url'=>array('update', 'id'=>$model->idvacuna)),
	array('label'=>'Delete Vacuna', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idvacuna),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Vacuna', 'url'=>array('admin')),
);
?>

<h1>View Vacuna #<?php echo $model->idvacuna; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idvacuna',
		'idganado',
		'fecha_vacuna',
		'observacion',
		'nombre_vacuna',
	),
)); ?>
