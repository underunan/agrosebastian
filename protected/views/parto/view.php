<?php
/* @var $this PartoController */
/* @var $model Parto */

$this->breadcrumbs=array(
	'Partos'=>array('index'),
	$model->idparto,
);

$this->menu=array(
	array('label'=>'Lista de parto', 'url'=>array('index')),
	array('label'=>'Agregar parto', 'url'=>array('create')),
	array('label'=>'Actualizar parto', 'url'=>array('update', 'id'=>$model->idparto)),
	array('label'=>'Borrar parto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idparto),'confirm'=>'Estas seguro de querer eliminar esta información?')),
	array('label'=>'Manage Parto', 'url'=>array('admin')),
);
?>

<h1>View Parto #<?php echo $model->idparto; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idparto',
		'idganado',
		'fecha_parto',
		'sexo',
	),
)); ?>
